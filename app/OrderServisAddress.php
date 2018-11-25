<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderServisAddress extends Model
{
    protected $table = 'order_servis_address';
    protected $fillable = ['id_order','latitude','longtitude','kode_pos','catatan','no_hp'];
    public $timestamps = false;
    protected $primaryKey = 'id_address';

}
