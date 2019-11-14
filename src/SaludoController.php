<?php

namespace Gabo\Saludo;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SaludoController extends Controller
{
    public function saludo($message = 'Desconocido')
    {
        return "Hola $message, este es mi primer paquete, no lo mires con desprecio, estoy creciendo.";
    }

    public function despedida($message = 'Desconocido')
    {
        return "Hasta luego $message que estes bien, te quiero.";
    }
}
