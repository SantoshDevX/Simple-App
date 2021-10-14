<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    protected $table='districten';
    protected $fillable=['ID','Naam'];
    protected $guarded=[];
    protected $primaryKey=['ID'];
    public $timestamps=false;
}
