<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    protected $primaryKey='area_id';
    public $timestamps=false;
    protected $table='area';
}