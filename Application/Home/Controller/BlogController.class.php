<?php
namespace Home\Controller;
use Think\Controller;
class BlogController extends Controller {
    
    public function index(){
        $this->display();
    }
    
    public function post(){
        $this->display();
    }
}