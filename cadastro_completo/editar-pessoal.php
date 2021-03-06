
        <span class="badge badge-danger">==>> SESSÃO </span>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" value="<?= $cliente->nome ?>" placeholder="Infome o Nome">
                <span class='msg-erro msg-nome'></span>
            </div>
         <div class="form-group col-md-4">
                <label for="pai">Pai</label>
                <input type="text" class="form-control" id="pai" name="pai" value="<?= $cliente->pai ?>" placeholder="Informe o Pai">
                <span class='msg-erro msg-pai'></span>
            </div>

            <div class="form-group col-md-4">
                <label for="mae">Mãe</label>
                <input type="text" class="form-control" id="mae" name="mae" value="<?= $cliente->mae ?>" placeholder="Informe a Mãe">
                <span class='msg-erro msg-mae'></span>
            </div>
        </div>

        <div class="form-row">

            <div class="form-group col-md-4">
                <label for="rua">Rua</label>
                <input type="rua" class="form-control" id="rua" name="rua" value="<?= $cliente->rua ?>" placeholder="Informe a Rua">
                <span class='msg-erro msg-rua'></span>
            </div>

            <div class="form-group col-md-2">
                <label for="numero">N°</label>
                <input type="numero" class="form-control" id="numero" maxlength="12" name="numero" value="<?= $cliente->numero ?>" placeholder="Informe o N°">
                <span class='msg-erro msg-numero'></span>
            </div>
            <div class="formgroup col-md-6">
                <label for="complemento">Complemento</label>
                <input type="complemento" class="form-control" id="complemento" name="complemento" value="<?= $cliente->complemento ?>" placeholder="Informe o Complemento">
                <span class='msg-erro msg-complemento'></span>
            </div>
        </div>


        <div class="form-row">
            <div class="form-group col-md-3">
                <label for="bairro">Bairro</label>
                <input type="bairro" class="form-control" id="bairro" name="bairro" value="<?= $cliente->bairro ?>" placeholder="Informe o Bairro">
                <span class='msg-erro msg-bairro'></span>
            </div>
            <div class="form-group col-md-2">
                <label for="cidade">Cidade</label>
                <input type="cidade" class="form-control" id="cidade" name="cidade" value="<?= $cliente->cidade ?>" placeholder="Informe a Cidade">
                <span class='msg-erro msg-cidade'></span>
            </div>
            <div class="form-group col-md-2">
                <label for="cep">Cep</label>
                <input type="cep" class="form-control" id="cep" maxlength="9" name="cep" value="<?= $cliente->cep ?>" placeholder="Infome o Cep">
                <span class='msg-erro msg-cep'></span>
            </div>
            <div class="form-group col-md-3">
                <label for="email">E-mail</label>
                <input type="email" class="form-control" id="email" name="email" value="<?= $cliente->email ?>" placeholder="Informe o E-mail">
                <span class='msg-erro msg-email'></span>
            </div>

            <div class="form-group col-md-2">
                <label for="matricula">Matricula</label>
                <input type="matricula" class="form-control" id="matricula" maxlength="9" name="matricula" value="<?= $cliente->matricula ?>" placeholder="Informe a Matricula">
                <span class="msg-erro msg-matricula"></span>
            </div>
        </div>

        


