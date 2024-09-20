<?php include "config.php"; ?>
<?php include DBAPI; ?>
<?php include(HEADER_TEMPLATE); ?>
<?php $db = open_database(); ?>

<div class="container text-center my-5">
    <h1 class="mb-4">CADASTRO CLIENTES</h1>
    <hr class="mb-5">

    <?php if ($db) : ?>
        <div class="row justify-content-center">
            <!-- Botão para Novo Cliente -->
            <div class="col-xs-12 col-sm-6 col-md-3 mb-4">
                <a href="customers/add.php" class="btn btn-primary btn-block p-4" style="background-color: #26355D; border-color: #26355D;">
                    <i class="fa-solid fa-user-plus fa-3x" style="color: #FFDB00;"></i>
                    <h4 class="mt-3" style="color: #FFF;">Novo Cliente</h4>
                </a>
            </div>

            <!-- Botão para Gerenciar Clientes -->
            <div class="col-xs-12 col-sm-6 col-md-3 mb-4">
                <a href="customers" class="btn btn-secondary btn-block p-4" style="background-color: #26355D; border-color: #26355D;">
                    <i class="fa-solid fa-users fa-3x" style="color: #FF8F00;"></i>
                    <h4 class="mt-3" style="color: #FFF;">Clientes</h4>
                </a>
            </div>
        </div>

    <?php else : ?>
        <div class="alert alert-danger" role="alert">
            <p><strong>ERRO:</strong> Não foi possível conectar ao Banco de Dados!</p>
        </div>
    <?php endif; ?>
</div>

<?php include(FOOTER_TEMPLATE); ?>
