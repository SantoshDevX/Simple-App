<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gebruiker extends Model
{
    protected $table='gebruikers';
    protected $fillable=['ID-nummer','Geslachtsnaam','Voornaam','Afdeling','Wachtwoord'];
    protected $guarded=[];
    protected $primaryKey=['ID-nummer'];
    public $timestamps=false;
}
