{config_load file='view/foo.conf'}
{include file="common/header.tpl"}
{include file="common/menu-voluntario.tpl"}

<div class="mainheading-wrapper">
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-sm-9">
				<div class="heading-content">
					<h1>Doe</h1>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="donation-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="donation-text">
                	<br>
					<h3><b>Torne-se</b> doador ativo dessa instituição</h3>
					<p>Ajude da maneira que puder, mas não deixe de participar com sua doação que é muito importante para nós.</p>
				</div>
				<form id="formDoacaoVoluntario">
					<div class="payment-method">
						<div class="form-group">
							<div class="pure-control-group">
								<label for="quantidade">Valor</label>
								<span class="pure-input-prepend">
									<span class="add-on">$</span>
									<input type="text" id="valor" name="valor" placeholder="Valor">
								</span>
							</div>
						</div>
						<div class="form-group">
							<div class="pure-control-group">
								<label for="instituicao_id">Instituicao</label>
								<div class="pure-input-prepend">
									<select class="form-control" placeholder="Escolha a Instituição" name="instituicao_id" id="instituicao_id">
										<option value="" disabled="disabled" selected="selected">Escolha a Instituição</option>
				                        {foreach $instituicoes as $key => $inst}
											<option value="{$inst->id}">{$inst->nome}</option>
				                        {/foreach}
				                    </select>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="pure-controls">
								<input type="submit" value="DOAR" class="pure-button pure-button-primary">      
							</div>
						</div>
					</div>
				</form>
				<div class="row">
				<div class="col-sm-6 col-md-3">
				<img src="/view/images/pagseguro.jpg"  alt="bg"  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">

				</div>
				</div>
                
				<div class="notes">
					<blockquote>
						<p>Não forneça qualquer tipo de informação para estranhos!</p>
					</blockquote>
				</div>
			</div>
		</div>
	</div>
</div>

{include file="common/footer.tpl"}

{literal}
	<script type="text/javascript">
		$('#valor').mask("##.##0,00", {reverse: true});
	</script>
{/literal}