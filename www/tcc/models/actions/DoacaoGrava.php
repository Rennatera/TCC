<?php
	/**
	 * Grava dados da Instituição
	 * @package Instituição
	 * @return bool|string - Sucesso/Falha e mensagem
	 */
	require_once '/inc/Config.class.php';
	require_once '/inc/Password.php';
	require_once '/models/Voluntario.class.php';

	$config = new Config();
	$objVoluntario = new Voluntario();

	$voluntarioId = $objVoluntario->retornaID();
	$instituicaoId = $_POST['instituicao_id'];
	$valor = $_POST['valor'];

	if(!isset($_POST['instituicao_id']) || !isset($_POST['valor']) || $voluntarioId == null)
	{
		echo json_encode(array(false, "Ocorreu um Erro ao Gravar a Doação"));
		die();
	}

	if(!$objVoluntario->fazerDoacao(@$voluntarioId, @$instituicaoId, @$valor))
	{
		echo json_encode(array(false, "Ocorreu um Erro ao Gravar a Doação"));
		die();
	}

	echo json_encode(array(true, "Doação Gravada com Sucesso"));
	die();