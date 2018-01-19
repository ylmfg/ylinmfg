<?php
/**
 * @Created by tangdengshuai
 * @Author :tangdengshuai
 * @Date :2018/1/1513:04
 * @Desc:
 *
 */
return[
    /**
     * 左侧导航栏
     */
    'nav_set'=>[
        [
            'name'=>'系统管理',
            'hasSub'=>1,
            'sub'=>[
                [
                    'name'=>'系统设置',
                    'url' =>'/admin/System/index',
                    'class'=>'',
                ]
            ],
        ],
        [
            'name'=>'用户管理',
            'hasSub'=>1,
            'sub'=>[
                [
                    'name'=>'用户列表',
                    'url' =>'/admin/User/lists',
                    'class'=>''
                ],
                [
                    'name'=>'管理员角色',
                    'url' =>"/admin/User/admin",
                    'class'=>''
                ],
            ],
        ],
        [
            'name'=>'项目管理',
            'hasSub'=>1,
            'sub'=>[
                [
                    'name'=>'项目列表',
                    'url' =>'/admin/Product/lists',
                    'class'=>''
                ],
                [
                    'name'=>'新增项目',
                    'url' =>"/admin/Product/add",
                    'class'=>''
                ],
            ],
        ],
    ]

];

