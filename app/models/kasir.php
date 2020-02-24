<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class kasir extends Model
{
    //
    protected $table='kasir';
    protected $primaryKey='id';
    protected $fillable=['id','nama'];
}
