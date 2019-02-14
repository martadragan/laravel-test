<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;


class ContinentController extends Controller
{
    public function Europe() {
        $query = "
        SELECT *
        FROM `country`
        WHERE `Continent` = ?
        ";
        $countries = DB::select($query, ['Europe']);

       $countries_view = view('home/continents/countries', [
           'countries' => $countries
       ]);
       return $countries_view;
    }
}
