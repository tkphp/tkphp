<?php
namespace Admin\Controller;
use Think\Controller;
class UserController extends Controller {
    
    
    public function index(){
        header("Location:lists");  
    }
    
    
    public function lists(){
        $user_list=D('User')->getUserlist();
        $this->assign('user_list',$user_list);
        $this->display();
    }
    
    
    public function edit(){
        if(IS_POST){
            $data = array();
            $data['username'] = I("username","");
            $data['upwd']     = I("upwd","");
            $uid = I("get.id",0,"int");
            M("user")->where("id='{$uid}'")->save($data);
            header("Location:".U("User/lists"));
        }else {
            $uid = I("id",0,'int');
           
            $user_info = M("user")->where("id='$uid'")->find();
            $this->assign("user_info",$user_info);
            $this->display();
        }
    }
    
    
    public function delete(){
        $uid = I("id",0,'int');
        M("user")->where("id='$uid'")->delete();
        header("Location:".U("User/lists"));
    }
    
}