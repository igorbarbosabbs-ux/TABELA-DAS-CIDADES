<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CidadesController extends Controller
{
  public function index(){
    $cities = DB::select("SELECT ID, Name, CountryCode, District, Population FROM CITY");

    return view('city', compact('cities'));
  }
}
