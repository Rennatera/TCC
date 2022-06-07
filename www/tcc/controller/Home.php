<?php
	require_once 'inc/Smarty.php';

	//Inicial a variavel de configuração padrao, aqui temos os dados do usuario logado se existir
	// e alguns dados extras do sistema
	$config = new Config();

	$smarty->assign('usuarioLogado', $config->verificaSeTemUsuarioLogado());
	$smarty->assign('usuarioTipo', $config->retornaTipoUsuario());
	$smarty->assign('qualPagina', '1');

	$smarty->display("home.tpl");
?>