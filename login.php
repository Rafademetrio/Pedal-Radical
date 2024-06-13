<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    require_once "assets/scripts-php/validacaoLogin.php";
    
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sistema de Login</title>
    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
      integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N"
      crossorigin="anonymous"
    />
    <!-- material icon -->
    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Material+Icons+Outlined"
      rel="stylesheet"
    />
    <!-- Custom CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    />
    <!-- <link rel="stylesheet" href="css/style.css" /> -->
    <link rel="stylesheet" href="css/login.css" />
    
  </head>

  <body class="">
    <!-- NAV TOP -->
    <div id="nav-top" class="container-md">
      <div class="navbar-top">
        <!-- SOCIAL LINK -->
        <div class="social-link d-flex">
          <i class="bi bi-headset icons-nav-top nav-link"
            ><span class="span-sac" style="padding-left: 4px">SAC</span></i
          >
          <i
            class="bi bi-instagram icons-nav-top nav-link"
            alt=""
            width="30px"
          ></i>
          <i class="bi bi-linkedin icons-nav-top nav-link"></i>
        </div>
        <!-- SOCIAL LINK -->
        <!-- LOGO -->
        <div class="logo-pedalradical">
          <!-- centralizar a logo -->
          <img
            class="img-fluid"
            src="assets/images/logo-dark.png"
            alt="Logo Pedal Radical"
            srcset=""
          />
        </div>
        <!-- LOGO -->
        <!-- ICONS AUTH -->
        <div class="icons d-flex">
          <a
            href="cadastro.php"
            class="bi bi-person-plus-fill icons-nav-top nav-link"
          ></a>
          <a class="bi bi-cart-fill icons-nav-top nav-link"></a>
        </div>
        <!-- ICONS AUTH -->
      </div>
    </div>
    <!-- NAV TOP -->
    <main class="main-login py-3" id="login">
      <div class="container account-section">
        <div class="page-login-left col-sm">
          <div class="logo-form d-flex justify-content-center py-3">
            <h3>Área de Login</h3>
          </div>
          <div
            id="login-row"
            class="justify-content-center align-items-center"
          >
            <div id="login-column" class="col-md">
              <div id="login-box" class="col-md">
                
                <form id="login-form" class="form" method="POST">
                  <!-- DIV INPUT USUÁRIO -->
                  <div class="form-group mb-3 input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="addon-wrapping"
                        ><i class="bi bi-person-fill"></i
                      ></span>
                    </div>
                    <input
                      type="email"
                      name="email"
                      class="form-control"
                      id="floatingInput"
                      placeholder="Usuário*"
                      required
                    />
                    <label for="floatingInput" class="sr-only">Usuário</label>
                  </div>
                  <!-- DIV INPUT SENHA -->
                  <div class="form-group mb-3 input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"
                        ><i class="bi bi-lock-fill"></i
                      ></span>
                    </div>
                    <input
                      type="password"
                      name="senha"
                      class="form-control"
                      id="floatingPassword"
                      placeholder="Senha*"
                      required
                    />
                    <label for="floatingPassword" class="sr-only">Senha</label>
                  </div>
                  <div class="form-group mb-3 d-flex justify-content-between">
                    <div class="form-check">
                      <input
                        type="checkbox"
                        class="form-check-input"
                        id="exampleCheck1"
                      />
                      <label class="form-check-label" for="exampleCheck1"
                        >Lembrar-me</label
                      >
                    </div>
                    <div>
                      <a href="">Esqueceu sua senha?</a>
                    </div>
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">
                      Acessar
                    </button>
                  </div>
                </form>
                
              </div>
            </div>
          </div>
        </div>
        <div class="page-login-right col-sm">
          <div class="create-account">
            <div class="">
              <div class="py-3 d-flex justify-content-center">
                <h3 class="create-account-title">Criar Conta</h3>
              </div>
              <p>Você poderá salvar seus endereços, acompanhar o status de seus pedidos e guardar produtos no carrinho para comprar mais tarde.</p>
              <a href="cadastro.php" class="btn btn-outline-secondary btn-block"
                >Criar minha conta</a
              >
             
            </div>
          </div>
        </div>
      </div>
    </main>

     <!-- FOOTER -->
      <?php
      include('./pages/footer.php');
      ?>
  </body>
</html>
