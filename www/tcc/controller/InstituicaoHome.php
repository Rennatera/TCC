<?php
	require_once 'inc/Smarty.php';
	require_once 'models/instituicao.class.php';

	$instituicaoObj = new instituicao();

	$doacoes = $instituicaoObj->buscaDoacoes($instituicaoObj->retornaID());

	$smarty->assign('instituicaoNome', $instituicaoObj->retornaNome());
	$smarty->assign('instituicaoId', $instituicaoObj->retornaID());
	$smarty->assign('doacoes', $doacoes);

	$smarty->display("instituicao-home.tpl");
?>