<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Cinelentes</title>
  <link rel="stylesheet" href="style.css"> 
</head>
<body>
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
                <li><a class="informacoes-navbar-menu" href="#grid-agenda">AGENDA</a></li>
            </ul>     
        </div>
    </header>
  <main class="main-acervos">

    <div class="topo-acervo">
        <button class="botao-criar-projeto">+ Criar Projeto</button>
    </div>
    

    <!-- Acervo 2025 -->
    <section class="acervo">
      <div class="titulo-acervo">
        <h1 class="titulo-acervo-h1">Acervo Cinelentes - 2025</h1>
        <div class="linha-preta-acervo-titulo"></div>

      </div>

      <div class="cards">
        <div class="card">
          <img id="img-card" src="bitelo.png" alt="1° Festival 2023">
          <div class="card-text">
            1° Festival Cinelentes<br>Mês da Mulher
          </div>
          <div class="card-buttons">
            <button class="botao-editar">EDITAR</button>
            <button class="botao-excluir">EXCLUIR</button>
          </div>
        </div>

        <div class="card">
          <img id="img-card" src="bitelo.png" alt="2° Festival 2023">
          <div class="card-text">
            2° Festival Cinelentes<br>LGBTQIA+
          </div>
          <div class="card-buttons">
            <button class="botao-editar">EDITAR</button>
            <button class="botao-excluir">EXCLUIR</button>
          </div>
        </div>

        <div class="card">
          <img id="img-card" src="bitelo.png" alt="3° Festival 2023">
          <div class="card-text">
            3° Festival Cinelentes<br>Povos Originários
          </div>
          <div class="card-buttons">
            <button class="botao-editar">EDITAR</button>
            <button class="botao-excluir">EXCLUIR</button>
          </div>
        </div>

        <div class="card">
          <img id="img-card" src="bitelo.png" alt="4° Festival 2023">
          <div class="card-text">
            4° Festival Cinelentes<br>Inclusão
          </div>
          <div class="card-buttons">
            <button class="botao-editar">EDITAR</button>
            <button class="botao-excluir">EXCLUIR</button>
          </div>
        </div>

        <div class="card">
          <img id="img-card" src="bitelo.png" alt="5° Festival 2023">
          <div class="card-text">
            5° Festival Cinelentes<br>Mês do Trabalho
          </div>
          <div class="card-buttons">
            <button class="botao-editar">EDITAR</button>
            <button class="botao-excluir">EXCLUIR</button>
          </div>
        </div>

        <div class="card">
          <img id="img-card" src="bitelo.png" alt="6° Festival 2023">
          <div class="card-text">
            6° Festival Cinelentes<br>Povos Conhecimento Negro
          </div>
          <div class="card-buttons">
            <button class="botao-editar">EDITAR</button>
            <button class="botao-excluir">EXCLUIR</button>
          </div>
        </div>
      </div>
    </section>

    <!-- Acervo 2024 -->
    <section class="acervo">
      <div class="titulo-acervo">
        <h1 class="titulo-acervo-h1">Acervo Cinelentes - 2024</h1>
        <div class="linha-preta-acervo-titulo"></div>

      </div>

      <div class="cards">
        <div class="card">
          <img id="img-card" src="" alt="1° Festival 2024">
          <div class="card-text">
            1° Festival Cinelentes<br>Mês da Mulher
          </div>
          <div class="card-buttons">
            <button class="botao-editar">EDITAR</button>
            <button class="botao-excluir">EXCLUIR</button>
          </div>
        </div>

        <div class="card">
          <img id="img-card" src="bitelo.png" alt="2° Festival 2024">
          <div class="card-text">
            2° Festival Cinelentes<br>LGBTQIA+
          </div>
          <div class="card-buttons">
            <button class="botao-editar">EDITAR</button>
            <button class="botao-excluir">EXCLUIR</button>
          </div>
        </div>

        <div class="card">
          <img id="img-card" src="bitelo.png" alt="3° Festival 2024">
          <div class="card-text">
            3° Festival Cinelentes<br>Povos Originários
          </div>
          <div class="card-buttons">
            <button class="botao-editar">EDITAR</button>
            <button class="botao-excluir">EXCLUIR</button>
          </div>
        </div>

        <div class="card">
          <img id="img-card" src="bitelo.png" alt="4° Festival 2024">
          <div class="card-text">
            4° Festival Cinelentes<br>Inclusão
          </div>
          <div class="card-buttons">
            <button class="botao-editar">EDITAR</button>
            <button class="botao-excluir">EXCLUIR</button>
          </div>
        </div>

        <div class="card">
          <img id="img-card" src="bitelo.png" alt="5° Festival 2024">
          <div class="card-text">
            5° Festival Cinelentes<br>Mês do Trabalho
          </div>
          <div class="card-buttons">
            <button class="botao-editar">EDITAR</button>
            <button class="botao-excluir">EXCLUIR</button>
          </div>
        </div>

        <div class="card">
          <img id="img-card" src="bitelo.png" alt="6° Festival 2024">
          <div class="card-text">
            6° Festival Cinelentes<br>Povos Conhecimento Negro
          </div>
          <div class="card-buttons">
            <button class="botao-editar">EDITAR</button>
            <button class="botao-excluir">EXCLUIR</button>
          </div>
        </div>
      </div>
    </section>

    <!-- Acervo 2023 -->
    <section class="acervo">
      <div class="titulo-acervo">
        <h1 class="titulo-acervo-h1">Acervo Cinelentes - 2023</h1>
        <div class="linha-preta-acervo-titulo"></div>
      </div>

      <div class="cards">
        <div class="card">
          <img id="img-card" src="bitelo.png" alt="1° Festival 2025">
          <div class="card-text">
            1° Festival Cinelentes<br>Mês da Mulher
          </div>
          <div class="card-buttons">
            <button class="botao-editar">EDITAR</button>
            <button class="botao-excluir">EXCLUIR</button>
          </div>
        </div>

        <div class="card">
          <img id="img-card" src="bitelo.png" alt="2° Festival 2025">
          <div class="card-text">
            2° Festival Cinelentes<br>LGBTQIA+
          </div>
          <div class="card-buttons">
            <button class="botao-editar">EDITAR</button>
            <button class="botao-excluir">EXCLUIR</button>
          </div>
        </div>

        <div class="card">
          <img id="img-card" src="bitelo.png" alt="3° Festival 2025">
          <div class="card-text">
            3° Festival Cinelentes<br>Povos Originários
          </div>
          <div class="card-buttons">
            <button class="botao-editar">EDITAR</button>
            <button class="botao-excluir">EXCLUIR</button>
          </div>
        </div>

        <div class="card">
          <img id="img-card" src="bitelo.png" alt="4° Festival 2025">
          <div class="card-text">
            4° Festival Cinelentes<br>Inclusão
          </div>
          <div class="card-buttons">
            <button class="botao-editar">EDITAR</button>
            <button class="botao-excluir">EXCLUIR</button>
          </div>
        </div>

        <div class="card">
          <img id="img-card" src="bitelo.png" alt="5° Festival 2025">
          <div class="card-text">
            5° Festival Cinelentes<br>Mês do Trabalho
          </div>
          <div class="card-buttons">
            <button class="botao-editar">EDITAR</button>
            <button class="botao-excluir">EXCLUIR</button>
          </div>
        </div>

        <div class="card">
          <img id="img-card" src="bitelo.png" alt="6° Festival 2025">
          <div class="card-text">
            6° Festival Cinelentes<br>Povos Conhecimento Negro
          </div>
          <div class="card-buttons">
            <button class="botao-editar">EDITAR</button>
            <button class="botao-excluir">EXCLUIR</button>
          </div>
        </div>
      </div>
    </section>

    <!-- Agenda -->
    <section class="agenda">
      <h2 class="agenda-h2">Agenda</h2>
      <textarea class="areatexto-agenda"  placeholder="Digite a data de algum projeto que irá acontecer..." rows="4"></textarea>
      <button class="botao-confirmar">Confirmar</button>
    </section>

  </main>

  <footer class="footer-container">
    <div class="footer-topo">
        <div class="div-vazia"></div>
        <div class="footer-logo-container">
            <img id="logo-cinelentes-footer" src="./img/logo-cinelentes.png" alt="CineLentes">
        </div>

        <div class="botao-login-container">
            <a href="login.php" class="botao-login">Login Administrador</a>
        </div>
    </div>

    <div class="linha-branca-footer"></div>

    <div class="linha-preta-footer">
        <p class="footer-direitos">Todos os direitos reservados.</p>
    </div>
</footer>

</body>
</html>