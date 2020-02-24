<?php

namespace App\Http\Controllers;

use App\models\barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //controller 
        $barang=Barang::orderBy('id','desc')->get();
        return view('barang.index',compact('barang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //mengembalikan nilai 
        return view('barang.create'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $barang=new Barang();
        $barang->kode_barang=$request->kode_barang;
        $barang->nama_barang=$request->nama_barang;
      
        $kasir=\App\models\Kasir::where('id_users',$request->id_users)->get();
        $barang->id_kasir=$kasir[0]->id;
        
        
        $id= Barang::max('id');
   
       if ($id==null)
       {
       $id=0;

       }
       $id++;
        
    
        

        $ext= $request->file('foto')->getClientOriginalExtension();
        $namaFile = 'P00_'.$id.'.'.$ext;
        $barang->foto=$namaFile;


        
        $request->file('foto')->move('storage/upload/img',$namaFile);
        
       


        $barang->save();
        return redirect(route('barang.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\models\barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function show(barang $barang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\models\barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $barang=Barang::findOrfail($id);
        return view('barang.edit',compact('barang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\models\barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
        $barang=Barang::findOrfail($id);
        $barang->kode_barang=$request->kode_barang;
        $barang->nama_barang=$request->nama_barang;

        $kasir=\App\models\Kasir::where('id_users',$request->id_users)->get();
        $barang->id_kasir=$kasir[0]->id;



        
        $id= Barang::max('id');
   
       if ($id=null)
       {
       $id=0;

       }
       $id++;
        
    
        
       
        $ext= $request->file('foto')->getClientOriginalExtension();
        $namaFile = 'P00_'.$id.'.'.$ext;
        $barang->foto=$namaFile;


        
        $request->file('foto')->move('storage/upload/img',$namaFile);
        
        $barang->save();
        return redirect(route('barang.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\models\barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function destroy(barang $barang)
    {
        //
    }
}
