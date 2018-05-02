<?php
include '/connection/connection.php';

$sql = "SELECT c.*, p.nome_passageiro, m.nome_motorista FROM corridas c INNER JOIN passageiros p ON p.p_id_passageiro = c.id_passageiro INNER JOIN motoristas m ON m.m_id_motorista = c.id_motorista";
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
                        <th scope="col">Numero da corrida</th>
                        <th scope="col">Cliente</th>
                        <th scope="col">Motorista</th>
                        <th scope="col">Valor(R$)</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($data = $query->fetch_array()) { ?>
                        <tr>
                            <td><?php echo $data["id_corrida"]; ?></td>
                            <td><?php echo $data["nome_passageiro"]; ?></td>
                            <td><?php echo $data["nome_motorista"]; ?></td>
                            <td><?php echo $data["valor"]; ?></td>
                        <?php } ?>
                </tbody>
            </table>

            <?php
            print "$records registros encontrados";
            ?>
          
    </body>
</html>
