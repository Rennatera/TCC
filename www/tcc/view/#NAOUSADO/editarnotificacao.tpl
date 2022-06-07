{config_load file='view/foo.conf'}
{include file="common/header.tpl"}
{include file="common/menu.tpl"}

		    <div class="container">
		      <br>
			   <form method="POST" action="cadastrovol.php">
        <div class="container">
        <div id="main" class="container-fluid">
          <h3 class="page-header">Adicionar Item</h3>
 </div>
          <form action="index.html">
  <!-- area de campos do form -->
          <hr />
        <div id="actions" class="row">
        <div class="col-md-12">
      <button type="submit" class="btn btn-primary">Salvar</button>
      <a href="http://aduvi.com.br/viewnotificacao" class="btn btn-default">Cancelar</a>
      
    </div>
  </div>
</form>
<div class="row">


 <div class="form-group col-md-4">
   <label for="campo1">Nome da Instituição *</label>
   <input type="text" class="form-control" id="campo1" placeholder="Instituição que destina a doação urgente" required>
 </div>
 
 <div class="form-group col-md-4">
   <label for="campo2">CNPJ *</label>
   <input type="text" class="form-control" id="cnpj" type="number" placeholder="CNPJ" required>
 </div>
  <div class="form-group col-md-2">
   <label for="campo3">Agencia *</label>
   <input type="text" class="form-control" id="AG" placeholder="ex 7777, 7777-1" maxlength="6" required>
 </div>
 <div class="form-group col-md-2">
   <label for="campo3">Conta  *</label>
   <input type="text" class="form-control" id="CC" placeholder="CC 4 a 11 digitos" required>
 </div>
 
 <div class="form-group col-md-4">
   <label for="campo4">Rua *</label>
   <input type="text" class="form-control" id="campo4" placeholder="Endereço para enviar doaçoes fisicas" required>
 </div>
 
 <div class="form-group col-md-4">
   <label for="campo5">Bairro *</label>
   <input type="text" class="form-control" id="campo5"placeholder="Endereço para enviar doaçoes fisicas" required>
 </div>
 <div class="form-group col-md-4">
   <label for="campo6">Cidade *</label>
   <input type="text" class="form-control" id="campo6"placeholder="Endereço para enviar doaçoes fisicas" required>
 </div>
 <div class="form-group col-md-4">
   <label for="campo7">CEP *</label>
   <input type="text" class="form-control" id="cep"placeholder="Endereço para enviar doaçoes fisicas" required>
 </div>
   <div class="form-group col-md-4">
 <label for="no1">Estado *</label>
<!--<div class="input-group">
 <!-- <span class="input-group-addon" id="basic-addon1"><i class="fa fa- fa-building-o"></i></span>-->
  <form role="form">
  <select class="form-control" placeholder="Estado" aria-describedby="" name="estado" id="estado"  >
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
               </form></div>
  <p> </p>
   <div class="form-group col-md-4">
   <label for="campo9">Titulo *</label>
   <input type="text" class="form-control" id="campo9"placeholder="ocorrencia urgente" required>
   </div>
   <div class="form-group col-md-4">
    <label for="comment">Descrição</label>
 <textarea class="form-control" rows="5" id="desc" name="desc" placeholder="Insira aqui uma breve descrição do que ocorreu, quantos precisam e o que precisa ser doado."></textarea>

  </div>
   <div class="form-group col-md-4">
   <label for="campo10">Telefone *</label>
   <input type="text" class="form-control" id="TFone" name="TFone"placeholder="telefone para contato" required>
   </div>
   <div class="form-group col-md-4">
   <label for="campo10">Celular</label>
   <input type="text" class="form-control" id="CFone" name="CFone"placeholder="Celular para contato">
   </div>
   <div class="form-group col-md-4">
   <label for="campo11">Email *</label>
   <input type="text" class="form-control" id="campo11"placeholder="Email necessario" required>
   </div>
  <div class="form-group col-md-4">
    <label for="Fotos">Adicionar Fotos</label>
   <input type="file" name=" arquivos " id="Fotos" class="btn btn-success"  accept="image/png, image/jpeg"  multiple />
    <script type="text/javascript" src="JScript/jquery.js"></script>
  <script type="text/javascript" src="JScript/jquery-1.12.3.min.js"></script>
  <script type="text/javascript" src="JScript/jquery.mask.js"></script>
<script type="text/javascript">
$('#CFone').mask("(99) 99999 - 9999");
$('#TFone').mask("(99) 9999 - 9999");
$('#cnpj').mask("99.999.999/9999 - 99");
$('#cep').mask("99999 - 999");
</script> 
 </div>
 </div>

{include file="common/footer.tpl"}