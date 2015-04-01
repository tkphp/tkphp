<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends MyController {

    /**
     * 构造方法：对该模块进行一些初始化操作
     * 实现父类的构造方法，可对用户登录进行验证
     * 设置该控制器下共有的标题
     */
    public function __construct() {
        parent::__construct();
    }
    public function index(){
        $this->display();
    }
}