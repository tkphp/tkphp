<?php
namespace Home\Controller;
use Think\Controller;
class ProductController extends Controller {
    public function index(){
         $id = I("id", 0, 'int');
        // 获取产品详细信息
        $goods=M("products")->find($id);
        // 将商品分类变量分配到模板
       
        $this->assign('pro', $goods);
        $this->display(); 
    }
    
    public function category(){
        $this->display();
    }
}