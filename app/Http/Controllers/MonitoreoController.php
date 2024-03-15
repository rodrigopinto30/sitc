<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MonitoreoController extends Controller
{
    public function informarPlan(){
        return view('monitoreo/informarPlan');
    }

    public function monitoreoNormal(){
        return view('monitoreo/monitoreoNormal');
    }

    public function monitoreoMosca(){
        return view('monitoreo/monitoreoMosca');
    }
}
