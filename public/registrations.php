<?php
    require_once "../src/Classes/Dbh.php";
    require_once "../src/Classes/Registration.php";
    require_once "../src/Classes/RegistrationRepository.php";

    $db = Dbh::getConnection();
    $repo = new RegistrationRepository($db);
    $registrations = $repo->findAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/reset.css">
    <link rel="stylesheet" href="./styles/style.css">
    <title>Cadastros</title>
</head>
<body>
    <?php include "./includes/header.html" ?>
    <main>
        <div class="container">
            <?php if (!empty($registrations)) : ?>
                
                <h2>Cadastros</h2>
    
                <table>
                    <thead>
                        <th>
                            <!-- <tr>Id</tr> -->
                            <tr>Nome</tr>
                            <tr>Email</tr>
                            <tr>Telefone</tr>
                            <tr>Data de Nascimento</tr>
                            <tr>CPF</tr>
                            <tr>Endereço</tr>
                        </th>
                    </thead>
                    <tbody>
                        <?php foreach($registrations as $registration): ?>
                            <tr>
                                <!-- <td><?= $registration->getId(); ?></td> -->
                                <td><?= $registration->name; ?><?= $registration->name; ?></td>
                                <td><?= $registration->email; ?></td>
                                <td><?= $registration->phone; ?></td>
                                <td><?= $registration->birthDate; ?></td>
                                <td><?= $registration->cpf; ?></td>
                                <td><?= $registration->address; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            <?php else : ?>
                <p>Nenhum cadastro encontrado</p>
            <?php endif; ?>
        </div>
    </main>

    <?php include "./includes/header.html" ?>
    
</body>
</html>