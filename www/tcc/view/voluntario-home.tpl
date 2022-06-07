{config_load file='view/foo.conf'}
{include file="common/header.tpl"}
{include file="common/menu-voluntario.tpl"}

<div class="breadcrumb-area">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<div class="breadcrumb">
					<ul>
						<li><a href="/logoff-voluntario"><i class="fa fa-home"></i>Log out</a></li>							
					</ul>
				</div>					
			</div>
		</div>
	</div>
</div>

<div class="volunteers-area" style="padding-bottom: 0;">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<div class="volunteers-title">
					<h3 class="title-h3">Voluntário</h3>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-4 col-md-4 col-sm-4">
				<div class="single-volunteer">
					<div class="volunteers-img">
						<img src="/view/images/team/v05.jpg" alt="" />
						<div class="volunteers-icon">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-google-plus"></i></a>								
							<a href="#"><i class="fa fa-linkedin"></i></a>
						</div>
					</div>
					<div class="volunteer-info">
						<h4>{$voluntarioNome}</h4>
						<p>Voluntário</p>
					</div>
				</div>
			</div>

			<div class="col-lg-8 col-md-8 col-sm-8">
				<div class="volunteer-content">
					<h3>texto sobre alguma coisa que o voluntário queira escrever </h3>
					<p>textotexto sobre alguma coisa que o voluntário queira escrevertexto sobre alguma coisa que o voluntário queira escrevertexto sobre alguma coisa que o voluntário queira escrever.</p>
					<p>Ctexto sobre alguma coisa que o voluntário queira escrevertexto sobre alguma coisa que o voluntário queira escrevertexto sobre alguma coisa que o voluntário queira escrevertexto sobre alguma coisa que o voluntário queira escrevertexto sobre alguma coisa que o voluntário queira escrevertexto sobre alguma coisa que o voluntário queira escrever.</p>
					<div class="volunteer-progress">
						<div class="progress">
						  <div class="progress-bar progress-bar-danger progress-bar-striped active" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 88%">
							<span class="skill-name">Doação Dinheiro</span>
							<span class="skill-level">80%</span>
						  </div>
						</div>							
						<div class="progress">
						  <div class="progress-bar progress-bar-danger progress-bar-striped active" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%">
							<span class="skill-name">Doação Roupa</span>
							<span class="skill-level">75%</span>
						  </div>
						</div>	
                        <div class="progress">
						  <div class="progress-bar progress-bar-danger progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
							<span class="skill-name">Doação Alimentos</span>
							<span class="skill-level">40%</span>
						  </div>
						</div>						
						<div class="progress">
						  <div class="progress-bar progress-bar-danger progress-bar-striped active" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
							<span class="skill-name">Participação Eventos</span>
							<span class="skill-level">60%</span>
						  </div>
						</div>							
					</div>
				</div>
			</div>

			<div class="col-md-12 col-sm-12">
				<div class="team-border"></div>
			</div>
		</div>
	</div>
</div>

<div class="progress-area">
	<div class="container">
		<div class="row">
			<h3 class="progress-title"><b>SOMATÓRIA DAS DOAÇÕES</b></h3>
			
			<!-- PROGRESSO 1-->
			<div class="col-md-3 col-sm-3" data-appear-animation="fadeInLeft">
				<div class="progress-circular">
					  <input type="text" class="knob" data-max="2000" value="{$totalDoacoes[1]}" data-rel="{$totalDoacoes[1]}" data-linecap="round" data-width="200" data-bgcolor="#f2f2f2" data-fgcolor="#63b7ea" data-thickness=".10" data-readonly="true" disabled>
					  <h4 class="progress-h4">XP</h4>					
				</div>
			</div>

            <div class="col-lg-8 col-md-8 col-sm-8">
				<div class="volunteer-content">
					<h3>texto sobre alguma coisa que o voluntário queira escrever </h3>
					<p>textotexto sobre alguma coisa que o voluntário queira escrevertexto sobre alguma coisa que o voluntário queira escrevertexto sobre alguma coisa que o voluntário queira escrever.</p>
					<p>Ctexto sobre alguma coisa que o voluntário queira escrevertexto sobre alguma coisa que o voluntário queira escrevertexto sobre alguma coisa que o voluntário queira escrevertexto sobre alguma coisa que o voluntário queira escrevertexto sobre alguma coisa que o voluntário queira escrevertexto sobre alguma coisa que o voluntário queira escrever.</p>			
				</div>
				<div class="container">
  							
  							<a href="/resgatar" class="btn btn-info btn-lg">Resgatar</a>
  							<div class="modal fade" id="resgatar" role="dialog">
  					</div>
  				</div>
			</div>
		</div>				
    </div>		
