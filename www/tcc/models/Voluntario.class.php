<?php
	require_once '/inc/Password.php';

	class Voluntario extends Database
	{
	    private $_id;
	    private $_nome;
	    private $_email;
	    private $_senha;

	    public function __construct()
	    {
	        @$voluntarioSession = $_SESSION["Voluntario"];

	        if(@$voluntarioSession)
	        {
				$this->_id    = $voluntarioSession->id;
				$this->_nome  = $voluntarioSession->nome;
				$this->_email = $voluntarioSession->email;
	        }
	    }

	    private function __clone(){}

	    /**
	     * Verifica os dados de acesso com o banco
	     * @return false ou voluntario
	     */
	    private function _verificaDados()
	    {
	        $retBD = $this->selectDB("SELECT * FROM cad_voluntario where email = :pEmail;", array(':pEmail' => $this->_email), null, 1);

	        if(empty($retBD))
	            return false;

	        if (password_verify($this->_senha, $retBD->senha))
	        {
	            return $retBD;
	        }

	        return false;
	    }

	    /**
	     * Realiza o login do voluntario
	     * @param string $email - Email do voluntario
	     * @param string $senha - Senha do voluntario
	     * @return bool
	     */
	    public function login($pEmail, $pSenha)
	    {
	        $this->_email = $pEmail;
	        $this->_senha = $pSenha;

	        $retVerifica = $this->_verificaDados();

	        if ($retVerifica)
	        {
	            $_SESSION['Voluntario'] = $retVerifica;

	            return true;
	        }

	        return $retVerifica;
	    }

	    /**
	     * Retorna o ID do voluntario a partir da Session
	     * @return int
	     */
	    public function retornaID()
	    {
	        return $this->_id;
	    }

	    /**
	     * Retorna o Nome do voluntario a partir da Session
	     * @return string
	     */
	    public function retornaNome()
	    {
	        return $this->_nome;
	    }

	    /**
	     * Retorna o Email do voluntario a partir da Session
	     * @return string
	     */
	    public function retornaEmail()
	    {
	        return $this->_email;
	    }

	    /**
	     * Retorna se o voluntario está logado na session e seu ID se true
	     * @return bool|int - False ou ID do voluntario
	     */
	    public function estaLogado()
	    {
	        $session = 0;

	        if(isset($_SESSION['Voluntario']))
	        {
	            $session = $_SESSION['Voluntario']->id;
	        }

	        return $session;
	    }

	    /**
	     * Busca voluntario no BD por ID
	     * @var int - ID do voluntario a ser buscado
	     * @return false ou voluntario unico
	     */
	    public function buscaPorId($pVoluntarioId)
	    {
	        $retBD = $this->selectDB("SELECT * FROM cad_voluntario WHERE id = :pVoluntarioId;", array(':pVoluntarioId' => $pVoluntarioId), NULL, 1);

	        return $retBD;
	    }

	    /**
	     * Busca todos os voluntarios no BD
	     * @return false ou voluntario unico
	     */
	    public function buscaTodos()
	    {
	        $retBD = $this->selectDB("SELECT * FROM cad_voluntario", array(), NULL, 0);

	        return $retBD;
	    }

	    /**
	     * Grava novo usuario no BD ou atualiza existente
	     * @var int     - ID do voluntario (0 para novo)
	     * @var array   - Nomes dos campos no BD
	     * @var array   - Valores a serem gravados
	     * @return bool|int - Sucesso/Falha ou código de erro
	     */
	    public function grava($pVoluntarioId, $pChaves, $pValores)
	    {
	        if($pVoluntarioId != 0)
	        {
	            $sql = "UPDATE cad_voluntario SET ";

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

	            $sql .= " WHERE id = :pVoluntarioId";

	            $chavesSQL[":pVoluntarioId"] = $pVoluntarioId;
	            $chavesSQL[":pDataAtualizacao"] = Date("Y-m-d H:i:s");

	            $retBD = $this->updateDB($sql, $chavesSQL);

	            if(empty($retBD) || is_array($retBD))
	                return false;

	            return true;
	        }
	        else
	        {
	            $sqlCampos = "INSERT INTO cad_voluntario (";
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

	            $retBD = $this->insertDB($sqlFinal, $chavesSQL);

	            if(empty($retBD))
	                return false;

	            return true;
	        }
	    }

	    /**
	     * Faz doação para instituição
	     * @var int - ID do voluntario
	     * @var int - ID da instituição
	     * @var int - Valor da doação
	     * @return Sucesso|False
	     */
	    public function fazerDoacao($pVoluntarioId, $pInstituicaoId, $pValor)
	    {
	        $retBD = $this->insertDB("INSERT INTO cad_doacao (voluntario_id, instituicao_id, valor, data_doacao)
	        						  VALUES (:pVoluntarioId, :pInstituicaoId, :pValor, :pDataDoacao)",
	        						  array(':pVoluntarioId' => $pVoluntarioId, ':pInstituicaoId' => $pInstituicaoId,
	        						  		':pValor' => $pValor, ':pDataDoacao' => Date("Y-m-d H:m:s")));

	        return $retBD;
	    }

	    /**
	     * Busca doações do voluntário
	     * @var int - ID do voluntario
	     * @return Sucesso|False
	     * Exibe e faz o calculo dos pontos XP
	     */
	    public function retornaValorDoacoes($pVoluntarioId)
	    {
	        $retBD = $this->selectDB("SELECT valor FROM cad_doacao WHERE voluntario_id = :pVoluntarioId",
	        						  array(':pVoluntarioId' => $pVoluntarioId));

	        $valorTotal = 0;

	        foreach ($retBD as $key => $value)
	        {
	        	$newValor = str_replace('.', '', $value->valor);
	        	$newValor = str_replace(',', '.', $newValor);

	        	$valorTotal += $newValor;
	        }

	        return array(number_format($valorTotal, 2, ',', '.'), ((10 / 100) * $valorTotal));
	    }

	    /**
	     * Apaga voluntario do BD
	     * @var int - ID do voluntario
	     * @return Sucesso|False
	     */
	    public function deleta($pVoluntarioId)
	    {
	        $retBD = $this->deleteDB("DELETE FROM cad_voluntario WHERE id = :pVoluntarioId", array(':pVoluntarioId' => $pVoluntarioId));

	        return $retBD;
	    }
	}
?>