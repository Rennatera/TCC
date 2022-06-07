{config_load file='view/foo.conf'}
{include file="common/header.tpl"}
{include file="common/menu.tpl"}

<!-- Descrição breve institucional -->
	<div class="mainheading-wrapper">
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-sm-9">
					<div class="heading-content">
						<h1>Doe</h1>
						<p>A APAE é uma instituição para pessoas com deficiência.</p>
					</div>
				</div>
				<div class="col-md-2 col-sm-3">
					<div class="back">
						<a class="readon" href="voluntario.html"><i class="fa fa-arrow-left"></i> Voltar</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Descriação breve instituicional -->
	
	
	
	<!-- AREA DE DOAÇÃO -->
	<div class="donation-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<div class="donation-text">
                    	<br>
						<h3><b>Torne-se</b> doador ativo dessa instituição</h3>
						<p>Ajude da maneira que puder, mas não deixe de participar com sua doação que é muito importante para nós.</p>
					</div>
					<div class="payment-method">
						<div class="pure-control-group">
							<label for="quantidade">Quantidade</label>
							<span class="pure-input-prepend">
								<span class="add-on">$</span>
								<input type="text" id="quantidade" name="quantidade" placeholder="Quantidade">
							</span>
						</div>
						<div class="pure-control-group">
							<label></label>
							<input type="checkbox" id="anonimo" name="anonimo" class="inputbox" value="1">
							Doe como anônimo		
						</div>	
                        <br>
						<div class="pure-control-group">
							<label>Metodo de doação</label>
							<input type="radio" value="dinheiro" id="dinheiro" name="metodo_pagamento">
							Doar Dinheiro                            			
						</div>
                       
								
							</div>
						</div>
						<div class="pure-controls">
							<input type="submit" value="DOAR" class="btn btn-primary">                            
						</div>						
					</div>
                    </div>
                    </div>

					<!-- Mensagem Legal-->
					<div class="notes">
						<blockquote>
							<p>Não forneça qualquer tipo de informação para estranhos!</p>
						</blockquote>
					</div>
					<!-- Fim msg-->
				</div>
			</div>
		</div>
	</div>
	
	
	<!-- Area dos doadores -->
	<div class="donation-list-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-6">
					<div class="donors-content box1">
						<div class="donors">
							<h3 class="donors-title"><span>Empresas que ajudaram</span></h3>
						</div>					
						<div class="cmdonation table-responsive">
							<table class="pure-table pure-table-horizontal pure-table-striped">
							<thead>
							<tr>
								<th class="pure-text-center pure-hidden-phone">#</th>
								<th class="pure-text-center">Empresa</th>
								<th class="pure-text-center">Cidade</th>
								<th class="pure-text-center">Estado</th>
								<th class="pure-text-center">Número de Doações</th>
							<th class="pure-text-center">Quantidade Doada</th>
							</tr>
							</thead>
								<tbody>
									<tr>
										<td class="pure-text-center pure-hidden-phone">1</td>
										<td class="pure-text-center">Empresa Leite</td>
										<td class="pure-text-center">Campinas</td>
										<td class="pure-text-center">SP</td>
										<td class="pure-text-center">3</td>
										<td class="pure-text-center">
										<span>$</span>620.00</td>								
									</tr>
									
									<tr>
										<td class="pure-text-center pure-hidden-phone">2</td>
										<td class="pure-text-center">Empresa TTT</td>
										<td class="pure-text-center">São Paulo</td>
										<td class="pure-text-center">SP</td>
										<td class="pure-text-center">1</td>
										<td class="pure-text-center"><span>$</span>250.00</td>
									</tr>
								</tbody>
							</table>
						</div>						
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6">
					<div class="donors-content box1">
						<div class="donors">
							<h3 class="donors-title"><span>Ultimas Doações</span></h3>
						</div>					
						<div class="cmdonation table-responsive">
							<table class="pure-table pure-table-horizontal pure-table-striped">
								<thead>
									<tr>
										<th class="pure-text-center pure-hidden-phone">#</th>
										<th class="pure-text-center ">Data</th>
										<th class="pure-text-center">Doação</th>
										<th class="pure-text-center">Cidade</th>
										<th class="pure-text-center">Estado</th>
										<th class="pure-text-center">Total de doações</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td class="pure-text-center pure-hidden-phone">1</td>
										<td class="pure-text-center">31-07-2016</td>
										<td class="pure-text-center">Marcos Oliveira</td>
										<td class="pure-text-center">Jupia</td>
										<td class="pure-text-center">PR</td><td class="pure-text-center">7</td>
									</tr>
									
									<tr>
										<td class="pure-text-center pure-hidden-phone">2</td>
										<td class="pure-text-center">26-07-2016</td>
										<td class="pure-text-center">Jonny Depp</td>
										<td class="pure-text-center">Valinhos</td>
										<td class="pure-text-center">SP</td>
										<td class="pure-text-center">5</td>
									</tr>
									
									<tr>
										<td class="pure-text-center pure-hidden-phone">3</td>
										<td class="pure-text-center">01-07-2016</td>
										<td class="pure-text-center">Ana Carolina</td>
										<td class="pure-text-center">Vinhedo</td>
										<td class="pure-text-center">Vinhedo</td>
										<td class="pure-text-center">4</td>
									</tr>
									
									<tr>
										<td class="pure-text-center pure-hidden-phone">4</td>
										<td class="pure-text-center">28-06-2016</td>
										<td class="pure-text-center">Arnaldo Coelho</td>
										<td class="pure-text-center">Sertãozinho</td><td class="pure-text-center">PE</td>
										<td class="pure-text-center">4</td>
									</tr>
								</tbody>
							</table>
						</div>						
					</div>				
				</div>
			</div>
		</div>
	</div>
	<!--FIM -->



{include file="common/footer.tpl"}