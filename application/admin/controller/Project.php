<?php
/**
 * Created by jiaoziyongjin.
 * User: tangdengshuai
 * Date: 2017/7/25
 * Time: 9:42
 */
namespace app\admin\controller;
class Project extends Base
{
    /***
     * 项目首页
     * @return \think\response\View
     */
    public function index()
    {
        return view();
    }

    /*
     *项目添加
     */
    public function add()
    {
        return view();
    }

    /**
     * 项目分类
     */
    public function category()
    {
        return view();
    }

    public function cateList(){
        return view('cateList');
    }

}