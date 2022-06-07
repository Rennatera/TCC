<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-06-06 02:15:20
         compiled from "view\voluntario-doacao.tpl" */ ?>
<?php /*%%SmartyHeaderCode:296105932b3fb627a85-10355887%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6955ed93e735426ba9bee147590f5c8008e15724' => 
    array (
      0 => 'view\\voluntario-doacao.tpl',
      1 => 1496708013,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '296105932b3fb627a85-10355887',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5932b3fb6cbbb3_57771533',
  'variables' => 
  array (
    'instituicoes' => 0,
    'inst' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5932b3fb6cbbb3_57771533')) {function content_5932b3fb6cbbb3_57771533($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config('view/foo.conf', $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
<?php echo $_smarty_tpl->getSubTemplate ("common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("common/menu-voluntario.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="mainheading-wrapper">
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-sm-9">
				<div class="heading-content">
					<h1>Doe</h1>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="donation-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="donation-text">
                	<br>
					<h3><b>Torne-se</b> doador ativo dessa instituição</h3>
					<p>Ajude da maneira que puder, mas não deixe de participar com sua doação que é muito importante para nós.</p>
				</div>
				<form id="formDoacaoVoluntario">
					<div class="payment-method">
						<div class="form-group">
							<div class="pure-control-group">
								<label for="quantidade">Valor</label>
								<span class="pure-input-prepend">
									<span class="add-on">$</span>
									<input type="text" id="valor" name="valor" placeholder="Valor">
								</span>
							</div>
						</div>
						<div class="form-group">
							<div class="pure-control-group">
								<label for="instituicao_id">Instituicao</label>
								<div class="pure-input-prepend">
									<select class="form-control" placeholder="Escolha a Instituição" name="instituicao_id" id="instituicao_id">
										<option value="" disabled="disabled" selected="selected">Escolha a Instituição</option>
				                        <?php  $_smarty_tpl->tpl_vars['inst'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['inst']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['instituicoes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['inst']->key => $_smarty_tpl->tpl_vars['inst']->value) {
$_smarty_tpl->tpl_vars['inst']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['inst']->key;
?>
											<option value="<?php echo $_smarty_tpl->tpl_vars['inst']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['inst']->value->nome;?>
</option>
				                        <?php } ?>
				                    </select>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="pure-controls">
								<input type="submit" value="DOAR" class="pure-button pure-button-primary">      
							</div>
						</div>
					</div>
				</form>
				<div class="row">
				<div class="col-sm-6 col-md-3">
				<img src="/view/images/pagseguro.jpg"  alt="bg"  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">

				</div>
				</div>
                
				<div class="notes">
					<blockquote>
						<p>Não forneça qualquer tipo de informação para estranhos!</p>
					</blockquote>
				</div>
			</div>
		</div>
	</div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



	<?php echo '<script'; ?>
 type="text/javascript">
		$('#valor').mask("##.##0,00", {reverse: true});
	<?php echo '</script'; ?>
>
<?php }} ?>
