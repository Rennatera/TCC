<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-06-07 22:22:55
         compiled from "view\instituicao-cadastro.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1499559387cbfaeb784-81000360%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd8a44a2879a37555e019c07abb3d9d5e7d6961d1' => 
    array (
      0 => 'view\\instituicao-cadastro.tpl',
      1 => 1495918997,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1499559387cbfaeb784-81000360',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_59387cbfe1bec7_50479221',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59387cbfe1bec7_50479221')) {function content_59387cbfe1bec7_50479221($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config('view/foo.conf', $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
<?php echo $_smarty_tpl->getSubTemplate ("common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("common/menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<label></label>
<div class="container">
    <form id="formCadastroInstituicao">
        <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">

        <div class="col-md-4 col-md-offset-4">
            <div class="form-group">
                <label for="no1">Nome</label>
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1"> <i class="fa fa- fa-user"></i></span>
                    <input type="text" class="form-control" placeholder="Nome" name="nome" id="nome" required maxlength="100">
                </div>
            </div>

            <div class="form-group">
                <label for="no1">Email</label>
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa- fa-envelope"></i></span>
                    <input type="email" class="form-control" placeholder="Email" name="email" id="email" required>
                </div>
            </div>               

           <div class="form-group">
                <label for="no1">Definir Senha</label>
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa- fa-key"></i></span>
                    <input type="password" class="form-control" placeholder="Senha de 8 digitos" name="senha" id="senha" required>
                </div>
            </div>

            <div class="form-group">
                <label for="no1">CNPJ</label>
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa- fa-indent"></i></span>
                    <input type="text" class="form-control" placeholder="CNPJ" aria-describedby="basic-addon7" name="cnpj" id="cnpj" required>
                </div>
            </div>

            <div class="form-group">
                <label for="no1">Telefone</label>
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa- fa-phone"></i></span>
                    <input type="text" class="form-control" placeholder="Telefone ou celular" name="telefone" id="telefone" required>
                </div>
            </div>

            <div class="form-group">
                <label for="no1">Rua</label>
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa- fa-building-o"></i></span>
                    <input type="text" class="form-control" placeholder="Endereço: Rua" name="rua" id="Rua" required>
                </div>
            </div>

            <div class="form-group">
                <label for="no1">Numero</label>
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa- fa-building-o"></i></span>
                    <input type="text" class="form-control" placeholder="Endereço: numero imovel" name="numeroCasa" id="numeroCasa" required>
                </div>
            </div>

            <div class="form-group">
                <label for="no1">Bairro</label>
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa- fa-building-o"></i></span>
                    <input type="text" class="form-control" placeholder="Endereço: Bairro" name="bairro" id="bairro" required>
                </div>
            </div>            

            <div class="form-group">
                <label for="no1">Cidade</label>
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa- fa-building-o"></i></span>
                    <input type="text" class="form-control" placeholder="Endereço: Cidade" name="cidade" id="cidade" required>
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
                    <select class="form-control" placeholder="Escolha um Estado" aria-describedby="" name="estado" id="estado">
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
                <label for="no1">Ramo Trabalho</label>
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa- fa-venus-mars"></i></span>
                    <select class="form-control" placeholder="" aria-describedby="" name="ramotrab" id="ramotrab">
                        <option>Asilo</option>
                        <option>Orfanato</option>
                        <option>casa de repouso</option>
                        <option>Doenças degenerativas</option>
                        <option>Doenças mentais</option>
                        <option>Outros</option>
                    </select>
                </div>
            </div>    

            <div class="form-group">
                <label for="no1">Outros</label>
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa- fa-dedent"></i></span>
                    <input type="text" class="form-control" placeholder="outros " aria-describedby="basic-addon8" name="outros" id="outros">
                </div>
            </div>

            <div class="form-group">
                <label for="no1">Data de Fundação</label>
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa- fa-calendar"></i></span>
                    <input type="date" class="form-control co" name="data_fund" id="dtfund" required>
                </div>
            </div>

            <br>

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
    $('#cnpj').mask("99.999.999/9999 - 99");
    $('#numero').mask("999999");   
    $('#cep').mask("99999 - 999");
    // $('#dtfund').mask("99/99/9999");
<?php echo '</script'; ?>
><?php }} ?>
