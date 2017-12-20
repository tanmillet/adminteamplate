<?php

namespace App\Http\Controllers\Progress;

class DemoController extends ApiContr
{
    public function __construct()
    {
    }

    //首页demo
    public function index()
    {
        return view('demo.welcome');
    }

    //首页demo
    public function table()
    {
        return view('demo.table');
    }
}
