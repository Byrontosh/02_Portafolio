<?php

namespace App\Http\Controllers;

use App\Models\Portafolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PortafolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portafolios = Portafolio::all();

        return view('portafolio.index',compact('portafolios'));


    }

    public function datosPortafolio()
    {
        $portafolios = Portafolio::all();

        return view('welcome',compact('portafolios'));
    }


    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('portafolio.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'nombre'=>'required|max:50',
            'descripcion'=>'required|string|max:50',
            'categoria'=>'required | string | max:15',
            'imagen'=>'required | max:2000 | mimes:jpge,png,jpg',
            'video'=>'required  | max:100',
        ],[
            'required'=>'El campo :attribute es obligatorio',
            'imagen.mimes'=>'La imagen debe ser de tipo: jpge, png, jpg.',
        ]);



        Portafolio::create([
            'nombre'=> request('nombre'),
            'descripcion'=> request('descripcion'),
            'categoria'=> request('categoria'),
            'imagen'=> request()->file('imagen')->store('images','public'),
            'url'=> request('video')
        ]);

        return redirect()->route('portafolio');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $portafolio = Portafolio::find($id);
        return view('portafolio.show',compact('portafolio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $portafolio = Portafolio::find($id);

        return view('portafolio.edit',compact('portafolio'));


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Portafolio $portafolio)
    {
        if(request()->hasFile('imagen'))
        {
            Storage::disk('public')->delete($portafolio->imagen);

            $portafolio->update([
                'nombre'=> request('nombre'),
                'descripcion'=> request('descripcion'),
                'categoria'=> request('categoria'),
                'imagen'=> request()->file('imagen')->store('images','public'),
                'url'=> request('video')
            ]);
        }
        else
        {
            $portafolio->update([
                'nombre'=> request('nombre'),
                'descripcion'=> request('descripcion'),
                'categoria'=> request('categoria'),
                'url'=> request('video')
            ]);
        }
        return redirect()->route('show',$portafolio);


    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Portafolio $portafolio)
    {
        Storage::disk('public')->delete($portafolio->imagen);
        $portafolio ->delete();
        return redirect()->route('portafolio');
    }


}
