<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EtablissementController extends Controller
{
    public function index(){
        return view('etablissement');
    }
}
