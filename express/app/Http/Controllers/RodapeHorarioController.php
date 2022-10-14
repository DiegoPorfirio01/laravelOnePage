<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RodapeHorario;

class RodapeHorarioController extends Controller
{
    public function edit($id){

        $rodapehorario = RodapeHorario::find($id);

        return view('rodapehorarios.edit', ['rodapehorario' => $rodapehorario]);

    }

    public function update(Request $request) {

        $data = $request->all();

        RodapeHorario::find($request->id)->update($data);

        return redirect('/rodapehorarios/1/edit')->with('msg', 'Editado com sucesso!');

    }
}
