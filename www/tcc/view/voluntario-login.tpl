{config_load file='view/foo.conf'}
{include file="common/header.tpl"}
{include file="common/menu.tpl"}

<label></label>

<div class="container">
    <form id="formLoginVoluntario">
        <div class="col-md-4 col-md-offset-4">
            <h4>
                Voluntario, Faça o seu login!
            </h4>

            <div class="form-group">
                <label for="no1">Email</label>
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa- fa-envelope"></i></span>
                    <input type="email" class="form-control" placeholder="Email" name="email" id="email" required>
                </div>
            </div>

            <div class="form-group">
                <label for="no1">Senha</label>
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa- fa-key"></i></span>
                    <input type="password" class="form-control" placeholder="Senha de 8 digitos" name="senha" id="senha" required>
                </div>
            </div>

            <div class="form-group">
                <button class="btn btn-primary" type="submit" value="entrar" id="entrar">
                    Entrar
                </button>
            </div>
        </div>
    </form>
</div>

{include file="common/footer.tpl"}