<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-05-28 17:48:56
         compiled from "view\voluntario-home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15940592aefd3db3f85-87511556%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b8d9d88bbe4abdc64ffd3c12fe2a35f97130d0e1' => 
    array (
      0 => 'view\\voluntario-home.tpl',
      1 => 1496004166,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15940592aefd3db3f85-87511556',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_592aefd3df2228_24789056',
  'variables' => 
  array (
    'voluntarioNome' => 0,
    'totalDoacoes' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_592aefd3df2228_24789056')) {function content_592aefd3df2228_24789056($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config('view/foo.conf', $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
<?php echo $_smarty_tpl->getSubTemplate ("common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("common/menu-voluntario.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="breadcrumb-area">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<div class="breadcrumb">
					<ul>
						<li><a href="/logoff-voluntario"><i class="fa fa-home"></i>Log out</a></li>							
					</ul>
				</div>					
			</div>
		</div>
	</div>
</div>

<div class="volunteers-area" style="padding-bottom: 0;">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<div class="volunteers-title">
					<h3 class="title-h3">Voluntário</h3>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-4 col-md-4 col-sm-4">
				<div class="single-volunteer">
					<div class="volunteers-img">
						<img src="/view/images/team/v05.jpg" alt="" />
						<div class="volunteers-icon">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-google-plus"></i></a>								
							<a href="#"><i class="fa fa-linkedin"></i></a>
						</div>
					</div>
					<div class="volunteer-info">
						<h4><?php echo $_smarty_tpl->tpl_vars['voluntarioNome']->value;?>
</h4>
						<p>Voluntário</p>
					</div>
				</div>
			</div>

			<div class="col-lg-8 col-md-8 col-sm-8">
				<div class="volunteer-content">
					<h3>texto sobre alguma coisa que o voluntário queira escrever </h3>
					<p>textotexto sobre alguma coisa que o voluntário queira escrevertexto sobre alguma coisa que o voluntário queira escrevertexto sobre alguma coisa que o voluntário queira escrever.</p>
					<p>Ctexto sobre alguma coisa que o voluntário queira escrevertexto sobre alguma coisa que o voluntário queira escrevertexto sobre alguma coisa que o voluntário queira escrevertexto sobre alguma coisa que o voluntário queira escrevertexto sobre alguma coisa que o voluntário queira escrevertexto sobre alguma coisa que o voluntário queira escrever.</p>
					<div class="volunteer-progress">
						<div class="progress">
						  <div class="progress-bar progress-bar-danger progress-bar-striped active" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 88%">
							<span class="skill-name">Doação Dinheiro</span>
							<span class="skill-level">80%</span>
						  </div>
						</div>							
						<div class="progress">
						  <div class="progress-bar progress-bar-danger progress-bar-striped active" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%">
							<span class="skill-name">Doação Roupa</span>
							<span class="skill-level">75%</span>
						  </div>
						</div>	
                        <div class="progress">
						  <div class="progress-bar progress-bar-danger progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
							<span class="skill-name">Doação Alimentos</span>
							<span class="skill-level">40%</span>
						  </div>
						</div>						
						<div class="progress">
						  <div class="progress-bar progress-bar-danger progress-bar-striped active" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
							<span class="skill-name">Participação Eventos</span>
							<span class="skill-level">60%</span>
						  </div>
						</div>							
					</div>
				</div>
			</div>

			<div class="col-md-12 col-sm-12">
				<div class="team-border"></div>
			</div>
		</div>
	</div>
</div>

<div class="progress-area">
	<div class="container">
		<div class="row">
			<h3 class="progress-title"><b>SOMATÓRIA DAS DOAÇÕES</b></h3>
			
			<!-- PROGRESSO 1-->
			<div class="col-md-3 col-sm-3" data-appear-animation="fadeInLeft">
				<div class="progress-circular">
					  <input type="text" class="knob" data-max="2000" value="<?php echo $_smarty_tpl->tpl_vars['totalDoacoes']->value;?>
" data-rel="<?php echo $_smarty_tpl->tpl_vars['totalDoacoes']->value[1];?>
" data-linecap="round" data-width="200" data-bgcolor="#f2f2f2" data-fgcolor="#63b7ea" data-thickness=".10" data-readonly="true" disabled>
					  <h4 class="progress-h4">XP</h4>					
				</div>
			</div>

            <div class="col-lg-8 col-md-8 col-sm-8">
				<div class="volunteer-content">
					<h3>texto sobre alguma coisa que o voluntário queira escrever </h3>
					<p>textotexto sobre alguma coisa que o voluntário queira escrevertexto sobre alguma coisa que o voluntário queira escrevertexto sobre alguma coisa que o voluntário queira escrever.</p>
					<p>Ctexto sobre alguma coisa que o voluntário queira escrevertexto sobre alguma coisa que o voluntário queira escrevertexto sobre alguma coisa que o voluntário queira escrevertexto sobre alguma coisa que o voluntário queira escrevertexto sobre alguma coisa que o voluntário queira escrevertexto sobre alguma coisa que o voluntário queira escrever.</p>			
				</div>
			</div>
		</div>				
    </div>		
</div>
    
<?php echo $_smarty_tpl->getSubTemplate ("common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 <?php }} ?>
