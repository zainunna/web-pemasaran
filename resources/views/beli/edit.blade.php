@extends('layouts.app')
@section('content')
s








<div class="container mt-5" >
 <form action="{{route('beli.update',$beli->id)}}" method='post' enctype='multipart/form-data'>
    {{csrf_field()}}
    {{method_field('put')}}


<center>
<h2><img src="">Pembelian</h2></center>

    <div class="fields">
       <label for="beli">Kode beli</label>
        <div class="text"><input type="text" class="user-input"  name="kode_beli" value={{$beli->kode_beli}}></div>
       
        <label for="beli"> Siswa</label>
         <div class="text"><input type="text" class="user-input"   name="id_siswa" value={{$beli->id_siswa}}></div>
         <label for="beli"> Pembelian</label>
         <div class="text"><input type="text" class="user-input"  name="total" value={{$beli->total}}></div>
         <label for="beli">Foto</label>
         <div class="text"><input type="file" class="user-input"  name="foto" value={{$beli->foto}}></div>
    
        <button class="signin-button">Simpan</button>
    </div>
    </form>
    </div>







@endsection