<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>Wiki Dog - Labrador</title>
    <meta property="og:title" content="Wiki Dog - Labrador" />
    <meta property="og:site_name" content="Wiki Dog - Labrador" />
    <meta httpEquiv="content-language" content="pt-br" />
    <meta name="keywords" content="wiki,cachorros,raças" />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Wiki Dog: Informações sobre Labrador" />
    <meta name="author" content="Gabriel Medeiros e Erisvan Junior" />
    <meta property="og:type" content="article" />
    <meta property="og:description" content="Wiki Dog: Informações sobre Labrador" />
    <meta property="og:url" content="http://127.0.0.1:5500/" />
    <meta property="og:type" content="website" />

    <link rel="icon" type="image/x-icon"  href="{{asset('favicon.ico')}}">
    <link href="{{asset('bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('style.css')}}" rel="stylesheet">
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
        <!-- Page Content-->
        <section class="py-5">
            <div class="container px-5 my-5">
                <div class="row gx-5 justify-content-left">
                    <div class="col-lg-6">
                        <div class="text-left mb-5">
                            <h1 class="fw-bolder">Labrador</h1>
                            <p class="lead fw-normal text-muted mb-0">
                                A raça é descendente do “Cão de Saint-Jones”, habitante da ilha de Terra Nova, no
                                Canadá, durante o século 18. A partir de cruzamentos com Pointer, Setter, Spaniel e
                                outros perdigueiros, os criadores de Labradores aperfeiçoaram as suas características de
                                olfato aguçado e velocidade.
                            </p>
                            <br />
                            <h3>Condição física</h3>
                            <p class="lead fw-normal text-muted mb-0">
                                O Labrador Retriever é um excelente nadador, pois possui membrana interdigital em suas
                                patas, o que torna o nado mais rápido. Sua pelagem é um pouco oleosa, o que o mantém
                                aquecido e o ajuda a flutuar e a se secar. O focinho desse cão também é bem desenvolvido
                                e por isso possui um olfato excelente.
                            </p>
                            <br />
                            <h3>Curiosidades</h3>
                            <p class="lead fw-normal text-muted mb-0">
                                O cachorro Labrador é irresistível para quem ama animais. Uma raça muito simpática, que
                                ama agradar seus companheiros humanos e fazer a alegria da casa. Além de fiel, se bem
                                treinado, pode dar um excelente suporte a pessoas com necessidades especiais e
                                deficientes físicos.

                                Além do temperamento, sua aparência também é encantadora! O Labrador chocolate é muito
                                conhecido, mas a raça também pode ter cores amarelo e preto. Seus olhos demonstram que
                                estão realmente sempre atentos e ativos.

                                Certamente, a principal característica dessa raça é a sua paixão por água e ausência de
                                agressividade ou timidez. É o cão perfeito para quem tem um quintal espaçoso em casa,
                                porque ele ama brincar e correr.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="justify-content-right mb-5">
                            <div class="card h-100 shadow border-0">
                                <img class="card-img-top" src="../images/labrador.jpg" alt="..." />
                                <div class="card-body p-4">
                                    <h5 class="card-title mb-3">Labrador</h5>
                                    <ul>
                                        <li>
                                            <p class="card-text mb-0">Expectativa de vida: 13 anos</p>
                                        </li>
                                        <li>
                                            <p class="card-text mb-0">Média de altura: 57cm</p>
                                        </li>
                                        <li>
                                            <p class="card-text mb-0">Média de peso: 30kg</p>
                                        </li>
                                        <li>
                                            <p class="card-text mb-0">Fofura: Médio</p>
                                        </li>
                                        <li>
                                            <p class="card-text mb-0">Grande Porte</p>
                                        </li>
                                    </ul>
                                    <p class="card-text mb-0">
                                        São cães fiéis, obedientes e de excelente faro e agilidade
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row gx-5">
                    <div class="col-lg-6">
                        <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i
                                class="bi bi-share"></i>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- Footer-->
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
