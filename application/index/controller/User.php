<?php
namespace app\index\controller;
use think\Controller;
use think\Db;

class User extends Controller
{

    public function index()
    {
      return view('index');
    }
}
