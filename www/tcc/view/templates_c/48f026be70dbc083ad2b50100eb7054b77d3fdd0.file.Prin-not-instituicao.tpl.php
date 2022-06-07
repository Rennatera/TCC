<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-06-06 23:48:09
         compiled from "view\Prin-not-instituicao.tpl" */ ?>
<?php /*%%SmartyHeaderCode:225425935e0764f8d70-42718778%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '48f026be70dbc083ad2b50100eb7054b77d3fdd0' => 
    array (
      0 => 'view\\Prin-not-instituicao.tpl',
      1 => 1496790827,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '225425935e0764f8d70-42718778',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5935e0765b8420_28910583',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5935e0765b8420_28910583')) {function content_5935e0765b8420_28910583($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config('view/foo.conf', $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
<?php echo $_smarty_tpl->getSubTemplate ("common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("common/menu-instituicao.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


		<div class="container">
		<br>
			 <div id="top" class="row">
    <div class="col-md-6">
        <h2>Notificações Urgentes</h2>
    </div>
 
    
 
    <div class="col-md-">
        <a href="/cad-notificacao" class="btn btn-primary pull-right h2">Nova Notificação</a>
    </div>
</div> <!-- /#top -->

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
                    <td>Problemas com falta de alimento</td>
                    <td>Ju</td>
                    <td>01/03/2017</td>
                    <td class="acoes">
                        <a class="btn btn-success btn-xs" href="/visualizar-notificacao">Visualizar</a>
                         <a class="btn btn-default btn-xs" href="http://aduvi.com.br/editar_notificacao">Editar</a>
                        <a class="btn btn-danger btn-xs"  href="#" data-toggle="modal" data-target="#delete-modal">Excluir</a>
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
</div> <!-- /#bottom -->

<!-- Modal -->
<div class="modal fade" id="delete-modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="modalLabel">Excluir Item</h4>
            </div>
            <div class="modal-body">Deseja realmente excluir este item? </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Sim</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">N&atilde;o</button>
            </div>
        </div>
    </div>
</div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
