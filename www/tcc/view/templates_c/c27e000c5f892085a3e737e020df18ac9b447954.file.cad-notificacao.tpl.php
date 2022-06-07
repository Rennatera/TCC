<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-06-06 23:52:12
         compiled from "view\cad-notificacao.tpl" */ ?>
<?php /*%%SmartyHeaderCode:82525935e32bb15eb4-92823643%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c27e000c5f892085a3e737e020df18ac9b447954' => 
    array (
      0 => 'view\\cad-notificacao.tpl',
      1 => 1496793131,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '82525935e32bb15eb4-92823643',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5935e32bbbde62_22997651',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5935e32bbbde62_22997651')) {function content_5935e32bbbde62_22997651($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config('view/foo.conf', $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
<?php echo $_smarty_tpl->getSubTemplate ("common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("common/menu-instituicao.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="container">
  <br>
  <form method="POST" action="#">
    <div class="col-md-4 col-md-offset-4">
     <div class="well well-sm" align="center"><h2>Notificações Urgentes</h2></div>
     <p> </p>
     <label for="no1">Nome</label>
     <div class="input-group">
      <span class="input-group-addon" id="basic-addon1"> <i class="fa fa- fa-user"></i></span>
      <input type="text" class="form-control" placeholder="Nome" aria-describedby="basic-addon1" name="nome" id="nome"  required>
    </div>
    <p> </p>


    <label for="no1">Email</label>
    <div class="input-group">
     <span class="input-group-addon" id="basic-addon1"><i class="fa fa- fa-envelope"></i></span>
     <input type="email" class="form-control" placeholder="Email" aria-describedby="basic-addon3" name="email" id="email" required >
   </div>
   <p> </p>


   <label for="no1">Telefone</label>
   <div class="input-group">
     <span class="input-group-addon" id="basic-addon1"><i class="fa fa- fa-phone"></i></span>
     <input type="text" class="form-control" placeholder="fone ou cel ex:5519998480400" aria-describedby="basic-addon8" name="fone" id="fone" required  >
   </div>
   <p> </p>
   <label for="no1">Conta Corrente</label>
   <div class="input-group">
     <span class="input-group-addon" id="basic-addon1"><i class="fa fa- fa-phone"></i></span>
     <input type="text" class="form-control" placeholder="fone ou cel ex:5519998480400" aria-describedby="basic-addon8" name="cc" id="cc" required  >
   </div>
   <p> </p>

   <label for="no1">Endereço envio Doações</label>
   <div class="input-group">
     <span class="input-group-addon" id="basic-addon1"><i class="fa fa- fa-building-o"></i></span>
     <input type="text" class="form-control" placeholder="Endereço: Rua tal, 222, altos morumbi" aria-describedby="basic-addon8" name="enddoacoes" id="enddoaoes" required  >
   </div>
   <p> </p>
   

   <label for="no1">Cidade</label>
   <div class="input-group">
     <span class="input-group-addon" id="basic-addon1"><i class="fa fa- fa-building-o"></i></span>
     <input type="text" class="form-control" placeholder="Endereço: Cidade" aria-describedby="basic-addon8" name="cidade" id="cidade"  required>
   </div>
   <p> </p>
   <label for="no1">Cep</label>
   <div class="input-group">
     <span class="input-group-addon" id="basic-addon1"><i class="fa fa- fa-building-o"></i></span>
     <input type="text" class="form-control" placeholder="CEP ex:13280000" aria-describedby="basic-addon8" name="cep" id="cep" required >
   </div>
   <p> </p>

   <label for="no1">Estado</label>
   <div class="input-group">
     <span class="input-group-addon" id="basic-addon1"><i class="fa fa- fa-building-o"></i></span>
     <form role="form">
      <select class="form-control" placeholder="" aria-describedby="" name="estado" id="estado"  >
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
    <p></p>

    <label for="no1">Nivel de urgência</label>
    <div class="input-group">
      <span class="input-group-addon" id="basic-addon1"><i class="fa fa- fa-venus-mars"></i></span>
      <form role="form">
        <select class="form-control" placeholder="" aria-describedby="" name="nvlurg" id="nvlurg"  >
          <option>0</option>
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
        </select>
      </div>
      <p></p>
      <div class="form-group">
        <label for="comment">Descrição</label>
        <textarea class="form-control" rows="5" id="desc" name="desc" placeholder="Insira aqui uma breve descrição do que ocorreu, quantos precisam e o que precisa ser doado."></textarea>
      </div>
      <p></p>
      </form>
      <p> </p>
      <button class="btn btn-primary " type="submit" value="cadastrar" name=" cadastrar" id="cadastrar"  >
        Cadastrar
      </button> 
      <a href="/Prin-not-instituicao" class="btn btn-default">Cancelar</a>   
    </div>
  </div>
  <br>
  <br>


  <?php echo '<script'; ?>
 type="text/javascript" src="JScript/jquery.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript" src="JScript/jquery-1.12.3.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript" src="JScript/jquery.mask.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript">
    $('#fone').mask("(99) 99999 - 9999");
    $('#cnpj').mask("99.999.999/9999 - 99");
    $('#cep').mask("99999 - 999");

// Check if file already exists


<?php echo '</script'; ?>
>     
<?php echo $_smarty_tpl->getSubTemplate ("common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
