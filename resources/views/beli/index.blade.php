@extends('layouts.app')
@section('content')
<div class="container">
<table class="table table-sm">
  <thead>
    <tr class='bg-primary'>
    
      <th scope="col" bg-white>Kode Beli</th>
      <th scope="col " font-color="white">TOTAL</th>
      <th scope="col">STRUK BUKTI</th>
      <th scope="col">AKSI</th>

    </tr>
  </thead>
  <tbody>
   @foreach($beli as $b)

     <td>{{$b->kode_beli}}</td>
     <td>{{$b->total}}</td>
    
     <?php
    
     $foto="storage/upload/img/".$b->foto;
     ?>
     <td><img src="{{asset($foto)}}" style="width:160px;height:160px" class="border-rounded"></td>
    
    <td> <form action="{{route('beli.destroy',$b)}} " method="post"    > {{csrf_field()}} {{method_field('delete')}}<button class="btn btn-primary mr-2 mb-2"type="submit" >Hapus</button></form><td>
  </tr>

   @endforeach
  </tbody>
</table>
</div>
    
@endsection
