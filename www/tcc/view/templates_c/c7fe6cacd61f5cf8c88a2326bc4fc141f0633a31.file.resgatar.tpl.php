<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-06-06 23:46:34
         compiled from "view\resgatar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:262095935f0ea1be039-14872039%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c7fe6cacd61f5cf8c88a2326bc4fc141f0633a31' => 
    array (
      0 => 'view\\resgatar.tpl',
      1 => 1496792790,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '262095935f0ea1be039-14872039',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5935f0ea2371d7_33648637',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5935f0ea2371d7_33648637')) {function content_5935f0ea2371d7_33648637($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config('view/foo.conf', $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
<?php echo $_smarty_tpl->getSubTemplate ("common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("common/menu-voluntario.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<!-- Foto para evento e breve informativo -->
<div class="mainheading-wrapper">
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-sm-9">
				<div class="heading-content">
					<h1>Resgatar</h1>
					<p>Resgate aqui os seus prêmios pela quantidade de XP adquirido!</p>
				</div>
			</div>
			<div class="col-md-2 col-sm-3">
				<div class="back">
					<a class="readon" href="/home-voluntario"><i class="fa fa-arrow-left"></i> Voltar</a>
				</div>
			</div>
		</div>
	</div>
</div>
<br>
<br>
<div class="container">
	<div class="row">
		<div class="col-sm-6 col-md-4">
			<div class="thumbnail">
				<img src="/view/images/camisa f1.jpg" alt="...">
				<div class="caption">
					<h2>2000XP</h2>
					<h3> Camiseta the walking dead</h3>
					<p>...</p>
					<p><a href="#" class="btn btn-primary" role="button">Resgatar</a> </p>
				</div>
			</div>
		</div>
		<div class="col-sm-6 col-md-4">
			<div class="thumbnail">
				<img src="/view/images/camisa f1.jpg" alt="...">
				<div class="caption">
					<h2>2000XP</h2>
					<h3> Camiseta the walking dead</h3>
					<p>...</p>
					<p><a href="#" class="btn btn-primary" role="button">Resgastar</a> </p>
				</div>
			</div>
		</div>
		<div class="col-sm-6 col-md-4">
			<div class="thumbnail">
				<img src="/view/images/camisa f1.jpg" alt="...">
				<div class="caption">
					<h2>2000XP</h2>
					<h3> Camiseta the walking dead</h3>
					<p>...</p>
					<p><a href="#" class="btn btn-primary" role="button">Resgastar</a></p>
				</div>
			</div>
		</div>
	</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
