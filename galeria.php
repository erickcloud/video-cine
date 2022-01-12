<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <title>Video Cine</title>
</head>
<body>

<nav class="nav-extended purple lighten-3">
    <div class="nav-wrapper">
        <ul id="nav-mobile" class="right">
          <li><a href="galeria.php">Galeria</a></li>
          <li><a href="cadastrar.php">Cadastrar</a></li>
      </ul>
    </div>
    <div class="nav-header center">
            <h1>Video Cine</h1>
    </div>
    <div class="nav-content">
      <ul class="tabs tabs-transparent purple darken-1">
        <li class="tab"><a class="active" href="#test1">Todos</a></li>
        <li class="tab"><a href="#test2">Assistidos</a></li>
        <li class="tab"><a href="#test3">Favoritos</a></li>
      </ul>
    </div>
  </nav>

  <div class="row">
        <div class="col s3">
        <div class="card hoverable">
            <div class="card-image">
            <img src="https://www.themoviedb.org/t/p/w300/5LUplLrA0jeIOKhMie4XU54uAIO.jpg">
            <span class="card-title">Jobs</span>
            <a class="btn-floating halfway-fab waves-effect waves-light red">
                <i class="material-icons">favorite_border</i>
            </a>
            </div>
            <div class="card-content">
                <p class="valign-wrapper">
                    <i class="material-icons amber-text">star</i> 9,7
                </p>
                <p>A história da ascensão de Steve Jobs, de rejeitado no colégio até tornar-se um dos mais reverenciados empresários do universo da tecnologia no século 20. A trama passa pela jornada de auto descobrimento da juventude, pelos demônios pessoais que obscureceram sua visão e, finalmente, pelos triunfos que transformaram sua vida adulta.</p>
            </div>
        </div>

      </div>

      <div class="col s3">
        <div class="card hoverable">
            <div class="card-image">
            <img src="https://www.themoviedb.org/t/p/w300/fVzXp3NwovUlLe7fvoRynCmBPNc.jpg">
            <a class="btn-floating halfway-fab waves-effect waves-light red">
                <i class="material-icons">favorite_border</i>
            </a>
            </div>
            <div class="card-content">
                <p class="valign-wrapper">
                    <i class="material-icons amber-text">star</i> 10
                </p>
                <span class="card-title">Homem-Aranha</span>

                <p>Peter Parker é desmascarado e não consegue mais separar sua vida normal dos grandes riscos de ser um super-herói. Quando ele pede ajuda ao Doutor Estranho, os riscos se tornam ainda mais perigosos, e o forçam a descobrir o que realmente significa ser o Homem-Aranha.</p>
            </div>
        </div>

      </div>
  </div>

  
</body>
</html>