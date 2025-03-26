<?php
require './classes/Filmes.php';

$titulo = 'CineBox - Inicio';
include './includes/Header.php';
include './includes/banner.php';


$filmes = new Filmes();
$dadosFilmes = $filmes->exibirlistaFilmes(8);


include './includes/filme_lista.php';

include './includes/footer.php';