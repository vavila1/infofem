<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buzon;

class BuzonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($indice)
    {
        //
        $historias = Buzon::mostrarHistorias($indice);
        $total = Buzon::contarHistorias();
        return view('buzon',[
            'historias' => $historias,
            'total' => $total,
            'indice'=>$indice,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data = $request->all();
        $response = Buzon::guardarHistoria($data);
        if($response == true){
            return redirect('/buzon_index/1')->with('check','¡Se ha registrado tu historia con éxito!');
        }else{
            return redirect('/buzon_index/1')->with('error','¡Ha ocurrido un error. Inténtalo más tarde!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $historia = Buzon::mostrarHistoria($id);
        if($historia!=null){
            return view('historia',[
                'historia'=>$historia,
            ]);
        }else{
            return redirect('/buzon');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
