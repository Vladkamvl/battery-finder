<?php

namespace App\Http\Controllers;

use App\Battery;
use App\Http\Requests\FindBySizeRequest;
use App\Http\Requests\Requests\BatteryRequest;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        return view('index');
    }
    public function find(BatteryRequest $request){
        $modelBattery = $request->input('modelBattery');
        $batteries = Battery::where('Renata', 'LIKE', "%$modelBattery%")
            ->orWhere('Renata', 'LIKE', "%$modelBattery%")
            ->orWhere('Energizer_Rayovac_Eveready', 'LIKE', "%$modelBattery%")
            ->orWhere('Maxell_Panasonic_Sony_Toshiba', 'LIKE', "%$modelBattery%")
            ->orWhere('Varta', 'LIKE', "%$modelBattery%")
            ->orWhere('Duracell', 'LIKE', "%$modelBattery%")
            ->orWhere('Timex', 'LIKE', "%$modelBattery%")
            ->orWhere('Citizen', 'LIKE', "%$modelBattery%")
            ->orWhere('SEIKO', 'LIKE', "%$modelBattery%")
            ->orWhere('Others_bt', 'LIKE', "%$modelBattery%")
            ->get();
        return view('find', compact('batteries', 'modelBattery'));
    }
    public function findBySize(){
        return view('findBySize');
    }
    public function findSize(FindBySizeRequest $request){

        $diam = round($request->diamOfBattery, 1);
        $diam = str_replace('.', ',', $diam);

        $thick = round($request->thickOfBattery, 1);
        $thick  = str_replace('.', ',', $thick);

        $size = $diam . 'x' . $thick;
        $batteries = Battery::where('Size_DxThick', 'LIKE', "%$size%")->get();
        return view('find', compact('batteries', 'size'));
    }
    public function about(){
        return view('about');
    }
}
