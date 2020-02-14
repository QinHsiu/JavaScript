<?php
// +----------------------------------------------------------------------
// | OneThink [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013 http://www.onethink.cn All rights reserved.
// +----------------------------------------------------------------------
// | Author: 麦当苗儿 <zuojiazi@vip.qq.com> <http://www.zjzit.cn>
// +----------------------------------------------------------------------

namespace Home\Controller;
use OT\DataDictionary;

/**
 * 前台首页控制器
 * 主要获取首页聚合数据
 */
class IndexController extends HomeController {

	//系统首页
    public function index(){

        $category = D('Category')->getTree();
        $lists    = D('Document')->lists(null);

        $this->assign('category',$category);//栏目
        $this->assign('lists',$lists);//列表
        $this->assign('page',D('Document')->page);//分页

                 
        $this->display();
    }
    public function solutions(){
        $this->display();
    }
    public function showProducts(){
        $this->display();
    }
    public function useCase(){
        $this->display();
    }
    public function service(){
        $this->display();
    }
    public function news(){
        $this->display();
    }
    public function aboutUs(){
        $this->display();
    }
    public function recruit(){
        $this->display();
    }
    public function caseInformation(){
        $this->display();
    }
    public function solutionsInformation(){
        $this->display();
    }
    public function newsInformation(){
        $this->display();
    }

}