<?php
namespace Admin\Controller;

use Think\Controller;

/**
 *
 * @author Zhao
 *        
 */
class GoodsController extends MyController
{

   
     //构造函数，初始化

    public function __construct()
    {
        parent::__construct();
    }
    //商品列表
    public function index()
    {
        $this->display();
    }

    //商品添加页面
    public function add()
    {
        /* $cats = D('Admin/Cat')->selectform(); */
        $cats=D('cat')->selectform('cat_id');
        // 将商品分类变量分配到模板
        $this->assign('cats', $cats);
        $this->display();
    }
    //商品添加操作
    public function doAdd()
    {
        $post = $_POST;
        // 当商品名为空时，拒绝添加
        if (empty($post['pro_name'])) {
            $this->error('商品添加失败');
            exit();
        }
        
        $post['add_time'] = time();
        $post['update_time'] = time();
        
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize   =     3145728 ;// 设置附件上传大小
        $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->savePath  =      ''; // 设置附件上传目录
        // 上传文件
        $info   =   $upload->upload();
        
        if(!$info) {
            // 上传错误提示错误信息
            $this->error($upload->getError());
        }else{
            // 上传成功
            $this->success('上传成功！');
        }
        $post['list_image']=$info['photo']['savepath'].$info['photo']['savename'];
        $getProductId = M('products')->add($post);
        if (! $getProductId) {
            $this->error('商品添加失败');
            exit();
        }
        header("Location:" . U('Goods/lists'));
       
    }


    public function edit(){
        //$getId = I('get.id');
        $id = I("id", 0, 'int');
        // 获取产品详细信息
        $goods=M("products")->find($id);
        $cats=D('cat')->selectform('cat_id', $goods['cat_id']);

        // 将商品分类变量分配到模板
        $this->assign('cats', $cats);
        $this->assign('pro', $goods);
        $this->display();
    }
    //商品列表
    public function lists()
    {   
        // 分页处理，带关键字搜索
        if (isset($_GET)) {
            if(!empty($_GET['cat_id'])) {
                $ser['cat_id'] = I("cat_id", 0, 'int');
            }
            if(!empty($_GET['is_on_sale'])) {
               $ser['is_on_sale'] = I("is_on_sale", 0, 'int');
            }
           /*   if(empty($_GET['keyword']!='')) {
                $ser['pro_name'] = I("keyword", 0, 'string');
            }  */
            
        }
        $cats = D('Admin/Cat')->selectform('cat_id');
        // 将商品分类变量分配到模板
        $goods = D("products"); // 实例化对象
        $count      = $goods->where($ser)->count();// 查询满足要求的总记录数
        $Page       = new \Think\Page($count,8);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $show       = $Page->show();// 分页显示输出
        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $good = $goods->where($ser)->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('cats', $cats);
        $this->assign('page',$show);// 赋值分页输出
        $this->assign("goods", $good);
        $this->display(); 
    }

   
    // 执行商品修改操作
    public function doEdit()
    {
        $Id = $_POST['id'];
        $post = $_POST;
    
        if (empty($post['pro_name'])) {
            $this->error('商品更改无效');
            exit;
        }
        $post['update_time'] = time();
        $post['is_new'] = isset($_POST['is_new']) ? $_POST['is_new'] : 0;
        $post['is_promote'] = isset($_POST['is_promote']) ? $_POST['is_promote'] : 0;
        $post['is_on_sale'] = isset($_POST['is_on_sale']) ? $_POST['is_on_sale'] : 0;
        M('products')->where("id={$Id}")->save($post);
        header("Location:" . U('Goods/lists'));
    }
    //商品删除
    public function delete()
    {
       
        $id = !empty($_POST['id']) ? $_POST['id'] : $_GET['id'];
//         var_dump($id);
//         $id = I("id", 0, 'int'); 
        $good= M("products");
        $path=$good->where($id)->find();
        unlink('./Uploads/'.$path["list_image"]);
        $good->where($id)->delete();
        header("Location:" . U('Goods/lists'));  
    }
    
}