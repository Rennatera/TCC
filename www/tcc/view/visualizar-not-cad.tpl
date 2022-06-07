{config_load file='view/foo.conf'}
{include file="common/header.tpl"}

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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>
</div>
<br>
</body>
{include file="common/footer.tpl"}