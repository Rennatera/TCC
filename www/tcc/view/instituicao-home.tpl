{config_load file='view/foo.conf'}
{include file="common/header.tpl"}
{include file="common/menu-instituicao.tpl"}

<div class="breadcrumb-area">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<div class="breadcrumb">
					<ul>
						<li><a href="/logoff-instituicao"><i class="fa fa-home"></i>LogOut</a></li>						
					</ul>
				</div>					
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12">
			<div class="your-answered team-2">
				<i class="fa fa-users"></i>
				<h3>BEM VINDO {$instituicaoNome}</h3>
				<p>Crie a melhor forma para arrecadação para a sua instituição com o nosso aplicativo .</p>
			</div>				
		</div>				
	</div>
    
    <!-- CONTADOR -->
	<div class="row couter-p" style="padding-bottom: 20px !important;">
		<div class="col-lg-4 col-md-6 col-sm-6">
			<div class="single-counter">
				<div class="counter-icon">
					<i class="fa fa-heart"></i>
				</div>
				<div class="counter-info">
					<span class="counter">{$doacoes|@count}</span>
					<p>Número de Arrecadações</p>
				</div>
			</div>
		</div>

		<div class="col-lg-4 col-md-3 col-sm-6">
					<div class="single-counter">
						<div class="counter-icon">
							<i class="fa fa-user"></i>
						</div>
						<div class="counter-info">
							<span class="counter">40</span>
							<p>Número de Voluntários</p>
						</div>					
					</div>
				</div>
		
		<div class="col-lg-4 col-md-3 col-sm-6">
			<div class="single-counter">
				<div class="counter-icon">
					<i class="fa fa-glass"></i>
				</div>
				<div class="counter-info">
					<span class="counter">2</span>
					<p>Eventos Criados</p>
				</div>					
			</div>
		</div>
	</div>
    
    <div class="row">
    	<div class="col-xs-12">
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
								<th class="pure-text-center">Quantidade doada</th>
							</tr>
						</thead>
						<tbody>
							{foreach $doacoes as $key => $doacao}
								<tr>
									<td class="pure-text-center pure-hidden-phone">{$doacao->id}</td>
									<td class="pure-text-center">{$doacao->data_doacao|date_format:'%d/%m/%y às %H:%M'}</td>
									<td class="pure-text-center">{$doacao->nome}</td>
									<td class="pure-text-center">{$doacao->cidade}</td>
									<td class="pure-text-center">{$doacao->estado}</td>
									<td class="pure-text-center"><span>$</span>{$doacao->valor}</td>
								</tr>
	                        {/foreach}
						</tbody>
					</table>
				</div>						
			</div>				
		</div>
    </div>

	<div class="row" style="margin-top: 30px; margin-bottom: 20px;">
		<div class="col-xs-12">
			<div class="donors-content box1">
				<div class="donors">
					<h3 class="donors-title"><span>Eventos</span></h3>
				</div>					
				<div class="cmdonation table-responsive">
					<table class="pure-table pure-table-horizontal pure-table-striped">
						<thead>
							<tr>
								<th class="pure-text-center pure-hidden-phone">#</th>
								<th class="pure-text-center">Rua</th>
								<th class="pure-text-center">Cidade</th>
								<th class="pure-text-center">Estado</th>
								<th class="pure-text-center">Data do Evento</th>
								<th class="pure-text-center">Inscritos</th>								
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="pure-text-center pure-hidden-phone">1</td>
								<td class="pure-text-center">Jordina</td>
								<td class="pure-text-center">Campinas</td>
								<td class="pure-text-center">SP</td>
								<td class="pure-text-center">01/03/2017</td>
								<td class="pure-text-center">12</td>																
							</tr>
							<tr>
								<td class="pure-text-center pure-hidden-phone">2</td>
								<td class="pure-text-center">Jordina</td>
								<td class="pure-text-center">Campinas</td>
								<td class="pure-text-center">SP</td>
								<td class="pure-text-center">01/07/2017</td>
								<td class="pure-text-center">7</td>																
							</tr>														
						</tbody>
					</table>
				</div>						
			</div>
		</div>
	</div>	
</div>		
		    
{include file="common/footer.tpl"} 