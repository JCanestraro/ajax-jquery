<?php
mysql_connect('localhost', 'root', '') or die('Erro ao conectar ao banco de dados.');
mysql_select_db('vendas') or die('Erro ao selecionar o banco de dados.');
$valida = true;
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Trabalho Ajax + JQuery => CLIENTE</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script type="text/css" src="normalize.css"></script>
        <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.js" ></script>
        <script type="text/javascript" src="html5shiv.js"></script>
        <script type="text/javascript" src="cad_cli.js"></script>
        <script type="text/javascript" src="del_cli.js"></script>
    </head>
    <body>
        <div>            
            <form name="cad_cli" id="cad_cli">
                Nome: <input type="text" name="nome_cli" id="nome_cli" /> <br />
                Endereço: <input type="text" name="end_cli" id="end_cli" /> <br />
                Cidade: <input type="text" name="cid_cli" id="cid_cli" /> <br />
                Estado: <input type="text" name="est_cli" id="est_cli" /> <br />
                Telefone: <input type="text" name="tel_cli" id="tel_cli" /> <br />
                E-Mail: <input type="text" name="email_cli" id="email_cli" /> <br />
                <input type="button" id="enviar" value="Cadastrar" />
            </form>
        </div>
        <div>
            <?php
            $sql = "SELECT * FROM cliente";
            $retorno = mysql_query($sql);
            echo "<table border='1'>";
            echo "<tr>";
            echo "<td>Código</td>";
            echo "<td>Nome</td>";
            echo "<td>Endereço</td>";
            echo "<td>Cidade</td>";
            echo "<td>Estado</td>";
            echo "<td>Telefone</td>";
            echo "<td>E-Mail</td>";
            echo "<td colspan='2'>Ação</td>";
            echo "</tr>";
            while ($_linha = mysql_fetch_object($retorno)) {
                echo "<tr>";
                echo "<td>".$_linha->cod_cli."</td>";
                echo "<td>".$_linha->nome_cli."</td>";
                echo "<td>".$_linha->end_cli."</td>";
                echo "<td>".$_linha->cid_cli."</td>";
                echo "<td>".$_linha->est_cli."</td>";
                echo "<td>".$_linha->tel_cli."</td>";
                echo "<td>".$_linha->email_cli."</td>";
                echo "<td><a href=\"?update_id={$_linha->cod_cli}\" id='atualizar'>Update</a></td>";
                echo "<td><a href=\"?delete_id={$_linha->cod_cli}\" id='deletar'>Excluir</a></td>";
                echo "</tr>";
            };
            echo "</table>";
            ?>
        </div>
    </body>
</html>