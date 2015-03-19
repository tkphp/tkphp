<?php
namespace Home\Model;
use Think\Model;
class UserModel extends Model {
    public function register($data){
        $info =array();
        
        if($data['upwd'] != $data['confirm'] || '' == $data['confirm']){
            $info = array(
                'status' => 0,
                'info'   => '确认密码不一致或为空' , 
            );
            return $info;
        }
        if(!preg_match("/^([a-zA-Z]){4,20}$/", $data['username'])){
            $info = array(
                'status' => 0,
                'info'   => '用户名必须是4——20位' ,
            );
            return $info;
        }
         
        
        if(count($this->where("username='".$data['username']."'")->select())){
            $info = array(
                'status' => 0,
                'info'   => '用户名已被注册' ,
            );
            return $info;
        }
        
        
        $data_arr['username'] = $data['username'];
        $data_arr['upwd'] = md5($data['upwd']);
        $data_arr['ip'] = $_SERVER["REMOTE_ADDR"];
        $data_arr['last_time'] = time();
         
        if($this->add($data_arr)){
            $info = array(
                'status' => 1,
                'info'   => '注册成功了' ,
            );
            return $info;
        }else {
            $info = array(
                'status' => 0,
                'info'   => '注册失败' ,
            );
            return $info;
        }
    }
    //登录
    public function login($username, $upwd){
        
        $info = array();
        
        if (!$username){
            $info = array(
                'status' => 0,
                'info'   => '用户名不能为空' ,
            );
            return $info;
        }
        
        if (!$upwd){
            $info = array(
                'status' => 0,
                'info'   => '密码不能为空' ,
            );
            return $info;
        }
        
        $upwd = md5($upwd);
       
        $userinfo = $this->where("username = '{$username}' and upwd = '{$upwd}'")->find();
        
        if($userinfo){
            $info = array(
                'status' => 1,
                'info'   => '登录成功' ,
            );
            session('is_Login',1);
            session('username',$username);
            //return $info;
        }else {
            $info = array(
                'status' => 0,
                'info'   => '登录失败' ,
            );
            return $info;
        }
    }
}