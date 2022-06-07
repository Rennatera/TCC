<?php

require_once '/models/Voluntario.class.php';
require_once '/models/Instituicao.class.php';

class Config
{
	public $objDados = null;

	public function __construct()
	{
		self::__recuperaDadosUsuarioLogado();
	}

	/**
	 * Verifica se o usuário está logado
	 * Se não estiver redireciona para o login
	 */
	private function __recuperaDadosUsuarioLogado()
	{
		$objVoluntario = new Voluntario();
		$registroId = $objVoluntario->estaLogado();

		$objInstituicao = new Instituicao();
		$registroId = $objInstituicao->estaLogado();

		if($registroId > 0)
		{
			$this->objDados = [];
			$this->objDados[0] = $registroId;
			$this->objDados[1] = 'voluntario';
			$tipoUsuario = 'voluntario';
		}
		else{
			$this->objDados = [];
			$this->objDados[0] = $registroId;
			$this->objDados[1] = 'instituicao';
			$tipoUsuario = 'instituicao';
		}
	}

	/**
	 * Retorna se um usuario esta logado
	 * @return Boolean - Se o usuario esta logado
	 */
	public function verificaSeTemUsuarioLogado()
	{
		return $this->objDados != null;
	}

	/**
	 * Retorna tipo do Usuário atualmente logado
	 * @return string - Tipo do Usuário
	 */
	public function retornaTipoUsuario()
	{
		if($this->objDados == null) return '';

		return $this->objDados[1];
	}

	/**
	 * Retorna nome do Usuário atualmente logado
	 * @return string - Nome do Usuário
	 */
	public function retornaNomeUsuario()
	{
		if($objDados == null) return '';

		if($objDados[1] == 'voluntario')
		{
			$objVoluntario = new Voluntario();

			return $objVoluntario->retornaNome();
		}
		else
		{
			$objInstituicao = new Instituicao();

			return $objInstituicao->retornaNome();
		}
	}

	/**
	 * Retorna ID do Usuário atualmente logado
	 * @return int - ID do Usuário
	 */
	public function retornaIdUsuario()
	{
		if($objDados == null) return '';

		if($objDados[1] == 'voluntario')
		{
			$objVoluntario = new Voluntario();

			return $objVoluntario->retornaID();
		}
		else
		{
			$objInstituicao = new Instituicao();

			return $objInstituicao->retornaID();
		}
	}

	/**
	 * Gera url no padrão slug
	 * @param string - Palavra a ser transformada
	 * @return string - URL
	 */
	public function geraUrl($palavra)
	{
		$characteres = array(
			'Š'=>'S', 'š'=>'s', 'Ð'=>'Dj','Ž'=>'Z', 'ž'=>'z', 'À'=>'A', 'Á'=>'A', 'Â'=>'A', 'Ã'=>'A', 'Ä'=>'A',
			'Å'=>'A', 'Æ'=>'A', 'Ç'=>'C', 'È'=>'E', 'É'=>'E', 'Ê'=>'E', 'Ë'=>'E', 'Ì'=>'I', 'Í'=>'I', 'Î'=>'I',
			'Ï'=>'I', 'Ñ'=>'N', 'Ò'=>'O', 'Ó'=>'O', 'Ô'=>'O', 'Õ'=>'O', 'Ö'=>'O', 'Ø'=>'O', 'Ù'=>'U', 'Ú'=>'U',
			'Û'=>'U', 'Ü'=>'U', 'Ý'=>'Y', 'Þ'=>'B', 'ß'=>'Ss','à'=>'a', 'á'=>'a', 'â'=>'a', 'ã'=>'a', 'ä'=>'a',
			'å'=>'a', 'æ'=>'a', 'ç'=>'c', 'è'=>'e', 'é'=>'e', 'ê'=>'e', 'ë'=>'e', 'ì'=>'i', 'í'=>'i', 'î'=>'i',
			'ï'=>'i', 'ð'=>'o', 'ñ'=>'n', 'ò'=>'o', 'ó'=>'o', 'ô'=>'o', 'õ'=>'o', 'ö'=>'o', 'ø'=>'o', 'ù'=>'u',
			'ú'=>'u', 'û'=>'u', 'ý'=>'y', 'ý'=>'y', 'þ'=>'b', 'ÿ'=>'y', 'ƒ'=>'f'
		);

		$palavra = strtolower(strtr($palavra, $characteres));
		$palavra = preg_replace('/[^A-Za-z0-9 \-]/', '', $palavra);
		$palavra = trim(preg_replace('/ +/',' ', $palavra));
		$palavra = str_replace(' ', '-', $palavra);
		$palavra = str_replace('--', '', $palavra);
		$palavra = (substr($palavra, -1) == "-") ? substr($palavra, 0, -1) : $palavra;

		return $palavra;
	}

	/**
	 * Retorna atual URL
	 * @return array - Array com as URL's
	 */
	public function retornaUrl()
	{
		$router = new Router();

		return $router->getCurrentUrl();
	}
}