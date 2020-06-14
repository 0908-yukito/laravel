<?php

namespace App\Http\Controllers;
class JsonController extends Controller
{
    public function index()
    {
        return response()->json(['name' => 'taro','age' => 20]);
    }
}

