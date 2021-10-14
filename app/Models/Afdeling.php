<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Afdeling extends Model
{
    protected $table='afdelingen';
    protected $fillable=['ID','Naam_afdeling'];
    protected $guarded=[];
    protected $primaryKey=['ID'];
    public $timestamps=false;
}
