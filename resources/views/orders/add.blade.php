@extends('layouts.app')
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
​
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Produk</label>
                                        <select name="kode_barang" id="kode_barang" class="form-control" required width="100%">
                                            <option value="">Pilih</option>
                                            @foreach ($barang as $barang)
                                            <option value="{{ $barang->id }}">{{ $barang->kode_barang }} - {{ $barang->nama_barang }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Qty</label>
                                        <input type="number" name="qty" id="qty" value="1" min="1" class="form-control">
                                    </div>
                                    <div class="form-group">
                                    <button class="btn btn-primary btn-sm"
                                                :disabled="submitCart"
                                                >
                                                <i class="fa fa-shopping-cart"></i> @{{ submitCart ? 'Loading...':'Ke Keranjang' }}
                                            </button>
                                    </div>
                                </div>
                                
                                <!-- MENAMPILKAN DETAIL barang -->
                                <div class="col-md-5">
                                    <h4>Detail Produk</h4>
                                    <div v-if="barang.name">
                                        <table class="table table-stripped">
                                            <tr>
                                                <th>Kode</th>
                                                <td>:</td>
                                                <td>@{{ barang.kode_barang }}</td>
                                            </tr>
                                            <tr>
                                                <th width="3%">Produk</th>
                                                <td width="2%">:</td>
                                                <td>@{{ barang.nama_barang}}</td>
                                            </tr>
                                            <tr>
                                                <th>Harga</th>
                                                <td>:</td>
                                                <td>@{{ barang.harga | currency }}</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                
                                <!-- MENAMPILKAN IMAGE DARI barang -->
                                <div class="col-md-3" v-if="barang.photo">
                                    <img :src="'/uploads/barang/' + barang.photo" 
                                        height="150px" 
                                        width="150px" 
                                        :alt="barang.name">
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
                            Keranjang
                            @endslot
​
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Produk</th>
                                        <th>Harga</th>
                                        <th>Qty</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- MENGGUNAKAN LOOPING VUEJS -->
                                    <tr v-for="(row, index) in shoppingCart">
                                        <td>@{{ row.nama_barang }} (@{{ row.kode_barang }})</td>
                                        <td>@{{ row.harga | currency }}</td>
                                        <td>@{{ row.qty }}</td>
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
                                <a href="#" 
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
@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/accounting.js/0.4.1/accounting.min.js"></script>
    <script src="{{ asset('js/transaksi.js') }}"></script>
@endsection