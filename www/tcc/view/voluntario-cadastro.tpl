{config_load file='view/foo.conf'}
{include file="common/header.tpl"}
{include file="common/menu.tpl"}

<label></label>
<div class="container">
    <form id="formCadastroVoluntario">
        <input type="hidden" name="id" value="{$id}">

        <div class="col-md-4 col-md-offset-4">
            <div class="form-group">
                <label for="no1">Nome</label>
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1"> <i class="fa fa- fa-user"></i></span>
                    <input type="text" class="form-control" placeholder="Nome" name="nome" id="nome" required maxlength="100">
                </div>
            </div>

            <div class="form-group">
                <label for="no1">Sobrenome</label>
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa- fa-user"></i></span>
                    <input type="text" class="form-control" placeholder="Sobrenome" name="sobrenome" id="sobrenome" required>
                </div>
            </div>

            <div class="form-group">
                <label for="no1">Email</label>
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa- fa-envelope"></i></span>
                    <input type="email" class="form-control" placeholder="Email" name="email" id="email" required>
                </div>
            </div>

            <div class="form-group">
                <label for="no1">Definir Senha</label>
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa- fa-key"></i></span>
                    <input type="password" class="form-control" placeholder="Senha de 8 digitos" name="senha" id="senha" required>
                </div>
            </div>

            <div class="form-group">
                <label for="no1">RG</label>
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa- fa-indent"></i></span>
                    <input type="text" class="form-control" placeholder="RG Sem os pontos" name="rg" id="rg" required>
                </div>
            </div>

            <div class="form-group">
                <label for="no1">CPF</label>
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa- fa-dedent"></i></span>
                    <input type="text" class="form-control" placeholder="CPF Sem Pontos" name="cpf" id="cpf" required>
                </div>
            </div>

            <div class="form-group">
                <label for="no1">Telefone</label>
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa- fa-phone"></i></span>
                    <input type="text" class="form-control" placeholder="Telefone ou celular" name="telefone" id="telefone" required>
                </div>
            </div>

            <div class="form-group">
                <label for="no1">Sexo</label>
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa- fa-venus-mars"></i></span>
                    <select class="form-control" placeholder="" name="sexo" id="sexo">
                        <option>Masculino</option>
                        <option>Feminino</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label for="no1">Data de nascimento</label>
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa- fa-calendar"></i></span>
                    <input type="text" class="form-control" name="data_nasc" id="data_nasc">
                </div>
            </div>

            <div class="form-group">
                <label for="no1">Rua</label>
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa- fa-building-o"></i></span>
                    <input type="text" class="form-control" placeholder="Endere??o: Rua" name="rua" id="Rua" required>
                </div>
            </div>

            <div class="form-group">
                <label for="no1">Numero</label>
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa- fa-building-o"></i></span>
                    <input type="text" class="form-control" placeholder="Endere??o: numero imovel" name="numeroCasa" id="numeroCasa" required>
                </div>
            </div>

            <div class="form-group">
                <label for="no1">Bairro</label>
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa- fa-building-o"></i></span>
                    <input type="text" class="form-control" placeholder="Endere??o: Bairro" name="bairro" id="bairro" required>
                </div>
            </div>

            <div class="form-group">
                <label for="no1">Complemento</label>
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa- fa-building-o"></i></span>
                    <input type="text" class="form-control" placeholder="Quadra tal/ apartamento tal" name="complemento" id="complemento">
                </div>
            </div>

            <div class="form-group">
                <label for="no1">Estado</label>
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa- fa-building-o"></i></span>
                    <select class="form-control" placeholder="" name="estado" id="estado" >
                        <option>Acre</option>
                        <option>Alagoas</option>
                        <option>Amap??</option>
                        <option>Amazonas</option>
                        <option>Bahia</option>
                        <option>cear??</option>
                        <option>Distrito Federal</option>
                        <option>Esp??rito Santo</option>
                        <option>Goi??s</option>
                        <option>Maranh??o</option>
                        <option>Mato Grosso</option>
                        <option>Mato Grosso do Sul</option>
                        <option>Minas Gerais</option>
                        <option>Par??</option>
                        <option>Para??ba</option>
                        <option>Paran??</option>
                        <option>Pernambuco</option>
                        <option>Piau??</option>
                        <option>Rio de Janeiro</option>
                        <option>Rio Grande do Sul</option>
                        <option>Rond??nia</option>
                        <option>Roraima</option>
                        <option>Santa Catarina</option>
                        <option>S??o Paulo</option>
                        <option>Sergipe</option>
                        <option>Tocantins</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label for="no1">Cidade</label>
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa- fa-building-o"></i></span>
                    <input type="text" class="form-control" placeholder="Endere??o: Cidade" name="cidade" id="cidade" required>
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
    $('#cpf').mask("999.999.999 - 99");
    $('#rg').mask("99.999.999 - 9");
    $('#cep').mask("99999 - 999");
    $('#data_nasc').mask("99/99/9999");
</script>