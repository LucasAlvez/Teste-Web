<!DOCTYPE html>
<html>

    <body>

        <?php include 'navbar.php'; ?>

        <div class="container">

            <form method="post" action="processesDriver.php" name="form1">

                <div class="form-group">
                    <label for="name">Nome:</label>
                    <input type="text" class="form-control" id="name" name="name" required autofocus>

                    <label for="cpf">CPF:</label>
                    <input type="text" class="form-control" id="cpf" name="cpf"  onkeyup="Mask(this, Cpf)" maxlength="14" required>
                    
                    <label for="dateBirth">Data de Nascimento:</label>
                    <input type="date" class="form-control" id="dateBirth" name="dateBirth" required >

                    <label for="modelCar">Modelo do carro:</label>
                    <input type="text" class="form-control" id="modelCar" name="modelCar" required>

                    <label for="status">Status:</label>
                    <select class="form-control" id="status" name="status" required> 
                        <option value="Ativo">Ativo</option>
                        <option value="Inativo">Inativo</option>
                    </select>

                    <label for="gender">Sexo:</label>
                    <select class="form-control" id="gender" name="gender" required>
                        <option value="Masculino">Masculino</option>
                        <option value="Feminino">Feminino</option>
                    </select>

                    <br>
                    <button class="btn btn-primary btnCad" type="submit">Cadastrar</button>

                </div>
            </form>

    </body>
</html>
