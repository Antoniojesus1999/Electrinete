<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function inicio(){return view('index');}
    public function precios(){return view('precios');}
    public function notaLegal(){return view('notaLegal');}
    public function politica(){return view('politica');}
    public function manual(){return view('manual');}
    public function bici(){return view('bici');}
    public function bicielectrica(){return view('bicielectrica');}
    public function patinete(){return view('patin');}
}
