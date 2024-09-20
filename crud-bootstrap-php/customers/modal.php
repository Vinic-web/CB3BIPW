<!-- Modal de Confirmação de Exclusão -->
<div class="modal fade" id="delete-modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5 text-danger" id="staticBackdropLabel">Confirmação de Exclusão</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="text-muted">Tem certeza que deseja excluir o cliente <strong id="customer-name"></strong>? Esta ação não poderá ser desfeita.</p>
            </div>
            <div class="modal-footer">
                <!-- Botão para confirmar a exclusão -->
                <a href="#" id="confirm" class="btn btn-secondary">
                    <i class="fa fa-check"></i> Sim, excluir
                </a>
                <!-- Botão para cancelar a ação -->
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">
                    <i class="fa fa-times"></i> Não, cancelar
                </button>
            </div>
        </div>
    </div>
</div>

<script>
    // Função para associar o cliente ao modal de exclusão
    document.addEventListener('DOMContentLoaded', function () {
        const deleteModal = document.getElementById('delete-modal');
        const confirmButton = document.getElementById('confirm');

        deleteModal.addEventListener('show.bs.modal', function (event) {
            const button = event.relatedTarget; // Botão que disparou o modal
            const customerId = button.getAttribute('data-customer'); // Pega o ID do cliente
            const customerName = button.getAttribute('data-name'); // Pega o nome do cliente

            // Atualiza o texto do modal com o nome do cliente
            const modalCustomerName = document.getElementById('customer-name');
            modalCustomerName.textContent = customerName;

            // Atualiza o link de confirmação com o ID do cliente
            confirmButton.setAttribute('href', `delete.php?id=${customerId}`);
        });
    });
</script>