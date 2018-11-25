<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderServis extends Model
{
    protected $table = 'order_servis';
    public $fillable = ['id_user','date','id_kurir'];
    public $timestamps = false;
}
