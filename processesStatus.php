<?php
include_once '/connection/connection.php';

$drivers = $_POST['drivers'];
$status = $_POST['status'];

$sql = "UPDATE motoristas SET m_status = '$status' WHERE m_id_motorista = '$drivers'";
$save = mysqli_query($link, $sql) or die(mysqli_error($link));

$lines = mysqli_affected_rows($link);

mysqli_close($link);
?>

<!DOCTYPE html>
<html>
    <body>

        <?php include 'navbar.php'; ?>

        <div class="container">
            <h1>Alteração</h1>
            
            <?php 
            if ($lines == 1) {
                print "<h3>Alteração foi efetuada com sucesso!</h3>";
            } else {
                print "<h3>Alteração NÃO foi efetuada com sucesso!";
            }
            ?>
        </div>

    </body>
</html>

