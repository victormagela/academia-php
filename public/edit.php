<?php 
    // require_once "../src/Classes/Dbh.php";

    if (!isset($_GET['id'])) {
        echo "Id não informado.";
        exit;
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Cadastro</title>
    <link rel="stylesheet" href="./styles/reset.css">
    <link rel="stylesheet" href="./styles/style.css">
</head>
<body>
    <?php include "./includes/header.html" ?>
    <main>
        <div class="container">
            <h2>Editar Cadastro</h2>

            <form action="edit.php" method="post">
                <div class="form-group">
                    <label for="name">Nome:</label>
                    <input type="text" id="name" name="name">
                </div>

                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email">
                </div>

                <div class="form-group">
                    <label for="phone">Telefone:</label>
                    <input type="tel" id="phone" name="phone">
                </div>

                <div class="form-group">
                    <label for="birth">Data de Nascimento:</label>
                    <input type="date" id="birth" name="birth">
                </div>
    
                <div class="form-group">
                    <label for="cpf">CPF:</label>
                    <input type="text" id="cpf" name="cpf">
                </div>

                <div class="form-group">
                    <label for="address">Endereço:</label>
                    <input type="text" id="address" name="address">
                </div>

                <div class="flex-row">
                    <input type="submit" value="Editar" name="submit">
                    <a href="./registrations.php" class="btn-cancel">Cancelar</a>
                </div>
            </form>
        </div>
    </main>
    <?php include "./includes/footer.html" ?>
    
</body>
</html>