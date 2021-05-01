<!doctype html>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" sizes="57x57" href="./public/img/favicons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="./public/img/favicons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="./public/img/favicons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="./public/img/favicons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="./public/img/favicons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="./public/img/favicons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="./public/img/favicons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="./public/img/favicons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="./public/img/favicons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="./public/img/favicons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./public/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="./public/img/favicons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./public/img/favicons/favicon-16x16.png">
    <link rel="manifest" href="./public/img/favicons/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="./public/img/favicons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <link rel="stylesheet" href="./lib/codemirror.css">
    <link rel="stylesheet" href="./lib/theme/mdn-like.css">
    <link rel="stylesheet" href="./public/css/style.css">

    <script src="./lib/codemirror.js"></script>
    <script src="./lib/mode/javascript/javascript.js"></script>

    <title>SimpLang</title>
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">SIMPLANG</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">IDE</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" target="_blank" href="https://github.com/wandersonsousa">Mais
                                projetos</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="row mt-4" id="app_row">
            <div class="col-12 col-md-4 border-end" id="codeeditor">
                <h5>Código</h5>
            </div>
            <div class="col-12 col-md-4">
                <h5>Memória</h5>
                <ul class="list-group" id="">
                    <li class="list-group-item disabled" aria-disabled="true">Address - Value</li>
                    <div id="memoryList">

                    </div>
                </ul>
            </div>
            <div class="col-12 col-md-4 mt-2 ">
                <div class="alert alert-danger d-none" id="error_log" role="alert"></div>
                <button type="button" class="btn btn-primary disabled">
                    Valor do registrador <span class="badge bg-secondary" id="register_text">0</span>
                </button>
                <div class="btn-group mt-4">
                    <button class="btn btn-primary" id="compile_btn">Executar</button>
                    <button class="btn btn-secondary" id="step_btn">Passo a Passo</button>
                    <button class="btn btn-danger" id="stop">Parar</button>
                </div>

            </div>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

</body>

</html>

<script src="./public/js/main.js"></script>