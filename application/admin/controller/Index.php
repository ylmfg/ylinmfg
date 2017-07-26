<?php
/**
 * Created by jiaoziyongjin.
 * User: tangdengshuai
 * Date: 2017/7/25
 * Time: 9:42
 */
namespace app\admin\controller;
class Index extends Base
{
    public function _initialize()
    {
    }

    public function admin(){
        return view('index');
    }
    /***
     * @return \think\response\View
     */
    public function index()
    {
        if (request()->isPost()) {
            //获取表单提交数据
            $data = input();
            session('user_id', 1);
            $this->success('登陆成功', url('admin/index/admin'));
        } else {
            return view('login');
        }
    }

    public function login_out()
    {
        session(null);
        $this->success('退出成功', url('admin/index/index'));
    }

    public function single()
    {

    }
}