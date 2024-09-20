<?php 
  include("functions.php"); 
  edit();
  include(HEADER_TEMPLATE);
?>

<div class="container mt-5">
    <h2 class="text-primary mb-4">Editar Cliente</h2>

    <form action="edit.php?id=<?php echo $customer['id']; ?>" method="post">
        <!-- Campos do formulário -->
        <div class="row">
            <div class="form-group col-md-7">
                <label for="name">Nome / Razão Social</label>
                <input type="text" class="form-control" name="customer['name']" maxlength="50" value="<?php echo $customer['name']; ?>">
            </div>

            <div class="form-group col-md-3">
                <label for="cpf_cnpj">CNPJ / CPF</label>
                <input type="text" class="form-control" name="customer['cpf_cnpj']" value="<?php echo $customer['cpf_cnpj']; ?>">
            </div>

            <div class="form-group col-md-2">
                <label for="birthdate">Data de Nascimento</label>
                <input type="date" class="form-control" name="customer['birthdate']" value="<?php echo formatadata($customer['birthdate'], 'd/m/Y'); ?>">
            </div>
        </div>

        <div class="row mt-3">
            <div class="form-group col-md-5">
                <label for="address">Endereço</label>
                <input type="text" class="form-control" name="customer['address']" value="<?php echo $customer['address']; ?>">
            </div>

            <div class="form-group col-md-3">
                <label for="hood">Bairro</label>
                <input type="text" class="form-control" name="customer['hood']" value="<?php echo $customer['hood']; ?>">
            </div>

            <div class="form-group col-md-2">
                <label for="zip_code">CEP</label>
                <input type="text" class="form-control" name="customer['zip_code']" value="<?php echo $customer['zip_code']; ?>">
            </div>

            <div class="form-group col-md-2">
                <label for="created">Data de Cadastro</label>
                <input type="text" class="form-control" name="customer['created']" disabled value="<?php echo formatadata($customer['created'], 'd/m/Y'); ?>">
            </div>
        </div>

        <div class="row mt-3">
            <div class="form-group col-md-5">
                <label for="city">Município</label>
                <input type="text" class="form-control" name="customer['city']" value="<?php echo $customer['city']; ?>">
            </div>

            <div class="form-group col-md-2">
                <label for="phone">Telefone</label>
                <input type="tel" class="form-control" name="customer['phone']" maxlength="11" value="<?php echo $customer['phone']; ?>">
            </div>

            <div class="form-group col-md-2">
                <label for="mobile">Celular</label>
                <input type="tel" class="form-control" name="customer['mobile']" maxlength="11" value="<?php echo $customer['mobile']; ?>">
            </div>

            <div class="form-group col-md-1">
                <label for="state">UF</label>
                <input type="text" class="form-control" name="customer['state']" maxlength="2" value="<?php echo $customer['state']; ?>">
            </div>

            <div class="form-group col-md-2">
                <label for="ie">Inscrição Estadual</label>
                <input type="text" class="form-control" name="customer['ie']" value="<?php echo $customer['ie']; ?>">
            </div>
        </div>

        <!-- Botões de ação -->
        <div class="row mt-4">
            <div class="col-md-12 text-end">
                <button type="submit" class="btn btn-secondary">
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