</div>

<!--RELATORIOS -->
<!-- Relatório de doações feitas -->
<div class="container">
	<h2>Relatórios</h2>
	<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#doações">Doação</button>
	<div class="modal fade" id="doações" role="dialog">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Relatório de Doações</h4>
				</div>
				<div class="modal-body">

					<div class="donation-list-area">
						<div class="container">
							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-6">
									<div class="donors-content box1">
										<div class="donors">
											<h3 class="donors-title"><span>Doações</span></h3>
										</div>					
										<div class="cmdonation table-responsive">
											<table class="pure-table pure-table-horizontal pure-table-striped">
												<thead>
													<tr>
														<th class="pure-text-center pure-hidden-phone">#</th>
														<th class="pure-text-center">Instituição</th>
														<th class="pure-text-center">Cidade</th>
														<th class="pure-text-center">Estado</th>
														<th class="pure-text-center">Data</th>
														<th class="pure-text-center">R$</th>
													</tr>
												</thead>
												<tbody>
												<!--
												{foreach $doacoes as $key => $doacao}
												<tr>
													<td class="pure-text-center pure-hidden-phone">{$doacao->id}</td>
													<td class="pure-text-center">{$doacao->instituicao}</td>											
													<td class="pure-text-center">{$doacao->cidade}</td>
													<td class="pure-text-center">{$doacao->estado}</td>
													<td class="pure-text-center">{$doacao->data_doacao|date_format:'%d/%m/%y às %H:%M'}</td>
													<td class="pure-text-center"><span>$</span>{$doacao->valor}</td>
												</tr>
	                       						 {/foreach}										
												-->
												</tbody>
												</table>												
											</div>						
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="modal-footer">
         				 <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
       			    </div>
				</div>				
			</div>
		</div>
	</div>
</div>
<br>
<br>


<!--Relatório de Eventos -->
<div class="container">
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#eventos">Eventos</button>  
  <div class="modal fade" id="eventos" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Relatório de Eventos</h4>
        </div>
        <div class="modal-body">
          
<div class="donation-list-area">
						<div class="container">
							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-6">
									<div class="donors-content box1">
										<div class="donors">
											<h3 class="donors-title"><span>Eventos</span></h3>
										</div>					
										<div class="cmdonation table-responsive">
											<table class="pure-table pure-table-horizontal pure-table-striped">
												<thead>
													<tr>
														<th class="pure-text-center pure-hidden-phone">#</th>
														<th class="pure-text-center">Data</th>
														<th class="pure-text-center">Instituição</th>
														<th class="pure-text-center">Cidade</th>
														<th class="pure-text-center">Estado</th>														
													</tr>
												</thead>
												<tbody>
													<tr>
														<td class="pure-text-center pure-hidden-phone">1</td>
														<td class="pure-text-center">05/04/2017</td>
														<td class="pure-text-center">APAE</td>
														<td class="pure-text-center">Campinas</td>
														<td class="pure-text-center">SP</td>											
														</tr>

													<tr>
														<td class="pure-text-center pure-hidden-phone">2</td>
														<td class="pure-text-center">22/05/2017</td>
														<td class="pure-text-center">Lar dos Velinhos</td>
														<td class="pure-text-center">Campinas</td>
														<td class="pure-text-center">SP</td>											
													</tr>
													</tr>
												</tbody>
											</table>
											</div>						
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="modal-footer">
         				 <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
       			    </div>
				</div>
			</div>  
      </div>
    </div>
  </div>
</div>
<br><br>

{include file="common/footer.tpl"} 