<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Afdeling;
use App\models\Gebruiker;
use App\models\District;

class RegistratieController extends Controller
{
    public function getAfdelingen(){

     $districten=District::all();
     return view('GebruikersRegistratie',['districten'=>$districten]);
}
}
