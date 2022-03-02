<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Loja Virtual</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        
        <!-- Styles -->
        <link rel="stylesheet" href="/css/app.css">

        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased" style="min-width: 372px;">
        
        <nav id="navbar" class="navbar navbar-expand-md navbar-dark">
            <div class="container">
                <a href="#" class="navbar-brand"><strong>Moda Feminina</strong></a>
                <button class="navbar-toggler" type="button" data-toggler="collapse" data-target=".navbar-collapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse collapse">
                    <ul class="navbar-nav flex-grow-1">
                        <li class="nav-item">
                            <a href="#" class="nav-link text-white">Principal</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link text-white">Politica de privacidade</a>
                        </li>
                    </ul>
                    <div class="align-self-end">
                        <ul class="navbar-nav flex-grow-1">
                            <li class="nav-item">
                                <a href="#" id="btn_cadastrar" class="nav-link text-white" data-toggle="modal" data-target="#exampleModalCenter">Cadastrar</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link text-white" id="btn_login" data-toggle="modal" data-target="#exampleModalCenter2">Entrar</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                                        <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>  
            </div>
        </nav>

        <header class="container mt-2">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active text-center">
                        <img src="/img/t1.jpg" alt="" class="img-fluid d-none d-lg-inline">
                        <img src="/img/colcci_tamanco_small.jpg" alt="" class="img-fluid d-lg-none d-md-inline">                    
                        <div class="carousel-caption">
                            <h1 class=""><strong>Frete Grátis</strong></h1>
                            <h3 class="pb-md-5 pt-sm-1 pb-sm-0"><strong>Para compras a cima de R$ 100,00</strong></h3>
                        </div>
                    </div>
                    <div class="carousel-item text-center">
                        <img src="/img/tt2.png" alt="" class="img-fluid d-none d-lg-inline">
                        <img src="/img/colcci_tamanco_preto_small.png" alt="" class="img-fluid d-lg-none d-md-inline">
                        <div class="carousel-caption">
                            <h1 class=""><strong>Frete Grátis</strong></h1>
                            <h3 class="pb-md-5 pt-sm-1 pb-sm-0"><strong>Para compras a cima de R$ 100,00</strong></h3>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </header>

        <main class="mb-5 pb-4">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-5 mt-2">
                        <form method="get" class="justify-content-center justify-content-md-start">
                            <div class="input-group">
                                <input type="text" class="search form-control" placeholder="Oque você procura ?">
                                <button id="button_search" class="btn">Buscar</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-12 col-md-7 mt-2">
                        <div class="align-self-end">
                            <nav aria-label="Navegação de página exemplo">
                                <ul class="pagination justify-content-center justify-content-md-end">
                                    <li class="page-item ">
                                    <a class="paginacao page-link" href="#" tabindex="-1">Anterior</a>
                                    </li>
                                    <li class="page-item"><a class="paginacao page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="paginacao page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="paginacao page-link" href="#">3</a></li>
                                    <li class="page-item">
                                    <a class="paginacao page-link" href="#">Próximo</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <hr class="m-2">
                <div class="row">
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 d-flex justify-content-center align-items-stretch">
                        <div class="card text-center mb-3" style="width: 15rem;">
                            <img class="card-img-top" src="/img/calcados/sandalia_colcci_preta.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Sandália Colcci</h5>
                                <p class="card-text">R$ 119,90</p>
                            </div>
                            <div class="card-footer">
                                <a href="#" class="btn adc_carrinho">Adicionar ao carrinho</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 d-flex justify-content-center align-items-stretch">
                        <div class="card mb-3" style="width: 15rem;">
                            <img class="card-img-top" src="/img/calcados/colcci_abobora.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Sandália Colcci</h5>
                                <p class="card-text">R$ 100,00</p>
                            </div>
                            <div class="card-footer">
                                <a href="#" class="btn adc_carrinho">Adicionar ao carrinho</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 d-flex justify-content-center align-items-stretch">
                        <div class="card mb-3" style="width: 15rem;">
                            <img class="card-img-top" src="/img/calcados/salto_colcci.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Salto Alto Colcci</h5>
                                <p class="card-text">R$ 109,00</p>
                            </div>
                            <div class="card-footer">
                                <a href="#" class="btn adc_carrinho">Adicionar ao carrinho</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 d-flex justify-content-center align-items-stretch">
                        <div class="card mb-3" style="width: 15rem;">
                            <img class="card-img-top" src="/img/calcados/colcci_branca.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Sandália Colcci</h5>
                                <p class="card-text">R$ 79,99</p>
                            </div>
                            <div class="card-footer">
                                <a href="#" class="btn adc_carrinho">Adicionar ao carrinho</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 d-flex justify-content-center align-items-stretch">
                        <div class="card mb-3" style="width: 15rem;">
                            <img class="card-img-top" src="/img/calcados/chinelo_colcci_preto.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Chinelo Colcci</h5>
                                <p class="card-text">R$ 84,00</p>
                            </div>
                            <div class="card-footer">
                                <a href="#" class="btn adc_carrinho">Adicionar ao carrinho</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 d-flex justify-content-center align-items-stretch">
                        <div class="card mb-3" style="width: 15rem;">
                            <img class="card-img-top" src="/img/calcados/chinelo_colcci_rosa.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Chinelo Colcci</h5>
                                <p class="card-text">R$ 142,00</p>
                            </div>
                            <div class="card-footer">
                                <a href="#" class="btn adc_carrinho">Adicionar ao carrinho</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 d-flex justify-content-center align-items-stretch">
                        <div class="card mb-3" style="width: 15rem;">
                            <img class="card-img-top" src="/img/calcados/colcci_verde.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Tamanco Colcci</h5>
                                <p class="card-text">R$ 119,90</p>
                            </div>
                            <div class="card-footer">
                                <a href="#" class="btn adc_carrinho">Adicionar ao carrinho</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 d-flex justify-content-center align-items-stretch">
                        <div class="card mb-3" style="width: 15rem;">
                            <img class="card-img-top" src="/img/calcados/rasteira_colcci.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Sandália Colcci</h5>
                                <p class="card-text">R$ 65,00</p>
                            </div>
                            <div class="card-footer">
                                <a href="#" class="btn adc_carrinho">Adicionar ao carrinho</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 d-flex justify-content-center align-items-stretch">
                        <div class="card mb-3" style="width: 15rem;">
                            <img class="card-img-top" src="/img/calcados/sandalia_colcci_papete.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Sandália Colcci</h5>
                                <p class="card-text">R$ 152,00</p>
                            </div>
                            <div class="card-footer">
                                <a href="#" class="btn adc_carrinho">Adicionar ao carrinho</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 d-flex justify-content-center align-items-stretch">
                        <div class="card mb-3" style="width: 15rem;">
                            <img class="card-img-top" src="/img/calcados/sandalia_colcci_josi.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Sandália Colcci</h5>
                                <p class="card-text">R$ 182,00</p>
                            </div>
                            <div class="card-footer">
                                <a href="#" class="btn adc_carrinho">Adicionar ao carrinho</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 d-flex justify-content-center align-items-stretch">
                        <div class="card mb-3" style="width: 15rem;">
                            <img class="card-img-top" src="/img/calcados/chinelo_colcci_brilho.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Sandália Colcci</h5>
                                <p class="card-text">R$ 70,00</p>
                            </div>
                            <div class="card-footer">
                                <a href="#" class="btn adc_carrinho">Adicionar ao carrinho</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 d-flex justify-content-center align-items-stretch">
                        <div class="card mb-3" style="width: 15rem;">
                            <img class="card-img-top" src="/img/calcados/chinelo_colcci_creme.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Chinelo plataform Colcci</h5>
                                <p class="card-text">R$ 94,00</p>
                            </div>
                            <div class="card-footer">
                                <a href="#" class="btn adc_carrinho">Adicionar ao carrinho</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-7 mt-2">
                        <div class="align-self-end">
                            <nav aria-label="Navegação de página exemplo">
                                <ul class="pagination justify-content-center justify-content-md-end">
                                    <li class="page-item ">
                                    <a class="paginacao page-link" href="#" tabindex="-1">Anterior</a>
                                    </li>
                                    <li class="page-item"><a class="paginacao page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="paginacao page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="paginacao page-link" href="#">3</a></li>
                                    <li class="page-item">
                                    <a class="paginacao page-link" href="#">Próximo</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal Cadastro -->
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Cadastre-se</h5>
                            <button type="button" onclick="location.href = '/'" class="close bg-white" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                        <form id="formulario_de_cadastro">
                            @csrf
                            <div class="form-group">
                                <label for="inpuNome">Nome</label>
                                <input type="text" class="search form-control" id="inputNome" placeholder="Seu nome">
                            </div>   
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="email" name="email" class="search input_email form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entre com seu email">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Senha</label>
                                <input type="password" name="password" class="search input_senha form-control" id="exampleInputPassword1" placeholder="Escolha uma senha forte">
                            </div>
                            <div class="form-group">
                                <label for="inpuCep">Cep</label>
                                <input type="text" class="search form-control" id="inputCep" placeholder="Seu cep">
                            </div>                            
                            <div class="form-group">
                                <label for="inputRua">Rua</label>
                                <input type="text" class="search form-control" id="inputRua" placeholder="Nome da rua">
                            </div>
                            <div class="form-group">
                                <label for="inputBairro">Bairro</label>
                                <input type="text" class="search form-control" id="inputBairro" placeholder="Nome do Bairro">
                            </div>
                            <div class="form-group">
                                <label for="inputNumero">Número</label>
                                <input type="Number" class="search form-control" id="inputNumero" placeholder="Número">
                            </div>
                            <div class="form-group">
                                <label for="inputComplemento">Complemento</label>
                                <input type="text" class="search form-control" id="inputComplemento" placeholder="Complemento">
                            </div>
                            <div class="form-group">
                                <label for="inputCidade">Cidade</label>
                                <input type="text" class="search form-control" id="inputCidade" placeholder="Nome da Cidade">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputState">Estado</label>
                                <input type="text" class="search form-control" id="inputEstado" placeholder="Nome do Estado">
                                <!---
                                <select id="inputState" class="search form-control">
                                    <option selected>Escolha</option>
                                    <option>Acre</option>
                                    <option>Alagoas</option>
                                    <option>Amapá</option>
                                    <option>Amazonas</option>
                                    <option>Bahia</option>
                                    <option>Ceará</option>
                                    <option>Distrito Federal</option>
                                    <option>Espírito Santo</option>
                                    <option>Goiás</option>
                                    <option>Maranhão</option>
                                    <option>Mato Grosso</option>
                                    <option>Mato Grosso do Sul</option>
                                    <option>Minas Gerais</option>
                                    <option>Pará</option>
                                    <option>Paraíba</option>
                                    <option>Paraná</option>
                                    <option>Pernambuco</option>
                                    <option>Piauí</option>
                                    <option>Rio de Janeiro</option>
                                    <option>Rio Grande do Norte</option>
                                    <option>Rio Grande do Sul</option>
                                    <option>Rondônia</option>
                                    <option>Roraima</option>
                                    <option>Santa Catarina</option>
                                    <option>São Paulo</option>
                                    <option>Sergipe</option>
                                    <option>Tocantins</option>
                                </select>
                                --->
                            </div>
                            <p class="mt-4 text-danger" id="erros"></p>
                        </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn" onclick="location.href = '/'" data-dismiss="modal">Fechar</button>
                            <button type="button" id="confirmar_cadastro" class="btn">Cadastrar</button>
                        </div>
                    </div>
                </div>
            </div>
            <!--- fim Modal --->
            
            <!-- Modal Login -->
            <div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle2">Entre com suas credênciais</h5>
                            <button type="button" onclick="location.href = '/'" class="close bg-white" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                        <form id="formulario_de_login">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="email" name="email" class="search input_email form-control" id="exampleInputEmail12" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Senha</label>
                                <input type="password" name="password" class="search input_senha form-control" id="exampleInputPassword12">
                            </div>
                            <p class="mt-4 text-danger" id="erros_login"></p>
                        </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn" onclick="location.href = '/'" data-dismiss="modal">Fechar</button>
                            <button type="button" id="confirmar_login" class="btn">Entrar</button>
                        </div>
                    </div>
                </div>
            </div>
            <!--- fim Modal --->
        </main>

        <footer class="border-top text-muted bg-light">
            <div class="container">
                <div class="row py-3">
                    <div class="col-12 col-md-4 text-center text-md-left">
                        &copy; 2021 - Moda Feminina
                    </div>
                    <div class="col-12 col-md-4 text-center text-md-left">
                        <a href="#" class="text-decoration-none ">Politica de Privacidade</a>
                    </div>
                    <div class="col-12 col-md-4 text-center text-dark text-md-rigth">
                        <a href="#" class="text-decoration-none">Administração</a>
                    </div>
                </div>
            </div>
        </footer>
    
    </body>
    <script src="{{ asset('/js/jquery.js') }}"></script>
    <script src="{{ asset('/js/jquery.mask.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="{{ asset('/js/modal_cadastrar.js') }}"></script>
    <script src="{{ asset('/js/validar_inputs_cadastrar.js') }}"></script>
</html>