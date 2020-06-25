<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class detailTran extends Model
{
    //
    protected $table='detail_tran';
    protected $fillable=['id_barang','id_tran','quantity','total'];
}
