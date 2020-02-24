@extends('layouts.app')
@section('content')

<table class="table table-sm">
  <thead>
    <tr class='bg-danger'>
    
      <th scope="col">Kode Beli</th>
      <th scope="col">TOTAL</th>
      <th scope="col">FOTO</th>

    </tr>
  </thead>
  <tbody>
   @foreach($beli as $b)
   <tr class='bg-primary'>
     <td>{{$b->kode_beli}}</td>
     <td>{{$b->total}}</td>
    
     <?php
    
     $foto="storage/upload/img/".$b->foto;
     ?>
     <td><img src="{{asset($foto)}}" style="width:160px;height:160px" class="border-rounded"></td>
    
    <td> <form action="{{route('beli.destroy',$b)}} " method="post"    > {{csrf_field()}} {{method_field('delete')}}<button style="" type="submit" >Hapus</button></form><td>
  </tr>

   @endforeach
  </tbody>
</table>
    
@endsection
