<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    //首页
    public function index(){
        $goods = D("products")->where('is_promote=1')->select();
        $products=D("products")->where('is_promote!=1')->select();
        $this->assign("goods", $goods);
        $this->assign("products", $products);
        $this->display();
    }
    //联系我们
    public function contact(){
        $this->display();
    }
    
    public function doContact(){
        $contact = M('contact'); // 实例化User对象
        $data['name'] = I('post.name');
        $data['email'] = I('post.email');
        $data['subject'] = I('post.subject');
        $data['message'] = I('post.message');
        $info=$contact->add($data);
        if($info){
            echo "我们会尽快联系您!";
        }
    }
    
    public function about(){
        $this->display();
    }
}