<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
        crossorigin="anonymous"></script>

</head>

<body class="d-block align-items-center py-4 ">

    <div class="container p-2">
        <div class="logo-form d-flex py-sm-5">
            Cadastro
        </div>
    </div>

    <div class="container p-2">
        <div class="logo-form d-flex py-sm-5">
            <div class="cadastro-column" style="border: 1px solid">
                <div id="cadastro-box">
                    <form id="cadastro-form" class="form-group">
                        <div class="mb3 input-group flex-nowrap">
                            <span class="p-2"><i class="fa fa-user"></i></span>
                            <input type="text" name="nome" class="form-control border border-0 border-bottom"
                                id="floatingNome" placeholder="Nome">
                        </div>
                        <div class="mb3 input-group flex-nowrap">
                            <span class="p-2"><i class="fa fa-envelope"></i></span>
                            <input type="email" name="email" class="form-control border border-0 border-bottom"
                                id="floatingEmail" placeholder="Email">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <main class="w-100 m-auto">
        <div>
            <form action="">
                <input type="text" placeholder="nome" name="nome">
            </form>
        </div>

    </main>


</body>

</html>