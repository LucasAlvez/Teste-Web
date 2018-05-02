<?php
include_once '/connection/connection.php';

$id_passenger = $_POST['passenger'];
$id_motorista = $_POST['drivers'];
$value = $_POST['value'];


$sql = "INSERT INTO corridas (id_passageiro,id_motorista,valor) VALUES ('$id_passenger','$id_motorista','$value')";
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
                print "<h3>Cadastro da corrida efetuado com sucesso!</h3>";
            } else {
                print "<h3>Cadastro da corrida NÃO foi efetuado com sucesso!</h3>";
            }
            ?>
        </div>

    </body>
</html>

