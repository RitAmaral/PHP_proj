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
      /* Design do hover / quando passamos por cima do h1 e do title card */
      .hover:hover{
          background-color:#AF5EC4;
          padding: 1px;
      }

    </style>
  </head>
  <body>
    <main class="container">

        <center><div class="hover"><h1>Aqui vão aparecer os empregados</h1></div></center>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Morada</th>
                    <th scope="col">Localidade</th>
                    <th scope="col">Criado em</th>
                    <th scope="col">Alterado em</th>
                </tr>
            </thead>
            <tbody>
                
                <tr>
                    <th scope="row">{{$empregado->id}}</th> 
                    <td>{{$empregado->nome}}</td>
                    <td>{{$empregado->morada}}</td>
                    <td>{{$empregado->localidade}}</td>
                    <td>{{$empregado->created_at}}</td>
                    <td>{{$empregado->updated_at}}</td>
                </tr>
                
            </tbody>
        </table>
        <br>
        <!-- Title Card -->
        <div class="card hover" style="width: 18rem;">
          <img src="" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">{{$empregado->nome}}</h5>
            <p class="card-text"><u>{{$empregado->nome}}</u> is a cool person, that lives in <u>{{$empregado->morada}}</u>, in the beautiful city of <u>{{$empregado->localidade}}</u>. </p>
            <a href="https://www.google.com/" target="_blank" class="btn btn-primary">Google</a>
          </div>
        </div>

    </main>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>
