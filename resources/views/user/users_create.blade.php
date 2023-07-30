<!-- Esta página é o que vemos quando carregamos no botão Adicionar Utilizador -->

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <title>Utilizadores</title>
    <style>

      body{
        background-color: lightblue;
      }

      h1{
        border-bottom: 2px solid #EB93C6;
        padding: 10px;
        text-shadow: 5px 5px 10px #EB93C6;
      }
      /* Design do hover / quando passamos por cima do h1 */
      .hover:hover{
          background-color:#EB93C6;
          padding: 1px;
      }

    </style>
  </head>
  <body>
    <main class="container">

        <center><div class="hover"><h1>Adicionar Utilizador</h1></div></center>
        
        <!--para cada um dos erros (as error): -->
        <!-- @foreach($errors->all() as $error)
            <li style="list-style-type: '&#9888;'";> {{$error}} </li>
        @endforeach -->
        
        <!-- métodos: get ou post: get aparece no endereço os campos; o post não aparece-->
        <form method="post" action="{{route('user.store')}}"> <!-- depois de carregar no botão, vamos querer guardar os dados, por isso colocamos .store e não .create-->
            <!-- Método para validar se os dados estão a sair deste formulário: csrf -->
            @csrf <!-- para protecção -> link: https://laravel.com/docs/10.x/csrf -->
            <div class="form-group">
                <label for="name">Nome</label> <!-- em baixo, só quero que apareça a classe "in-invalid" se houve erro no nome -->
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{old('name')}}"> <!--"name" é o nome do campo da base de dados-->
                @error('name')
                <div class="invalid-feedback">
                  {{$message}}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{old('email')}}">
                @error('email')
                <div class="invalid-feedback">
                  {{$message}}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{old('password')}}">
                @error('password')
                <div class="invalid-feedback">
                  {{$message}}
                </div>
                @enderror
            </div>
        <button type="submit" class="btn btn-primary">Adicionar Utilizador</button>
        </form>

    </main>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>
