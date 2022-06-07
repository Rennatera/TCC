<?php
	require_once '/inc/Password.php';
	require_once '/models/Voluntario.class.php';

	/**
	 * Realiza o login do voluntario
	 * @package Voluntario
	 * @return bool - Sucesso/Falha no login
	 */

	foreach($_POST as $key => $value)
	{
		$campos[] = $key;
		$vars[]   = $value;
	}

	$objVoluntario = new Voluntario();
	$login = $objVoluntario->login($vars[0], $vars[1]);

	echo $login;
	die();