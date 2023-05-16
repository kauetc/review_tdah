<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function browse(Request $request){
        return view('settings');
    }
}
