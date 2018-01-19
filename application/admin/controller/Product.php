<?php
/**
 * @Created by tangdengshuai
 * @Author :tangdengshuai
 * @Date :2018/1/1516:28
 * @Desc:
 */

namespace app\admin\controller;


class Product extends Base
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
