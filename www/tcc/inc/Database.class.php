<?php
abstract class Database
{
    /* Método construtor do banco de dados */
    private function __construct(){}

    /* Evita que a classe seja clonada */
    private function __clone(){}

    /* Método que destroi a conexão com banco de dados e remove da memória todas as variáveis setadas */
    public function __destruct()
    {
        $this->disconnect();
    }

    private static $tipoBD  = "mysql";
    private static $host    = "localhost";
    private static $porta   = "3306";
    private static $usuario = "root";
    private static $senha   = "";
    private static $bd      = "sist_solidario";
    protected $conexao;

    /**
     *  Metodos que trazem o conteudo da variavel desejada
     *  @return $xxx = conteudo da variavel solicitada
     */
    private function retornaTipoBD()  {return self::$tipoBD;}
    private function retornaHost()    {return self::$host;}
    private function retornaPorta()   {return self::$porta;}
    private function retornaUsuario() {return self::$usuario;}
    private function retornaSenha()   {return self::$senha;}
    private function retornaBD()      {return self::$bd;}

    /**
     *  Conecta com o BD
     */
    private function connect()
    {
        try
        {
            $this->conexao = new PDO($this->retornaTipoBD() . ":host=" . $this->retornaHost() . ";port=" . $this->retornaPorta() . ";dbname=" . $this->retornaBD().";charset=utf8", $this->retornaUsuario(), $this->retornaSenha());
        }
        catch (PDOException $ex)
        {
            //se houver exceção, exibe
            die("Erro: <code>" . $ex->getMessage() . "</code>");
        }

        return ($this->conexao);
    }

    /**
     *  Fecha conexão com o BD
     */
    private function disconnect()
    {
        $this->conexao = null;
    }

    /**
     *  Busca informações no BD
     * @param string $sql    - Consulta SQL
     * @param array  $params - Parametros a serem substituidos na consulta SQL
     * @param string $class  - Nome da classe que será utilizada para criar o objeto de retorno
     * @param bool   $unique - Busca um ou mais registros
     * @return object/array object
     */
    protected function selectDB($sql, $params = null, $class = null, $unique = 0)
    {
        $query = $this->connect()->prepare($sql);
        $query->execute($params);

        if(isset($class))
        {
            if($unique)
            {
                $rs = $query->fetch(PDO::FETCH_CLASS, $class);
            }
            else
            {
                $rs = $query->fetchAll(PDO::FETCH_CLASS, $class);
            }
        }
        else
        {
            if($unique)
            {
                $rs = $query->fetch(PDO::FETCH_OBJ);
            }
            else
            {
                $rs = $query->fetchAll(PDO::FETCH_OBJ);
            }
        }

        self::__destruct();

        return $rs;
    }

    /**
     *  Insere informações no BD
     * @param string $sql    - Consulta SQL
     * @param array  $params - Parametros a serem substituidos na consulta SQL
     * @return int - Último ID inserido na tabela
     */
    protected function insertDB($sql, $params = null)
    {
        $conexao = $this->connect();
        $query = $conexao->prepare($sql);
        $query->execute($params);

        $retConsult = $conexao->lastInsertId();
        $errorCode = $query->errorInfo();

        if(!is_null($errorCode[1]))
            $retPDO = $errorCode;
        else
            $retPDO = $retConsult;

        self::__destruct();

        return $retPDO;
    }

    /**
     *  Atualiza informações no BD
     * @param string $sql    - Consulta SQL
     * @param array  $params - Parametros a serem substituidos na consulta SQL
     * @return int - Número de linhas afetadas
     */
    protected function updateDB($sql, $params = null)
    {
        $query = $this->connect()->prepare($sql);
        $query->execute($params);

        $retConsult = $query->rowCount();
        $errorCode = $query->errorInfo();

        if(!is_null($errorCode[1]))
            $retPDO = $errorCode;
        else
            $retPDO = $retConsult;

        self::__destruct();

        return $retPDO;
    }

    /**
     *  Deleta informações do BD
     * @param string $sql    - Consulta SQL
     * @param array  $params - Parametros a serem substituidos na consulta SQL
     * @return int - Número de linhas afetadas
     */
    protected function deleteDB($sql, $params = null)
    {
        $query=$this->connect()->prepare($sql);
        $query->execute($params);

        $retConsult = $query->rowCount();
        $errorCode = $query->errorInfo();

        if(!is_null($errorCode[1]))
            $retPDO = $errorCode;
        else
            $retPDO = $retConsult;

        self::__destruct();

        return $retPDO;
    }
}