<?php
namespace Home\Controller;
use Think\Controller;
class UserController extends Controller {
    public function index(){
      
    }
    /**
     * 获取用户登录页面
     * @date 2015-03-14
     * @return [type] [description]
     */
    
    public function checkBySms()
    {
        // 当没在POST值时，停止脚本执行，返回0
        if ( ! isset($_POST['phone_number']))
        {
            die(0);
        }
        // 验证手机号码
        $pattern = '/^[1][3578]{1}\d{9}$/';
        if ( ! preg_match($pattern, $_POST['phone_number']))
        {
            die(0);
        }
    
        // 查询短信配置信息
        $modelConfig 	= M('sys_config');
        $getSmsConfig 	= $modelConfig->where("cname LIKE 'sms_%'")->select();
        $getSmsConfig 	= $this->_convertArray($getSmsConfig);
    
        //初始化必填
        $options['accountsid'] 	= $getSmsConfig['sms_accountsid'];
        $options['token'] 		= $getSmsConfig['sms_token'];
    
        //初始化 $options必填
        $ucpass = new \Think\Sms($options);
    
        // 开发者账号信息查询默认为json或xml
        // 短信验证码（模板短信）
        // 默认以65个汉字（同65个英文）为一条（可容纳字数受您应用名称占用字符影响）
        // 超过长度短信平台将会自动分割为多条发送。分割后的多条短信将按照具体占用条数计费。
        $appId = $getSmsConfig['sms_appid'];
    
        // 将信息发送给哪个用户
        $to = $_POST['phone_number'];
        // 使用哪个短信模板
        $templateId = "2581";
        // 生成的验证码信息
        $messageContent = mt_rand(100000, 999999);
        $param="Ribbon商城, {$messageContent},3";
    
        $returnContent = $ucpass->templateSMS($appId,$to,$templateId,$param, 'json');
        $d = json_decode($returnContent);
    
        $verifyCode = $d->resp->respCode;					// 返回的错误码，如：000000
        $createDate = $d->resp->templateSMS->createDate;	// 返回的日期格式：
    
        // 验证成功，返回字符串
        if (strcmp($verifyCode, '000000') == 0)
        {
            $dataArr = str_split($createDate, 2);
            $dataStr = $dataArr[0] . $dataArr[1] . '-' . $dataArr[2] . '-' . $dataArr[3] . ' ' . $dataArr[4] . ':' . $dataArr[5] . ':' . $dataArr[6];
    
            // 将生成的验证码保存在SESSION中
            $_SESSION['sms']['verify'] = $messageContent;
            // 将生验证码生成的时间写入SESSION中
            $_SESSION['sms']['timestamp'] = strtotime($dataStr);
            echo 1;
        }
        else
        {
            echo 0;
        }
    }
    
    public function login()
    {
    
        if($_GET['type'] !=""){
            $this->assign("types",$_GET['type']);
        }
         
        $this->display();
    }
    /**
	 * 登录界面登录处理
	 * @return void 
	 */
	public function doLogin()
	{
		$getCaptcha = I('post.code');
		$username = I('post.username');
		$password = I('post.password');
        $cart     = I('post.cart');
		$verify = new \Think\Verify();

		// 检查验证码
		if ( ! $verify->check($getCaptcha))
		{
			$this->error('验证码错误。');
			exit;
		}
		
		// 验证用户是否存在
		if ( ! $userInfo = $this->_checkUserLogin($username, $password))
		{
			$this->error('用户名或密码错误', 'regist');
			exit;
		}

		// 保存SESSION
		$this->_saveSession($userInfo['id'], $userInfo['uname']);

		if (session('?username') && session('?userid'))
		{
			
			if($cart=="cart"){
				$this->redirect('Buy/cart');
			}else{
			   $jumpURL = U('Index/index');
			   $this->success('欢迎回来', $jumpURL);
		    }
		}
		else
		{
			$this->error('登录失败');
		}
	}

	/**
	 * 退出登录
	 * @return void
	 */	
	public function logout()
	{
		session('user', NULL);
		session('gws', NULL);
		$jumpURL = U('Index/index');
		$this->success('再见，下次再来', $jumpURL);
	}

	
	/**
	 * 登录用户保存SESSION信息
	 * @param  [int] 	$userId   [用户ID]
	 * @param  [string] $userName [自动生成的用户名]
	 * @return [void]   
	 */
	protected function _saveSession($userId, $userName)
	{
		// 加密干扰字符串
		$discrubleCode = md5($userId . 'RIBBON');
		session(array('name'=>'userLogin', 'prefix'=>'user'));
		session('username', $userName);
		session('userid', $userId);
		session('usermd5', $discrubleCode);
		session('is_Login',1);
	}

	/**
	 * 保存SESSION信息
	 * @param  string $username 用户名
	 * @param  string $password 密码
	 * @return void           
	 */	
	protected function _checkUserLogin ($username, $password)
	{
		$modelUsers = M('users');
		$password = sha1($password);
		$where = "(mobile = '{$username}' AND password = '{$password}' AND email_state=1 AND status=1) OR (email = '{$username}' AND password = '{$password}' AND email_state=1 AND status=1)";

		$userInfo = $modelUsers->where($where)->find();

		return empty ($userInfo) ? NULL : $userInfo;
	}

