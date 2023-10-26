<?php

namespace Controllers;
use MVC\Router;

class PropiedadController {
    public static function index(Router $router) {
        $router->render('propiedades/admin', [
            'mensaje' => 'Desde la vista'
        ]);
    }
    public static function crear() {
        echo "Desde crear";
    }
    public static function actualizar() {
        echo "Desde actualizar";
    }
}