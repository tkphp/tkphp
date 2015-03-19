<?php
namespace Admin\Model;
use Think\Model;
class GoodsModel extends Model {
    
    public function addGoods($data){
        $data['create_time'] = time();
        $data['update_time'] = time();
        return $this->add($data);
    }
    
    public function goodsLists(){
        return $this->select();
    }
    
    public function  getGoodsById($id){
        return $this->where("id='$id'")->find();
    }
    
    public function editGoods($id,$data){
        $data['update_time'] = time();
        return $this->where("id= '{$id}'")->save($data);
    }
}