	/**
	 * 获取用户注册页面
	 * @date 2015-01-14
	 * @return [type] [description]
	 */
	public function register()
	{
		$this->display();
	}

	/**
	 * 验证码
	 * @return [source]
	 */
	public function code()
	{
		$config = array(
			'imageW' => 180,
			'imageH' => 70,
			'length' => 4,
			'fontSize' => 25,
		);
		$code = new \Think\Verify($config);
		$code->entry();
	}
    public function email_ok(){
        $this->display();
    }
	/**
	 * 验证邮箱
	 * @return [type] [description]
	 */
	public function checkEmail()
	{
		$agreement 	= I('post.agreement');
		$captcha 	= I('post.code');
		$password 	= I('post.password');
		$repassword = I('post.repassword');
		$email 		= I('post.email');
		
		// 检查是否勾选注册协议
		if ( ! $agreement)
		{
			$this->error('请先确认注册协议');
			exit;
		}

		// 验证验证码
		$objCaptcha = new \Think\Verify();
		if ( ! $objCaptcha->check($captcha))
		{
			$this->error('验证码不正确');
		}

		// 验证密码长度和丙次密码是否相等
		if (strcmp($repassword, $password) != 0)
		{
			$this->error('两次密码不一致');
		}

		// 验证邮箱有没有被占用
		$objUser = M('users');
		$getUserEmail = $objUser->field('id, email, email_state, create_time')
								->where("email = '{$email}'")
								->find();

		// 如果数据库中存在，则检查状态1:已注册，0:未注册
		if ( ! empty($getUserEmail) && $getUserEmail['email_state'] != 0) 
		{
			$this->error('该帐户已注册');
			exit;
		}
		else
		{
			// 发送邮件激活码生成规则：md5(创建时间, md5(用户邮箱))
			// 随机用户名生成规则：'RN'开头 + md5(用户邮箱)的前五个字符
			$ts = time();
			$uName = md5($ts);

			// 没有注册将用户信息保存起来（插入）
			$ip = I('server.REMOTE_ADDR');
			$codePass = md5($password);
			$userData['email'] 			 = $email;
			$userData['uname']			 = 'TK' . substr($uName, 0, 5);
			$userData['password']		 = sha1($password);
			$userData['create_time']	 = time();
			$userData['last_login_time'] = time();
			$userData['last_login_ip']	 = ip2long($ip);
			$userData['active_code']	 = md5($userData['create_time'] . $codePass);


			// 用户存在但 state 为0
			if ( ! empty($getUserEmail) && $getUserEmail['email_state'] == 0)
			{
				// 修改
				$objUser->where("id = '{$getUserEmail['id']}'")->save($userData);
				$getInsertID = $getUserEmail['id'];
			}
			else
			{
				// 插入
				if($objUser->create($userData))
				{
					$objUserInfo = M('user_info');
					$getInsertID = $objUser->add();
					$insertInfoTable = $objUserInfo->data(array('user_id' => $getInsertID))->add();
					if (!$getInsertID || !$insertInfoTable)
					{
						$this->error('未知错误.');
						exit;
					}
				}
			}
		}
		
		// 实例化邮件发送类
		// $smtp = new smtp($smtpserver,$port,true,$smtpuser,$smtppwd,$sender);
		$objEmailConfig = M('sys_config');
		$emailConfig 	= $objEmailConfig->where("cname LIKE 'email_%'")->select();
		$emailInfo 		= $this->_convertArray($emailConfig);

		// 查看配置文件中用户注册是否开启验证，若开启走验证邮箱的流程
		// 如果未开启，则不走验证邮箱的流程
		if ( ! $emailInfo['email_send_verify'])
		{
			// 没有开启邮箱验证
			$affectedRows = $objUser->where("id='{$getInsertID}'")->data(array('email_state' => 1))->save();
			if ($affectedRows > 0)
			{
				// 写入SESSION
				session('user', NULL);
				$this->_saveSession($getInsertID, $userData['uname']);
				// 提示跳转
				$this->assign('tipMsg', '恭喜您，注册成功');
				$this->assign('url', 'http://' . I('server.HTTP_HOST') . __APP__ . '/Member/member');
				$this->display('email_ok');
				exit;
			}
			else
			{
				$this->assign('tipMsg', '错误：邮件验证失败');
				$this->assign('url', 'http://' . I('server.HTTP_HOST') . __APP__);
				$this->display('checkEmail_error');
				exit;
			}
		}	
		else
		{

			$send = $this->sendEmail($email, $getInsertID, $codePass);

			if ($send)
			{
				$this->assign('userEmail', $email);
				$this->display('email_ok');
			}
			else
			{
				$this->error('邮件发送失败，返回重试');
				exit;
			}
		}	
	}


