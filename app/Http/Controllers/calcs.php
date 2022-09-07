<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class calcs extends Controller
{
    public function result()
    {
        return view('calcs.calcs');
    }
}
