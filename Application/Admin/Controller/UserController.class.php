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
        $modelUser = M('users');
        $pageCount = $modelUser->count();
        $pageSize  = 5;
        $page = new \Think\Page($pageCount, $pageSize);
        // 获取会员数据
        $userRes = $modelUser->field('id, uname, email, email_state, mobile, mobile_state, last_login_time, last_login_ip, status')->limit($page->firstRow, $page->listRows)->order('id DESC')->select();
        $this->assign('page', $page->show());
        $this->assign('userRes', $userRes);
        $this->display();
    }
    
    /**
     * 获取添加用户界面
     * @date 2015-01-18
     * @return void
     */
    public function add ()
    {
        /* $city = array('选择省', '选择市', '选择县');
        $c = Area::city($city);
        $this->assign('city', $c); */
        $this->display();
    }
    
    
     //添加用户
    public function doUserAdd()
    {
        $users = array();
        $users['uname'] = I('post.uname');
        $users['email'] = I('post.email');
        $users['mobile'] = I('post.mobile');
        if (empty($users['email']) || empty($users['mobile']))
        {
            $this->error('用户名或密码不能全为空');
            exit;
        }
        $mobileState = I('post.mobile_state');
        $emailState = I('post.email_state');
        $users['mobile_state'] = empty($mobileState) ? 0 : 1;
        $users['email_state'] = empty($emailState) ? 0 : 1;
    
        $users['password'] = I('post.password');
        $users['repassword'] = I('post.repassword');
    
        // 检查密码是否为空
        if (empty($users['password']))
        {
            $this->error('密码不能为空');
            exit;
        }
    
        // 检查密码长度
        if (strlen($users['password']) < 6)
        {
            $this->error('密码长度不够');
            exit;
        }
    
        // 检查密码是否一致
        if (strcmp($users['password'], $users['repassword']) != 0)
        {
            $this->error('两次密码不一致');
            exit;
        }
        $users['password'] = sha1($users['password']);
        $users['create_time'] = time();
        $users['last_login_time'] = time();
        // 获取IP
        $getIp = I('server.REMOTE_ADDR');
        $users['last_login_ip'] = ip2long($getIp);
    
        // 添加用户登录信息表，获取用户ID
        $modelUsers = M('users');
        if ($modelUsers->create($users))
        {
            $lastInsertId = $modelUsers->add();
        }
    
        if ( ! $lastInsertId)
        {
            $this->error('用户添加失败');
            exit;
        }
    
        // 添加用户基本信息
        $userInfo = array();
        $userInfo['user_id'] = $lastInsertId;
        $userInfo['sex'] = I('post.sex');
        $userInfo['true_name'] = I('post.true_name');
        $userInfo['birthday'] = I('post.birthday');
        $userInfo['education'] = I('post.education');
        $userInfo['province'] = I('post.province');
        $userInfo['city'] = I('post.city');
        $userInfo['area'] = I('post.area');
        $userInfo['address'] = I('post.address');
        $userInfo['job'] = I('post.job');
        $userInfo['marry'] = I('post.marry');
        $userInfo['identity'] = I('post.identity');
        $userInfo['wage'] = I('post.wage');
    
        // 判断有没有文件上传
        if ( ! empty($_FILES['thumb']['name']))
        {
            $upload = new \Think\Upload();                          // 实例化上传类
            // 设置附件上传类型
            $upload->exts      = array('jpg', 'gif', 'png', 'jpeg');
            $upload->subName   = '';
            $upload->rootPath  = './Uploads/';
            $upload->savePath  = 'User/';                           // 设置附件上传目录
            $upload->saveName  = date('YmdHis') . mt_rand(100, 999);
    
            // 上传文件
            $info   =   $upload->uploadOne($_FILES['thumb']);
            if($info) {
                $imagePath = './Uploads/' . $info['savepath'] . $info['savename'];
                $image = new \Think\Image();
                $image->open($imagePath);
                $image->thumb(150, 150, \Think\Image::IMAGE_THUMB_CENTER)->save($imagePath);
    
                $userInfo['thumb'] = $info['savename'];
            }
        }
        // 执行添加操作
        $modelUserInfo = M('user_info');
        if ($modelUserInfo->create($userInfo))
        {
            $userAffectedRows = $modelUserInfo->add();
        }
    
        $this->success('用户添加成功', 'index');
    }
    /**
     * 批量删除用户
     * @date 2015-01-18
     * @return void
     */
    public function DeleteUsers ()
    {
        $uids = I('post.uids');
        $where = implode(', ', $uids);
        $where = "id IN({$where})";

        // 实例化用户表模型
        $modelUsers = M('users');
        $affectedRows = $modelUsers->where($where)->delete();

        if ($affectedRows > 0)
        {
            $this->success('删除成功');
        }
        else
        {
            $this->error('删除失败');
        }
    }
    
    /**
     * 会员基本资料修改
     * @date 2015-01-18
     * @return void
     */
    public function edit ()
    {
        $getUserId = I('get.id');
    
        $modelUserInfo = M();
        $userInfoRes = $modelUserInfo->table('__USERS__ AS u, __USER_INFO__ AS i')->where("u.id = i.user_id AND u.id='{$getUserId}'")->find();
    
        if ( ! empty($userInfoRes['province']))
        {
            $city = array($userInfoRes['province'], $userInfoRes['city'], $userInfoRes['area']);
        }
        else
        {
            $city = array('选择省', '选择市', '选择县');
        }
       /*  $c = Area::city($city); */
    
        $this->assign('user', $userInfoRes);
       /*  $this->assign("city", $c); */
        $this->display();
    }
    
  /*   public function edit(){
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
    } */
    
    
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