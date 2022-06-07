<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-06-06 23:48:50
         compiled from "view\visualizar-notificacao.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5875935e635ee9a79-03292824%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '347546fcf0ba23209a7a66cccd25cf9fa3fda65a' => 
    array (
      0 => 'view\\visualizar-notificacao.tpl',
      1 => 1496789763,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5875935e635ee9a79-03292824',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5935e63602c397_47275797',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5935e63602c397_47275797')) {function content_5935e63602c397_47275797($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config('view/foo.conf', $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
<?php echo $_smarty_tpl->getSubTemplate ("common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("common/menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="container">
	<br>
	<div class="row">
		<div class="col-md-4">
			<p><strong>Nome</strong></p>
			<p>APAE</p>
		</div>
		
		<div class="col-md-4">
			<p><strong>E-mail</strong></p>
			<p>apae@apae.com.br</p>
		</div>
		
		<div class="col-md-4">
			<p><strong>Telefone</strong></p>
			<p>(19)3434-3434</p>
		</div>

		<div class="col-md-4">
			<p><strong>Conta Corrente</strong></p>
			<p>34343-5</p>
		</div>
		
		<div class="col-md-4">
			<p><strong>Endereço envio doaçoes</strong></p>
			<p>avenida Jaguara</p>
		</div>
		
		<div class="col-md-4">
			<p><strong>Cidade</strong></p>
			<p>Campinas</p>
		</div>
		
		<div class="col-md-4">
			<p><strong>CEP</strong></p>
			<p>13050-800</p>
		</div>
		
		<div class="col-md-4">
			<p><strong>Estado</strong></p>
			<p>SP</p>
		</div>
		
		<div class="col-md-4">
			<p><strong>Nivel de Urgencia</strong></p>
			<p>Urgente</p>
		</div>
		
		<div class="col-md-8">
			<p><strong>Descrição</strong></p>
			<p> Precisamos de sua doação o quanto antes para ajudar nossas crianças </p>
		</div>
	</div>
	<div class="col-md-8">
		<p><strong>Nome da Imagem</strong></p>
		<p> Imagem_00031 </p>
	</div>
</div>

<hr />
<div id="actions" class="row">
	<div class="col-md-12">
		<a href="/Prin-not-instituicao" class="btn btn-primary">Fechar</a>
		<a href="/cad-notificacao" class="btn btn-default">Editar</a>
		
	</div>
</div>

<?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"><?php echo '</script'; ?>
>

<!-- Latest compiled and minified JavaScript -->
<?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"><?php echo '</script'; ?>
>
</body>
</html>
</div>
<br>
</body>
<?php echo $_smarty_tpl->getSubTemplate ("common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
