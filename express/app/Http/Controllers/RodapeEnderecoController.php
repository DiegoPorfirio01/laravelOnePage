<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RodapeEndereco;

class RodapeEnderecoController extends Controller
{
    public function edit($id){

        $rodapeendereco = RodapeEndereco::find($id);

        return view('rodapeenderecos.edit', ['rodapeendereco' => $rodapeendereco]);

    }

    public function update(Request $request) {

        $data = $request->all();

        RodapeEndereco::find($request->id)->update($data);

        return redirect('/rodapeenderecos/1/edit')->with('msg', 'Editado com sucesso!');

    }
}
