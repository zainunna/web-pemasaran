@extends('layouts.app')
@section('content')

​
@section('title')
    <title>Transaksi</title>
@endsection
​
@section('css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
@endsection
​
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Transaksi</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                          
                            <li class="breadcrumb-item active">Transaksi</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
​
        <section class="content" id="dw">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        @card
                            @slot('title')
                            
                            @endslot
                             <div class="row">
                                <div class="col-md-4">
                                    
                                     <!-- SUBMIT DIJALANKAN KETIKA TOMBOL DITEKAN -->
                                     <form action="#" @submit.prevent="addToCart" method="post">
                                        <div class="form-group">
                                            <label for="kode_barang">Produk</label>
                                                <select name="kode_barang" id="kode_barang" class="form-control" required width="100%">
                                                    <option value="">Pilih</option>
                                                    @foreach ($barang as $b)
                                                    <option value="{{ $b->kode_barang }}">{{ $b->kode_barang }} - {{ $b->nama_barang }}</option>
                                                    @endforeach
                                                </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Jumlah</label>
                                                <input type="number" name="jumlah" id="jumlah" value="1" min="1" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="harga">Harga</label>
                                                <input type="number" name="harga" id="harga" value="1" min="1"  class="form-control">
                                        </div>
                         
                                        <div class="form-group">
                                            <button class="btn btn-primary btn-sm"
                                                :disabled="submitCart"
                                                >
                                                <i class="fa fa-shopping-cart"></i> @{{ submitCart ? 'Loading...':'Ke Keranjang' }}
                                            </button>
                                        </div>
                                
                                <!-- MENAMPILKAN DETAIL PRODUCT -->
                                <div class="col-md-5">
                                    <h4>Detail Produk</h4>
                                    <div v-if="nama_barang">
                                        <table class="table table-stripped">

                                            <tr>
                                                <th width="3%">Produk</th>
                                                <td width="2%">:</td>
                                                <td>@{{ b.kode_barang }}</td>
                                            </tr>
                                            
                                            <tr>
                                                <th width="3%">Nama Produck</th>
                                                <td width="2%">:</td>
                                                <td>@{{ b.nama_barang }}</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>

                                <!-- MENAMPILKAN IMAGE DARI PRODUCT -->
                                <div class="col-md-3" v-if="b.foto">
                                    <img :src="'/uploads/' + b.foto" 
                                        height="150px" 
                                        width="150px"
                                        :alt="b.nama_barang">
                                </div>
                            </div>
                            @slot('footer')
​
                            @endslot
                        @endcard
                        </div>
                    
                    <!-- MENAMPILKAN LIST PRODUCT YANG ADA DI KERANJANG -->
                        <div class="col-md-4">
                        @card
                            @slot('title')
                            Keranjang Belanja
                            @endslot
​
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Produk</th>
                                        <th>Harga</th>
                                        <th>Jumlah</th>
                                        <th>Total</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- MENGGUNAKAN LOOPING VUEJS -->
                                    <tr v-for="(row, index) in shoppingCart">
                                        <td>@{{ row.nama_barang }} (@{{ row.kode_barang }})</td>
                                        <td>@{{ row.harga}}</td>
                                        <td>@{{ row.jumlah }}</td>
                                        <td>
                                            <!-- EVENT ONCLICK UNTUK MENGHAPUS CART -->
                                            <button 
                                                @click.prevent="removeCart(index)"    
                                                class="btn btn-danger btn-sm">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            @slot('footer')
                            <div class="card-footer text-muted">
                                <a href="" 
                                    class="btn btn-info btn-sm float-right">
                                    Checkout
                                </a>
                            </div>
                            @endslot
                        @endcard
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection