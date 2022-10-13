<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Header;
use App\Models\Novidade;
use App\Models\Depoimento;

class IndexController extends Controller
{
    public function index(){

        $header = Header::find(1);
        $novidades = Novidade::All();
        $depoimentos = Depoimento::All();

        return view('index', ['header' => $header, 'novidades' => $novidades, 'depoimentos' => $depoimentos]);
    }
}
