<?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if ($_POST['submit']) {
            $data = [
                "Nome" => $_POST['name'],
                "Email" => $_POST['email'],
                "Telefone" => $_POST['phone'],
                "Data de Nascimento" => $_POST['birth'],
                "CPF" => $_POST['cpf'],
                "Endereço" => $_POST['adress']
            ];

            $content = '';
            foreach ($data as $key => $value) {
                $content .= "$key: $value\n";
            }

            $file_name = "inscrição_" . date("Ymd_His") . ".txt";
            file_put_contents($file_name, $content);
        }
    } else {
        // Redireciona para o formulário se o acesso for direto
        header("Location: form.php");
        exit();
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/reset.css">
    <link rel="stylesheet" href="./styles/style.css">
    <title>Resultado</title>
</head>
<body>
    <?php include './includes/header.html'; ?>

    <main>
        <div class="container">
            <?php if (isset($file_name)): ?>
                <h2>Resultado</h2>
                <p style="color: green; text-align: center;">Arquivo salvo como: <?= $file_name; ?></p>
            <?php endif; ?>
        </div>
    </main>
    
    <?php include './includes/footer.html'; ?>

</body>
</html>