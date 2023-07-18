@extends('appprincipal')


@section('conteudo')
<nav class="navbar navbar-expand-sm navbar-light fundo-azul fixed-top">

    <a class="navbar-brand ms-2" href="#"><img src="images/logo-projeto.png " width="100"></a>
    <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId"
        aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
            <li class="nav-item ">
                <strong>Olá {{Auth()->user()->name}}</strong>
            </li>

            <li class="nav-item ">
                <a class="nav-link active" href="#" aria-current="page"><span
                        class="visually-hidden">(current)</span></a>
            </li>

            <!-- inicio botao do off canvas -->
            <button class="btn  fundo-azul" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
                aria-controls="offcanvasRight"> <i class="fa-solid fa-user-gear"></i></button>

            <!-- final do botao off-canvas -->

            <li class="nav-item">


                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a class="nav-link text-light" href="{{ route('logout') }}" onclick="event.preventDefault();
         this.closest('form').submit(); " role="button">
                        <div class="">
                            <i class="fa-solid fa-arrow-right-from-bracket"></i>
                        </div>
                    </a>
                </form>

            </li>
        </ul>
    </div>
</nav>



<main>
    <aside>
        <figure>
            <section id="mapa">
                <div class="container mt-5 ">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="card">
                                <img class="card-img-top card" src="images/logo-projeto.png" alt="Title">
                                <div class="card-body">

                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">
                                            <a href=""><i class="fa-sharp fa-solid fa-location-dot"></i></a> </span>
                                        <input type="text" class="form-control text-gelo"
                                            placeholder="escreva sua localização" aria-label="Username"
                                            aria-describedby="basic-addon1">
                                    </div>

                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1"> <a href=""> <i
                                                    class="fa-solid fa-car"></i></a></span>
                                        <input type="text" class="form-control text-gelo"
                                            placeholder="escreva serviço desejado" aria-label="Username"
                                            aria-describedby="basic-addon1">
                                    </div>

                                    <div class="mb-3 form-check">
                                        <a href=""> <img src="images/imagem-localização-atual.png"
                                                width="25px">localização atual</a>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <!-- maps -->
                        <div class="col-md-8"> <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3667.730035758775!2d-45.860918726335726!3d-23.1800511790636
                7!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cc4bc860146b3f%3A0x3f46f39d9e59d193
                !2sR.%20Saigiro%20Nakamura%20-%20Vila%20Industrial%2C%20S%C3%A3o%20Jos%C3%A9%20dos%20Campos%20-%20SP%2C%2012220- 
                280!5e0!3m2!1spt    
                -BR!2sbr!4v1682443395607!5m2!1spt-BR!2sbr" width="100%" height="400" style="border:0;"
                                allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>


                    </div>

            </section>
    </aside>
</main>


<div class="container text-center">
    <div class="row align-items-start">
        <div class="col">
            <h1>

                <strong>
                    <p class="texto-locais">
                        Locais proximos a sua localização: {{Auth()->user()->cidade}}
                    </p>
                </strong>


            </h1>
        </div>
    </div>
</div>



<!-- off canvas -->

<div class="offcanvas offcanvas-end  fundo-azul-offcanvas " tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
      <header class="rodapé-off-canvas"> <div class="offcanvas-header">
       

        <h5 id="offcanvasRightLabel">
         <img src="images/logo-projeto.png" width="100"></h5>
         
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        
      </div>
    </header>

    <div class="offcanvas-body">
       
       <p><button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#modalId">
        <i class="fa-solid fa-location-arrow fa-spin fa-spin-reverse fa-xl">
            
        </i></button>indique</p>  
       <hr>

       <p> <a href="{{ route('indicacao') }}"><i class="fa-solid  fa-xl fa-pen-to-square"></i> </a>   minhas indicações </p>
       <hr>
    </div>
</div>
<!-- off canvas -->



<!-- card serviços proximos -->


<div class="container text-center">
    <div class="row align-items-start">
        <div class="col">




            <div class="row row-cols-1 row-cols-md-4 g-4">
                @foreach($indicacaos as $indicacao)

                <div class="col">
                    <div class="card">
                        <div class="cor-docard ">
                            <div class="card-body">
                                <div class="mb-3">
                                    <strong>
                                        <h5 class="card-title texto-serviços">serviços proximos</h5>
                                    </strong>
                                    <label for="exampleFormControlInput1" class="form-label"></label>
                                    <input type="text" readonly class="form-control" id="exampleFormControlInput1"
                                        placeholder="{{ $indicacao->nome }}" name="nome">
                                </div>

                                <!--tipo-->
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label"></label>
                                    <input type="text" readonly name="tipo" class="form-control"
                                        id="exampleFormControlInput1" placeholder="{{ $indicacao->tipo }}">
                                </div>

                                <!--campo nome da rua-->
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label"></label>
                                    <input type="text" readonly name="rua" class="form-control"
                                        id="exampleFormControlInput1" placeholder="{{ $indicacao->rua }}">
                                </div>

                                <!--campo bairro-->
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label"></label>
                                    <input type="text" readonly name="bairro" class="form-control"
                                        id="exampleInputPassword1" placeholder="{{ $indicacao->bairro }}">
                                </div>
                                <!--final campo bairro-->
                            </div>
                        </div>

                    </div>
                </div>
                @endforeach
            </div>

        </div>
    </div>
</div>
<!-- final card serviços proximos -->

<footer class="p-5 mt-5 fundo-rodape-principal text-light ">
    <!-- roda pé do site mapa dentro do site -->
    <p>Siga-Me Nas Redes Sociais</p>
    <a href="https://github.com/Thiagofgoliver"><i class="fa-brands fa-github fa-2x"></i></a>
    <a href="https://encurtador.com.br/jBU15"> <i class="fa-brands fa-linkedin fa-2x"></i></a>
    <p>&copy; THIAGO FELIPE - Todos os direitos reservados</p>
</footer>




<!-- modal indique -->

<div class="modal fade form-com-fundo-preto" id="modalId" tabindex="-1" data-bs-backdrop="static"
    data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTitleId">indique um local</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <h3>sua Localização Atual {{Auth()->user()->cidade}}</h3>



                <form action="{{route('store')}}" method="post">
                    @csrf
                    <!--nome-->
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label"></label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="nome"
                            name="nome">
                    </div>
                    <!--final campo nome-->

                    <!--campo tipo de serviço-->
                    <select name="tipo" id="tipo">
                        <option require>Auto eletrica</option>
                        <option require>Borracharia</option>
                        <option require>Oficina mecanica</option>
                        <option require>Oficina suspensão</option>
                        <option require>funilaria e pintura </option>
                        <option require>Auto peças</option>
                        <!-- final campo tipo de serviço-->
                    </select>
                    <!--final campo data de nascimento-->
                    <!--campo nome da rua-->
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label"></label>
                        <input type="text" name="rua" class="form-control" id="exampleFormControlInput1"
                            placeholder="Nome da Rua">
                    </div>

                    <!--final campo nome da rua-->
                    <!--campo bairro-->
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label"></label>
                        <input type="text" name="bairro" class="form-control" id="exampleInputPassword1"
                            placeholder="Bairro">
                    </div>
                    <!--final campo bairro-->

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label"></label>
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="cidade"
                            name="cidade">
                    </div>

                    <div>

                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </div>


                    

                </form>


            </div>
        </div>
    </div>
</div>

@endsection