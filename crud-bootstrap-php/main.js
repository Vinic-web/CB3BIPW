/**
 * Passa os dados do cliente para o Modal, e atualiza o link para exclusão
 */
$('#delete-modal').on('show.bs.modal', function (event) {
  
    var button = $(event.relatedTarget);
    var id = button.data('customer');
    
    var modal = $(this);
    modal.find('.modal-title').text('Excluir Cliente: ' + id);
    modal.find('.modal-body').text('Deseja mesmo excluir o cliente: ' + id + '?');
    modal.find('#confirm').attr('href', 'delete.php?id=' + id);
  })