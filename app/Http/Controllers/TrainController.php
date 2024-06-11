<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;

class TrainController extends Controller
{
    public function index() {
        $trains = Train::where("date", "2024-06-11")->get();
        return view("trains", compact("trains"));
    }
}
