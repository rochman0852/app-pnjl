<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class costumer extends Model
{
    //
    protected $table='costumers';
    protected $fillable=['nama','alamat','no_id','no_hp'];

}
