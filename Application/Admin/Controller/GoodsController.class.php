<?php
namespace Admin\Controller;
use Think\Controller;
class GoodsController extends Controller {
    public function index(){
        $this->display();
    }
    
    public function add(){
        if (IS_POST){
           $data = array();
           $data['title'] = I("title","","");
           $data['price'] = I("price",0,'float');

           $data['status'] = I("status",0,'int');
           D("goods")->addGoods($data);
           header("Location:".U('Goods/lists'));
           
        }else {
            $this->display();
        }
     
    }
    
    public function lists(){
        $goods = D("goods")->goodsLists();
        $this->assign("goods",$goods);
        $this->display();
    }
    
    public function  edit(){
        $id = I("get.id",0,'int');
        if(IS_POST){
            $data = array();
            $data['title'] = I("title","","");
            $data['price'] = I("price",0,'float');
            $data['status'] = I("status",0,'int');
            dump($data);
            D("goods")->editGoods($id,$data);
            header("Location:".U('Goods/lists'));
            
        }else {
            $good = D("goods")->getGoodsById($id);
            $this->assign("good",$good);
            $this->display();
        }
    }
    
    public function delete(){
        $id = I("id",0,'int');
        M("goods")->where("id='{$id}'")->delete();
        header("Location:".U('Goods/lists'));
    }
}