<!doctype html>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

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
            <div class="col-12 col-md-4 mt-2 text-center">
                <button type="button" class="btn btn-primary disabled">
                    Valor do registrador <span class="badge bg-secondary" id="register_text">0</span>
                </button>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center mt-5">
                <div class="alert alert-danger d-none" id="error_log" role="alert"></div>

                <button class="btn btn-primary" id="compile_btn">Executar</button>
                <button class="btn btn-primary" id="step_btn">Passo a Passo</button>
                <button class="btn btn-danger" id="stop">Parar</button>
            </div>

        </div>


    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

</body>

</html>

<script src="./public/js/main.js"></script>