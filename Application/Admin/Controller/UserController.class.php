<?php
namespace Admin\Controller;
use Think\Controller;
class UserController extends MyController
{
    
     // 构造函数：执行本类初始化操作
    public function __construct ()
    {
        parent::__construct();
    }
    
    public function index(){
        header("Location:lists");  
    }
    
    /**
     * 获取会员模板，显示会员列表
     * @date 2015-01-18
     * @return void
     */
    public function lists()
    {
        $user = M('users');
        $count = $User->count();
        $size  = 10;
        $page = new \Think\Page($count, $size);
        // 获取会员数据
        $res = $user->field('id, uname, email, email_state, mobile, mobile_state, last_login_time, last_login_ip, status')->limit($page->firstRow, $page->listRows)->order('id DESC')->select();
        $this->assign('page', $page->show());
        $this->assign('res', $res);
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
    
    //用户留言
    public function contact(){
        $users = D("contact"); // 实例化对象
        $count      = $users->count();// 查询满足要求的总记录数
        $Page       = new \Think\Page($count,5);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $show       = $Page->show();// 分页显示输出
        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $user = $users->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('page',$show);// 赋值分页输出
        $this->assign("users", $user);
        $this->display();
    }
    //删除用户留言
    public function contactDel()
    {
        $id = I("id", 0, 'int');
        $message= M("contact");
        $message->where("id='{$id}'")->delete();
        header("Location:" . U('User/contact'));
    }
    
}