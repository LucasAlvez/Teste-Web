<?php
include_once '/connection/connection.php';

$name = $_POST['name'];
$cpf = $_POST['cpf'];
$dateBirth = $_POST['dateBirth'];
$gender = $_POST['gender'];

$sql = "INSERT INTO passageiros (nome_passageiro,cpf,data_nascimento,sexo) VALUES ('$name','$cpf','$dateBirth','$gender')";
$save = mysqli_query($link, $sql) or die(mysqli_error($link));

$lines = mysqli_affected_rows($link);

mysqli_close($link);
?>

<!DOCTYPE html>
<html>
    <body>

        <?php include 'navbar.php'; ?>

        <div class="container">
            <h1>Confirmação de cadastro</h1>
            
            <?php 
            if ($lines == 1) {
                print "<h3>Cadastro foi efetuado com sucesso!</h3>";
            } else {
                print "<h3>Cadastro NÃO foi efetuado com sucesso!<br>Já existe um cliente com este CPF</h3>";
            }
            ?>
        </div>

    </body>
</html>

