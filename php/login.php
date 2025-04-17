<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Login - Cinelentes</title>
  <link rel="stylesheet" href="../style/style.css"/>
</head>
<body class="body-login">
    
  <div class="card-login">
    <div class="container-login">
      <div class="lado-esquerdo">
        <div class="logo">
          <img id="imagem-logo" src="../img/logo-cinelentes.png" alt="logo-cinelentes" />
        </div>
      </div>
      <div class="lado-direito">
        <form class="login-form">
          <h2 class="texto-login">LOGIN</h2>

          <div class="input-inform">
            <img class="img-icon" src="../img/imagem-email-removebg-preview.png" alt="">
            <input class="input-email-senha" type="email" placeholder="Email" required />
          </div>

          <div class="input-inform">
            <img class="img-icon" src="../img/img-icon-senha.png" alt="">
            <input class="input-email-senha" type="password" placeholder="Senha" required />
          </div>

          <button type="submit" class="botao-entrar">ENTRAR</button>

          <a href="redefinir-senha.php" class="bot-esqueceu-senha">Esqueceu a senha?</a>
        </form>
      </div>
    </div>
  </div>
</body>
</html>
