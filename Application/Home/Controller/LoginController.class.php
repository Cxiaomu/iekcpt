<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2019-07-26
 * Time: 10:24
 */

namespace Home\Controller;


use Think\Controller;
use Think\Verify;
header("Content-type:text/html;charset=utf-8");
class LoginController extends Controller
{

    public function index(){
        $this->display('index');
    }
    public function addzc()
    {

        if (IS_POST) {
            $suserModel = D ( 'suser' );
            if ($suserModel->create()!== false) {

                if ($suserModel->add('','',true)!== false) {//1.保存 2.激活验证功能

                    $this->success('注册成功');
                    return;
                }

            }
            $this->error('注册失败'.showModelError($suserModel));

        }
        else {
            $this->display('login');
       }
    }



    public  function  login(){

        if(IS_POST){
            $suserModel = D( 'suser' );
            //接收请求的数据
            $a["type"] =$_POST['leibei'];
            $a["spwd"] =$_POST['spwd'];


            if($suserModel-> create() !== false)
            {

                $verify = new Verify();
                if(!$verify->check(I('post.captcha'))){
                    $this->success('验证码错误或没填！');
                    return;
                }
                //进行登录
                $result = $suserModel->login();

                session('userinfo',$result);
//                dump(session('userinfo.name'));
//                exit;
                if(is_array($result)){
                    if($a["type"] == '学生' && session('userinfo.spwd') == $a["spwd"] && session('userinfo.leibei') == '学生' ){
                        //登录成功，跳转index
                       $this->success('登录成功!',U('Personal/index'));
                        return;
                    }
                    if($a["type"] == '教师' && session('userinfo.spwd') == $a["spwd"] && session('userinfo.leibei') == '教师'){
                        //登录成功，跳转index
                        $this->success('登录成功!',U('Personal/courses'));
                        return;
                    }
                    if($a["type"] == '企业' && session('userinfo.spwd') == $a["spwd"] && session('userinfo.leibei') == '企业'){
                        //登录成功，跳转index
                        $this->success('登录成功!',U('Personal/post'));
                        return;

                    }else{
                        $this->error('用户类别错误');
                    }
                }
                else{
                    switch ($result){
                        case -1:
                            $error = '用户名错误';break;
                        case -2:
                            $error = '密码错误';break;

                    }
                    $this->error($error);
                }

            }
            $this->error('登录失败!'.showModelError($suserModel));
        }else{
            $this->display('login');
        }
    }


    public function  addregist(){
        $sinfo = new \Home\Model\SinfoModel();
        $date[sid] = $_POST['sid'];
        $date[spwd] = $_POST['spwd'];

        $res = $sinfo->add($date);
        if($res !== false)
        {

            $this->display('edit');//跳转到添加页面

        }
        else{
            $this->error('添加失败!');
        }

    }

    public function zcxy(){
        $this->display('zcxy');
    }


    public  function  loginout(){
        session('userinfo',null);
        $this->success('成功退出',U('Index/index'));
    }

    // 检测登录
    public function checklogin(){
        //判断用户是否已经登录
        $res = session('userinfo.sid' );
        if (!isset($res)) {
            $this->error('对不起,您还没有登录!请先登录再进行浏览', U('Index/index'));
        }
        return;
    }







}