<?php 
  include("functions.php"); 
  add();
  include(HEADER_TEMPLATE);
?>

<div class="container mt-5">
    <h2 class="text-center mt-2 mb-4">Novo Cliente</h2>
    <form action="add.php" method="post">
        <!-- área de campos do form -->
        <hr class="mb-4">
        <div class="row justify-content-center">
            <!-- Nome / Razão Social -->
            <div class="form-group col-md-7 mb-3">
                <label for="name">Nome / Razão Social</label>
                <input type="text" class="form-control" name="customer['name']" maxlength="50" placeholder="Digite o nome ou razão social">
            </div>

            <!-- CNPJ / CPF -->
            <div class="form-group col-md-3 mb-3">
                <label for="campo2">CNPJ / CPF</label>
                <input type="text" class="form-control" name="customer['cpf_cnpj']" placeholder="Digite o CNPJ ou CPF">
            </div>

            <!-- Data de Nascimento -->
            <div class="form-group col-md-2 mb-3">
                <label for="campo3">Data de Nascimento</label>
                <input type="date" class="form-control" name="customer['birthdate']">
            </div>
        </div>

        <div class="row justify-content-center">
            <!-- Endereço -->
            <div class="form-group col-md-5 mb-3">
                <label for="campo1">Endereço</label>
                <input type="text" class="form-control" name="customer['address']" placeholder="Digite o endereço">
            </div>

            <!-- Bairro -->
            <div class="form-group col-md-3 mb-3">
                <label for="campo2">Bairro</label>
                <input type="text" class="form-control" name="customer['hood']" placeholder="Digite o bairro">
            </div>

            <!-- CEP -->
            <div class="form-group col-md-2 mb-3">
                <label for="campo3">CEP</label>
                <input type="text" class="form-control" name="customer['zip_code']" placeholder="Digite o CEP">
            </div>

            <!-- Data de Cadastro (desabilitada) -->
            <div class="form-group col-md-2 mb-3">
                <label for="campo3">Data de Cadastro</label>
                <input type="text" class="form-control" name="customer['created']" disabled placeholder="Automático">
            </div>
        </div>

        <div class="row justify-content-center">
            <!-- Município -->
            <div class="form-group col-md-5 mb-3">
                <label for="campo1">Município</label>
                <input type="text" class="form-control" name="customer['city']" placeholder="Digite o município">
            </div>

            <!-- Telefone -->
            <div class="form-group col-md-2 mb-3">
                <label for="campo2">Telefone</label>
                <input type="tel" class="form-control" name="customer['phone']" maxlength="11" placeholder="Digite o telefone">
            </div>

            <!-- Celular -->
            <div class="form-group col-md-2 mb-3">
                <label for="campo3">Celular</label>
                <input type="tel" class="form-control" name="customer['mobile']" maxlength="11" placeholder="Digite o celular">
            </div>

            <!-- UF -->
            <div class="form-group col-md-1 mb-3">
                <label for="campo3">UF</label>
                <input type="text" class="form-control" name="customer['state']" maxlength="2" placeholder="UF">
            </div>

            <!-- Inscrição Estadual -->
            <div class="form-group col-md-2 mb-3">
                <label for="campo3">Inscrição Estadual</label>
                <input type="text" class="form-control" name="customer['ie']" placeholder="Digite a IE">
            </div>
        </div>

        <!-- Ações -->
        <div id="actions" class="row justify-content-center mt-4">
            <div class="col-md-12 text-center">
                <button type="submit" class="btn btn-primary" style="background-color: #26355D; border-color: #26355D;">
                    <i class="fa-solid fa-sd-card"></i> Salvar
                </button>
                <a href="index.php" class="btn btn-light">
                    <i class="fa-solid fa-xmark"></i> Cancelar
                </a>
            </div>
        </div>
    </form>
</div>

<?php include(FOOTER_TEMPLATE); ?>