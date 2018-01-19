<?php
/**
 * @Created by tangdengshuai
 * @Author :tangdengshuai
 * @Date :2018/1/1510:31
 * @Desc:系统设置
 */

namespace app\admin\controller;


class User extends Base
{

    public function lists(){
        //是否已经登录
        $this->is_login();
        //获取菜单
        $menu=$this->getMenu();
        $this->assign('menu',$menu);
        return view('lists');
    }

}