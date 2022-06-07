{config_load file='view/foo.conf'}
{include file="common/header.tpl"}
{include file="common/menu-instituicao.tpl"}

<label></label>

<div class="container">
    <form id="formCadastroEvento">
        <input type="hidden" name="id" value="{$id}">

        <div class="col-md-4 col-md-offset-4">
            <div class="form-group">
                <label for="no1">Nome do Evento</label>
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1"> <i class="fa fa- fa-user"></i></span>
                    <input type="text" class="form-control" placeholder="Evento" name="evento" id="evento" required maxlength="100">
                </div>   
            </div>   

            <div class="form-group">
                <label for="no1">Data Evento</label>
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa- fa-phone"></i></span>
                    <input type="text" class="form-control" placeholder="dataevento" name="dataevento" id="dataevento" required>
                </div>
            </div>

            <div class="form-group">
                <label for="no1">Rua</label>
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa- fa-building-o"></i></span>
                    <input type="text" class="form-control" placeholder="Endereço: Rua" name="ruaEvento" id="ruaEvento" required>
                </div>
            </div>

            <div class="form-group">
                <label for="no1">Numero</label>
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa- fa-building-o"></i></span>
                    <input type="text" class="form-control" placeholder="Endereço: numero imovel" name="numeroEvento" id="numeroEvento" required>
                </div>
            </div>

            <div class="form-group">
                <label for="no1">Bairro</label>
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa- fa-building-o"></i></span>
                    <input type="text" class="form-control" placeholder="Endereço: Bairro" name="bairroEvento" id="bairroEvento" required>
                </div>
            </div>            

            <div class="form-group">
                <label for="no1">Cidade</label>
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa- fa-building-o"></i></span>
                    <input type="text" class="form-control" placeholder="Endereço: Cidade" name="cidadeEvento" id="cidadeEvento" required>
                </div>
            </div>

            <div class="form-group">
                <label for="no1">Cep</label>
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa- fa-building-o"></i></span>
                    <input type="text" class="form-control" placeholder="CEP ex:13280000" name="cep" id="cep" required>
                </div>
            </div>

            <div class="form-group">
                <label for="no1">Estado</label>
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa- fa-building-o"></i></span>
                    <select class="form-control" placeholder="" aria-describedby="" name="estado" id="estado">
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
            </div>

            <div class="form-group">
                <label for="no1">Instituição</label>
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa- fa-venus-mars"></i></span>
                    <select class="form-control" placeholder="Escolha uma Instituição" aria-describedby="" name="instCriadora" id="instCriadora">
                    </select>
                </div>
            </div>               

            <div class="form-group">
                <button class="btn btn-primary" type="submit">
                    Cadastrar
                </button>
            </div>
        </div>
    </form>
</div>

{include file="common/footer.tpl"}   

<script type="text/javascript">
    $('#telefone').mask("(99) 99999 - 9999");  
    $('#numero').mask("99999");   
    $('#cep').mask("99999 - 999");
    $('#dataevento').mask("99/99/9999");
</script>