<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Turim</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <header>
        <div class="container">
            <img src="{{ asset('imgs/logo.png') }}" class="img_header" alt="">
        </div>
    </header>
    <section class="hero" id="hero">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="text-center">
                        <button class="gravar">Gravar</button>
                        <button class="ler">Ler</button>
                    </div>
                    <div class="row">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control input-nome" id="nome">
                        <button class="btn-incluir" id="incluir">Incluir</button>
                        <h4>Pessoas</h4>
                    </div>

                    <div class="tabelas" id="tabelas">

                    </div>

                </div>
                <div class="col-md-6">
                    <textarea name="" id="json" cols="100" style="width: 100%" class="box">

                    </textarea>
                </div>
            </div>
        </div>
    </section>

    <script src="{{ asset('js/script.js') }}"></script>

</body>

</html>