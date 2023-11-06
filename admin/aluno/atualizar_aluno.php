<?php

require_once("../conexao/banco.php");

$alu_codigo =                 $_REQUEST['txt_codigo'];

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

$sql = "update tb_aluno set
                    alu_nome  = '$alu_nome',
                    alu_data_nascimento = '$alu_data_nascimento',
                    alu_sexo = '$alu_sexo',
                    alu_cep = '$alu_cep',
                    alu_logradouro = '$alu_logradouro',
                    alu_numero = '$alu_numero',
                    alu_complemento = '$alu_complemento',
                    alu_cidade = '$alu_cidade',
                    alu_estado = '$alu_estado',
                    alu_email = '$alu_email',
                    alu_telefone = '$alu_telefone',
                    alu_celular = '$alu_celular',
                    alu_escolaridade = '$alu_escolaridade',
                    alu_serie = '$alu_serie',
                    alu_ano_conclusao = '$alu_ano_conclusao',
                    alu_escola = '$alu_escola',
                    alu_objetivo = '$alu_objetivo'
                where
                    alu_codigo = '$alu_codigo'";

mysqli_query($con, $sql) or die ("Erro na sql!") ;

header("Location: consulta_aluno.php");

?>