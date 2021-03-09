<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2019-07-28
 * Time: 17:32
 */

namespace Home\Controller;


use Think\Controller;
use Home\Model\CourseinfoModel;
use Think\Upload;
header("Content-type:text/html;charset=utf-8");
class TeacherController extends  Controller
{
    public function  findcourse(){
        //        检测是否登录
        A('Login')->checklogin();
	    	$CourseinfoModel = D('courseinfo');
        	$list = $CourseinfoModel->query("select * from courseinfo");
            $this->assign('list',$list);
            $this->display('index');
    }


    public function publishcourse(){
        //        检测是否登录
        A('Login')->checklogin();
    	if(IS_POST)
    	{
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

            if($_FILES['courselogo'][size] > 0){
                //文件上传
                $uploader = new Upload($config);
                $results = $uploader->uploadOne($_FILES['courselogo']);

                if($results!== false){
                    $logo =$results['savepath'].$results['savename'];
                    $_POST['courselogo'] =$logo;
                }else{
                    $this->error('上传失败'.$uploader->getError ());
                }
            }

            $CourseinfoModel = D('courseinfo');

            //上传时间
            $date = $res[datetime]=date('Y-m-d',time());
            $_POST['coursetime']=$date;
            //上传人员
            // $school = I('post.school');
            // var_dump($school);
            // exit;
            /*$data['school']= $_POST['school'];
                 dump($data);
                 exit;*/
            // CourseinfoModel ->add($data);
            //将数组装换成字符串
            $_POST['coursetype'] = implode (',',$_POST['coursetype']);

            if($CourseinfoModel->create() !== false){
                if($CourseinfoModel->add() !== false){
                    $this->success('发布成功',U('Teacher/findcourse'));

                }
                else{
                    $this->error('发布失败'.$CourseinfoModel->getError ());
                }
            }
        }
    }


    public function gongxue(){
        $courseinfoModel = D('courseinfo');
        $sql = "select * from courseinfo where coursetype like '%工学%' ";
        $rows =$courseinfoModel->query($sql);
        $this->assign("rows",$rows);
        $this->display('gongxue');
        return;
    }

    public function lixue(){
        $courseinfoModel = D('courseinfo');
        $sql = "select * from courseinfo where coursetype like '%理学%' ";
        $rows =$courseinfoModel->query($sql);
        $this->assign("rows",$rows);
        $this->display('lixue');
        return;
    }

    public function yixue(){
        $courseinfoModel = D('courseinfo');
        $sql = "select * from courseinfo where coursetype like '%医学%' ";
        $rows =$courseinfoModel->query($sql);
        $this->assign("rows",$rows);
        $this->display('yixue');
        return;
    }

    public function jiaoyuxue(){
        $courseinfoModel = D('courseinfo');
        $sql = "select * from courseinfo where coursetype like '%教育学%' ";
        $rows =$courseinfoModel->query($sql);
        $this->assign("rows",$rows);
        $this->display('jiaoyuxue');
        return;
    }  

    public function jingjixue(){
        $courseinfoModel = D('courseinfo');
        $sql = "select * from courseinfo where coursetype like '%经济学%' ";
        $rows =$courseinfoModel->query($sql);
        $this->assign("rows",$rows);
        $this->display('jingjixue');
        return;
    }

    public function nongxue(){
        $courseinfoModel = D('courseinfo');
        $sql = "select * from courseinfo where coursetype like '%农学%' ";
        $rows =$courseinfoModel->query($sql);
        $this->assign("rows",$rows);
        $this->display('nongxue');
        return;
    }

     public function faxue(){
        $courseinfoModel = D('courseinfo');
        $sql = "select * from courseinfo where coursetype like '%法学%' ";
        $rows =$courseinfoModel->query($sql);
        $this->assign("rows",$rows);
        $this->display('faxue');
        return;
    }

    public function zhexue(){
        $courseinfoModel = D('courseinfo');
        $sql = "select * from courseinfo where coursetype like '%哲学%' ";
        $rows =$courseinfoModel->query($sql);
        $this->assign("rows",$rows);
        $this->display('zhexue');
        return;
    }

    public function wenxue(){
        $courseinfoModel = D('courseinfo');
        $sql = "select * from courseinfo where coursetype like '%文学%' ";
        $rows =$courseinfoModel->query($sql);
        $this->assign("rows",$rows);
        $this->display('wenxue');
        return;
    }

    public function lishixue(){
        $courseinfoModel = D('courseinfo');
        $sql = "select * from courseinfo where coursetype like '%历史学%' ";
        $rows =$courseinfoModel->query($sql);
        $this->assign("rows",$rows);
        $this->display('lishixue');
        return;
    }  

    public function guanlixue(){
        $courseinfoModel = D('courseinfo');
        $sql = "select * from courseinfo where coursetype like '%管理学%' ";
        $rows =$courseinfoModel->query($sql);
        $this->assign("rows",$rows);
        $this->display('guanlixue');
        return;
    }

    public function yishuxue(){
        $courseinfoModel = D('courseinfo');
        $sql = "select * from courseinfo where coursetype like '%艺术学%' ";
        $rows =$courseinfoModel->query($sql);
        $this->assign("rows",$rows);
        $this->display('yishuxue');
        return;
    }
}