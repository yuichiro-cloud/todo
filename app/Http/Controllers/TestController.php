<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function get($params)
     {
        $data = $params;
        return view('test.get', $data);
    }
}
