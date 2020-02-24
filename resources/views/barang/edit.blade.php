@extends('layouts.app')
@section('content')

<!-- <form action="{{route('barang.update',$barang->id)}}" method='post' enctype='multipart/form-data'>
    {{csrf_field()}}
    {{method_field('put')}}
  <div class="form-group">
    <label for="barang">Kode Barang</label>
    <input type="text" class="form-control" name="kode_barang" value={{$barang->kode_barang}}>
  </div>
  <div class="form-group">
    <label for="barang">Nama Barang</label>
    <input type="text" class="form-control" name="nama_barang" value={{$barang->nama_barang}}>
  </div>
  <div class="form-group">
    <label for="barang">Harga</label>
    <input type="text" class="form-control" name="harga" value={{$barang->harga}}>
  </div>
  <div class="form-group">
    <label for="barang">Id Users</label>
    <input type="text" class="form-control" name="id_users" value={{$barang->id_users}}>
  </div>
  <div class="form-group">
    <label for="barang">Foto</label>
    <input type="file" class="form-control" name="foto">
  </div>
  <button type="submit" class="btn btn-primary">Simpan</button>
</form>
    






 -->

 <div class="container mt-5" >
 <form action="{{route('barang.update',$barang->id)}}" method='post' enctype='multipart/form-data'>
    {{csrf_field()}}
    {{method_field('put')}}


<center>
<h2><img src="">Input Barang</h2></center>

    <div class="fields">
       <label for="barang">Kode Barang</label>
        <div class="text"><input type="text" class="user-input"  name="kode_barang" value={{$barang->kode_barang}}></div>
       
        <label for="barang"> Nama Barang</label>
         <div class="text"><input type="text" class="user-input"   name="nama_barang" value={{$barang->nama_barang}}></div>
         <!-- <label for="barang"> Barang</label>
         <div class="text"><input type="text" class="user-input"  name="harga" value={{$barang->harga}}></div> -->
         <label for="barang">Foto</label>
         <div class="text"><input type="file" class="user-input"  name="foto" value={{$barang->foto}}></div>
         <!-- <label for="barang">id Users</label> -->
         <div class="text"><input type="hidden" class="user-input"  name="id_users" value={{Auth::user()->id}}></div>
        <button class="signin-button">Simpan</button>
    </div>
    </form>
    </div>



 
  
@endsection