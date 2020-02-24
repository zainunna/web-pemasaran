@extends('layouts.app')
@section('content')


    <div class="container mt-5" >
            <center><h2><img src="">Input Info  Berita Dan Lomba</h2></center>

        <div class="fields">
            <form action="{{route('berita.store')}}" method='post' enctype='multipart/form-data' > 
            {{csrf_field()}}
                <div class="text"><input type="text" class="user-input" placeholder="Judul" name="judul"/></div>
                <div class="text"><input type="textarea" class="user-input" placeholder="Isi Berita"  name="isi"/></div>
                <div class="text"><input type="file" class="user-input" placeholder="Foto" name="foto"/></div>
                <div class="text"><input type="hidden" class="user-input" placeholder="Id Guru" name="id_users" value="{{Auth::user()->id}}"/></div>
                <button class="signin-button">Simpan</button>
            </form>

        </div>
    </div>

@endsection

