<?php
namespace Home\Controller;
use Think\Controller;
class UserController extends Controller {
    public function index(){
        $this->display();
    }
    //登录
    public function login(){
        $data=I('post.');
    
        //$this->ajaxReturn(D('User')->login($data['username'],$data['upwd']));
         D('User')->login($data['username'],$data['upwd']);
        if ($_SESSION['is_Login']){
            if ($_POST['autologin'] == 'on') {
                setcookie('username',$data['username'],time()+3600*24*7,'/','');
                setcookie('upwd',$data['upwd'],time()+3600*24*7,'/','');
            }
            $this->redirect('Index/index');
            
        }else {
            $this->error('登录失败');
        } 
       // $this->redirect('Index/index');
     
    }
    //注册
    public function register(){
       if(IS_POST){
           $data = I('post.');
           //$this->ajaxReturn(D('User')->register($data));
           $back=D('User')->register($data);
           if ($back[status]==1){
              $_SESSION['is_Login']=1;
              $_SESSION['username']=$data['username'];
              $this->redirect('Index/index');
           }else {
               $this->error('注册失败');
           }
       }else{
           $this->display();
       }
    }
    
    //处理用户退出
    public function logout(){
        $username = $_SESSION['username'];
        $_SESSION=array();
        if(isset($_COOKIE[session_name()])){
            setCookie(session_name(), '', time()-3600, '/');
        }
        session_destroy();
        $this->redirect('Index/index');
    }
}