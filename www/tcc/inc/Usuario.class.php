<?php
require_once 'admin/inc/Password.class.php';

class Usuario extends Database
{
    private $_id;
    private $_nome;
    private $_email;
    private $_senha;
    private $_admin;
    private $_modulos;

    public function __construct()
    {
        @$userSession    = $_SESSION["Usuario"];
        @$modulosSession = $_SESSION["Modulos"];

        if(@$userSession && @$modulosSession)
        {
            $this->_id      = $userSession->id;
            $this->_nome    = $userSession->nome;
            $this->_email   = $userSession->email;
            $this->_admin   = $userSession->admin;
            $this->_modulos = $modulosSession;
        }
    }

    private function __clone(){}

    /**
     * Verifica os dados de acesso com o banco
     * @return false ou usuário
     */
    private function _verificaDados()
    {
        $retBD = $this->selectDB("SELECT * FROM usuarios where email = :pEmail;", array(':pEmail' => $this->_email), null, 1);

        if(empty($retBD))
            return false;

        if (password_verify($this->_senha, $retBD->senha))
        {
            return $retBD;
        }

        return false;
    }

    /**
     * Realiza o login do Usuário
     * @param string $email - Email do usuário
     * @param string $senha - Senha do usuário
     * @return bool
     */
    public function login($pEmail, $pSenha)
    {
        $this->_email = $pEmail;
        $this->_senha = $pSenha;

        $retVerifica = $this->_verificaDados();

        if ($retVerifica)
        {
            $_SESSION['Usuario'] = $retVerifica;
            $_SESSION['Modulos'] = self::buscaModulosUsuario($retVerifica->id);

            return true;
        }

        return $retVerifica;
    }

    /**
     * Retorna o ID do Usuário a partir da Session
     * @return int
     */
    public function retornaID()
    {
        return $this->_id;
    }

    /**
     * Retorna o Nome do Usuário a partir da Session
     * @return string
     */
    public function retornaNome()
    {
        return $this->_nome;
    }

    /**
     * Retorna o Email do Usuário a partir da Session
     * @return string
     */
    public function retornaEmail()
    {
        return $this->_email;
    }

    /**
     * Retorna status Admin do Usuário a partir da Session
     * @return string
     */
    public function retornaAdmin()
    {
        return $this->_admin;
    }

    /**
     * Retorna os Módulos do Usuário a partir da Session
     * @return string
     */
    public function retornaModulosUsuario()
    {
        return $this->_modulos;
    }

    /**
     * Retorna se o usuário está logado na session e seu ID se true
     * @return bool|int - False ou ID do usuário
     */
    public function estaLogado()
    {
        $session = 0;

        if(isset($_SESSION['Usuario']))
        {
            $session = $_SESSION['Usuario']->id;
        }

        return $session;
    }

    /**
     * Busca usuário no BD por ID
     * @var int - ID do usuário a ser buscado
     * @return false ou usuário unico
     */
    public function buscaPorId($pUsuarioId)
    {
        $retBD = $this->selectDB("SELECT * FROM `usuarios` WHERE id = :pUsuarioId;", array(':pUsuarioId' => $pUsuarioId), NULL, 1);

        return $retBD;
    }

    /**
     * Busca todos os Usuários no BD
     * @return false ou usuário unico
     */
    public function buscaTodos()
    {
        $retBD = $this->selectDB("SELECT * FROM `usuarios`", array(), NULL, 0);

        return $retBD;
    }

    /**
     * Busca todos os módulos no BD
     * @return false ou usuário unico
     */
    public function buscaModulos()
    {
        $retBD = $this->selectDB("SELECT * FROM `modulos`", array(), NULL, 0);

        return $retBD;
    }

    /**
     * Busca módulos do usuario no BD
     * @var int - ID do usuário a ser buscado
     * @return false ou usuário unico
     */
    public function buscaModulosUsuario($pUsuarioId)
    {
        $retBD = $this->selectDB("SELECT * FROM `usuariosmodulos` WHERE usuarioId = :pUsuarioId;", array(':pUsuarioId' => $pUsuarioId), NULL, 0);

        return $retBD;
    }

