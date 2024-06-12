<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;
use Illuminate\Support\Carbon;

class TrainController extends Controller
{
    public function filtered() {
        $trains = Train::where("date", Carbon::today())->get();
        return view("today-trains", compact("trains"));
    }

    public function all() {
        $trains = Train::all()->sortBy("date");
        return view("all-trains", compact("trains"));
    }
}
