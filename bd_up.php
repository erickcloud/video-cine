<?php

$bd = new SQLite3("filmes.db");

$sql = "DROP TABLE IF EXISTS filmes";

if ($bd->exec($sql))
 echo "\ntabela filmes apagada\n"; 


$sql = "CREATE TABLE filmes (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        titulo VARCHAR(200) NOT NULL,
        poster VARCHAR(200),
        sinopse TEXT,
        nota DECIMAL(2,1)
    )
 ";

if ($bd->exec($sql))
 echo "\ntabela filmes criada\n"; 
else 
echo "\nerro ao criar tabela filmes\n"; 


$sql = "INSERT INTO filmes (id, titulo, poster, sinopse, nota) VALUE (
        0,
        'Jobs: O filme',
        'https://www.themoviedb.org/t/p/original/5LUplLrA0jeIOKhMie4XU54uAIO.jpg',
        'A história da ascensão de Steve Jobs, de rejeitado no colégio até tornar-se um dos mais
         reverenciados empresários do universo da tecnologia no século 20. A trama passa pela 
         jornada de auto descobrimento da juventude, pelos demônios pessoais que obscureceram 
         sua visão e, finalmente, pelos triunfos que transformaram sua vida adulta.',
        10.0
    )";

if ($bd->exec($sql))
 echo "\nfilmes inseridos com sucesso\n"; 
else 
echo "\nerro ao inserir filmes\n"; 

$sql = "INSERT INTO filmes (id, titulo, poster, sinopse, nota) VALUE (
    1,
    'Homem-Aranha: Sem Volta para Casa',
    'https://www.themoviedb.org/t/p/w300/fVzXp3NwovUlLe7fvoRynCmBPNc.jpg',
    'Peter Parker é desmascarado e não consegue mais separar sua vida normal dos grandes riscos
     de ser um super-herói. Quando ele pede ajuda ao Doutor Estranho, os riscos se tornam ainda
      mais perigosos, e o forçam a descobrir o que realmente significa ser o Homem-Aranha.',
    10.0
)";

if ($bd->exec($sql))
 echo "\nfilmes inseridos com sucesso\n"; 
else 
echo "\nerro ao inserir filmes\n"; 

?>