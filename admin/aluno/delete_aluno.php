<?php

require_once('../conexao/banco.php');

$alu_codigo    = $_REQUEST['alu_codigo'];

$sql = "delete from tb_aluno where alu_codigo = '$alu_codigo'";

mysqli_query($con, $sql) or die ("Erro na sql!") ;

header("Location: consulta_aluno.php");

?>