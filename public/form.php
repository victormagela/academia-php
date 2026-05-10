<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/style.css">
    <script src="./scripts/script.js"></script>
    <title>Orange Fit - Inscrição</title>
</head>
<body>
    <form action="result.php" method="post">
        <label for="name">Nome:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="phone">Telefone:</label>
        <input type="tel" id="phone" name="phone" required>

        <label for="birth">Data de Nascimento:</label>
        <input type="date" id="birth" name="birth" required>

        <label for="cpf">CPF:</label>
        <input type="text" id="cpf" name="cpf" required>

        <label for="adress">Endereço:</label>
        <input type="text" id="adress" name="adress" required>

        <input type="submit" value="Inscrever-se" name="submit">
    </form>
</body>
</html>