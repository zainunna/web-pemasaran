<?php

namespace App\Http\Controllers;

use App\models\detilbeli;
use Illuminate\Http\Request;

class DetilbeliController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $detilbeli=detilbeli::orderBy('id','asc')->get();
        return view('detilbeli.index',compact('detilbeli'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('detilbeli.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $detilbeli=new Detilbeli();
        $detilbeli->id_beli=$request->id_beli;
        $detilbeli->id_barang=$request->id_barang;
        $detilbeli->harga=$request->harga;
        $detilbeli->jumlah=$request->jumlah;
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\models\detilbeli  $detilbeli
     * @return \Illuminate\Http\Response
     */
    public function show(detilbeli $detilbeli)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\models\detilbeli  $detilbeli
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {


        $barang=Barang::findOrfail($id);
        return view('barang.edit',compact('barang'));
   
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\models\detilbeli  $detilbeli
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, detilbeli $detilbeli)
    {
             
        $detilbeli=Detilbeli::findOrfail($id);
        $detilbeli->id_beli=$request->id_beli;
        $detilbeli->id_barang=$request->id_barang;
        $detilbeli->harga=$request->harga;
        $detilbeli->jumlah=$request->jumlah;
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\models\detilbeli  $detilbeli
     * @return \Illuminate\Http\Response
     */
    public function destroy(detilbeli $detilbeli)
    {
        //
    }
}
