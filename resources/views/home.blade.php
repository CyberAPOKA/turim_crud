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

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

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
                    <form action="{{ route('gravar') }}" method="post" id="formFamily">
                        @csrf
                        <input type="hidden" name="nameForm" id="inputForm">

                    </form>
                    <button type="submit" class="gravar" form="formFamily">Gravar</button>
                    <button class="ler"><a class="ler" href="{{ route('ler')}}">Ler</a></button>
                    <div class="row form-all">
                        <div class="col-md-6">
                            <div class="form-group row form-name">
                                <div class="col-md-2">
                                    <label for="nome">Nome</label>
                                </div>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" name="nome" id="nome">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="btn-group">
                                <button type="button" class="btn-incluir" id="incluir">Incluir
                                    <i class="bi bi-plus-lg"></i>
                                </button>
                            </div>
                        </div>
                        <h4 class="text-center">Pessoas</h4>
                    </div>
                    <div class="tabelas" id="tabelas">
                    </div>

                </div>
                <div class="col-md-6">
                    <textarea name="" id="json" cols="100" disabled style="width: 100%" class="box">

                    </textarea>
                </div>
            </div>
        </div>
    </section>

    <script>
        const textarea = @json($data);
    </script>

    <script src="{{ asset('js/script.js') }}"></script>

</body>

</html>
