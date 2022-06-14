<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\istaiga;

class viewIstaigos extends Controller
{
    public function istaigos(){
        $istaig = istaiga::all();
        return view('pagrindinis', compact('istaig'));
      }
}
