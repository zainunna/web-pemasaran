<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class barang extends Model
{
    //
    protected $table='barang';
    protected $primaryKey='id';
    protected $fillable=['id','kode_barang','nama_barang','id_kasir'];
    public function getKasir()
    {
        return $this->belongsTo('App/Model/Models/kasir','id_kasir');
    }

}
