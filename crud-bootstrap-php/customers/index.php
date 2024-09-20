<?php
   include("functions.php");
   index();
   include(HEADER_TEMPLATE);
?>
<div class="container mt-5">
    <header class="mb-4">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h2 class="text-primary">Clientes</h2>
            </div>
            <div class="col-md-6 text-end">
                <a class="btn btn-secondary me-2" href="add.php">
                    <i class="fa fa-plus"></i> Novo Cliente
                </a>
                <a class="btn btn-light" href="index.php">
                    <i class="fa fa-refresh"></i> Atualizar
                </a>
            </div>
        </div>
    </header>

    <!-- Alerta de Mensagens -->
    <?php if (!empty($_SESSION['message'])) : ?>
    <div class="alert alert-<?php echo $_SESSION['type']; ?> alert-dismissible fade show" role="alert">
        <?php echo $_SESSION['message']; ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php //clear_messages(); ?>
    <?php endif; ?>
    
    <hr class="mb-4">
    
    <!-- Tabela de Clientes -->
    <table class="table table-hover table-bordered">
        <thead class="table-dark">
            <tr class="text-center">
                <th>ID</th>
                <th width="30%">Nome</th>
                <th>CPF/CNPJ</th>
                <th>Telefone</th>
                <th>Atualizado em</th>
                <th>Opções</th>
            </tr>
        </thead>
        <tbody>
            <?php if ($customers) : ?>
            <?php foreach ($customers as $customer) : ?>
            <tr class="text-center">
                <td><?php echo $customer['id']; ?></td>
                <td><?php echo $customer['name']; ?></td>
                <td><?php echo $customer['cpf_cnpj']; ?></td>
                <td><?php echo telefone($customer['phone']); ?></td>
                <td><?php echo formatadata($customer['modified'], "d/m/Y - H:i:s"); ?></td>
                <td class="actions text-center">
                    <a href="view.php?id=<?php echo $customer['id']; ?>" class="btn btn-sm btn-dark">
                        <i class="fa fa-eye"></i> Visualizar
                    </a>
                    <a href="edit.php?id=<?php echo $customer['id']; ?>" class="btn btn-sm btn-secondary">
                        <i class="fa fa-pencil"></i> Editar
                    </a>
                    <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#delete-modal" data-customer="<?php echo $customer['id']; ?>">
                        <i class="fa fa-trash"></i> Excluir
                    </a>
                </td>
            </tr>
            <?php endforeach; ?>
            <?php else : ?>
            <tr>
                <td colspan="6" class="text-center">Nenhum registro encontrado.</td>
            </tr>
            <?php endif; ?>
        </tbody>
    </table>

    <!-- Modal de Exclusão -->
    <?php include("modal.php"); ?>

</div>
<?php include(FOOTER_TEMPLATE); ?>
