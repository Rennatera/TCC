<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-06-06 23:09:27
         compiled from "view\visualizar-not-cad.tpl" */ ?>
<?php /*%%SmartyHeaderCode:24845935dbf73f4899-46725350%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fa90314e917a0df7b4f8fa08c0535c25476bbb3e' => 
    array (
      0 => 'view\\visualizar-not-cad.tpl',
      1 => 1496789831,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24845935dbf73f4899-46725350',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5935dbf744e630_68150082',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5935dbf744e630_68150082')) {function content_5935dbf744e630_68150082($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config('view/foo.conf', $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
<?php echo $_smarty_tpl->getSubTemplate ("common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="container">
  <br>
  <div class="row">
    <div class="col-md-4">
      <p><strong>Nome</strong></p>
      <p>APAE</p>
    </div>

    <div class="col-md-4">
      <p><strong>E-mail</strong></p>
      <p>apae@apae.com</p>
    </div>

    <div class="col-md-4">
      <p><strong>Telefone</strong></p>
      <p>123.456.789-0</p>
    </div>

    <div class="col-md-4">
      <p><strong>Conta Corrente</strong></p>
      <p>111-6</p>
    </div>

    <div class="col-md-4">
      <p><strong>Endereço envio doaçoes</strong></p>
      <p>Rua luzitana</p>
    </div>

    <div class="col-md-4">
      <p><strong>Cidade</strong></p>
      <p>Campinas</p>
    </div>

    <div class="col-md-4">
      <p><strong>CEP</strong></p>
      <p>13.000-132</p>
    </div>

    <div class="col-md-4">
      <p><strong>Estado</strong></p>
      <p>SP</p>
    </div>

    <div class="col-md-4">
      <p><strong>Nivel de Urgencia</strong></p>
      <p>Agora</p>
    </div>

    <div class="col-md-8">
      <p><strong>Descrição</strong></p>
      <p> Precisamos da sua ajuda o mais rapido possível </p>
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
   <a href="/View-not-voluntario" class="btn btn-primary">Fechar</a>
   <a href="/doacao-voluntario" class="btn btn-default">Doar</a>   
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
