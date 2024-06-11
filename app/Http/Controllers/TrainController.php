<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;

class TrainController extends Controller
{
    public function filtered() {
        $trains = Train::where("date", "2024-06-11")->get();
        return view("today-trains", compact("trains"));
    }

    public function all() {
        $trains = Train::all();
        return view("all-trains", compact("trains"));
    }
}
