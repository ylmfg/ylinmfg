<?php
/**
 * Created by jiaoziyongjin.
 * User: tangdengshuai
 * Date: 2017/7/25
 * Time: 9:42
 */
namespace app\admin\controller;
use think\Validate;
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
        if (request()->isPost()) {
            //获取表单提交数据
            $data = input();
            echo "<pre>";
            print_r($data);
            die;
        }
        return view();
    }

    /**
     * 项目分类
     */
    public function category()
    {
        if (request()->isPost()) {
            $data = input();
            $rule = [
                ['title','require|max:10','分类名称必须|名称最多不能超过10个字符'],
            ];

            $data = [
                'title'  => $data['title'],
            ];
            $validate = new Validate($rule);
            $result   = $validate->check($data);
            if(!$result){
                $this->error($validate->getError(),url('project/category'),'',1);
            }
            //入库
            Db::name('category')->insert($data);
        } else {
            return view();
        }
    }

    public function cateList()
    {
        return view('cateList');
    }

}