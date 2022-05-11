<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    public $timestamps=false;
    protected $table='producto';
    protected $primaryKey='pro_id';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'pro_nombre','pro_precio','prov_id'
    ];
}