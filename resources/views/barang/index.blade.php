@extends('layouts.app')
@section('content')





   <section class="site-section" id="agents-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-7 text-left">
            <h2 class="section-title mb-3">Galeri Produk Smenza </h2>
            <p class="lead">Menampilkan Produk Produk dari Bisi Smenza Menampilkan Produk Produk dari Bisi Smenza Menampilkan Produk Produk dari Bisi Smenza Menampilkan Produk Produk dari Bisi Smenza </p>
          </div>
        </div>

        <div class="col-lg-6 ml-auto">
            
        <a href="{{route('barang.create')}}"><h2 ><div class="btn btn-primary mr-2 mb-2">Tambah Produk</div></h2></a>
            </div>


        <div class="row">
          
        @foreach($barang as $b)
          <div class="col-md-6 col-lg-4 mb-4">
            <div class="team-member">
              <figure>
              <?php
    
              $foto="storage/upload/img/".$b->foto;
              ?>

      
              <img src="{{asset($foto)}}" style="width:450px;height:200px"  alt="Free website template by Free-Template.co" class="img-responsive" >
              </figure>

              <div class="p-3">
                <h3 class="mb-2">{{$b->nama_barang}}</h3>
                <a href="{{route('barang.edit',$b->id)}}"><span class="btn btn-primary mr-2 mb-2" > Update</span></a>
              </div>
            </div>
          </div>
          @endforeach

        </div>
      </div>
    </section>
    





@endsection
