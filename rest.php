<?php 
    require 'Slim/Slim.php';
    \Slim\Slim::registerAutoloader();
    $app = new \Slim\Slim();
    
    $app->config(array(
        'templates.path' => 'vistas',
    ));
    $app->contentType('text/html; charset=utf-8');

    
    // REST 
    $app->get("/", function () {
        //Retorname algun dato
        echo "<h1>Hola elmer</h1>";
    });
    
    $app->post('/books', function () {
        //Create book
        echo 'Se creara el librito ';
    });
    $app->put('/book/:id', function ($id) {
        echo 'Se Actualizara el registro con id : '.$id;
    });
    $app->delete('/bookDelete/:id', function ($id) {
        echo 'S eliminara el registro con id :'.$id;
    });

    $app->run();
    
 ?>