<?php
namespace Admin\Model;
use Think\Model;
class UserModel extends Model {
    public function getUserlist(){
       $page=I("p",1,"int");
       $limit=5;
       $list = $this->order('last_time DESC')->page($page.','.$limit)->select();
       $count = $this->count();// 查询满足要求的总记录数
       $Page  = new \Think\Page($count,$limit);// 实例化分页类 传入总记录数和每页显示的记录数
       $show  = $Page->show();// 分页显示输出
       return array("list"=>$list, "page"=>$show);
    }
}