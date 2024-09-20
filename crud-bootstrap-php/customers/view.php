<?php 
	include('functions.php'); 
	view($_GET['id']);
?>

<?php include(HEADER_TEMPLATE); ?>

<div class="container mt-5">
    <h2 class="text-primary mb-4">Cliente #<?php echo $customer['id']; ?></h2>
    <hr>

    <!-- Exibir mensagens de sucesso/erro -->
    <?php if (!empty($_SESSION['message'])) : ?>
        <div class="alert alert-<?php echo $_SESSION['type']; ?> alert-dismissible" role="alert">
            <?php echo $_SESSION['message']; ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>

    <!-- Detalhes do cliente -->
    <dl class="row">
        <dt class="col-sm-3">Nome / Razão Social:</dt>
        <dd class="col-sm-9"><?php echo $customer['name']; ?></dd>

        <dt class="col-sm-3">CPF / CNPJ:</dt>
        <dd class="col-sm-9"><?php echo $customer['cpf_cnpj']; ?></dd>

        <dt class="col-sm-3">Data de Nascimento:</dt>
        <dd class="col-sm-9"><?php echo formatadata($customer['birthdate'], 'd/m/Y'); ?></dd>
    </dl>

    <dl class="row">
        <dt class="col-sm-3">Endereço:</dt>
        <dd class="col-sm-9"><?php echo $customer['address']; ?></dd>

        <dt class="col-sm-3">Bairro:</dt>
        <dd class="col-sm-9"><?php echo $customer['hood']; ?></dd>

        <dt class="col-sm-3">CEP:</dt>
        <dd class="col-sm-9"><?php echo cep($customer['zip_code']); ?></dd>

        <dt class="col-sm-3">Data de Cadastro:</dt>
        <dd class="col-sm-9"><?php echo formatadata($customer['created'], 'd/m/Y - H:i:s'); ?></dd>

        <dt class="col-sm-3">Última Atualização:</dt>
        <dd class="col-sm-9"><?php echo formatadata($customer['modified'], 'd/m/Y - H:i:s'); ?></dd>
    </dl>

    <dl class="row">
        <dt class="col-sm-3">Cidade:</dt>
        <dd class="col-sm-9"><?php echo $customer['city']; ?></dd>

        <dt class="col-sm-3">Telefone:</dt>
        <dd class="col-sm-9"><?php echo telefone($customer['phone']); ?></dd>

        <dt class="col-sm-3">Celular:</dt>
        <dd class="col-sm-9"><?php echo telefone($customer['mobile']); ?></dd>

        <dt class="col-sm-3">UF:</dt>
        <dd class="col-sm-9"><?php echo $customer['state']; ?></dd>

        <dt class="col-sm-3">Inscrição Estadual:</dt>
        <dd class="col-sm-9"><?php echo number_format($customer['ie'], 0, ',', '.'); ?></dd>
    </dl>

    <!-- Ações de edição e retorno -->
    <div id="actions" class="row mt-4">
        <div class="col-md-12 text-end">
            <a href="edit.php?id=<?php echo $customer['id']; ?>" class="btn btn-secondary">
                <i class="fa fa-pencil"></i> Editar
            </a>
            <a href="index.php" class="btn btn-light">
                <i class="fa fa-arrow-left"></i> Voltar
            </a>
        </div>
    </div>
</div>

<?php include(FOOTER_TEMPLATE); ?>