<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RodapeContato;

class RodapeContatoController extends Controller
{
    public function edit($id){

        $rodapecontato = RodapeContato::find($id);

        return view('rodapecontatos.edit', ['rodapecontato' => $rodapecontato]);

    }

    public function update(Request $request) {

        $data = $request->all();

        // Image Upload
            RodapeContato::find($request->id)->update($data);

        return redirect('/rodapecontatos/1/edit')->with('msg', 'Editado com sucesso!');

    }
}
