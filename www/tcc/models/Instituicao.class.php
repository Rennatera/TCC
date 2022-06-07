<?php
	require_once '/inc/Password.php';

	class Instituicao extends Database
	{
	    private $_id;
	    private $_nome;
	    private $_email;
	    private $_senha;

	    public function __construct()
	    {
	        @$instituicaoSession = $_SESSION["Instituicao"];

	        if(@$instituicaoSession)
	        {
				$this->_id    = $instituicaoSession->id;
				$this->_nome  = $instituicaoSession->nome;
				$this->_email = $instituicaoSession->email;
	        }
	    }

	    private function __clone(){}

	    /**
	     * Verifica os dados de acesso com o banco
	     * @return false ou instituicao
	     */
	    private function _verificaDados()
	    {
	        $retBD = $this->selectDB("SELECT * FROM cad_instituicao where email = :pEmail;", array(':pEmail' => $this->_email), null, 1);

	        if(empty($retBD))
	            return false;

	        if (password_verify($this->_senha, $retBD->senha))
	        {
	            return $retBD;
	        }

	        return false;
	    }

	    /**
	     * Realiza o login da instituicao
	     * @param string $email - Email da instituicao
	     * @param string $senha - Senha da instituicao
	     * @return bool
	     */
	    public function login($pEmail, $pSenha)
	    {
	        $this->_email = $pEmail;
	        $this->_senha = $pSenha;

	        $retVerifica = $this->_verificaDados();

	        if ($retVerifica)
	        {
	            $_SESSION['Instituicao'] = $retVerifica;

	            return true;
	        }

	        return $retVerifica;
	    }

	    /**
	     * Retorna o ID da instituicao a partir da Session
	     * @return int
	     */
	    public function retornaID()
	    {
	        return $this->_id;
	    }

	    /**
	     * Retorna o Nome da instituicao a partir da Session
	     * @return string
	     */
	    public function retornaNome()
	    {
	        return $this->_nome;
	    }

	    /**
	     * Retorna o Email da instituicao a partir da Session
	     * @return string
	     */
	    public function retornaEmail()
	    {
	        return $this->_email;
	    }

	    /**
	     * Retorna se a instituiçao está logado na session e seu ID se true
	     * @return bool|int - False ou ID da instituicao
	     */
	    public function estaLogado()
	    {
	        $session = 0;

	        if(isset($_SESSION['Instituicao']))
	        {
	            $session = $_SESSION['Instituicao']->id;
	        }

	        return $session;
	    }

	    /**
	     * Busca instituicao no BD por ID
	     * @var int - ID do instituicao a ser buscado
	     * @return false ou instituicao unico
	     */
	    public function buscaPorId($pInstituicaoId)
	    {
	        $retBD = $this->selectDB("SELECT * FROM cad_instituicao WHERE id = :pInstituicaoId;", array(':pInstituicaoId' => $pInstituicaoId), NULL, 1);

	        return $retBD;
	    }

	    /**
	     * Busca todas as doacoes feitas a uma instituicao
	     * @var int - ID do instituicao a ser buscado
	     * @return false ou instituicao unico
	     */
	    public function buscaDoacoes($pInstituicaoId)
	    {
	        $retBD = $this->selectDB("SELECT d.*, v.nome, v.cidade, v.estado FROM cad_doacao d
									  INNER JOIN cad_voluntario	v
									  ON d.voluntario_id = v.id
    								  WHERE instituicao_id = :pInstituicaoId;", array(':pInstituicaoId' => $pInstituicaoId), NULL);

	        return $retBD;
	    }

	    /**
	     * Busca todos os instituicao no BD
	     * @return false ou instituicao unico
	     */
	    public function buscaTodos()
	    {
	        $retBD = $this->selectDB("SELECT * FROM cad_instituicao", array(), NULL, 0);

	        return $retBD;
	    }

	    /**
	     * Grava novo usuario no BD ou atualiza existente
	     * @var int     - ID da instituicao (0 para novo)
	     * @var array   - Nomes dos campos no BD
	     * @var array   - Valores a serem gravados
	     * @return bool|int - Sucesso/Falha ou código de erro
	     */
	    public function grava($pInstituicaoId, $pChaves, $pValores)
	    {
	        if($pInstituicaoId != 0)
	        {
	            $sql = "UPDATE cad_instituicao SET ";

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

	            $sql .= " WHERE id = :pInstituicaoId";

	            $chavesSQL[":pInstituicaoId"] = $pInstituicaoId;
	            $chavesSQL[":pDataAtualizacao"] = Date("Y-m-d H:i:s");

	            $retBD = $this->updateDB($sql, $chavesSQL);

	            if(empty($retBD) || is_array($retBD))
	                return false;

	            return true;
	        }
	        else
	        {
	            $sqlCampos = "INSERT INTO cad_instituicao (";
	            $sqlValues = " VALUES (";

	            //Monta SQL com os nomes dos campos
	            foreach ($pChaves as $key => $chave)
	            {
	                //Monta array para substituição no PDO com chave e valor
	                $chavesSQL[":p" . ucfirst($chave)] = $pValores[$key];

	                //Monta SQL
	                if(sizeof($pChaves) == $key + 1)
	                {
	                    $sqlCampos .= "`" . $chave . "`, `data_cadastro`)";
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

	            // var_dump($sqlFinal);
	            // var_dump($chavesSQL);
	            // die();

	            $retBD = $this->insertDB($sqlFinal, $chavesSQL);

	            // var_dump($retBD);
	            // die();

	            if(empty($retBD))
	                return false;

	            return true;
	        }
	    }

	    /**
	     * Apaga Instituicao do BD
	     * @var int - ID da Instituicao
	     * @return Sucesso|False
	     */
	    public function deleta($pInstituicaoId)
	    {
	        $retBD = $this->deleteDB("DELETE FROM cad_instituicao WHERE id = :pInstituicaoId", array(':pInstituicaoId' => $pInstituicaoId));

	        return $retBD;
	    }
	}
?>