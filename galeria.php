<?php include "cabecalho.php" ?>

<?php

$filme1 = [
    "titulo"=>"Jobs: O filme",
    "nota" => 10,
    "sinopse" => "A história da ascensão de Steve Jobs, de rejeitado no colégio até tornar-se um dos mais reverenciados empresários do universo da tecnologia no século 20. A trama passa pela jornada de auto descobrimento da juventude, pelos demônios pessoais que obscureceram sua visão e, finalmente, pelos triunfos que transformaram sua vida adulta.",
    "poster" => "https://www.themoviedb.org/t/p/original/5LUplLrA0jeIOKhMie4XU54uAIO.jpg"
];
$filme2 = [
    "titulo"=>"Homem-Aranha: Sem Volta para Casa",
    "nota" => 10,
    "sinopse" => "Peter Parker é desmascarado e não consegue mais separar sua vida normal dos grandes riscos de ser um super-herói. Quando ele pede ajuda ao Doutor Estranho, os riscos se tornam ainda mais perigosos, e o forçam a descobrir o que realmente significa ser o Homem-Aranha.",
    "poster" => "https://www.themoviedb.org/t/p/w300/fVzXp3NwovUlLe7fvoRynCmBPNc.jpg"
];
$filme3 = [
    "titulo"=>"Star Wars: O livro de Boba Fett",
    "nota" => 10,
    "sinopse" => "Uma emocionante aventura Star Wars que encontra o lendário caçador de recompensas Boba Fett e o mercenário Fennec Shand explorando o submundo da Galáxia quando retornam às areias de Tatooine para reivindicar o território antes governado por Jabba, o Hutt e seu sindicato do crime.",
    "poster" => "https://www.themoviedb.org/t/p/w300/kVelEAAPWMMXCNwsX7YVE8iOlYs.jpg"
];
$filme4 = [
    "titulo"=>"Star Wars: O Mandaloriano",
    "nota" => 10,
    "sinopse" => "A saga de um guerreiro solitário, que também é um mercenário e pistoleiro, viajando pelos territórios esquecidos e marginais do espaço, logo após a queda do Império e antes da criação da temida Primeira Ordem.",
    "poster" => "https://www.themoviedb.org/t/p/w300/A8SP1xPKnq7XunB5Pwwpjm5SrvN.jpg"
];

$filmes = [$filme1 , $filme2, $filme3, $filme4];

?>

<body>

<nav class="nav-extended grey darken-4">
    <div class="nav-wrapper">
        <ul id="nav-mobile" class="right">
          <li class="active"><a href="galeria.php">Galeria</a></li>
          <li><a href="cadastrar.php">Cadastrar</a></li>
      </ul>
    </div>
    <div class="nav-header center">
            <h1>Video Cine</h1>
    </div>
    <div class="nav-content">
      <ul class="tabs tabs-transparent grey darken-2">
        <li class="tab"><a class="active" href="#test1">Todos</a></li>
        <li class="tab"><a href="#test2">Assistidos</a></li>
        <li class="tab"><a href="#test3">Favoritos</a></li>
      </ul>
    </div>
  </nav>

  <div class="row">
    <?php 
        foreach($filmes as $filme) : ?>
        <div class="col s3">
            <div class="card hoverable">
                <div class="card-image">
                <img src="<?= $filme["poster"] ?>">
                <a class="btn-floating halfway-fab waves-effect waves-light red">
                    <i class="material-icons">favorite_border</i>
                </a>
                </div>
                <div class="card-content">
                    <p class="valign-wrapper">
                        <i class="material-icons amber-text">star</i> <?= $filme["nota"] ?>
                    </p>
                    <span class="card-title"><?= $filme["titulo"] ?></span>
                    <p><?= $filme["sinopse"] ?></p>
                </div>
            </div>
        </div>
      <?php endforeach ?>

  </div>
</div>
</div>

  
</body>
</html>