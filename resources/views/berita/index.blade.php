@extends('layouts.app')
@section('content')

<section class="site-section" id="news-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <h2 class="section-title mb-3">Berita  &amp; Info Lomba</h2>
          </div>
        </div>

        <div class="row">
          
        @foreach($berita as $b)

          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <div class="h-entry">
            <?php
    
              $foto="storage/upload/img/berita/".$b->foto;
              ?>
              <a href="single.html"><img src="{{asset($foto)}}"  style="width:450px;height:200px" alt="Free website template by Free-Template.co" class="img-fluid"></a>
              <h2 class="font-size-regular"><a href="single.html" class="text-dark">{{$b->judul}}</a></h2>
              <div class="meta mb-4">Allison Holmes <span class="mx-2">&bullet;</span> Jan 18, 2019<span class="mx-2">&bullet;</span> <a href="single.html">News</a></div>
            </div> 
            
           <a href="{{route('berita.edit','$b->id')}}" class="btn btn-primary mr-2 mb-2">Edit Lomba </a>
           <a href="{{route('berita.destroy','$b->id')}}" class="btn btn-primary mr-2 mb-2">Delete Lomba </a>
          </div> 
          @endforeach
        </div>
      </div>
    </section>

@endsection
