{config_load file='view/foo.conf'}
{include file="common/header.tpl"}
{include file="common/menu.tpl"}

		<div class="container">
		<br>
			 <div id="top" class="row">
    <div class="col-md-3">
        <h2>Notificações Urgentes</h2>
    </div>
 
    <div class="col-md-6">
        <div class="input-group h2">
            <input name="data[search]" class="form-control" id="search" type="text" placeholder="Pesquisar Itens">
            <span class="input-group-btn">
                <button class="btn btn-primary" type="submit">
                    <span class="glyphicon glyphicon-search"></span>
                </button>
            </span>
        </div>
    </div>
 
    <div class="col-md-3">
        <a href="http://aduvi.com.br/cadnotificacao" class="btn btn-primary pull-right h2">Nova Notificação</a>
    </div>
</div> <!-- /#top -->

<div id="list" class="row">
 
    <div class="table-responsive col-md-12">
        <table class="table table-striped" cellspacing="0" cellpadding="0">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Descrição</th>
                    <th>Instituição</th>
                    <th>Data</th>
                    <th class="actions">Ações</th>
                 </tr>
            </thead>
            <tbody>
 
                <tr>
                    <td>1001</td>
                    <td>Lorem ipsum dolor sit amet, consectetur adipiscing</td>
                    <td>Jes</td>
                    <td>01/01/2015</td>
                    <td class="actions">
                        <a class="btn btn-success btn-xs" href="#">Visualizar</a>
                        <a class="btn btn-warning btn-xs" href="http://aduvi.com.br/editarnotificacao">Editar</a>
                        <a class="btn btn-danger btn-xs"  href="#" data-toggle="modal" data-target="#delete-modal">Excluir</a>
                    </td>
                </tr>
 
            </tbody>
         </table>
 
     </div>
 </div> <!-- /#list -->
 
 <div id="bottom" class="row">
    <div class="col-md-12">
         
        <ul class="pagination">
            <li class="disabled"><a>&lt; Anterior</a></li>
            <li class="disabled"><a>1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li class="next"><a href="#" rel="next">Próximo &gt;</a></li>
        </ul><!-- /.pagination -->
 
    </div>
</div> <!-- /#bottom -->

<!-- Modal -->
<div class="modal fade" id="delete-modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="modalLabel">Excluir Item</h4>
            </div>
            <div class="modal-body">Deseja realmente excluir este item? </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Sim</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">N&atilde;o</button>
            </div>
        </div>
    </div>
</div>
</div>

{include file="common/footer.tpl"}