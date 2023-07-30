<!-- Esta página é o que vemos quando carregamos no botão ver da página users -->

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <title>Empregados</title>
    <style>

      body{
        background-color: lightblue;
      }
      h1{
        border-bottom: 2px solid #AF5EC4;
        padding: 10px;
        text-shadow: 5px 5px 10px #AF5EC4;
      }
      .hover:hover{
          background-color:#AF5EC4;
          padding: 1px;
      }

    </style>
  </head>
  <body>
    <main class="container">

        <center><div class="hover"><h1>Edição de registo dos empregados</h1></div></center>
        <!-- métodos: get ou post: get aparece no endereço os campos; o post não aparece-->
        <form method="post" action="{{route('empregado.update', $empregado->id)}}"> <!-- action é como href, mas no form só usamos action-->
            <!-- Método para validar se os dados estão a sair deste formulário: csrf -->
            @csrf <!-- para protecção -> link: https://laravel.com/docs/10.x/csrf -->
            @method ('put') <!-- o método no html é post, mas no php/laravel é 'put'-->
            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" class="form-control @error('nome') is-invalid @enderror" name="nome" value="{{$empregado->nome}}"> <!--"nome" é o nome do campo da base de dados-->
                @error('nome')
                <div class="invalid-feedback">
                  {{$message}}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="morada">Morada</label>
                <input type="text" class="form-control @error('morada') is-invalid @enderror" name="morada" value="{{$empregado->morada}}">
                @error('morada')
                <div class="invalid-feedback">
                  {{$message}}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="localidade">Localidade</label>
                <input type="text" class="form-control @error('localidade') is-invalid @enderror" name="localidade" value="{{$empregado->localidade}}">
                @error('localidade')
                <div class="invalid-feedback">
                  {{$message}}
                </div>
                @enderror
            </div>
        <button type="submit" class="btn btn-primary">Gravar alteração</button>
        </form>

    </main>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>
