<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cliente extends Model
{
    public $timestamps=false;
    protected $table='cliente';
    protected $primaryKey='cli_id';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'cli_nombre','cli_apellido','cli_cedula','cli_telefono' ,'cli_email',
    ];
}
