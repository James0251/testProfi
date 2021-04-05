<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MapsController extends Controller
{
    public function mapOne() {
        return view('maps.mapOne');
    }
    public function mapTwo() {
        return view('maps.mapTwo');
    }
    public function mapThree() {
        return view('maps.mapThree');
    }
}
