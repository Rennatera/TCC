<?php
	require_once 'Lib/Smarty/libs/Smarty.class.php';

	$smarty = new Smarty();

	$smarty->setTemplateDir('view/');
	$smarty->setCompileDir('view/templates_c/');