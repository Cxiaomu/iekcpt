<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2019-08-05
 * Time: 11:11
 */

namespace Home\Controller;


use Think\Controller;
use Think\Upload;
use Home\Model\PersonalModel;
use Home\Model\SuserModel;
use Home\Model\PostinfoModel;

header("Content-type:text/html;charset=utf-8");
class PersonalController extends Controller
{
    public function  checksf(){
        //        检测是否登录
        A('Login')->checklogin();

        $res = session('userinfo.leibei');
//        dump($res);
//        exit;
        if($res == "学生"){
            $this->display('index');
            return;
        }
        if($res == "教师"){
            $this -> display('courses');
            return;

        }
        if($res == '企业'){
            $this -> display('post');
            return;
        }else{
            $this -> display('index');
        }

    }

//0806上午、完善学生信息
    public function editstu(){
        //        检测是否登录
        A('Login')->checklogin();

        $a[stuid] = $_POST['stuid'];
        $a[sname] =session('userinfo.name');
//        dump( session ());//swssion取数组中的值
//        dump(session('userinfo.name'));//session取数组中的单个值
//        exit;
        $a[sschool]=$_POST['school'];
        $a[scollege]=$_POST['collge'];
        $a[smajor]=$_POST['major'];
        $a[ssex]=$_POST['ssex'];
        $a[sclass]=$_POST['class'];
        $a[stechnology]=$_POST['stechnology'];
        $a[sphone]=$_POST['phone'];
        $a[sqq]=$_POST['qq'];
        $a[smail]=$_POST['mail'];
        $a[diplomaLevelCode]=$_POST['diplomaLevelCode'];

        $studentModel = D('sinfo');
        $result = $studentModel->add($a,'',true);
//        dump($result);
//        exit;
        if($result !== false)
        {
            //成功，跳转到列表页面、
            $this->success('保存成功', 'index');
        }
        else{
            $this->error('保存失败!');
        }
    }

    //0806下午14:05
    //完善教师信息
    public function  editteacher(){
        //        检测是否登录
        A('Login')->checklogin();

        $res[tid] = $_POST['tid'];
        $res[tname] = session('userinfo.name');
        $res[tsex] = $_POST['ssex'];
        $res[tphone] = $_POST['phone'];
        $res[qq] = $_POST['qq'];
        $res[email] = $_POST['email'];
        $res[tschool] = $_POST['tschool'];
        $res[tcollege] = $_POST['tcollege'];
        $res[tposition] = $_POST['tposition'];
        $res[tresearchfield] = $_POST['tresearchfield'];

        $teamodel = D('tinfo');
        $result = $teamodel->add($res,'',true);

        if($result !== false){
            $this->success('保存成功');
        }
        else{
            $this->error('保存失败'.$teamodel->getError ());
        }


    }

