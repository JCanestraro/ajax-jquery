<?php
mysql_connect('localhost', 'root', '') or die('Erro ao conectar ao banco de dados.');
mysql_select_db('vendas') or die('Erro ao selecionar o banco de dados.');
$valida = true;
if ($valida) {
    $sql = "DELETE FROM cliente WHERE cod_cli = ".$_GET['delete_id'];
    mysql_query($sql); if (mysql_affected_rows() != -1) {
        $retorno = 'Dados excluidos com sucesso!';
    } else {
        $retorno = 'Erro ao excluir os dados';
    }
    echo $retorno;   
}
?>