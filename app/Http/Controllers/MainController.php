<?php

namespace App\Http\Controllers;

use App\Http\Requests\Requests\BatteryRequest;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        return view('index');
    }
    public function find(BatteryRequest $request){
        $modelBattery = $request->input('modelBattery');
        return view('find', compact('modelBattery'));
    }
    public function about(){
        return view('about');
    }
}
