<?php
namespace app\admin\controller;

use think\Controller;

class Base extends Controller
{
    /***
     * @return \think\response\View
     */
    public function __construct()
    {
        parent::__construct();

    }
    public function _initialize()
    {
        //判断用户是否登陆
        $user_id=getSessionId();
        if(!$user_id){
            $this->error('请先登陆',url('admin/index/index'));
        }
    }

}