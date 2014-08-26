$(document).ready(function () {
    $('#deletar').click(function () {
        $.ajax({
            url: 'del_cli.php',
            type: 'GET',
            data: 'delete_id=' + $(this).attr('delete_id'),
            success: function (data) {
                $('#resultado').html(data);
                $.get('cliente.php', function () {
                    window.location.reload();
                });
            }
        });
    });
});

//$.get('del_cli.php', {
//    delete_id: $('#delete_id').val()
//},
//function (retorno) {
//    $('#resultado').html(data);
//    $.get('cliente.php', function () {
//        window.location.reload();
//    });
//});