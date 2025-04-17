<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial - Cinelentes</title>
    <link rel="stylesheet" href="./style/style.css">
    <script src="./js/main.js"></script>
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
        <div id="grid-introducao">
            <div id="titulo">
                <h1 class="titulo-pagina-inicial">O que é o Cinelentes?</h1>
            </div>
            <div class="linha"></div>
            <div class="introducao-texto">
                <p class="conteudo-introducao">O Projeto “Cinelentes” tem o objetivo de fomentar a cultura no ambiente escolar, democratizando o acesso ao cinema e outras linguagens artísticas/culturais. Proporcionar um ambiente de interação, debate e criatividade que envolve não só o corpo docente e discente, mas toda a comunidade escolar, proporcionando a criticidade necessária para buscar novas lentes através de curtas metragens. Durante cada mês serão abordados temas relacionados a datas comemorativas relevantes daquele mês.</p>
            </div>
            <div class="logo-introducao">
                <img src="./img/logo-cinelentes.png" alt="">
            </div>
        </div>
        <div id="grid-destaque">
            <div id="titulo-destaque">
                <h1 class="titulo-pagina-inicial">Destaques</h1>
            </div>
            <div class="linha"></div>
        </div>
    </main>
</body>
</html>

