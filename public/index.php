<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/reset.css">
    <link rel="stylesheet" href="./styles/style.css">
    <script defer src="./scripts/banner.js"></script>
    <title>Orange Fit - Home</title>
</head>
<body>
    <?php include './includes/header.html'; ?>
    
    <main class="main-index">
        <div class="banner">
            <div class="overlay">
                <h2>Bem-vindo à <span class="highlight-word">Orange Fit</span></h2>
                <p>Transforme seu corpo e sua vida com a gente!</p>
            </div>
            
            <div class="overlay">
                <p id="credits">Foto de <span class="highlight-word"><a href="https://unsplash.com/pt-br/@dncerullo?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText" target="_blank">Danielle Cerullo</a></span> na <span class="highlight-word"><a href="https://unsplash.com/pt-br/fotografias/mulher-em-pe-cercada-por-equipamento-de-exercicio-CQfNt66ttZM?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText" target="_blank">Unsplash</a></span></p>
            </div>
        </div>

        <div class="hero">
            <figure>
                <img src="./assets/orange-fit.png" alt="orange fit" height="420" width="560">
            </figure>

            <div class="card">
                <h3>Endereço</h3>
                <p>Av. Narciso de Guimarães, 455</p>
                <p>Jd. Olívia, Mogi das Cruzes - SP</p>
            </div>

            <div class="card">
                <h3>Horários</h3>
                <p>Segunda: Abre às 07:00</p>
                <p>Terça a sexta: 09:00 às 23:00</p>
                <p>Sábado: Fecha às 16:00</p>
                <p>Domingo: 09:00 às 14:00</p>
                <p>Feriados: 09:00 às 16:00</p>
            </div>

            <a href="./form.php">Apenas R$99,90! Inscreva-se já!</a>
        </div>
    </main>

    <?php include './includes/footer.html'; ?>
</body>
</html>