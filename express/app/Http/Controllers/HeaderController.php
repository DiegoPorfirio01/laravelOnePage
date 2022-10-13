<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Header;

class HeaderController extends Controller
{
    public function edit($id){

        $header = Header::find($id);

        return view('header.edit', ['header' => $header]);

    }

    public function update(Request $request) {

        $data = $request->all();

        // Image Upload
        if($request->hasFile('image') && $request->file('image')->isValid()) {

            $requestImage = $request->image;

            $searchString = " ";
            $replaceString = "";
            $originalString = $requestImage->getClientOriginalName(); 
            $outputString = str_replace($searchString, $replaceString, $originalString);
            $imageName = $outputString;
            $requestImage->move(public_path('img/header'), $imageName);

            $data['image'] = $imageName;

        }

        Header::find($request->id)->update($data);

        return redirect('/header/1/edit')->with('msg', 'Editado com sucesso!');

    }
}
