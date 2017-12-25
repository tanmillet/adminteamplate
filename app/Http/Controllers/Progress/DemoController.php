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

    public function pajax()
    {
        return view("pajax.pajax");
    }

    public function test1()
    {
        $views = view('demo.welcome');

        dump($views);

        dump(response($views));

        $views = response($views)->getContent();
        // dump($views);
        // die();
        echo $views;
    }

    public function test2()
    {
        echo "<div style='background:red;'>第二页</div>";
    }

    public function test3()
    {
        echo "<div style='background:red;'>第三页</div>";
    }
}
