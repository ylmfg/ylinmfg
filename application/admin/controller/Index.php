<?php
/**
 * Created by jiaoziyongjin.
 * User: tangdengshuai
 * Date: 2017/7/25
 * Time: 9:42
 */

namespace app\admin\controller;

use think\Request;
use think\Db;

class Index extends Base
{
    /**
     * 后台登录
     * @return \think\response\View
     */


    public function login()
    {
        if (Request::instance()->isPost()) {
            $data = input('post.');
            $res = Db::table('users')->where("name='{$data['user']}'")->find();
            if ($res) {
                $password = md5(md5($data['password'] . $res['salt']));
                if ($res['password'] == $password) {
                    $r = array(
                        'status' => 1,
                        'msg' => '登录成功',
                        'user' => $res['name']
                    );
                    //存储session
                    session('user_id', $res['id']);
                    return $r;
                } else {
                    $r = array(
                        'status' => 0,
                        'msg' => '登录失败'
                    );
                    return $r;
                }
            }
        } else {
            return view('login');
        }

    }

    public function index()
    {
        $this->is_login();//是否登录
        //获取菜单
        $menu=$this->getMenu();
        $this->assign('menu',$menu);
        return view('index');
    }

    /**
     * 退出
     */
    public function login_out()
    {
        session(null);
        $this->success('退出成功', url('admin/index/login'), '', 1);
    }

    /**管理设置
     * @return \think\response\View
     */
    public function setting()
    {
        return view();
    }

    /**
     * 会员管理
     */
    public function user_info()
    {

    }

    /**
     *会员等级
     */
    public function user_rank()
    {

    }
}