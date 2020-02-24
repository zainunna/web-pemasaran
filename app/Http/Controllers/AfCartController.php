<?php

namespace App\Http\Controllers;

use App\models\Kamar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Session;
use App\models\Cart;

class AfCartController extends Controller
{   
    // public function postCOut(Request $request)
    // {
    //     if (!Session::has('cart')) {
    //         return redirect()->route('shop.shoppingCart');
    //     }
    //     $oldCart = Session::get('cart');
    //     $cart = new Cart($oldCart);
    //     Stripe::setApiKey('sk_test_fwmVPdJfpkmwlQRedXec5IxR');
    //     try {
    //         $charge = Charge::create(array(
    //             "amount" => $cart->totalPrice * 100,
    //             "currency" => "usd",
    //             "source" => $request->input('stripeToken'), // obtained with Stripe.js
    //             "description" => "Test Charge"
    //         ));
    //         $order = new Order();
    //         $order->cart = serialize($cart);
    //         $order->address = $request->input('address');
    //         $order->name = $request->input('name');
    //         $order->payment_id = $charge->id;
            
    //         Auth::user()->orders()->save($order);
    //     } catch (\Exception $e) {
    //         return redirect()->route('checkout')->with('error', $e->getMessage());
    //     }
    //     Session::forget('cart');
    //     return redirect()->route('product.index')->with('success', 'Successfully purchased products!');
    // }
    // // public function getCheckout()
    // // {
    // //     if (!Session::has('cart')) {
    // //         return view('shop.shopping-cart');
    // //     }
    // //     $oldCart = Session::get('cart');
    // //     $cart = new Cart($oldCart);
    // //     $total = $cart->totalPrice;
    // //     //$jumlah=$cart->
    // //     return view('shop.checkout', ['total' => $total]);
    // // }

    // // public function getCart(){
    // //     if (!Session::has('cart')) {
    // //         return view('kamar.cart');
    // //     }
    // //     $oldC=Session::get('cart');
    // //     $cart=new Cart($oldC);
    // //     return view('pesan.cart',['dKamar'=>$cart->items, 'biaya'=>$cart->tPrice, 'total'=>$cart->tQty]);
    // // }
    // public function getROne($id){
    //     $oldC=Session::has('cart')?Session::get('cart'):null;
    //     $cart=new Cart($oldC);
    //     $cart->rOne($id);

    //     if (count($cart->items)>0) {
    //         Session::put('cart',$cart);
    //     }else{
    //         Session::forget('cart');
    //     }
    //     return redirect()->route('kamar.cart');
    // }
    // public function getRItem($id){
    //     $oldC=Session::has('cart')?Session::get('cart'):null;
    //     $cart=new Cart($oldC);
    //     $cart->rItem($id);

    //     if (count($cart->items)>0) {
    //         Session::put('cart',$cart);
    //     }else{
    //         Session::forget('cart');
    //     }
    //     return redirect()->route('kamar.cart');
    // }
    public function search(Request $request){
        //dd(Session::get('cart'));
        if (Session::has('cart')) {
            $oldC=Session::get('cart');
            $cart=new Cart($oldC);
            return view('pesan.cart',['dKamar'=>$cart->items, 'biaya'=>$cart->tPrice, 'total'=>$cart->tQty]);
        }else{
            return view('kamar.search');
        }
    }
    public function where(Request $request){
        session()->put('namaPemesan',$request->namaPemesan);
        session()->put('jumlah',$request->jumlah);
        session()->put('masuk',$request->masuk);
        session()->put('keluar',$request->keluar);
        $where="id NOT IN(SELECT pesan.id_kamar FROM pesan inner join d_pesan on pesan.id=d_pesan.id_pesan where (masuk BETWEEN '".session()->get('masuk')."' and '".session()->get('keluar')."') OR ('".session()->get('masuk')."' BETWEEN masuk and keluar)) and id_dest=1";
        $kamar=  DB::table('kamar')
        ->select('*')
        ->whereRaw($where)
        ->orderBy('kamar.id')
        ->get();
        // dd($kamar);
        return view('kamar.where', compact('kamar'));
    }

