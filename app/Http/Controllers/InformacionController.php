<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InformacionController extends Controller
{
    public function index($pais, $token){
        return  view('InformacionProducto')
            ->with('pais', $pais)
            ->with('token', $token);
    }
}
