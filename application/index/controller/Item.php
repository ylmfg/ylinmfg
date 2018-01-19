<?php
namespace app\index\controller;
use think\Controller;
use think\Db;

class Item extends Controller
{
    /***
     * @return \think\response\View
     */
    public function index()
    {
        
      return view('index');

    }

    public function detail(){
      return view('detail');
    }
}
