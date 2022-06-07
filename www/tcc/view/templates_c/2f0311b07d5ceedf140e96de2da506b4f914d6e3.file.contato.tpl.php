<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-06-03 13:01:44
         compiled from "view\contato.tpl" */ ?>
<?php /*%%SmartyHeaderCode:287895932b08fd2db78-75277700%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2f0311b07d5ceedf140e96de2da506b4f914d6e3' => 
    array (
      0 => 'view\\contato.tpl',
      1 => 1496494875,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '287895932b08fd2db78-75277700',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5932b08fd87908_79256925',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5932b08fd87908_79256925')) {function content_5932b08fd87908_79256925($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config('view/foo.conf', $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
<?php echo $_smarty_tpl->getSubTemplate ("common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("common/menu-voluntario.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



<!--Breve Informativo -->
<div class="mainheading-wrapper contact-area">
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-sm-9">
				<div class="heading-content">
					<h1>Contato</h1>
					<p>Casa da Criança Paralitica.</p>
				</div>
			</div>
			<div class="col-md-2 col-sm-3">
				<div class="voltar">
					<a class="readon" href="/eventos"><i class="fa fa-arrow-left"></i> Voltar</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Info FIM -->

<br>
<br>

<!-- Endereço instituição -->
<div class="contact-page-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-8 col-sm-12">
				<div class="contact-accordion">
					<h3 class="open">Contato</h3>
					<div class="contact-content">
						<div class="contact-address">
							<p>Casa da Criança Paralitica</p>
							<ul class="footer-top-contact">
								<li>
									<span class="contact-icon"><i class="fa fa-home"></i></span>
									<span class="contact-text">CNPJ No. 46.042.370/0001-92,
										<br /> Rua Pedro Domingos Vitalli, 160
										<br>Parque Itália Campinas (SP),<br /> Brasil</span>
									</li>
									<li>
										<span class="contact-icon"><i class="fa fa-phone-square"></i></span>
										<span class="contact-text">(019) 3232-3525 </span>
									</li>
									<li>
										<span class="contact-icon"><i class="fa fa-print"></i></span>
										<span class="contact-text">9-1131-4652 </span>
									</li>
									<li>
										<span class="contact-icon"><i class="fa fa-link"></i></span>
										<span class="contact-text"><a href="http://ccp.org.br/portal/">http://ccp.org.br/portal/</a></span>
									</li>
								</ul>
							</div>
							<div class="contact-img">
								<img src="img/contact-img.png" alt="" />
							</div>
					</div>
					<!-- Endereço FIM -->

					<!-- Dúvidas -->
					<h3>Forma de Contato</h3>
					<div class="contact-content">
						<div class="contact-form-ac">
							<p>Mande um e-mail preenchendo todos os campos.</p>
							<form action="#">
								<div class="row">
									<div class="col-md-4 col-sm-4">
										<div class="control-level">
											<p><span>Nome</span> *</p>
											<input type="text" />
										</div>
									</div>
									<div class="col-md-4 col-sm-4">
										<div class="control-level">
											<p><span>E-mail</span> *</p>
											<input type="email" />
										</div>
									</div>

									<div class="col-md-12 col-sm-12">
										<div class="textarea-contact">
											<p><span>Mensagem</span> *</p>
											<textarea name="" id="message-ac" cols="30" rows="10"></textarea>
										</div>
									</div>

									<div class="col-md-12 col-sm-12">
										<div class="send-mail">
											<input class="readon" type="button" value="Enviar"/>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
					<!-- Dúvidas FIM -->

					<!-- Informativo Especifico -->
					<h3>Informações</h3>
					<div class="contact-content">
						<div class="contact-info">
							<p>Conheça os 62 anos de história da Casa da Criança Paralítica de Campinas, repletos de momentos especiais e conquistas.
								Faça parte deste legado!
							</p>
						</div>
					</div>
				</div>
			</div>

			<!-- MAPA -->
			<div class="col-lg-4 col-md-4 col-sm-12">
				<div class="contact-map">
					<h3>Localize está instituição</h3>
					<div id="googleMap" style="width:100%;height:430px;"></div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
