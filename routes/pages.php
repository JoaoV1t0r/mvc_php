<?php

use \App\Http\Router;
use \App\Http\Response;
use \App\Controller\Pages;


$obRouter = new Router(URL);

//ROTA HOME
$obRouter->get('/', [
    function () {
        return new Response(200, Pages\Home::getHome());
    }
]);

//ROTA SOBRE
$obRouter->get('/sobre', [
    function () {
        return new Response(200, Pages\Sobre::getSobre());
    }
]);

//ROTA DINÂMICA
$obRouter->get('/pagina/{idPagina}/{acao}', [
    function ($idPagina, $acao) {
        return new Response(200, 'Página ' . $idPagina . ' - ' . $acao);
    }
]);
