<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\models\berita;
class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $berita=Berita::orderBy('id','desc')->get();
        return view('berita.index',compact('berita'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('berita.create'); 
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
        $berita=new Berita();
        $berita->judul=$request->judul;
        $berita->isi=$request->isi;
        
        $guru=\App\models\Guru::where('id_users',$request->id_users)->get();
        $berita->id_guru=$guru[0]->id;
        $id= Berita::max('id');
   
       if ($id==null)
       {
       $id=0;

       }
       $id++;
        
    
        

        $ext= $request->file('foto')->getClientOriginalExtension();
        $namaFile = 'Berita00_'.$id.'.'.$ext;
        $berita->foto=$namaFile;


        
        $request->file('foto')->move('storage/upload/img/berita',$namaFile);
        $berita->save();
        return redirect(route('berita.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\models\berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function show(berita $berita)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\models\berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function edit(berita $berita)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\models\berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, berita $berita)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\models\berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function destroy(berita $berita)
    {
        //
    }
}
