<?php

namespace App\Http\Controllers;

use App\Http\Requests\DepoimentoRequest;
use App\Models\Depoimento;

class DepoimentoController extends Controller
{
    public function index(){

        $depoimentos = Depoimento::All()->sortBy('title');
        return view('depoimentos.index',['depoimentos' => $depoimentos]); 
    }

    public function create(){

        return view('depoimentos.create');
    }

    public function destroy($id) {

       $delete = Depoimento::find($id);
       $delete->delete();

        return redirect('/depoimentos');

    }

    public function store(DepoimentoRequest $request) {

        $depoimento = new Depoimento;

        $depoimento->title = $request->title;
        $depoimento->description = $request->description;
        $depoimento->date = $request->date;
        // Image Upload

        $depoimento->save();

        return redirect('/depoimentos');

    }

    public function edit($id){
    
        $depoimento = Depoimento::find($id);
        return view('depoimentos.create', ['depoimento' => $depoimento]);
        
    }

    public function update(DepoimentoRequest $request) {

        $depoimento = $request->all();
        Depoimento::findOrFail($request->id)->update($depoimento);

        return redirect("/depoimentos");
    
    }
}
