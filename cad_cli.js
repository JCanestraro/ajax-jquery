$(document).ready(function () {
    $('#enviar').click(function () {
        $.ajax({
            url: 'cad_cli.php',
            type: 'POST',
            data: 'nome_cli=' + $('#nome_cli').val() + '&end_cli=' + $('#end_cli').val() +
                    '&cid_cli=' + $('#cid_cli').val() + '&est_cli=' + $('#est_cli').val() +
                    '&tel_cli=' + $('#tel_cli').val() + '&email_cli=' + $('#email_cli').val(),
            success: function (data) {
                $('#resultado').html(data);
                $.get('cliente.php', function () {
                    window.location.reload();
                });
            }
        });
    });
});