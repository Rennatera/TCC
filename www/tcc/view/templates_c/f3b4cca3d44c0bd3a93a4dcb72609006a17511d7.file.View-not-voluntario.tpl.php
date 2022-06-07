<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-06-06 23:09:16
         compiled from "view\View-not-voluntario.tpl" */ ?>
<?php /*%%SmartyHeaderCode:247405935d7c9d61f46-63435091%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f3b4cca3d44c0bd3a93a4dcb72609006a17511d7' => 
    array (
      0 => 'view\\View-not-voluntario.tpl',
      1 => 1496789926,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '247405935d7c9d61f46-63435091',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5935d7ca01f742_18640424',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5935d7ca01f742_18640424')) {function content_5935d7ca01f742_18640424($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config('view/foo.conf', $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
<?php echo $_smarty_tpl->getSubTemplate ("common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("common/menu-voluntario.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="container">
  <br>
  <div id="top" class="row">
    <div class="col-md-6">
        <h2>Notificações Urgentes</h2>
    </div>
    <div id="list" class="row">
        <div class="table-responsive col-md-12">
            <table class="table table-striped" cellspacing="0" cellpadding="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Descrição</th>
                        <th>Instituição</th>
                        <th>Data</th>
                        <th class="acoes">Ações</th>
                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <td>1001</td>
                        <td>Doação para campanha do agasalho</td>
                        <td>APAE</td>
                        <td>01/01/2015</td>
                        <td class="acoes">
                            <a class="btn btn-success btn-xs" href="/visualizar-not-cad">Visualizar</a>

                        </td>
                    </tr>

                </tbody>
            </table>

        </div>
    </div> <!-- /#list -->

    <div id="bottom" class="row">
        <div class="col-md-12">
            <ul class="pagination">
                <li class="disabled"><a>&lt; Anterior</a></li>
                <li class="disabled"><a>1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li class="next"><a href="#" rel="next">Próximo &gt;</a></li>
            </ul><!-- /.pagination -->
        </div>
    </div>
</div>
</div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
