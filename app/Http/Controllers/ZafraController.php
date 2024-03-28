<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ZafraController extends Controller {
    
    public function index(){
        return view('zafra/index');
    }
}
