<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-06-03 22:07:30
         compiled from "view\instituicao-home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:22400593204fa7e2412-07159940%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4acce0d164aa49b7938b3d2bc96957859dec59b4' => 
    array (
      0 => 'view\\instituicao-home.tpl',
      1 => 1496527648,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22400593204fa7e2412-07159940',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_593204fa8cca41_93292267',
  'variables' => 
  array (
    'instituicaoNome' => 0,
    'doacoes' => 0,
    'doacao' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_593204fa8cca41_93292267')) {function content_593204fa8cca41_93292267($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\wamp64\\www\\tcc\\Lib\\Smarty\\libs\\plugins\\modifier.date_format.php';
?><?php  $_config = new Smarty_Internal_Config('view/foo.conf', $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
<?php echo $_smarty_tpl->getSubTemplate ("common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("common/menu-instituicao.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="breadcrumb-area">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<div class="breadcrumb">
					<ul>
						<li><a href="/logoff-instituicao"><i class="fa fa-home"></i>LogOut</a></li>						
					</ul>
				</div>					
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12">
			<div class="your-answered team-2">
				<i class="fa fa-users"></i>
				<h3>BEM VINDO <?php echo $_smarty_tpl->tpl_vars['instituicaoNome']->value;?>
</h3>
				<p>Crie a melhor forma para arrecadação para a sua instituição com o nosso aplicativo .</p>
			</div>				
		</div>				
	</div>
    
    <!-- CONTADOR -->
	<div class="row couter-p" style="padding-bottom: 20px !important;">
		<div class="col-lg-4 col-md-6 col-sm-6">
			<div class="single-counter">
				<div class="counter-icon">
					<i class="fa fa-heart"></i>
				</div>
				<div class="counter-info">
					<span class="counter"><?php echo count($_smarty_tpl->tpl_vars['doacoes']->value);?>
</span>
					<p>Número de Arrecadações</p>
				</div>
			</div>
		</div>

		<div class="col-lg-4 col-md-3 col-sm-6">
					<div class="single-counter">
						<div class="counter-icon">
							<i class="fa fa-user"></i>
						</div>
						<div class="counter-info">
							<span class="counter">40</span>
							<p>Número de Voluntários</p>
						</div>					
					</div>
				</div>
		
		<div class="col-lg-4 col-md-3 col-sm-6">
			<div class="single-counter">
				<div class="counter-icon">
					<i class="fa fa-glass"></i>
				</div>
				<div class="counter-info">
					<span class="counter">2</span>
					<p>Eventos Criados</p>
				</div>					
			</div>
		</div>
	</div>
    
    <div class="row">
    	<div class="col-xs-12">
			<div class="donors-content box1">
				<div class="donors">
					<h3 class="donors-title"><span>Ultimas Doações</span></h3>
				</div>					
				<div class="cmdonation table-responsive">
					<table class="pure-table pure-table-horizontal pure-table-striped">
						<thead>
							<tr>
								<th class="pure-text-center pure-hidden-phone">#</th>
								<th class="pure-text-center ">Data</th>
								<th class="pure-text-center">Doação</th>
								<th class="pure-text-center">Cidade</th>
								<th class="pure-text-center">Estado</th>
								<th class="pure-text-center">Quantidade doada</th>
							</tr>
						</thead>
						<tbody>
							<?php  $_smarty_tpl->tpl_vars['doacao'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['doacao']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['doacoes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['doacao']->key => $_smarty_tpl->tpl_vars['doacao']->value) {
$_smarty_tpl->tpl_vars['doacao']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['doacao']->key;
?>
								<tr>
									<td class="pure-text-center pure-hidden-phone"><?php echo $_smarty_tpl->tpl_vars['doacao']->value->id;?>
</td>
									<td class="pure-text-center"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['doacao']->value->data_doacao,'%d/%m/%y às %H:%M');?>
</td>
									<td class="pure-text-center"><?php echo $_smarty_tpl->tpl_vars['doacao']->value->nome;?>
</td>
									<td class="pure-text-center"><?php echo $_smarty_tpl->tpl_vars['doacao']->value->cidade;?>
</td>
									<td class="pure-text-center"><?php echo $_smarty_tpl->tpl_vars['doacao']->value->estado;?>
</td>
									<td class="pure-text-center"><span>$</span><?php echo $_smarty_tpl->tpl_vars['doacao']->value->valor;?>
</td>
								</tr>
	                        <?php } ?>
						</tbody>
					</table>
				</div>						
			</div>				
		</div>
    </div>

	<div class="row" style="margin-top: 30px; margin-bottom: 20px;">
		<div class="col-xs-12">
			<div class="donors-content box1">
				<div class="donors">
					<h3 class="donors-title"><span>Eventos</span></h3>
				</div>					
				<div class="cmdonation table-responsive">
					<table class="pure-table pure-table-horizontal pure-table-striped">
						<thead>
							<tr>
								<th class="pure-text-center pure-hidden-phone">#</th>
								<th class="pure-text-center">Rua</th>
								<th class="pure-text-center">Cidade</th>
								<th class="pure-text-center">Estado</th>
								<th class="pure-text-center">Data do Evento</th>
								<th class="pure-text-center">Inscritos</th>								
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="pure-text-center pure-hidden-phone">1</td>
								<td class="pure-text-center">Jordina</td>
								<td class="pure-text-center">Campinas</td>
								<td class="pure-text-center">SP</td>
								<td class="pure-text-center">01/03/2017</td>
								<td class="pure-text-center">12</td>																
							</tr>
							<tr>
								<td class="pure-text-center pure-hidden-phone">2</td>
								<td class="pure-text-center">Jordina</td>
								<td class="pure-text-center">Campinas</td>
								<td class="pure-text-center">SP</td>
								<td class="pure-text-center">01/07/2017</td>
								<td class="pure-text-center">7</td>																
							</tr>														
						</tbody>
					</table>
				</div>						
			</div>
		</div>
	</div>	
</div>		
		    
<?php echo $_smarty_tpl->getSubTemplate ("common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 <?php }} ?>
