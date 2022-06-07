<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-05-28 12:47:12
         compiled from "view\evento-cadastro.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21623592af1000a6f85-60711246%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '896f708554ee6582d3bf736b49851cda5bf87d7c' => 
    array (
      0 => 'view\\evento-cadastro.tpl',
      1 => 1495920068,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21623592af1000a6f85-60711246',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_592af10014cf43_35059621',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_592af10014cf43_35059621')) {function content_592af10014cf43_35059621($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config('view/foo.conf', $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
<?php echo $_smarty_tpl->getSubTemplate ("common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("common/menu-instituicao.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<label></label>

<div class="container">
    <form id="formCadastroEvento">
        <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">

        <div class="col-md-4 col-md-offset-4">
            <div class="form-group">
                <label for="no1">Nome do Evento</label>
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1"> <i class="fa fa- fa-user"></i></span>
                    <input type="text" class="form-control" placeholder="Evento" name="evento" id="evento" required maxlength="100">
                </div>   
            </div>   

            <div class="form-group">
                <label for="no1">Data Evento</label>
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa- fa-phone"></i></span>
                    <input type="text" class="form-control" placeholder="dataevento" name="dataevento" id="dataevento" required>
                </div>
            </div>

            <div class="form-group">
                <label for="no1">Rua</label>
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa- fa-building-o"></i></span>
                    <input type="text" class="form-control" placeholder="Endereço: Rua" name="ruaEvento" id="ruaEvento" required>
                </div>
            </div>

            <div class="form-group">
                <label for="no1">Numero</label>
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa- fa-building-o"></i></span>
                    <input type="text" class="form-control" placeholder="Endereço: numero imovel" name="numeroEvento" id="numeroEvento" required>
                </div>
            </div>

            <div class="form-group">
                <label for="no1">Bairro</label>
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa- fa-building-o"></i></span>
                    <input type="text" class="form-control" placeholder="Endereço: Bairro" name="bairroEvento" id="bairroEvento" required>
                </div>
            </div>            

            <div class="form-group">
                <label for="no1">Cidade</label>
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa- fa-building-o"></i></span>
                    <input type="text" class="form-control" placeholder="Endereço: Cidade" name="cidadeEvento" id="cidadeEvento" required>
                </div>
            </div>

            <div class="form-group">
                <label for="no1">Cep</label>
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa- fa-building-o"></i></span>
                    <input type="text" class="form-control" placeholder="CEP ex:13280000" name="cep" id="cep" required>
                </div>
            </div>

            <div class="form-group">
                <label for="no1">Estado</label>
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa- fa-building-o"></i></span>
                    <select class="form-control" placeholder="" aria-describedby="" name="estado" id="estado">
                        <option>Acre</option>
                        <option>Alagoas</option>
                        <option>Amapá</option>
                        <option>Amazonas</option>
                        <option>Bahia</option>
                        <option>ceará</option>
                        <option>Distrito Federal</option>
                        <option>Espírito Santo</option>
                        <option>Goiás</option>
                        <option>Maranhão</option>
                        <option>Mato Grosso</option>
                        <option>Mato Grosso do Sul</option>
                        <option>Minas Gerais</option>
                        <option>Pará</option>
                        <option>Paraíba</option>
                        <option>Paraná</option>
                        <option>Pernambuco</option>
                        <option>Piauí</option>
                        <option>Rio de Janeiro</option>
                        <option>Rio Grande do Sul</option>
                        <option>Rondônia</option>
                        <option>Roraima</option>
                        <option>Santa Catarina</option>
                        <option>São Paulo</option>
                        <option>Sergipe</option>
                        <option>Tocantins</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label for="no1">Instituição</label>
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa- fa-venus-mars"></i></span>
                    <select class="form-control" placeholder="Escolha uma Instituição" aria-describedby="" name="instCriadora" id="instCriadora">
                    </select>
                </div>
            </div>               

            <div class="form-group">
                <button class="btn btn-primary" type="submit">
                    Cadastrar
                </button>
            </div>
        </div>
    </form>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
   

<?php echo '<script'; ?>
 type="text/javascript">
    $('#telefone').mask("(99) 99999 - 9999");  
    $('#numero').mask("99999");   
    $('#cep').mask("99999 - 999");
    $('#dataevento').mask("99/99/9999");
<?php echo '</script'; ?>
><?php }} ?>
