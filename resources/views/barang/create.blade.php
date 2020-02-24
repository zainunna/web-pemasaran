@extends('layouts.app')
@section('content')




<!-- <div class="container mt-5" >
<center>
<h2><img src="">Input Barang</h2></center>

<div class="fields">
<form action="{{route('barang.store')}}" method='post' enctype='multipart/form-data' > 
    {{csrf_field()}}

    <div class="fields">
  <div class="form-group">
    <label for="barang">Kode Barang</label>
    <input type="text" class="user-input" name="kode_barang" placeholder="kode barang">
  </div>
  <div class="form-group">
    <label for="barang">Nama Barang</label>
    <input type="text" class="form-control" name="nama_barang">
  </div>
  <div class="form-group">
    <label for="barang">Harga</label>
    <input type="text" class="form-control" name="harga">
  </div>
  <div class="form-group">
    <label for="barang">Id Users</label>
    <input type="text" class="form-control" name="id_kasir">
  </div>
  <div class="form-group">
    <label for="barang">Foto</label>
    <input type="file" class="form-control" name="foto">
  </div>
</div>
  <button type="submit" class="signin-button">Tambah</button>
  </div>
</form> -->

</div> 

<div class="container mt-5" >
<center>
<h2><img src="">Input Barang</h2></center>

<div class="fields">
<form action="{{route('berita.store')}}" method='post' enctype='multipart/form-data' > 
    {{csrf_field()}}

        <div class="text"><input type="text" class="user-input" placeholder="Kode Barang" name="kode_barang"/></div>
        <div class="text"><input type="text" class="user-input" placeholder="Nama Barang"  name="nama_barang"/></div>
        
        <div class="text"><input type="file" class="user-input" placeholder="Foto" name="foto"/></div>
        <div class="text"><input type="hidden" class="user-input" placeholder="Id Kasir" name="id_users" value="{{Auth::user()->id}}"/></div>
        <button class="signin-button">Simpan</button>
        </div>
</form>

</div>









@endsection