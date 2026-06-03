<?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if ($_POST['submit']) {
            require_once "../src/Classes/Registration.php";
            require_once "../src/Classes/Dbh.php";
            require_once "../src/Classes/RegistrationRepository.php";

            $conn = Dbh::getConnection();
            $repo = new RegistrationRepository($conn);

            $registration = Registration::create(
                $_POST['name'],
                $_POST['email'],
                $_POST['phone'],
                $_POST['birth'],
                $_POST['cpf'],
                $_POST['address'],
            );

            $repo->save($registration);
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
            <h2>Resultado</h2>
            <p style="color: green; text-align: center;">Cadastro feito com sucesso!</p>
        </div>
    </main>
    
    <?php include './includes/footer.html'; ?>

</body>
</html>