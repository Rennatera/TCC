{config_load file='view/foo.conf'}
{include file="common/header.tpl"}
{include file="common/menu-voluntario.tpl"}

<div class="container">
  <br>
  <div id="top" class="row">
    <div class="col-md-6">
        <h2>Notificações Urgentes</h2>
    </div>
    <div id="list" class="row">
        <div class="table-responsive col-md-12">
            <table class="table table-striped" cellspacing="0" cellpadding="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Descrição</th>
                        <th>Instituição</th>
                        <th>Data</th>
                        <th class="acoes">Ações</th>
                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <td>1001</td>
                        <td>Doação para campanha do agasalho</td>
                        <td>APAE</td>
                        <td>01/01/2015</td>
                        <td class="acoes">
                            <a class="btn btn-success btn-xs" href="/visualizar-not-cad">Visualizar</a>

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
    </div>
</div>
</div>
</div>

{include file="common/footer.tpl"}