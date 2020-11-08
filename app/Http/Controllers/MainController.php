<?php

namespace App\Http\Controllers;

use App\Battery;
use App\Http\Requests\Requests\BatteryRequest;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        return view('index');
    }
    public function find(BatteryRequest $request){
        $modelBattery = $request->input('modelBattery');
//        $battery = Battery::whereRaw(
//            "MATCH(Renata, Energizer_Rayovac_Eveready, Maxell_Panasonic_Sony_Toshiba, Varta, Duracell, Timex, Citizen, Others_bt) AGAINST(? IN BOOLEAN MODE)",
//            array($modelBattery)
//        )->get();
        $batteries = Battery::where('Renata', 'LIKE', "%$modelBattery%")
            ->orWhere('Renata', 'LIKE', "%$modelBattery%")
            ->orWhere('Energizer_Rayovac_Eveready', 'LIKE', "%$modelBattery%")
            ->orWhere('Maxell_Panasonic_Sony_Toshiba', 'LIKE', "%$modelBattery%")
            ->orWhere('Varta', 'LIKE', "%$modelBattery%")
            ->orWhere('Timex', 'LIKE', "%$modelBattery%")
            ->orWhere('Citizen', 'LIKE', "%$modelBattery%")
            ->orWhere('Others_bt', 'LIKE', "%$modelBattery%")
            ->get();
        return view('find', compact('batteries'));
    }
    public function about(){
        return view('about');
    }
}
