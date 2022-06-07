<?php
	require_once 'inc/Smarty.php';
	require_once 'models/Voluntario.class.php';
	require_once 'models/Instituicao.class.php';

	$instituicaoObj = new Instituicao();

	$insts = $instituicaoObj->buscaTodos();

	$smarty->assign('instituicoes', $insts);

	$smarty->display("voluntario-doacao.tpl");
?>