$(document).ready(function(){
    $('#update_cli').click(function(){
        $.ajax({
            url: 'upd_cli.php',
            type: 'GET',
            data: ,
                    success: function (data, textStatus, jqXHR) {
                        
                    }
        });
    });
});



$(document).ready(function(){
    $('#enviar').click(function(){
        $.ajax({
           url : 'cad_cli.php',
           type : 'POST',
           data : 'cod_cli=' + $('#cod_cli').val() + '&nome_cli=' + $('#nome_cli').val() + 
                   '&end_cli=' + $('#end_cli').val() + '&cid_cli=' + $('#cid_cli').val() + 
                   '&est_cli=' + $('#est_cli').val() + '&tel_cli=' + $('#tel_cli').val() + 
                   '&email_cli=' + $('#email_cli').val(),
           success: function (data){
               $('#resultado').html(data);
           }
        });
    });
});