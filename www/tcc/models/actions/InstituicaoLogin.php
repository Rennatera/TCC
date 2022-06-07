<?php
	require_once '/inc/Password.php';
	require_once '/models/Instituicao.class.php';

	/**
	 * Realiza o login do instituicao
	 * @package Instituicao
	 * @return bool - Sucesso/Falha no login
	 */

	foreach($_POST as $key => $value)
	{
		$campos[] = $key;
		$vars[]   = $value;
	}

	$objInstituicao = new Instituicao();
	$login = $objInstituicao->login($vars[0], $vars[1]);

	echo $login;
	die();