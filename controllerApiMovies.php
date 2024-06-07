<?php

// Assuming you installed from Composer:
require_once 'vendor/autoload.php';
use Symfony\Component\VarDumper\VarDumper;

require "vendor/autoload.php";
use hmerritt\Imdb;

function searchMovies($search) {
    $imdb = new IMDb();

    return $imdb->search($search, [
        'category'     => 'tt',
        'curlHeaders'  => ['Accept-Language: en-US,en;q=0.5'],
    ]);
}

function infoMovie($id) {
    $imdb = new IMDb();

    return $imdb->film($id, [
        'cache'        => true,
        'curlHeaders'  => ['Accept-Language: en-US,en;q=0.5'],
        'techSpecs'    => true,
    ]);
}

//VarDumper::dump($resultados);