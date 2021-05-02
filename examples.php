<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplos </title>

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


        <div class="row mt-4">
            <div class="col-4">
                <div class="mb-4">
                    <label for="exampleFormControlTextarea1" class="form-label">Salvando o inteiro 10, na memória: </label>
                    <textarea class="form-control" readonly name="first_example" id="first_example" cols="10" rows="5">

                            load 1
                            addi 10
                            store 1
                    </textarea>

                </div>
                <div>
                    <label for="exampleFormControlTextarea1" class="form-label">Fazendo for de 0 até 2: </label>
                    <textarea class="form-control" readonly name="first_example" id="first_example" cols="10" rows="11">
                            load 1
                            subi 2
                            jzero 11
                            load 2
                            addi 10
                            store 2
                            load 1
                            addi 1
                            store 1
                            jump 1
                    </textarea>

                </div>

            </div>
            <div class="col-4">
                <div class="mb-4">
                    <label for="exampleFormControlTextarea1" class="form-label">Fazendo um if A > B: </label>
                    <textarea class="form-control" readonly name="first_example" id="first_example" cols="10" rows="18">
                            load 1 
                            addi 10
                            store 1
                            load 2
                            addi 9
                            store 2
                            load 1
                            sub 2
                            jpos 14
                            load 3
                            addi 0
                            store 3
                            jump 17
                            load 3
                            addi 1
                            store 3
                    </textarea>

                </div>
            </div>
            <div class="col-3">
                <div class="mb-4">
                    <div>
                        <label for="exampleFormControlTextarea1" class="form-label">Instanciando array de três elementos: </label>
                        <textarea class="form-control" readonly name="first_example" id="first_example" cols="10" rows="11">
                            load 1
                            addi 10
                            store 1
                            load 2
                            addi 20
                            store 2
                            load 3
                            addi 30
                            store 3
                    </textarea>

                    </div>

                </div>
            </div>


        </div>

    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <script>
        window.onload = function() {
            document.getElementById('doc_url').setAttribute('href', origin + '/public/doc/documentation.pdf');
        }
    </script>
</body>

</html>