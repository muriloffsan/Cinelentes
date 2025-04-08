<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial - Cinelentes</title>
    <link rel="stylesheet" href="./style/style.css">
    <script src="./js/main.js   "></script>
</head>
<body class="body-pagina-inicial">
    <header class="header-container">
        <nav class="parte-cima-header-container">
            <img id="logo-sesi-senai" src="./img/logo-sesi-senai.png" alt="SESI - SENAI">
            <img id="logo-cinelentes" src="img/logo-cinelentes.png" alt="CineLentes">
        </nav>
        <div class="linha-branca"></div>
        <div class="navbar-menu-container">
            <ul class="navbar-menu">
                <li><a class="informacoes-navbar-menu" href="index.php">INÍCIO</a></li>
                <div class="dropdown">
                    <a onclick="myFunction()" class="dropbtn">EDIÇÕES</a>
                    <div id="myDropdown" class="dropdown-content">
                        <a href="./php/edicao2023.php">EDIÇÃO 2023</a>
                        <a href="./php/edicao2024.php">EDIÇÃO 2024</a>
                        <a href="./php/edicao2025.php">EDIÇÃO 2025</a>
                    </div>
                </div>
                <li><a class="informacoes-navbar-menu" href="./php/quem-somos.php">QUEM SOMOS</a></li>
                <li><a class="informacoes-navbar-menu" href="index.php">AGENDA</a></li>
            </ul>     
        </div>
    </header>
    <main>
        <section class="introducao">
        </section>
    </main>
</body>
</html>

