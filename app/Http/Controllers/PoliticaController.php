<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PoliticaController extends Controller
{
    public function index($pais, $token){
        return  view('politicaPrivacidad')
            ->with('pais', $pais)
            ->with('token', $token);
    }
}
