<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/reset.css">
    <link rel="stylesheet" href="./styles/style.css">
    <script defer src="./scripts/mask.js"></script>
    <title>Orange Fit - Inscrição</title>
</head>

<body>
    <?php include './includes/header.html'; ?>

    <main>
        <div class="container">
            <h2>Inscrição</h2>
    
            <form action="result.php" method="post">
                <div class="form-group">
                    <label for="name">Nome:</label>
                    <input type="text" id="name" name="name" required>
                </div>

                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>

                <div class="form-group">
                    <label for="phone">Telefone:</label>
                    <input type="tel" id="phone" name="phone" required>
                </div>

                <div class="form-group">
                    <label for="birth">Data de Nascimento:</label>
                    <input type="date" id="birth" name="birth" required>
                </div>
    
                <div class="form-group">
                    <label for="cpf">CPF:</label>
                    <input type="text" id="cpf" name="cpf" required>
                </div>

                <div class="form-group">
                    <label for="adress">Endereço:</label>
                    <input type="text" id="adress" name="adress" required>
                </div>

                <input type="submit" value="Inscrever-se" name="submit">
            </form>
        </div>
    </main>

    <?php include './includes/footer.html'; ?>
</body>

</html>