{config_load file='view/foo.conf'}
{include file="common/header.tpl"}
{include file="common/menu.tpl"}

<div class="container">
	<br>
	<div class="row">
		<div class="col-md-4">
			<p><strong>Nome</strong></p>
			<p>APAE</p>
		</div>
		
		<div class="col-md-4">
			<p><strong>E-mail</strong></p>
			<p>apae@apae.com.br</p>
		</div>
		
		<div class="col-md-4">
			<p><strong>Telefone</strong></p>
			<p>(19)3434-3434</p>
		</div>

		<div class="col-md-4">
			<p><strong>Conta Corrente</strong></p>
			<p>34343-5</p>
		</div>
		
		<div class="col-md-4">
			<p><strong>Endereço envio doaçoes</strong></p>
			<p>avenida Jaguara</p>
		</div>
		
		<div class="col-md-4">
			<p><strong>Cidade</strong></p>
			<p>Campinas</p>
		</div>
		
		<div class="col-md-4">
			<p><strong>CEP</strong></p>
			<p>13050-800</p>
		</div>
		
		<div class="col-md-4">
			<p><strong>Estado</strong></p>
			<p>SP</p>
		</div>
		
		<div class="col-md-4">
			<p><strong>Nivel de Urgencia</strong></p>
			<p>Urgente</p>
		</div>
		
		<div class="col-md-8">
			<p><strong>Descrição</strong></p>
			<p> Precisamos de sua doação o quanto antes para ajudar nossas crianças </p>
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
		<a href="/Prin-not-instituicao" class="btn btn-primary">Fechar</a>
		<a href="/cad-notificacao" class="btn btn-default">Editar</a>
		
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