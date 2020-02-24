@extends('layouts.app')
@section('content')

<form action="{{route('barang.update',$barang->id)}}" method='post' enctype='multipart/form-data'>
    {{csrf_field()}}
    {{method_field('put')}}


@endsection