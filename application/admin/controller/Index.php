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

    /**
     * 后台首页
     * @return \think\response\View
     */
    public function admin()
    {
        return view('index');
    }

    /***
     * 登陆
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
            if(!session('user_id')){
                return view('login');
            }else{
                $this->success('你已登陆',url('admin/index/admin'));
            }
        }
    }

    /**
     * 退出
     */
    public function login_out()
    {
        session(null);
        $this->success('退出成功', url('admin/index/index'));
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
    public function user_info(){

    }

    /**
     *会员等级
     */
    public function user_rank(){

    }
}