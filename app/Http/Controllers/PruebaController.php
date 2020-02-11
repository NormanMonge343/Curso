<?php 

namespace Trypticon\Http\Controllers;

use Trypticon\Http\Controllers\Controller;

class PruebaController extends Controller {
    public function prueba ($param){
        return ' Esto es un parametro ' . $param;
    }
}