    // /**
    //  * Display a listing of the resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    
    // public function getAddC(Request $request,$id){
    //     //return 'as';
    //     $kamar=Kamar::find($id);
    //     echo 'hii :';
        
    //     $oldC=Session::has('cart')?Session::get('cart'):null;
    //     //echo '~~~~~~~~~~ldc :'.$oldC;
    //     //dd($oldC);
    //     //dd(Session::has('cart'));

    //     //~~~~~~~~~~~~~
    //     $cart=new Cart($oldC);
    //     $cart->add($kamar, $kamar->id);

    //     $request->session()->put('cart',$cart);
    //     return redirect()->route('kamar.cart');
    // }

    public function index(Request $request)
    {
        // session()->put('namaPemesan',$request->namaPemesan);
        // session()->put('jumlah',$request->jumlah);
        // session()->put('masuk',$request->masuk);
        // session()->put('keluar',$request->keluar);
        // $where="id NOT IN(SELECT id_kamar FROM pesan inner join d_pesan on pesan.id=d_pesan.id_pesan where (masuk BETWEEN '".session()->get('masuk')."' and '".session()->get('keluar')."') OR ('".session()->get('masuk')."' BETWEEN masuk and keluar)) and id_dest=1";
        // $kamar=  DB::table('kamar')
        // ->select('*')
        // ->whereRaw($where)
        // ->orderBy('kamar.id')
        // ->get();
        // return view('kamar.index', compact('kamar'));
        $kamar=Kamar::orderBy('id','ASC')->get();
        return view('kamar.index', compact('kamar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kamar.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $max= Kamar::max('id');
        $id=++$max;
        //if($request->file('foto')!=null){
        //$foto = $request->file('foto');
        //membaca extensi file gambar
        $ext = $request->file('foto')->getClientOriginalExtension();
        //$old = $request->file('foto')->getClientOriginalName();
        //memberi file menggunakan no anggota
        //$namaFile = 'profil_'.$kamar->id.'_'.$old;
        $namaFile = 'kamar_'.$id.'.'.$ext;
        //menyimpan ke folder public/foto/...
        $request->file('foto')->move('storage/upload/img', $namaFile);       

        $kamar=new Kamar();
        $kamar->id=$id;
        $kamar->nama=$request->nama;
        $kamar->foto=$namaFile;
        $kamar->harga=$request->harga;
        $kamar->bed=$request->bed;
        $kamar->deskripsi=$request->deskripsi;
        $kamar->id_dest=$request->id_dest;
        $kamar->save();

        return redirect()->route('kamar.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\models\Kamar  $kamar
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kamar= Kamar::findOrFail($id);
        return view('kamar.show', compact('kamar'));
        //return $kamar->id;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\models\Kamar  $kamar
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kamar= Kamar::findOrFail($id);
        return view('kamar.edit', compact('kamar'));
        //return $kamar->id;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\models\Kamar  $kamar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $kamar= Kamar::findOrFail($id);
        // $max= Kamar::max('id');
        // $id=++$max;
        if($request->file('foto')!=null){
        //$foto = $request->file('foto');
        //membaca extensi file gambar
        $ext = $request->file('foto')->getClientOriginalExtension();
        //$old = $request->file('foto')->getClientOriginalName();
        //memberi file menggunakan no anggota
        //$namaFile = 'profil_'.$kamar->id.'_'.$old;
        $namaFile = 'kamar_'.$kamar->id.'.'.$ext;
        //menyimpan ke folder public/foto/...
        $request->file('foto')->move('storage/upload/img', $namaFile);
        }

        if($request->file('foto')!=null){
        $kamar->foto=$namaFile;
        }
        $kamar->nama=$request->nama;
        $kamar->harga=$request->harga;
        $kamar->bed=$request->bed;
        $kamar->deskripsi=$request->deskripsi;
        $kamar->id_dest=$request->id_dest;
        $kamar->save();

        return redirect()->route('kamar.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\models\Kamar  $kamar
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return $id;
    }
}
