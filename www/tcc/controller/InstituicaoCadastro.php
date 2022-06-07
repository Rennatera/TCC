<?php
	require_once 'inc/Smarty.php';

	$smarty->assign('qualPagina', '4','1');
	$smarty->assign('id', '0');

	$smarty->display("instituicao-cadastro.tpl");
?>