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

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-92JQ4VB5LL"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-92JQ4VB5LL');
    </script>
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">SIMPLANG</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="/algorithms.php">ALGORITMOS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" target="_blank" href="#" id="doc_url">Documentação</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/examples.php">Exemplos</a>
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


            <div class="col-12 col-md-4 mt-2 text-center">
                <div class="alert alert-danger d-none" id="error_log" role="alert"></div>
                <div class="alert alert-success d-none" id="success_log" role="alert"></div>
                <div class="btn-group">
                    <button class="btn btn-primary" id="compile_btn">Executar</button>
                    <button class="btn btn-secondary" id="step_btn">Passo a Passo</button>
                    <button class="btn btn-danger" id="stop">Parar</button>
                </div>
                <button type="button" class="btn btn-outline-primary btn-lg mt-3 disabled">
                    Valor do registrador <span class="badge bg-secondary" id="register_text">0</span>
                </button>
                <button type="button" class="btn btn-outline-success mt-3" data-bs-toggle="modal" data-bs-target="#modal_save_alg">Salvar Algoritmo</button>
            </div>

            <div class="col-12 col-md-4 text-center" id="mem_col">
                <h5>Memória</h5>
                <ul class="list-group" id="">
                    <li class="list-group-item disabled" aria-disabled="true">Address - Value</li>
                    <div id="memoryList">

                    </div>
                </ul>
            </div>
        </div>

    </div>


    <div class="modal" id="modal_save_alg" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Salvar Algoritmo</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" id="username" aria-describedby="usernameHelp">
                            <div id="usernameHelp" class="form-text">Seus algoritmos serão associados a este username</div>
                        </div>
                        <div class="mb-3">
                            <label for="alg_name" class="form-label">Nome do algoritmo</label>
                            <input type="text" class="form-control" id="alg_name">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="button" id="save_algorithm" data-bs-dismiss="modal" class="btn btn-success">Salvar</button>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <!-- The core Firebase JS SDK is always required and must be listed first -->
    <script src="https://www.gstatic.com/firebasejs/8.6.1/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.6.1/firebase-database.js"></script>


    <!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->

    <script>
        // Your web app's Firebase configuration
        var firebaseConfig = {
            apiKey: "AIzaSyABkwsK-IEhFpwRcw8TtSVhAnPGBXkOm7s",
            authDomain: "simplang-69b7f.firebaseapp.com",
            databaseURL: "https://simplang-69b7f-default-rtdb.firebaseio.com",
            projectId: "simplang-69b7f",
            storageBucket: "simplang-69b7f.appspot.com",
            messagingSenderId: "661645233856",
            appId: "1:661645233856:web:72fdd4fecc8b86a4bf2725"
        };
        // Initialize Firebase
        firebase.initializeApp(firebaseConfig);

        function findGetParameter() {
            let res = location.search.split('code=')[1];
            return res?decodeURI(res):false;
        }
    </script>
</body>

</html>


<script src="./public/js/main.js"></script>
<script src="./public/js/save_code.js"></script>