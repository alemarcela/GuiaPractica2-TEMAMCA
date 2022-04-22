<?php

namespace App\Models;


//use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Productos extends Eloquent
{
    //
    protected $connection = 'mongodb';
    protected $collection = 'productos';
    
    public $timestamps=false;

    protected $fillable=[
        'codprod',
        'nombreprod',
        'descriprod',
        'typprod',
        'costunit',
        'cantprod'
    ];
}

