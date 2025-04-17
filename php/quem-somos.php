<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial - Cinelentes</title>
    <link rel="stylesheet" href="../style/style.css">
    <script src="../js/main.js"></script>
</head>
<body class="body-pagina-inicial">
    <header class="header-container">
        <nav class="parte-cima-header-container">
            <img id="logo-sesi-senai" src="../img/logo-sesi-senai.png" alt="SESI - SENAI">
            <img id="logo-cinelentes" src="../img/logo-cinelentes.png" alt="CineLentes">
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
    <main class="equipe-container">
    <h1 class="titulo-equipe">Conheça nossa Equipe</h1>

    <section class="secao-idealizadores">
        <h2 class="titulo-idealizadores">Idealizadores</h2>
        <div class="idealizadores">
            <div class="idealizador">
                <img class="imagem-idealizador" src="../img/avatar-15.png" alt="Prof">
                <p class="nome-idealizador"> Sabrina Lina Figueiredo Gonçalves</p>
            </div>
            <div class="idealizador">
                <img class="imagem-idealizador" src="../img/avatar-15.png" alt="Prof">
                <p class="nome-idealizador"> José Roberto de Lima</p>
            </div>
            <div class="idealizador">
                <img class="imagem-idealizador" src="../img/avatar-15.png" alt="Prof">
                <p class="nome-idealizador"> Rogério de Souza Junior</p>
            </div>
        </div>
    </section>

    <section class="secao-desenvolvedores">
        <h2 class="titulo-desenvolvedores">Desenvolvido por</h2>
        <div class="desenvolvedores">
            <div class="desenvolvedor">
                <img class="imagem-desenvolvedor" src="../img/avatar-15.png" alt="Pedro ">
                <p class="nome-desenvolvedor">Pedro Henrique de Petta Zocatelli</p>
            </div>
            <div class="desenvolvedor">
                <img class="imagem-desenvolvedor" src="../img/avatar-15.png" alt="Victor ">
                <p class="nome-desenvolvedor">Victor Luiz Koba Batista</p>
            </div>
            <div class="desenvolvedor">
                <img class="imagem-desenvolvedor" src="../img/avatar-15.png" alt="Miguel ">
                <p class="nome-desenvolvedor">Miguel Francisco da Silva Sales</p>
            </div>
            <div class="desenvolvedor">
                <img class="imagem-desenvolvedor" src="../img/avatar-15.png" alt="Matheus ">
                <p class="nome-desenvolvedor">Matheus Arantes Villar</p>
            </div>
            <div class="desenvolvedor">
                <img class="imagem-desenvolvedor" src="../img/avatar-15.png" alt="Murilo ">
                <p class="nome-desenvolvedor">Murilo Ferreira Faria Santana</p>
            </div>
        </div>
    </section>
</main>

<footer>

    <div class="footer-logo">
        <img id="logo-cinelentes-footer" src="../img/logo-cinelentes.png" alt="CineLentes">
    </div>

    <div class="linha-branca-footer">

    </div>

    <div class="linha-preta-footer">

    </div>

</footer>
</body>
</html>

