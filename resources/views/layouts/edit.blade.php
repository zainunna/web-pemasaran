@extends('layouts.app')
@section('content')

<form action="{{route('barang.update',$barang->id)}}" method='post' enctype='multipart/form-data'>
    {{csrf_field()}}
    {{method_field('put')}}

    <div class="fields">
       <label for="barang">Kode Barang</label>
        <div class="text"><input type="text" class="user-input"  name="kode_barang" value={{$barang->kode_barang}}></div>
       
        <label for="barang"> Nama Barang</label>
         <div class="text"><input type="text" class="user-input"   name="nama_barang" value={{$barang->nama_barang}}></div>
          
         <label for="barang">Foto</label>
         <div class="text"><input type="file" class="user-input"  name="foto" value={{$barang->foto}}></div>
         <label for="barang">id Users</label>
         <div class="text"><input type="text" class="user-input"  name="id_users" value={{$barang->id_users}}></div>
        <button class="signin-button">Simpan</button>


@endsection