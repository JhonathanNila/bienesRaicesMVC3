<?php

namespace Model;

class Vendedor extends ActiveRecord {
    protected static $tabla = 'vendedores';
    protected static $columnasDB = ['id', 'nombre', 'apellido', 'telefono'];
    public $id;
    public $nombre;
    public $apellido;
    public $telefono;

    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->nombre = $args['nombre'] ?? '';
        $this->apellido = $args['apellido'] ?? '';
        $this->telefono = $args['telefono'] ?? '';
    }

    public function validar() {
        if(!$this->nombre) {
            self::$errores[] = "Debes añadir nombre de Vendedor(a)";
        }
        if(!$this->apellido) {
            self::$errores[] = "Debes añadir apellido de Vendedor(a)";
        }
        if(!$this->telefono) {
            self::$errores[] = "Debes añadir teléfono de Vendedor(a)";
        }else if(!preg_match('/[0-9]{10}/', $this->telefono)) {
            self::$errores[] = "Formato de télefono no válido";
        }
        return self::$errores;
    }
}