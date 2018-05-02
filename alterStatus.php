<?php
include '/connection/connection.php';
?>

<!DOCTYPE html>
<html>

    <body>

        <?php include 'navbar.php'; ?>



        <div class="container">

            <form method="post" action="processesStatus.php">
                
                <label for="drivers">Motoristas Disponiveis:</label>
                <select class="form-control selectAlter" id="drivers" name="drivers" required>
                    <?php
                    $sql2 = "SELECT * FROM motoristas";
                    $query2 = mysqli_query($link, $sql2) or die(mysqli_error($link));
                    while ($records2 = mysqli_fetch_assoc($query2)) {
                        ?>
                        <option value="<?php echo $records2['m_id_motorista']; ?>"><?php
                            echo $records2['nome_motorista']
                            . "  ( " . $records2['m_status'] . " )";
                            ?>
                        </option><?php }
                        ?>
                </select>

                <label for="status">Status:</label>
                <select class="form-control selectAlter" id="status" name="status" required> 
                    <option value="Ativo">Ativo</option>
                    <option value="Inativo">Inativo</option>
                </select>

                <br>
                <button class="btn btn-primary" type="submit">Alterar</button>
            </form>
        </div>   
    </body>
</html>