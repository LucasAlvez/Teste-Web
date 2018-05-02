<?php
include '/connection/connection.php';

$sql = "SELECT * FROM passageiros";
$query = mysqli_query($link, $sql) or die(mysqli_error($link));
$records = mysqli_num_rows($query);

mysqli_close($link);
?>


<!DOCTYPE html>
<html>

    <body>

        <?php include 'navbar.php'; ?>

        <div class="container">

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">CPF</th>
                        <th scope="col">Data de Nascimento</th>
                        <th scope="col">Sexo</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($data = $query->fetch_array()) { ?>
                        <tr>
                            <td><?php echo $data["nome_passageiro"]; ?></td>
                            <td><?php echo $data["cpf"]; ?></td>
                            <td><?php echo date("d/m/y", strtotime($data["data_nascimento"])); ?></td>
                            <td><?php echo $data["sexo"]; ?></td>
                        <?php } ?>
                </tbody>
            </table>

            <?php
            print "$records registros encontrados";
            ?>

    </body>
</html>
