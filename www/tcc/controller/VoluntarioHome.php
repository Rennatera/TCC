<?php
	require_once 'inc/Smarty.php';
	require_once 'models/Voluntario.class.php';

	$voluntarioObj = new Voluntario();

	$totalDoacoes = $voluntarioObj->retornaValorDoacoes($voluntarioObj->retornaID());
	/*$doacoes = $instituicaoObj->buscaDoacoes($instituicaoObj->retornaID());*/

	$smarty->assign('voluntarioNome', $voluntarioObj->retornaNome());
	$smarty->assign('totalDoacoes', $totalDoacoes);
	/*$smarty->assign('doacoes', $doacoes);*/

	$smarty->display("voluntario-home.tpl");
?>