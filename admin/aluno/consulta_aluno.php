<?php

require_once('../conexao/banco.php');

$sql = "select *, date_format(alu_data_nascimento,'%d/%m/%Y') as data from tb_aluno";
$sql = mysqli_query($con, $sql) or die ("Erro na sql!") ;

?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title> Consulta Aluno </title>
        <link rel="stylesheet" type="text/css" href="../css/consulta.css">
        <script type="text/javascript">   

    function excluir_registro() {

        if(!confirm('Deseja realmente excluir este registro?') 

    ){

        if(window.event)

            window.event.returnValue=false;

        else

            e.preventDefault();

     }

    }

</script>
    </head>
<body>

    <div id="principal">
        <div class="linha">
            <div class="coluna_01"> <strong> ID </strong></div>
            <div class="coluna_03"> <strong> Nome </strong></div>
            <div class="coluna_02"> <strong> Sexo </strong></div>
            <div class="coluna_02"> <strong> Escolaridade </strong></div>
            <div class="coluna_02"> <strong> Série </strong></div>
            <div class="coluna_02"> <strong> Cidade </strong></div>
            <div class="coluna_02"> <strong> Data de Nascimento </strong></div>
        </div>

        <?php while ($dados = mysqli_fetch_array($sql)) { ?>

            <div class="linha">

                <div class="coluna_01"> <?php echo $dados['alu_codigo']; ?> </div>
                <div class="coluna_03"> <?php echo $dados['alu_nome']; ?> </div>
                <div class="coluna_02"> <?php echo $dados['alu_sexo']; ?> </div>
                <div class="coluna_02"> <?php echo $dados['alu_escolaridade']; ?> </div>
                <div class="coluna_02"> <?php echo $dados['alu_serie']; ?> </div>
                <div class="coluna_02"> <?php echo $dados['alu_cidade']; ?> </div>
                <div class="coluna_02"> <?php echo $dados['data']; ?> </div>

                <div class="coluna_01">
                    <a href="delete_aluno.php?alu_codigo=<?php echo $dados['alu_codigo']; ?>" onclick="excluir_registro(event)">
                        <img src="../img/excluir.png">
                    </a>
                </div>
                <div class="coluna_01">
                    <a href="form_atualizar_aluno.php?alu_codigo=<?php echo $dados['alu_codigo']; ?>">
                        <img src="../img/edit.png">
                    </a>
                </div>

            </div>
        <?php } ?>
    </div>
</body>
</html>