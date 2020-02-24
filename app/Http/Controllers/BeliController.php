<?php

namespace App\Http\Controllers;


use App\Exports\OrderInvoice;

use App\Customer;

use App\User;

use DB;
use PDF;


use App\models\sementara;
use App\models\beli;
use App\models\barang;
use Illuminate\Http\Request;

class BeliController extends Controller
{

    public function index()
    {
    

        $beli=Beli::orderBy('id','asc')->get();
        return view('beli.index',compact('beli'));
    }


    public function create()
    {
        //
        return view('beli.create');
    }


    public function store(Request $request)
    {
        //
        $beli=new Beli();
        $beli->kode_beli=$request->kode_beli;
        $beli->id_siswa=$request->id_siswa;
        $beli->total=$request->total;
        
        $id= beli::max('id');
   
       if ($id==null)
       {

        $id=0;

       }
       $id++;
        
        $ext= $request->file('foto')->getClientOriginalExtension();
        $namaFile = 'struk00_'.$id.'.'.$ext;
        $beli->foto=$namaFile;
        
        $request->file('foto')->move('storage/upload/img',$namaFile);
        
        $beli->save();
        return redirect()->route('beli.index');
    }

    public function show(beli $beli)
    {

    }


    public function edit($id)
    {
        $barang=Barang::findOrfail($id);
        return view('barang.edit',compact('barang'));
    }


   
    public function destroy(beli $beli)
    {
        //
    }

    public function indexSementara()
    {
    

        $sementara=Sementara::orderBy('id','asc')->get();
        return view('beli.add',compact('sementara'));
    }
    public function addCart(Request $request)
    {
        $sementara=new Sementara();
        $sementara->id_barang=$request->kode_barang;
        $sementara->harga=$request->harga;
        $sementara->jumlah=$request->jumlah;
        // $siswa=\App\models\Siswa::where('id_users',$request->id_users)->get();
        // $sementara->id_siswa=$siswa[0]->id;
        $sementara->save();
        return redirect()->route('beli.add');
    }

    public function addBeli()
    {
        $barang = Barang::orderBy('created_at', 'DESC')->get();
        return view('beli.add', compact('barang'));
    }

    public function getBarang($id)
    {
        $barang = Barang::findOrFail($id);
        return response()->json($barang, 200);
    }

    public function addToCart(Request $request)
    {
        $this->validate($request, [
            'kode_barang' => 'required|exists:barang,id',
            'jumlah' => 'required|integer',
            'harga' => 'required|integer'
        ]);
        
        $barang = Barang::findOrFail($request->kode_barang);
        $getCart = json_decode($request->cookie('cart'), true);

        if ($getCart) {
            if (array_key_exists($request->kode_barang, $getCart)) {
                $getCart[$request->kode_barang]['jumlah'] += $request->jumlah;
                return response()->json($getCart, 200)
                    ->cookie('cart', json_encode($getCart), 120);
            } 
        }

        $getCart[$request->kode_barang] = [
            'kode_barang' => $barang->kode_barang,
            'nama_barang' => $barang->nama_barang,
            'harga' => $barang->harga,
            'jumlah' => $request->jumlah
        ];
        return response()->json($getCart, 200)
            ->cookie('cart', json_encode($getCart), 120);
    }

    public function getCart()
    {
        $cart = json_decode(request()->cookie('cart'), true);
        return response()->json($cart, 200);
    }

    public function removeCart($id)
    {
        $cart = json_decode(request()->cookie('cart'), true);
        unset($cart[$id]);
        return response()->json($cart, 200)->cookie('cart', json_encode($cart), 120);
    }


 //-------------pembatas   
}