    /**
     * Grava novo usuario no BD ou atualiza existente
     * @var int     - ID do Usuário (0 para novo)
     * @var array   - Nomes dos campos no BD
     * @var array   - Valores a serem gravados
     * @return bool|int - Sucesso/Falha ou código de erro
     */
    public function grava($pUsuarioId, $pChaves, $pValores)
    {
        if($pUsuarioId != 0)
        {
            $sql = "UPDATE `usuarios` SET ";

            //Monta SQL com os nomes dos campos e tags para substituição
            //via PDO
            foreach ($pChaves as $key => $chave)
            {
                //Monta array para substituição no PDO com chave e valor
                $chavesSQL[":p" . ucfirst($chave)] = $pValores[$key];

                //Monta SQL
                if(sizeof($pChaves) == $key + 1)
                {
                    $sql .= "`" . $chave . "` = :p" . ucfirst($chave) . ", `dataAtualizacao` = :pDataAtualizacao";
                }
                else
                {
                    $sql .= "`" . $chave . "` = :p" . ucfirst($chave) . ", ";
                }
            }

            $sql .= " WHERE id = :pUsuarioId";

            $chavesSQL[":pUsuarioId"] = $pUsuarioId;
            $chavesSQL[":pDataAtualizacao"] = Date("Y-m-d H:i:s");

            $retBD = $this->updateDB($sql, $chavesSQL);

            if(empty($retBD) || is_array($retBD))
                return false;

            return true;
        }
        else
        {
            $sqlCampos = "INSERT INTO `usuarios` (";
            $sqlValues = " VALUES (";

            //Monta SQL com os nomes dos campos
            foreach ($pChaves as $key => $chave)
            {
                //Monta array para substituição no PDO com chave e valor
                $chavesSQL[":p" . ucfirst($chave)] = $pValores[$key];

                //Monta SQL
                if(sizeof($pChaves) == $key + 1)
                {
                    $sqlCampos .= "`" . $chave . "`, `dataCadastro`)";
                    $sqlValues .= ":p" . ucfirst($chave) . ", :pDataCadastro)";
                }
                else
                {
                    $sqlCampos .= "`" . $chave . "`, ";
                    $sqlValues .= ":p" . ucfirst($chave) . ", ";
                }
            }

            $chavesSQL[":pDataCadastro"] = Date("Y-m-d H:m:s");

            $sqlFinal = $sqlCampos . $sqlValues;

            $retBD = $this->insertDB($sqlFinal, $chavesSQL);

            if(empty($retBD))
                return false;

            return true;
        }
    }

    /**
     * Grava os modulos relacionadas ao usuário no BD
     * @var int - ID do usuário
     * @var array - ids dos módulos
     * @return bool - Sucesso/Falha
     */
    public function gravaModulos($pUsuarioId, $params)
    {
        //Apaga todas as autorizações
        $retDeletaBD = $this->deleteDB("DELETE FROM `usuariosmodulos` WHERE usuarioId = :pId", array(":pId" => $pUsuarioId));

        //Grava novas autorizações
        foreach ($params as $key => $valor)
        {
            $retBD[$key] = $this->insertDB("INSERT INTO `usuariosmodulos` (usuarioId, moduloId) VALUES (:pUsuarioId, :pModuloId)", array(":pUsuarioId" => $pUsuarioId, ":pModuloId" => $valor));
        }

        return $retBD;
    }

    /**
     * Apaga Usuário do BD
     * @var int - ID do Usuário
     * @return Sucesso|False
     */
    public function deleta($pUsuarioId)
    {
        $retBD = $this->deleteDB("DELETE FROM `usuarios` WHERE id = :pUsuarioId", array(':pUsuarioId' => $pUsuarioId));

        return $retBD;
    }

    /**
     * Apaga as permissões do Usuário
     * @var int - ID do Usuário
     * @return Sucesso/False
     */
    public function deletaModulosUsuario($pUsuarioId)
    {
        $retBD = $this->deleteDB("DELETE FROM `usuariosmodulos` WHERE usuarioId = :pUsuarioId", array(':pUsuarioId' => $pUsuarioId));

        return $retBD;
    }
}