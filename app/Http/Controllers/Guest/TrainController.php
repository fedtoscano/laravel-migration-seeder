<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Guest\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    //creo la funzione index()
    public function index(){
        $trains = Train::all();

        return view("pages.trains", compact("trains"));
    }
}