    //企业完善信息
    public function  editcompany(){
        //        检测是否登录
        A('Login')->checklogin();

        $res[companyid] = $_POST['companyid'];
        $res[companyname] = $_POST['companyname'];
        $res[investor] = $_POST['investor'];
        $res[telephone] = $_POST['telephone'];
        $res[email] = $_POST['e-mail'];
        $res[field] = $_POST['field'];
        $res[location] = $_POST['location'];
        $res[description] = $_POST['description'];

        $companymodel = D('cinfo');
        $result = $companymodel->add($res,'',true);
        if($result !== false){
            $this->success('保存成功');
        }else{
            $this->error('保存失败');
        }

    }
    //发布项目
    public function  publishproject(){
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
            if($_FILES['prologo'][size] > 0){
                //文件上传
                $uploader = new Upload($config);
                $results = $uploader->uploadOne($_FILES['prologo']);

                if($results!== false){
                    $logo =$results['savepath'].$results['savename'];

                    $_POST['prologo'] =$logo;
                }else{
                    $this->error('上传失败'.$uploader->getError ());
                }


            }

            $PersonalModel = D('projectinfo');


            //上传时间
            $date = $res[datetime]=date('Y-m-d',time());
            $_POST['datetime']=$date;
            //上传人员
            $_POST['propeoplename'] = $a[sname] =session('userinfo.name');

            //将数组装换成字符串
            $_POST['protype'] = implode (',',$_POST['protype']);

            if($PersonalModel->create() !== false){
                if($PersonalModel->add() !== false){
                    $this->success('发布成功',U('Cases/findcases'));

                }
                else{
                    $this->error('发布失败'.$PersonalModel->getError ());
                }
            }


        }
    }

    //修改密码
    public function changemima(){
        //        检测是否登录
        A('Login')->checklogin();

        if(IS_POST){
            $sid=I('post.sid');
            $beforemima=I('post.beforemima');
            $newmima=I('post.newmima');
            $querenmima=I('post.querenmima');

            $suserModel = new SuserModel();
            $sql = "select * from suser where sid = '{$sid}' AND spwd ='{$beforemima}' ";
            $rows =$suserModel->query($sql);

            if(session('userinfo.leibei') == '学生')
            {
                if(!empty($rows) AND $newmima==$querenmima)
                {
                    $sql2 = "update suser set spwd = '{$newmima}'where sid = '{$sid}' AND spwd ='{$beforemima}' ";
                    $suserModel->execute($sql2);
                    $this->success("修改成功！");
                }else{
                    $this->error('修改失败！');
                }
                return;
            }

            if(session('userinfo.leibei') == '教师')
            {
                if(!empty($rows) AND $newmima==$querenmima)
                {
                    $sql2 = "update suser set spwd = '{$newmima}'where sid = '{$sid}' AND spwd ='{$beforemima}' ";
                    $suserModel->execute($sql2);
                    $this->success("修改成功！");
                }else{
                    $this->error('修改失败！');
                }
                return;
            }

            if(session('userinfo.leibei') == '企业')
            {
                if(!empty($rows) AND $newmima==$querenmima)
                {
                    $sql2 = "update suser set spwd = '{$newmima}'where sid = '{$sid}' AND spwd ='{$beforemima}' ";
                    $suserModel->execute($sql2);
                    $this->success("修改成功！");
                } else{
                    $this->error('确认密码和新密码不一致，修改失败!');
                }
                return;
            }
            
        }
    }


//        读取数据库简历数据
    public function  readresume(){
        //        检测是否登录
        A('Login')->checklogin();

        $resumemode = D('resume');

        $res = $resumemode -> query("select * from resume where resumeid='1'  ");
//        dump($res);
//        exit;
        $this ->assign('list',$res);
        $this ->display('resume');
    }

    //        公司读取数据库简历数据
    public function  companyreadresume(){
        //        检测是否登录
        A('Login')->checklogin();

        $resumemode = D('resume');
        $res = $resumemode -> query("select * from resume where resumeid='1' ");

        $this ->assign('list',$res);
        $this ->display('companyresume');
    }

//    寻找人才里的查看简历
    public function readresumestudent($sinfo_stuid){


        //        检测是否登录
        A('Login')->checklogin();

        $resumemode = D('resume');
        $sql  = "select * from resume where resumeid='$sinfo_stuid' ";
        $res = $resumemode -> query($sql);
        $this ->assign('list',$res);
//        dump($res);
//        exit;
        $this ->display('resumefindstudent');

    }

    public function  changemimacompany(){
        //        检测是否登录
        A('Login')->checklogin();

        $mimamodel = D('suser');
        $mysid = session('userinfo.sid');/*获取登录id*/
        $res = $mimamodel->query("select * from suser where sid = '{$mysid}'");
//        dump ($res);
//        exit;
        $this ->assign('list',$res);
        $this->display('xiugaimimacompany');
    }

    public function  changemimateacher(){
        //        检测是否登录
        A('Login')->checklogin();

        $mimamodel = D('suser');
        $mysid = session('userinfo.sid');/*获取登录id*/
        $res = $mimamodel->query("select * from suser where sid = '{$mysid}'");
//        dump ($res);
//        exit;
        $this ->assign('list',$res);
        $this->display('xiugaimimateacher');
    }

    public  function  changemimastu(){
        //        检测是否登录
        A('Login')->checklogin();

        $mimamodel = D('suser');
        $mysid = session('userinfo.sid');/*获取登录id*/
        $res = $mimamodel->query("select * from suser where sid = '{$mysid}'");
//        dump ($res);
//        exit;
        $this ->assign('list',$res);
        $this->display('xiugaimima');
    }





}