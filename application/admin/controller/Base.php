<?php
namespace app\admin\controller;

use think\Controller;
use think\Request;

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
        //获取模块,控制器,方法
       $m=Request::instance()->module();
       $c=Request::instance()->controller();
       $a=Request::instance()->action();
       $url='/'.$m.'/'.$c.'/'.$a;
       return $url;
    }

    public function is_login()
    {   $user_id=getSession();
        if (!$user_id) {
            //$this->error('请先登陆',url('admin/index/login'),'',1000);
            $this->error('请先登陆', url('admin/index/login'), '', 1000);
        }
    }
   public function getMenu(){
       //菜单
       $menu = config('nav_set');
       $current=$this->_initialize();
       foreach($menu as $key=>$v){
           if($v['hasSub']==1){
               foreach ($menu[$key]['sub'] as &$vo){
                   if($current ==$vo['url']){
                       $vo['class']='layui-this';
                   }
               }
           }
       }
       return $menu;
   }
}