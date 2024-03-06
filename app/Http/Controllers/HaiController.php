<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HaiContoller extends Controller
{
    public function index(Request $request, $noantrian)
    {
        $result  = "Hai ".$erequest->nama." dengan NIK". $noantrian." dan id".$request->id;
        return $result;
    }
}
