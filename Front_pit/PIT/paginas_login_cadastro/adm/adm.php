<!DOCTYPE html>
<html lang="en">
<head>
    <?php header('Content-type: text/html, charset= utf-8'); ?>
    <link rel="icon" type="image/x-icon" href="LOGO_STUDIO_PALMESI-removebg-preview.png" >
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adm Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section class="forms-section">
        <h1 class="section-title">Comece grátis como empresa!</h1>
        <div class="forms">
          <div class="form-wrapper is-active">
            <button type="button" class="switcher switcher-login">
              Login
              <span class="underline"></span>
            </button>
            <form class="form form-login">
              <fieldset>
                <legend>Por favor, insira seu usuário e senha para confirmação do login.</legend>
                <div class="input-block">
                  <label for="login-password">Usuário</label>
                  <input id="login-password" type="text" required>
                  </div>
                <div class="input-block">
                  <label for="login-password">Senha</label>
                  <input id="login-password" type="password" required>
                </div>
              </fieldset>
              <button type="submit" class="btn-login">Login</button>
            </form>
          </div>
          <div class="form-wrapper">
            <button type="button" class="switcher switcher-signup">
              Sign Up
              <span class="underline"></span>
            </button>
            <form class="form form-signup">
              <fieldset>
                <legend>Por favor, insira seu email, CNPJ, senha e nome de usuário para criar conta.</legend>
                <div class="input-block">
                  <label for="signup-email">E-mail</label>
                  <input id="signup-email" type="email" required>
                  <p id="result2"></p>
                </div>
                <div class="input-block">
                  <label for="signup-password">Usuário</label>
                  <input id="signup-password" type="text" required>
                </div>
                <div class="input-block">
                    <label for="signup-password">CNPJ</label>
                    <input id="signup-email2" type="text" name="cnpj" onblur="if(!validarCNPJ(this.value)){alert('CNPJ Informado é inválido'); this.value='';}" ng-model="cadastro.cnpj" required>
                  </div>
                <div class="input-block">
                  <label for="signup-password-confirm">Senha</label>
                  <input id="signup-password-confirm" type="password" required>
                </div>
              </fieldset>
              <button type="submit" class="btn-signup">Criar conta</button>
            </form>
          </div>
        </div>
      </section>
      <a href="#"><p id="termosdeuso2">Esqueci minha senha<br></p></a>
      <p id="termosdeuso">Ao criar uma conta, você concorda com nossos<br>
        <a id="destaque"href="#">Termos de Uso</a> e <a id="destaque"href="#">Política de Privacidade</a></p>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.0/jquery.mask.js"></script>
        <script src="script.js"></script>
</body>
</html>