<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    public $timestamps=false;
    protected $table='proveedor';
    protected $primaryKey='prov_id';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'prov_nombre','prov_apellido','prov_cedula','prov_ruc'
    ];
}