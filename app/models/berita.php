<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class berita extends Model
{
    protected $table='info';
    protected $primaryKey='id';

    public function getGuru()
    {
        return $this->belongsTo('App/Model/Models/guru','id_guru');
}

}