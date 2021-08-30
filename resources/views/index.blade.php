<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>Wiki Dog</title>
    <meta property="og:title" content="Wiki Dog"/>
    <meta property="og:site_name" content="Wiki Dog"/>
    <meta property="og:image" content="public/favicon.ico"/>
    <meta httpEquiv="content-language" content="pt-br"/>
    <meta name="keywords" content="wiki,cachorros,raças"/>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description"
          content="Pesquise as características do cachorro que você viu e encontraremos a raça dele!"/>
    <meta name="author" content="Gabriel Medeiros e Erisvan Junior"/>
    <meta property="og:type" content="article"/>
    <meta property="og:description"
          content="Pesquise as características do cachorro que você viu e encontraremos a raça dele!"/>
    <meta property="og:url" content="http://127.0.0.1:5500/"/>
    <meta property="og:type" content="website"/>

    <link rel="icon" type="image/x-icon" href="public/favicon.ico">
    <link href="{{ asset('bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('style.css') }}" rel="stylesheet">
</head>

<body class="d-flex flex-column h-100">
<main class="flex-shrink-0">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container px-5">
            <a class="navbar-brand" href="{{ url('/') }}">Wiki Dog</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation"><span
                    class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Início</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Header-->
    <header class="bg-dark py-5">
        <div class="container px-5">
            <div class="row gx-5 align-items-center justify-content-center">
                <div class="col-lg-8 col-xl-7 col-xxl-6">
                    <div class="my-5 text-center text-xl-start">
                        <h1 class="display-5 fw-bolder text-white mb-2">Encontre a raça de cachorro que você deseja
                        </h1>
                        <p class="lead fw-normal text-white-50 mb-4">Nos conte características do cachorro para que
                            possamos achá-lo. Aponte ao menos uma característica e traremos uma lista de raças que
                            atendem ao padrão desejado.</p>
                    </div>
                </div>
                <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center">
                    <img class="img-fluid rounded-3 my-5"
                         src="{{ asset('images/dog-deitado.jpeg')}}" alt="..."/>
                </div>
            </div>
        </div>
    </header>
    <section class="py-5" id="features">
        <div class="container px-5 my-5">
            <div class="row">
                <h6 class="fw-bolder">Aplique seus filtros aqui:</h6>
                <div class="col-sm-6">
                    <label for="inlineFormInputName2"></label>
                    <input type="text" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2"
                           placeholder="Busca">
                </div>
                <div class="col-sm">
                    <div class="mb-3">
                        <select class="form-select" aria-label="Selecione o porte do animal">
                            <option selected>Porte</option>
                            <option value="small">Pequeno</option>
                            <option value="medium">Médio</option>
                            <option value="big">Grande</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="mb-3">
                        <select class="form-select" aria-label="Selecione a expectativa de vida do animal">
                            <option selected>Expectativa de Vida</option>
                            <option value="less10">até 10 anos</option>
                            <option value="between10and15">entre 10 e 15 anos</option>
                            <option value="between15and20">entre 15 e 20 anos</option>
                            <option value="more20">mais de 20 anos</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <h6 class="fw-bolder">Características:</h6>
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="docil" id="docil">
                                <label class="form-check-label" for="docil">
                                    Dócil
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="amigavel" id="amigavel">
                                <label class="form-check-label" for="amigavel">
                                    Amigável
                                </label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="peludo" id="peludo">
                                <label class="form-check-label" for="peludo">
                                    Peludo
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="calmo" id="calmo">
                                <label class="form-check-label" for="calmo">
                                    Calmo
                                </label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="cao_caca" id="cao_caca">
                                <label class="form-check-label" for="cao_caca">
                                    Cão de Caça
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="cao_guia" id="cao_guia">
                                <label class="form-check-label" for="cao_guia">
                                    Cão Guia
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container px-5 my-5">
                <div class="text-center mb-5">
                    <h1 class="fw-bolder">Raças Encontradas</h1>
                    <p class="lead fw-normal text-muted mb-0">Pelas características informadas encontramos</p>
                </div>
                <div class="row gx-5">
                    <div class="col-lg-6">
                        <div class="position-relative mb-5">
                            <img class="img-fluid rounded-3 mb-3" src=""
                                 style="height: 50vh;"/>
                            <br/>
                            <a class="h3 fw-bolder text-decoration-none link-dark stretched-link"
                               href="{{ url('detalhes') }}">Labrador</a>
                        </div>
                    </div>
                </div>
            </div>
    </section>
</main>
<footer class="bg-dark py-4 mt-auto">
    <div class="container px-5">
        <div class="row align-items-center justify-content-between flex-column flex-sm-row">
            <div class="col-auto">
                <div class="small m-0 text-white">Copyright &copy; Wiki Dog 2021</div>
            </div>
        </div>
    </div>
</footer>

<script src="{{asset('bootstrap.js')}}" defer></script>
<script src="{{asset('script.js')}}" defer></script>
</body>

</html>
