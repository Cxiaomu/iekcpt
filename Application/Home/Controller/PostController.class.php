<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2019-08-05
 * Time: 19:22
 */

namespace Home\Controller;

use Think\Upload;
use Think\Controller;
use Home\Model\PostinfoModel;
header("Content-type:text/html;charset=utf-8");
class PostController extends Controller
{
	    public function  findpost(){
            //        检测是否登录
            A('Login')->checklogin();

	    	$PostinfoModel = D('postinfo');
        	$list = $PostinfoModel->query("select * from postinfo");
//        dump($list);
//        exit;
        $this->assign('list',$list);
        $this->display('index');


    }
//    public function  findcases(){
//    $this->display('index');
//}


 //发布岗位
    public function  publishpost(){
        //        检测是否登录
        A('Login')->checklogin();

        if(IS_POST){

//            $res[protype]=$_POST['protype'];
//            $res[proname]=$_POST['proname'];
//            $res[requires]=$_POST['require'];
//
//            $res[prodate]=$_POST['prodate'];
//            $res[procost]=$_POST['procost'];
//            $res[propeoplename]=$_POST['propeoplename'];
//            $res[prophone]=$_POST['prophone'];
//            $res[protype]=$_POST['protype'];
//            $res[datetime]=date('Y-m-d',time());

            $config = array(
                'mimes'         =>  array(), //允许上传的文件MiMe类型
                'maxSize'       =>  0, //上传的文件大小限制 (0-不做限制)
                'exts'          =>  array('jpg', 'gif', 'png', 'jpeg'),// 设置附件上传类型
                'autoSub'       =>  true, //自动子目录保存文件
                'subName'       =>  array('date', 'Y-m-d'), //子目录创建方式，[0]-函数名，[1]-参数，多个参数使用数组
                'rootPath'      =>  './Public/', //保存根路径
                'savePath'      =>  'Uploads/', //保存路径
                'saveName'      =>  array('uniqid', ''), //上传文件命名规则，[0]-函数名，[1]-参数，多个参数使用数组
                'saveExt'       =>  '', //文件保存后缀，空则使用原后缀
                'replace'       =>  false, //存在同名是否覆盖
                'hash'          =>  true, //是否生成hash编码
                'callback'      =>  false, //检测文件是否存在回调，如果存在返回文件信息数组
                'driver'        =>  '', // 文件上传驱动
                'driverConfig'  =>  array(), // 上传驱动配置
            );
            if($_FILES['companylogo'][size] > 0){
                //文件上传
                $uploader = new Upload($config);
                $results = $uploader->uploadOne($_FILES['companylogo']);

                if($results!== false){
                    $logo =$results['savepath'].$results['savename'];

                    $_POST['companylogo'] =$logo;
                }else{
                    $this->error('上传失败'.$uploader->getError ());
                }
            }

            $PostinfoModel = D('postinfo');

            //上传时间
            $date = $res[datetime]=date('Y-m-d',time());
            $_POST['posttime']=$date;
            //上传人员
            // $companyname = I('post.companyname');

            //将数组装换成字符串
            $_POST['posttype'] = implode (',',$_POST['posttype']);

            if($PostinfoModel->create() !== false){
                if($PostinfoModel->add() !== false){
                    $this->success('发布成功',U('post/findpost'));

                }
                else{
                    $this->error('发布失败'.$PostinfoModel->getError ());
                }
            }


        }
    }


    //    发送自己的简历信息
    public  function  sendjianli(){
        //        检测是否登录
        A('Login')->checklogin();
        if(IS_POST){
            $config = array(
                'mimes'         =>  array(), //允许上传的文件MiMe类型
                'maxSize'       =>  0, //上传的文件大小限制 (0-不做限制)
                'exts'          =>  array('jpg', 'gif', 'png', 'jpeg'),// 设置附件上传类型
                'autoSub'       =>  true, //自动子目录保存文件
                'subName'       =>  array('date', 'Y-m-d'), //子目录创建方式，[0]-函数名，[1]-参数，多个参数使用数组
                'rootPath'      =>  './Public/', //保存根路径
                'savePath'      =>  'Uploads/', //保存路径
                'saveName'      =>  array('uniqid', ''), //上传文件命名规则，[0]-函数名，[1]-参数，多个参数使用数组
                'saveExt'       =>  '', //文件保存后缀，空则使用原后缀
                'replace'       =>  false, //存在同名是否覆盖
                'hash'          =>  true, //是否生成hash编码
                'callback'      =>  false, //检测文件是否存在回调，如果存在返回文件信息数组
                'driver'        =>  '', // 文件上传驱动
                'driverConfig'  =>  array(), // 上传驱动配置
            );
            if($_FILES['jianlitp'][size] > 0){
                //文件上传
                $uploader = new Upload($config);
                $results = $uploader->uploadOne($_FILES['jianlitp']);

                if($results!== false){
                    $logo =$results['savepath'].$results['savename'];

                    $data['jianlitp'] = $_POST['jianlitp'] =$logo;
                    session('infophoto',$logo);


                }else{
                    $this->error('上传失败'.$uploader->getError ());
                }

            }/*
                dump (session('infophoto'));
                exit;*/

            //实例化模型
            $postmodel = D('resume');
            $id = 1;
            $data['resumeid'] = $_POST['resumeid'] = $id; /*只保存一个简历*/
            $data['name'] = $_POST['tname'];
            $data['sex'] = $_POST['sex'];
            $data['phone'] = $_POST['tphone'];
            $data['birthday'] = $_POST['shengri'];
            $data['workexperience'] = $_POST['worktime'];
            $data['heightxueli'] = $_POST['bestxueli'];
            $data['mail'] = $_POST['tmail'];
            $data['jodtype'] = $_POST['jobtype'];
            $data['province'] = $_POST['province'];       /*省市县*/
            $data['city'] = $_POST['city'];       /*省市县*/
            $data['region'] = $_POST['region'];       /*省市县*/
            $data['hopesalary'] = $_POST['hopesalary'];
            $data['selfintroduction'] =  $_POST['selfintroduction'];
            $data['school'] =  $_POST['school'];
            $data['major'] =  $_POST['major'];




            $res = $postmodel->add($data,'',true);//保存到数据库
            if ($res !== false){
//                    $this->success('发送成功!');
                echo("<script type='text/javascript'> alert('您的简历已完善，请到《我的简历查看》！');
                    location.href='../personal/index.html';</script>");
            }
            else{
                $this->error('发送失败！');
            }


        }
    }



}