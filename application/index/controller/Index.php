<?php
namespace app\index\controller;
use think\Controller;
use think\Db;

class Index extends Controller
{
    /***
     * @return \think\response\View
     */
    public function index()
    {
        
      return view('home');

    }


}
