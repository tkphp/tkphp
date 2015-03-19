<?php
return array(
	//'配置项'=>'配置值'
	'URL_MODEL'=>2,
    // 显示页面Trace信息
    'SHOW_PAGE_TRACE' => true,
    //数据库配置信息
    'DB_TYPE'   => 'mysql', // 数据库类型
    'DB_HOST'   => '127.0.0.1', // 服务器地址
    'DB_NAME'   => 'tkphp', // 数据库名
    'DB_USER'   => 'root', // 用户名
    'DB_PWD'    => '', // 密码
    'DB_PORT'   => 3306, // 端口
    'DB_PREFIX' => 'tk_', // 数据库表前缀 
    'DB_CHARSET'=> 'utf8', // 字符集
    
    'TMPL_PARSE_STRING' => array(
        '__STATIC__' => __ROOT__. '/Public/static',
        '__IMG__' => __ROOT__. '/Public/img',
        '__CSS__' => __ROOT__. '/Public/css',
        '__JS__' => __ROOT__. '/Public/js',
    ),
);