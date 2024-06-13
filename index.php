<?php
if (!session_id()) {
    session_start();
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<?php
include('./pages/head.php');
?>

<body>

    <!-- NAV TOP -->
    <div id="nav-top" class="container">
        <div class="navbar-top">
            <!-- SOCIAL LINK -->
            <div class="social-link d-none d-sm-flex">
                <i class="bi bi-headset icons-nav-top nav-link"><span class="span-sac" style="padding-left: 4px; ">SAC</span></i>
                <i class="bi bi-instagram icons-nav-top nav-link" alt=""></i>
                <i class="bi bi-linkedin icons-nav-top nav-link "></i>
            </div>
            <!-- SOCIAL LINK -->
            <!-- LOGO -->
            <div class="logo-pedalradical nav-link">
                <a href="./index.php">
                    <img class="img-fluid" src="assets/images/logo-dark.png" alt="Logo Pedal Radical" srcset="" />
                </a>
            </div>
            <!-- LOGO -->
            <!-- ICONS AUTH -->
            <div class="icons d-flex">
                <i class="bi bi-search icons-nav-top nav-link"></i>
                <div class="acesso-usuario dropdown">
                  <a
                    class="btn btn-primary dropdown-toggle"
                    href="#"
                    role="button"
                    data-toggle="dropdown"
                    aria-expanded="false"
                  >
                    <svg
                      xmlns=" http://www.w3.org/2000/svg"
                      viewBox="0 0 24 24"
                      width="32"
                      height="32"
                      class="svg-color-usuario"
                      fill="currentColor"
                    >
                      <path
                        d="M12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2ZM12.1597 16C10.1243 16 8.29182 16.8687 7.01276 18.2556C8.38039 19.3474 10.114 20 12 20C13.9695 20 15.7727 19.2883 17.1666 18.1081C15.8956 16.8074 14.1219 16 12.1597 16ZM12 4C7.58172 4 4 7.58172 4 12C4 13.8106 4.6015 15.4807 5.61557 16.8214C7.25639 15.0841 9.58144 14 12.1597 14C14.6441 14 16.8933 15.0066 18.5218 16.6342C19.4526 15.3267 20 13.7273 20 12C20 7.58172 16.4183 4 12 4ZM12 5C14.2091 5 16 6.79086 16 9C16 11.2091 14.2091 13 12 13C9.79086 13 8 11.2091 8 9C8 6.79086 9.79086 5 12 5ZM12 7C10.8954 7 10 7.89543 10 9C10 10.1046 10.8954 11 12 11C13.1046 11 14 10.1046 14 9C14 7.89543 13.1046 7 12 7Z"
                      ></path>
                    </svg>
                    <span>Entrar</span>
                  </a>
                  <div class="dropdown-menu">
                    <?php
                      if (!isset($_SESSION['nome'])) {
                      echo '<a href="login.php" alt="Login" class="dropdown-item" href="#">Login</a>';
                      }
                    ?>
                    
                    <a class="dropdown-item" href="#">Meus Pedidos</a>
                    <a class="dropdown-item" href="#">Endereços</a>
                  </div>
                </div>
                <!-- <?php

                // if (!isset($_SESSION['nome'])) {
                //     echo '<a href="login.php" class="bi bi-person-fill icons-nav-top nav-link"></a>';
                // } else {
                //     echo '<a href="logout.php" class="bi bi-door-closed-fill icons-nav-top nav-link"></a>';
                // }
                ?> -->

                <a class="bi bi-cart-fill icons-nav-top nav-link"></a>
            </div>
            <!-- ICONS AUTH -->
        </div>
    </div>
    <!-- NAV TOP -->

    <!-- MAIN SECTION -->
    <div class="main-content">

        <!-- NAV LINKS -->
        <nav class="main-content--nav navbar navbar-expand-md">

            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                    <span><i><img src="assets/images/list.svg" class="menu-hamburguer" alt="" srcset="" width="30px" /></i></span>
                </button>

                <!-- Navbar links -->
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav m-auto">
                        <li class="nav-item nav-item-custom">
                            <a class="nav-link active" href="#">Promoções</a>
                        </li>
                        <!-- Dropdown -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                Bicicletas
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Bicicletas Aro 29</a>
                                <a class="dropdown-item" href="#">Bicicletas Aro 29</a>
                                <a class="dropdown-item" href="#">Bicicletas Aro 29</a>
                            </div>
                        </li>
                        <!-- Dropdown -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                Vestuários
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Bicicletas Aro 29</a>
                                <a class="dropdown-item" href="#">Bicicletas Aro 29</a>
                                <a class="dropdown-item" href="#">Bicicletas Aro 29</a>
                            </div>
                        </li>
                        <!-- Dropdown -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                Acessórios
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Bicicletas Aro 29</a>
                                <a class="dropdown-item" href="#">Bicicletas Aro 29</a>
                                <a class="dropdown-item" href="#">Bicicletas Aro 29</a>
                            </div>
                        </li>
                    </ul>
                </div>
            
            
            </div>
            <!-- Toggler/collapsibe Button -->
        </nav>
        <!-- NAV LINKS -->
        <!-- CONTENT -->
        <div class="content">
            <div class="container">
                <div class="card">
                    <h1>Bem-vindo à Pedal Radical!</h1>
                    <h2>Bicicletas e Acessórios de Qualidade para Todos os Ciclistas!</h2>
                    <p>Descubra nossa linha premium de bicicletas, vestuários e acessórios que combinam inovação,
                        desempenho e estilo. Pedale com confiança e atinja novos horizontes com Pedal Radical!</p>
                    <div class="button-content"><button>Veja Nossas Ofertas</button></div>
                </div>

            </div>
        </div>
        <!-- CONTENT -->
        <!-- MAIN SECTION -->
        <section class="py-5">
            <div id="conteudo-principal" class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="assets/images/bike-trilha.jpg" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Bicicletas para trilha</h5>
                                    <!-- Product price-->
                                    A partir de R$ 1499
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Veja opções</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Sale badge-->
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">
                                Promo</div>
                            <!-- Product image-->
                            <img class="card-img-top" src="assets/images/bicycle-5.png" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Oferta</h5>
                                    <!-- Product reviews-->
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <!-- Product price-->
                                    <span class="text-muted text-decoration-line-through">$R$ 2000</span>
                                    $1499
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Adicionar ao carrinho</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Sale badge-->
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">
                                Promo</div>
                            <!-- Product image-->
                            <img class="card-img-top" src="assets/images/bicycle4.webp" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Oferta Bicicleta eletrica</h5>
                                    <!-- Product price-->
                                    <span class="text-muted text-decoration-line-through">R$ 5500</span>
                                    R$ 5199
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Adicionar ao carrinho</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="assets/images/bicycle-6.jpg" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Bicicleta aro 26</h5>
                                    <!-- Product reviews-->
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <!-- Product price-->
                                    R$ 1599
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Adicionar ao carrinho</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Sale badge-->
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">
                                Promo</div>
                            <!-- Product image-->
                            <img class="card-img-top" src="assets/images/bicycle-7.jpg" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Bicicleta aro 29</h5>
                                    <!-- Product price-->
                                    <span class="text-muted text-decoration-line-through">R$ 4000</span>
                                    R$ 3699
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Adicionar ao carrinho</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="assets/images/bicycle-8.webp" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Bicleta passeio</h5>
                                    <!-- Product price-->
                                    R$ 999
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Adicionar ao carrinho</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Sale badge-->
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">
                                Promo</div>
                            <!-- Product image-->
                            <img class="card-img-top" src="assets/images/bicycle-10.png" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Bicicleta Speed 18 velocidades</h5>
                                    <!-- Product reviews-->
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <!-- Product price-->
                                    <span class="text-muted text-decoration-line-through">R$ 5000</span>
                                    R$ 4499
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Adicionar ao carrinho</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="assets/images/bicycle-11.webp" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Bicicleta Speed 22 velocidades</h5>
                                    <!-- Product reviews-->
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <!-- Product price-->
                                    R$ 5199
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Adicionar ao carrinho</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- MAIN SECTION -->

        <!-- FOOTER -->
        <?php
        include('./pages/footer.php');
        ?>


        <!-- SCRIPTS -->
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
        <script src="./assets/js/scripts.js"></script>
        <script src="assets/js/bootstrap.bundle.js"></script>
</body>

</html>