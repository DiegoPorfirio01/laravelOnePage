<?php

namespace App\Http\Controllers;

use App\Http\Requests\NovidadeRequest;
use App\Models\Novidade;

class NovidadeController extends Controller
{


    public function index(){

        $novidades = Novidade::All()->sortBy('title');
        return view('novidades.index',['novidades' => $novidades]); 
    }

    public function create(){

        return view('novidades.create');
    }

    public function destroy($id) {

       $delete = Novidade::find($id);
       $delete->delete();

        return redirect('/novidades');

    }

    public function store(NovidadeRequest $request) {

        $novidade = new Novidade;

        $novidade->title = $request->title;
        $novidade->description = $request->description;
        $novidade->date = $request->date;
        // Image Upload
        if($request->hasFile('image') && $request->file('image')->isValid()) {

            $requestImage = $request->image;

            $searchString = " ";
            $replaceString = "";
            $originalString = $requestImage->getClientOriginalName(); 
            $outputString = str_replace($searchString, $replaceString, $originalString);
            $imageName = $outputString;
            $requestImage->move(public_path('assets/img/novidades'), $imageName);

            $novidade['image'] = $imageName;

        }

        $novidade->save();

        return redirect('/novidades');

    }

    public function edit($id){
    
        $novidade = Novidade::find($id);
        return view('novidades.create', ['novidade' => $novidade]);
        
    }

    public function update(NovidadeRequest $request) {

        $novidade = $request->all();

        // Image Upload
        if($request->hasFile('image') && $request->file('image')->isValid()) {

            $requestImage = $request->image;

            $searchString = " ";
            $replaceString = "";
            $originalString = $requestImage->getClientOriginalName(); 
            $outputString = str_replace($searchString, $replaceString, $originalString);
            $imageName = $outputString;
            $requestImage->move(public_path('assets/img/novidades'), $imageName);

            $novidade['image'] = $imageName;

        }
        Novidade::findOrFail($request->id)->update($novidade);

        return redirect("/novidades");
    
    }
    
}
