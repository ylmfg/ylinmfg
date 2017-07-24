<?php
namespace app\index\controller;
class Index
{
    /***
     * @return \think\response\View
     */
    public function index()
    {
        if(isset($_GET['jsonpcallback'])){

        }else{
            return view('index');
        }
    }

    public function single(){
        return view('single');
    }
}