	/**
	 * 邮件发送
	 * @param  [string] $email    [用户邮箱]
	 * @param  [int] 	$userId   [用户新ID]
	 * @param  [string] $codePass [加密验证码]
	 * @return [bool]	          [描述]
	 */
	protected function sendEmail($email, $userId, $codePass)
	{

		$objEmailConfig = M('sys_config');
		$emailConfig 	= $objEmailConfig->where("cname LIKE 'email_%'")->select();
		$emailInfo 		= $this->_convertArray($emailConfig);

	/* 	$smtpserver = $emailInfo['email_serv_addr'];
		$port 		= $emailInfo['email_serv_port'];
		$smtpuser	= $emailInfo['email_serv_uname'];
		$smtppwd	= $emailInfo['email_serv_pwd'];
		$sender		= $emailInfo['email_sender_count'];

		// 开启了邮箱验证
		$objEmail 	= new \Think\Email($smtpserver,$port,true,$smtpuser,$smtppwd,$sender); */
		$objEmail = new \Custom\Email\Email;
		//$mail->send('zb18238827991@163.com', '你还好吗？','我的未来不是梦', false);
		// 邮件主题和内容
		$objTmp 	= M('email_templates');			// 查找模板
		$tmpInfo 	= $objTmp->where("ename = 'email_send_verify'")->find();

		$subject 	= $tmpInfo['subject'];			// 模板中的邮件主题
		$content 	= $tmpInfo['content'];			// 模板中的邮件内容

		// 获取邮件发送所需要替换的信息，网站名称和版权
		$sendInfo 	= $objEmailConfig->where("cname in ('sy_webname', 'sy_webcopyright')")->select();

		$sendInfo 	= $this->_convertArray($sendInfo);		// 将二维数组转化为一维
		$passEncode = sha1($password);

		// 自定义邮件发送内容
		$url = 'http://' . I('server.HTTP_HOST') . __APP__ . '/' . 'Login/verifyEmail/id/' . $userId . '/active_code/' . $codePass;
		$username 	= '您于' . date('Y年m月d分 H时i分s秒') . '申请注册Tkphp账号<strong style="color:#00acff;">' . $email . '</strong>';
		$sy_webname = $sendInfo['sy_webname'];
		$url		='<a href="' . $url .'">' . $url . '</a>';
		$sy_webcopyright = $sendInfo['sy_webcopyright'];
		
		// 邮件内容正则
		$pattern = array(
			'/{sy_webname}/','/{sy_webcopyright}/', '/{username}/', '/{url}/'
		);
		$replacement 	= array($sy_webname, $sy_webcopyright, $username, $url);

		$newSubject 	= preg_replace($pattern, $replacement, $subject);
		$newContent 	= preg_replace($pattern, $replacement, $content);
		$newContent 	= htmlspecialchars_decode($newContent);
		$send			= $objEmail->send($email,$newSubject,$newContent,false);
		return $send;
	}

	/**
	 * 用户邮箱验证
	 * @return void
	 */
	public function verifyEmail()
	{

		$userId = I('get.id');
		$userActiveCode = I('get.active_code');

		if (empty($userId))
		{
			$this->error('非法操作');
			exit;
		}

		$modelUsers = M('users');
		$userInfo = $modelUsers->field('create_time, email_state, active_code')->find($userId);

		// 验证用户帐户是不是已经完成了注册，防止多次点击验证链接
		if ($userInfo['email_state'])
		{
			$this->assign('tipMsg', '该账号已完成验证，链接过期');
			$this->assign('url', 'http://' . I('server.HTTP_HOST') . __APP__ . 'Home/user/login');
			$this->display('checkEmail_warning');
			exit;
		}
		else
		{
			$nowTime = time();
			$emailTime = $userInfo['create_time'];
			if ($nowTime - $emailTime > 86400)
			{
				$this->assign('timMsg', '验证邮件已过期');
				$this->assign('url', 'http://' . I('server.HTTP_HOST') . __APP__ . '/Login/login');
				$this->display('checkEmail_error');
			}
			else
			{
				if (md5($userInfo['create_time'] . $userActiveCode) == $userInfo['active_code'])
				{
					
					if ($modelUsers->where("id={$userId}")->save(array('email_state'=>1)))
					{
						$this->assign('tipMsg', '恭喜您，邮件验证成功');
						$this->assign('url', 'http://' . I('server.HTTP_HOST') . __APP__ . '/Login/login');
						$this->display('checkEmail_ok');
					}
					
				}
				else
				{
					$this->assign('tipMsg', '错误：邮件验证失败');
					$this->assign('url', 'http://' . I('server.HTTP_HOST') . __APP__);
					$this->display('checkEmail_error');
				}
			}
		}

	}

	/**
	 * 将二维数组置换为一维
	 * @param  [array] $arr [需要转换的二维数组]
	 * @return [array]      [转换后的一维数组]
	 */
	private function _convertArray($arr)
	{
		if ( ! is_array($arr))
		{
			return false;
		}
		$newArr = array();
		foreach ($arr as $key=>$val)
		{
			$newKey = $val['cname'];
			$newArr[$newKey] = $val['cvalue'];
		}
		return $newArr;
	}

    
}
