<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-06-03 00:35:05
         compiled from "view\instituicao-login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13812593204398092a3-70693129%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '430b5a54785bb9241a0e153ca693c7c7f33d7948' => 
    array (
      0 => 'view\\instituicao-login.tpl',
      1 => 1495919002,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13812593204398092a3-70693129',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5932043986ebc8_68491903',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5932043986ebc8_68491903')) {function content_5932043986ebc8_68491903($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config('view/foo.conf', $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
<?php echo $_smarty_tpl->getSubTemplate ("common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("common/menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<label></label>
<div class="container">
    <form id="formLoginInstituicao">
        <div class="col-md-4 col-md-offset-4">
            <h4>
                Instituição, Faça o seu login!
            </h4>

            <div class="form-group">
                <label for="no1">Email</label>
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa- fa-envelope"></i></span>
                    <input type="email" class="form-control" placeholder="Email" name="email" id="email" required>
                </div>
            </div>

            <div class="form-group">
                <label for="no1">Senha</label>
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa- fa-key"></i></span>
                    <input type="password" class="form-control" placeholder="Senha de 8 digitos" name="senha" id="senha" required>
                </div>
            </div>

            <div class="form-group">
                <button class="btn btn-primary" type="submit" value="entrar" id="entrar">
                    Entrar
                </button>
            </div>
        </div>
    </form>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
