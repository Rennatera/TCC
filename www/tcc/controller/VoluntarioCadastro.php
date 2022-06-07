<?php
	require_once 'inc/Smarty.php';

	$smarty->assign('qualPagina', '4');
	$smarty->assign('id', '0');

	$smarty->display("voluntario-cadastro.tpl");
?>