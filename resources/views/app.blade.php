<!doctype html>
<html lang="pt-br">

<head>
    <title>Thplaces</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <!-- Biblioteca de ícones -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- CSS personalizado -->
    <link rel="stylesheet" href="{{url('/')}}/css/style.css">
</head>

<body class="pt-5 ">
    <header>
        <nav class="navbar navbar-expand-sm navbar-light fundo-azul fixed-top">

            <a class="navbar-brand ms-2" href="#"><img src="images/logo-projeto.png " width="100"></a>
            <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                    <li class="nav-item ">
                        <a class="nav-link active" href="#" aria-current="page"><span class="visually-hidden">(current)</span></a>
                    </li>


                    <!-- <li class="nav-item">
                       
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalId">
                            cadastre-se
                        </button>

                        <a href="login.html"><button type="button" class="btn btn-primary">Login</button></a>


                    </li> -->
                </ul>
            </div>
        </nav>
    </header>
    

    @yield('conteudo')


    <!-- place footer here -->

    <footer class="p-5 mt-5 fundo-rodape text-light ">
        <!-- roda pé do site mapa dentro do site -->
        <p>Siga-Me Nas Redes Sociais</p>
        <a href="https://github.com/Thiagofgoliver"><i class="fa-brands fa-github fa-2x"></i></a>
        <a href="https://encurtador.com.br/jBU15"> <i class="fa-brands fa-linkedin fa-2x"></i></a>
        <p>&copy; THIAGO FELIPE - Todos os direitos reservados</p>
    </footer>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
    <!-- Optional: Place to the bottom of scripts -->
    <script src="js/java.js"></script>
</body>

</html>