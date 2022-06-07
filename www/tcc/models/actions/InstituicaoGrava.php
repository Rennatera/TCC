<?php
	/**
	 * Grava dados da Instituição
	 * @package Instituição
	 * @return bool|string - Sucesso/Falha e mensagem
	 */
	require_once '/inc/Config.class.php';
	require_once '/inc/Password.php';
	require_once '/models/Instituicao.class.php';

	$config = new Config();
	$objInstituicao = new Instituicao();

	foreach($_POST as $key => $value)
	{
		if (strpos($key, 'id') !== false && strpos($key, 'cidade') == true)
		{
			$id = $value;
		}
		else if(strpos($key, 'senha') !== false)
		{
			if($value != "")
			{
				$chaves[]  = "senha";
				$valores[] = password_hash($value, PASSWORD_BCRYPT);
			}
		}
		else if (strpos($key, 'ativo') !== false)
		{
			($value == "on") ? $valores[] = 1 : $valores[] = 0;

			$chaves[]  = $key;
		}
		else
		{
			$chaves[]  = $key;
			$valores[] = $value;
		}
	}

	$temAtivo = false;

	//Verifica se recebeu input ativo no post
	foreach ($chaves as $key => $chave)
	{
		if($chave == "ativo")
		{
			$temAtivo = true;
		}
	}

	//Se não tiver post ativo adiciona valor 0
	if(!$temAtivo)
	{
		$chaves[] = "ativo";
		$valores[] = 1;
	}

	if(!$objInstituicao->grava(@$id, $chaves, $valores))
	{
		echo json_encode(array(false, "Ocorreu um Erro ao Gravar a Instituicao"));
		die();
	}

	echo json_encode(array(true, "Instituicao Gravada com Sucesso"));
	die();