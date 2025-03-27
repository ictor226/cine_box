<?php
require './classes/Filmes.php';
require './classes/Generos.php';

$titulo = 'CineBox - Inicio';
include './includes/Header.php';
include './includes/banner.php';


$filmes = new Filmes();
$dadosFilmes = $filmes->exibirlistaFilmes(8);

$bob = new Generos();
$dadosGeneros = $bob->consultarlistaGeneros();


include './includes/filme_lista.php';

include './includes/footer.php';