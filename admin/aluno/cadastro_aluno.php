<?php

require_once('../conexao/banco.php');

$alu_nome  =                  $_REQUEST['txt_nome'];
$alu_data_nascimento =        $_REQUEST['input_data_nascimento'];
$alu_sexo =                   $_REQUEST['txt_sexo'];
$alu_cep =                    $_REQUEST['txt_cep'];
$alu_logradouro =             $_REQUEST['txt_logradouro'];
$alu_numero =                 $_REQUEST['txt_numero'];
$alu_complemento =            $_REQUEST['txt_complemento'];
$alu_cidade =                 $_REQUEST['txt_cidade'];
$alu_estado =                 $_REQUEST['txt_estado'];
$alu_email =                  $_REQUEST['txt_email'];
$alu_telefone =               $_REQUEST['txt_telefone'];
$alu_celular =                $_REQUEST['txt_celular'];
$alu_escolaridade =           $_REQUEST['txt_escolaridade'];
$alu_serie =                  $_REQUEST['txt_serie'];
$alu_ano_conclusao =          $_REQUEST['input_ano_conclusao'];
$alu_escola =                 $_REQUEST['txt_escola'];
$alu_objetivo =               $_REQUEST['txt_objetivo'];

$sql = "insert into tb_aluno (alu_nome, alu_data_nascimento, alu_sexo, alu_cep, alu_logradouro, alu_numero, alu_complemento, alu_cidade, alu_estado, alu_email, alu_telefone, alu_celular, alu_escolaridade, alu_serie, alu_ano_conclusao, alu_escola, alu_objetivo)
                                values ('$alu_nome', '$alu_data_nascimento', '$alu_sexo', '$alu_cep', '$alu_logradouro', '$alu_numero', '$alu_complemento', '$alu_cidade', '$alu_estado', '$alu_email', '$alu_telefone', '$alu_celular', '$alu_escolaridade', '$alu_serie', '$alu_ano_conclusao', '$alu_escola', '$alu_objetivo')";

mysqli_query($con, $sql) or die ("Erro na sql!") ;

header("Location: consulta_aluno.php");

?>


