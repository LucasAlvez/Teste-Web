<!DOCTYPE html>
<?php include '/connection/connection.php'; ?>
<html>

    <body>

        <?php include 'navbar.php'; ?>

        <div class="container">

            <form method="post" action="processesRunning.php">

                <div class="form-group">

                    <label for="passenger">Passageiros:</label>
                    <select class="form-control" id="passenger" name="passenger" required autofocus>
                        <?php 
                        $sql = "SELECT * FROM passageiros";
                        $query = mysqli_query($link, $sql) or die(mysqli_error($link));
                        while ($records = mysqli_fetch_assoc($query)){ ?>
                        <option value="<?php echo $records['p_id_passageiro']; ?>"><?php echo $records['nome_passageiro'];?>
                        </option><?php
                                
                        } ?>
                    </select>
                    
                    <label for="drivers">Motoristas Disponiveis:</label>
                    <select class="form-control" id="drivers" name="drivers" required>
                        <?php 
                        $sql = "SELECT * FROM motoristas WHERE m_status = 'Ativo'";
                        $query = mysqli_query($link, $sql) or die(mysqli_error($link));
                        while ($records = mysqli_fetch_assoc($query)){ ?>
                        <option value="<?php echo $records['m_id_motorista']; ?>"><?php echo $records['nome_motorista'];?>
                        </option><?php
                                
                        } ?>
                    </select>

                    <label for="value">Valor da corrida:</label>
                    <input type="number" class="form-control" id="value" name="value"  onkeyup="Mask(this, Money)" maxlength="6" required>

                    <br>
                    <button class="btn btn-primary btnCad" type="submit">Cadastrar</button>

                </div>
            </form>

    </body>
</html>
