<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Header;
use App\Models\Novidade;
use App\Models\Depoimento;
use App\Models\RodapeContato;
use App\Models\RodapeEndereco;
use App\Models\RodapeHorario;

class IndexController extends Controller
{
    public function index(){

        $header = Header::find(1);
        $rodapeContato = RodapeContato::find(1);
        $rodapeEndereco = RodapeEndereco::find(1);
        $rodapeHorario = RodapeHorario::find(1);
        $novidades = Novidade::All();
        $depoimentos = Depoimento::All();

        return view('index', ['header' => $header, 'novidades' => $novidades, 'depoimentos' => $depoimentos, 'rodapeContato' => $rodapeContato, 'rodapeEndereco' => $rodapeEndereco, 'rodapeHorario' => $rodapeHorario ]);
    }
}
