<?php

namespace App\Http\Controllers;
use App\Models\uzsakymai;
use Illuminate\Http\Request;

class uzsakymuValdymas extends Controller
{
    public function priimtiUzsakyma(Request $request, $id)
    {
        $uzsak = uzsakymai::findOrFail($id);

        if($uzsak){
            $uzsak->busena = 'priimta';
            $uzsak->save();
            return redirect()->back()->with('uzsakymas-accepted','Užsakymas priimtas');
        }
    }

    public function atsauktiUzsakyma(Request $request, $id)
    {
        $uzsak = uzsakymai::findOrFail($id);

        if($uzsak){
            $uzsak->busena = 'atšaukta';
            $uzsak->save();
            return redirect()->back()->with('uzsakymas-denied','Užsakymas atšauktas');
        }
    }


}
