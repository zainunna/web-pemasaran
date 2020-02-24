@extends('layouts.app')
@section('content')

   @foreach($barang as $b)
 
     <?php
    
     $foto="storage/upload/img/".$b->foto;
     ?>
    


  <div class="site-section" id="next">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-4 text-center" data-aos="fade-up" data-aos-delay="">
            <img src="{{asset($foto)}}" style="width:160px;height:160px" class="border-rounded" alt="Free Website Template by Free-Template.co"style="width:80px;height:80px"class="img-fluid w-25 mb-4">
            <h3 class="card-title">{{$b->nama_barang}}</h3>
            <p>{{$b->harga}}</p>
          </div> 
          <br>

   @endforeach

    
@endsection
