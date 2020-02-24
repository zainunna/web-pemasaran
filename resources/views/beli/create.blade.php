@extends('layouts.app')
@section('content')








<div class="container mt-5" >
 <form action="{{route('beli.store')}}" method='post' enctype='multipart/form-data'>
    {{csrf_field()}}
   


<center>
<h2><img src="">Pembelian</h2></center>

    <div class="fields">
       <label for="beli">Kode beli</label>
        <div class="text"><input type="text" class="user-input"  name="kode_beli" placeholder="kode_beli"></div>
       
        <label for="beli"> Siswa</label>
         <div class="text"><input type="text" class="user-input"   name="id_siswa" placeholder="id_siswa"></div>
         <label for="beli"> Pembelian</label>
         <div class="text"><input type="text" class="user-input"  name="total" placeholder="total"></div>
         <label for="beli">Foto Struk </label>
         <div class="text"><input type="file" class="user-input"  name="foto" placeholder="foto"></div>
    
        <button class="btn btn-primary mr-2 mb-2">Simpan</button>
    </div>
    </form>
    </div>

















<!--  
<nav class="teal lighten-1" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo">Form Kontak</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="#">Link 1</a></li>
        <li><a href="#">Link 2</a></li>
        <li><a href="#">Link 3</a></li>
      </ul>
      <ul id="nav-mobile" class="side-nav">
        <li><a href="#">Link 1</a></li>
        <li><a href="#">Link 2</a></li>
        <li><a href="#">Link 3</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">Menu</i></a>
    </div>
  </nav>
  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br><br>
      <form action="" method="post">
      <div class="input-field col s6">
          <i class="material-icons prefix">account_circle</i>
          <input id="icon_prefix" type="text" class="validate" name="nama" required>
          <label for="icon_prefix">Nama Lengkap</label>
     </div>
    <div class="input-field col s6">
          <i class="material-icons prefix">call</i>
          <input id="icon_prefix" type="text" class="validate" name="notelp" required>
          <label for="icon_prefix">Nomor Handphone</label>
    </div>
    <div class="input-field col s6">
          <i class="material-icons prefix">open_in_new</i>
          <input id="icon_prefix" type="text" class="validate" name="website" required>
          <label for="icon_prefix">Website</label>
    </div>
     <div class="input-field col s12">
          <i class="material-icons prefix">comment</i>
          <textarea id="textarea1" class="materialize-textarea" name="pesan" required></textarea>
          <label for="textarea1">Pesan</label>
     </div>
      <div class="row center">
        <button class="btn waves-effect waves-light" type="submit" name="submit">Kirim Pesan<i class="material-icons right">send</i></button>
        <button class="btn waves-effect waves-light" type="reset" name="reset">Reset<i class="material-icons right">subject</i></button>
      </div>
      </form>
      <br><br>
      <div class="row center">
Copyright 2015 <a href="http://tutorialmaterialize.blogspot.co.id" title="Materialize ID">Materialize ID</a>.
    </div>
  </div>
<script src="js/materialize.min.js"></script> -->

@endsection
