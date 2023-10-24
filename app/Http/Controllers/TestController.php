<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    public function index()
    {
        return [
            "code" => 0,
            "data" => 'We have a lot of data',
            "msg" => 'Welcome you'
        ];
    }
}
