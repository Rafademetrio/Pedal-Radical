<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    require_once "assets/scripts-php/inserirUsuario.php";
    
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sistema de Cadastro</title>
    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
      integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N"
      crossorigin="anonymous"
    />
    <!-- Custom CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
    />
    <!-- REMIXICON LINK -->
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/login.css" />
  </head>

  <body class="">
    <!-- NAV TOP -->
    <div id="nav-top" class="container-md">
      <div class="navbar-top">
        <!-- teste -->
        
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
          <a href="index.php"></a>
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
            href="index.php"
            class="glyphicon glyphicon-home icons-nav-top nav-link"
          ></a>
        </div>
        <!-- ICONS AUTH -->
      </div>
    </div>
    <!-- NAV TOP -->
    <main class="main-login py-3" id="login">
      <div class="container account-section">
        <div class="page-login-left col-sm">
          <div class="create-account">
            <div class="">
              <div class="py-3 d-flex justify-content-center">
                <h3 class="create-account-title">Bem-vindo de volta
                    </h3>
              </div>
              <p>
                  Para se manter conectado conosco, faça login com suas informações pessoais
                  Entrar
              </p>
              <a
                href="login.php"
                class="btn btn-outline-secondary btn-block"
              >
                Entrar
              </a>
            </div>
          </div>
        </div>
        <div class="page-login-right col-sm">
          <div class="logo-form d-flex justify-content-center py-3">
            <h3>Crie sua conta</h3>
          </div>
          <div id="login-row" class="justify-content-center align-items-center">
            <div id="login-column" class="col-md">
              <div id="login-box" class="col-md">
                
                <form id="login-form" class="form" method="POST">
                  <div class="form-group mb-3 input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="addon-wrapping"
                        ><i class="bi bi-person-fill"></i
                      ></span>
                    </div>
                    <input type="text" name="nome" class="form-control" id="floatingInput"  placeholder="Nome*" required  />
                    <label for="floatingInput" class="sr-only">Nome*</label>
                  </div>
                      <div class="form-group mb-3 input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="addon-wrapping"
                            ><i class="ri-mail-line"></i></span>
                        </div>
                        <input
                          type="email"
                          name="email"
                          class="form-control"
                          id="floatingInput"
                          placeholder="E-mail*"
                          required
                        />
                        <label for="floatingInput" class="sr-only">E-mail*</label>
                      </div>
                      <div class="form-group mb-3 input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="addon-wrapping"><i class="ri-lock-password-line"></i></span>
                        </div>
                        <input type="password"  name="senha" class="form-control" id="floatingInput"  placeholder="Senha*" required/>
                        <label for="floatingInput" class="sr-only">Senha*</label>
                      </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">  Criar </button>
                      </div>
                </form>
              </div>
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
