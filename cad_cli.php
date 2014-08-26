<?php

mysql_connect('localhost', 'root', '') or die('Erro ao conectar ao banco de dados.');
mysql_select_db('vendas') or die('Erro ao selecionar o banco de dados.');
$valida = true;
if ($valida) {
    $nome_cli = $_POST['nome_cli'];
    $end_cli = $_POST['end_cli'];
    $cid_cli = $_POST['cid_cli'];
    $est_cli = $_POST['est_cli'];
    $tel_cli = $_POST['tel_cli'];
    $email_cli = $_POST['email_cli'];
    mysql_query("INSERT INTO cliente(nome_cli, end_cli, cid_cli, est_cli, tel_cli, email_cli)"
            . " VALUES ('$nome_cli', '$end_cli', '$cid_cli', '$est_cli', '$tel_cli', '$email_cli')");
    if (mysql_affected_rows() != -1) {
        $retorno = 'Dados inseridos com sucesso!';
    } else {
        $retorno = 'Erro ao inserir os dados';
    }
    echo $retorno;   
}
?>