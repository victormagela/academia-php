<?php
    require_once "../src/Classes/Dbh.php";
    require_once "../src/Classes/Registration.php";
    require_once "../src/Classes/RegistrationRepository.php";

    $db = Dbh::getConnection();
    $repo = new RegistrationRepository($db);
    $registrations = $repo->findAll();
?>

<!DOCTYPE html>
<html lang="pt-br">
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
                        <tr>
                            <th>Id</th>
                            <th>Nome</th>
                            <th>Email</th>
                            <th>Telefone</th>
                            <th>Data de Nascimento</th>
                            <th>CPF</th>
                            <th>Endereço</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($registrations as $registration): ?>
                            <tr>
                                <td><?= $registration->getId(); ?></td>
                                <td><?= $registration->name; ?></td>
                                <td><?= $registration->email; ?></td>
                                <td><?= $registration->phone; ?></td>
                                <td><?= $registration->birthDate; ?></td>
                                <td><?= $registration->cpf; ?></td>
                                <td><?= $registration->address; ?></td>
                                <td>
                                    <div class="flex-row">
                                        <a class="btn edit" href="edit.php?id=<?= $registration->getId() ?>">Editar</a>
                                        <a class="btn delete" href="delete.php?id=<?= $registration->getId() ?>">Excluir</a>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            <?php else : ?>
                <p>Nenhum cadastro encontrado</p>
            <?php endif; ?>
        </div>
    </main>

    <?php include "./includes/footer.html" ?>
    
</body>
</html>