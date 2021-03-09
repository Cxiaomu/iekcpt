<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2019-08-04
 * Time: 23:42
 */

namespace Home\Controller;


use Think\Controller;
use Home\Model\ProjectinfoModel;
header("Content-type:text/html;charset=utf-8");

class CasesController extends Controller
{
    public function  findcases(){
        //        检测是否登录
        A('Login')->checklogin();

        $findprojectModel = D('projectinfo');
        $list = $findprojectModel->query("select * from projectinfo");
//        dump($list);
//        exit;
        $this->assign('list',$list);
        $this->display('index');
    }
//    public function  findcases(){
//    $this->display('index');
//}

    public function findproject(){
        //        检测是否登录
        A('Login')->checklogin();

        if(IS_POST){
            $guanjianzi=I('post.all');
            $findprojectModel = new ProjectinfoModel();
          
            if($guanjianzi=="软件开发" || $guanjianzi=="开发" ){
                $sql = 'select * from projectinfo where protype = "软件开发" ';
                $rows =$findprojectModel->query($sql);
                $this->assign("rows",$rows);
                $this->display('index');
                 return;
            }

            if($guanjianzi=="计算机网络" || $guanjianzi=="网络" ){
                $sql = 'select * from projectinfo where protype = "计算机网络" ';
                $rows =$findprojectModel->query($sql);
                $this->assign("rows",$rows);
                $this->display('index');
                 return;
            }

            if($guanjianzi=="计算机应用" || $guanjianzi=="应用" ){
                $sql = 'select * from projectinfo where protype = "计算机应用" ';
                $rows =$findprojectModel->query($sql);
                $this->assign("rows",$rows);
                $this->display('index');
                 return;
            }

            if($guanjianzi=="软件测试" || $guanjianzi=="测试" ){
                $sql = 'select * from projectinfo where protype = "软件测试" ';
                $rows =$findprojectModel->query($sql);
                $this->assign("rows",$rows);
                $this->display('index');
                 return;
            }

            if($guanjianzi=="系统架构设计" || $guanjianzi=="系统架构" ){
                $sql = 'select * from projectinfo where protype = "系统架构设计" ';
                $rows =$findprojectModel->query($sql);
                $this->assign("rows",$rows);
                $this->display('index');
                 return;
            }

            if($guanjianzi=="计算机系统维护" || $guanjianzi=="系统维护" ){
                $sql = 'select * from projectinfo where protype = "计算机系统维护" ';
                $rows =$findprojectModel->query($sql);
                $this->assign("rows",$rows);
                $this->display('index');
                 return;
            }

            if($guanjianzi=="电子商务" || $guanjianzi=="电商" ){
                $sql = 'select * from projectinfo where protype = "电子商务" ';
                $rows =$findprojectModel->query($sql);
                $this->assign("rows",$rows);
                $this->display('index');
                 return;
            }

            if($guanjianzi=="计算机硬件" || $guanjianzi=="硬件" ){
                $sql = 'select * from projectinfo where protype = "计算机硬件" ';
                $rows =$findprojectModel->query($sql);
                $this->assign("rows",$rows);
                $this->display('index');
                 return;
            }

            if($guanjianzi=="多媒体制作" || $guanjianzi=="多媒体" ){
                $sql = 'select * from projectinfo where protype = "多媒体制作" ';
                $rows =$findprojectModel->query($sql);
                $this->assign("rows",$rows);
                $this->display('index');
                 return;
            }

            if($guanjianzi=="办公自动化" || $guanjianzi=="办公" ){
                $sql = 'select * from projectinfo where protype = "办公自动化" ';
                $rows =$findprojectModel->query($sql);
                $this->assign("rows",$rows);
                $this->display('index');
                 return;
            }

             if($guanjianzi=="动漫设计与制作" || $guanjianzi=="动漫设计" || $guanjianzi=="动漫制作" ){
                $sql = 'select * from projectinfo where protype = "动漫设计与制作" ';
                $rows =$findprojectModel->query($sql);
                $this->assign("rows",$rows);
                $this->display('index');
                 return;
            }

             if($guanjianzi=="租赁和商务服务业" || $guanjianzi=="租赁" || $guanjianzi=="商务" || $guanjianzi=="服务业"){
                $sql = 'select * from projectinfo where protype = "租赁和商务服务业" ';
                $rows =$findprojectModel->query($sql);
                $this->assign("rows",$rows);
                $this->display('index');
                 return;
            }

             if($guanjianzi=="教育"){
                $sql = 'select * from projectinfo where protype = "教育" ';
                $rows =$findprojectModel->query($sql);
                $this->assign("rows",$rows);
                $this->display('index');
                 return;
            }

             if($guanjianzi=="水利、环境和公共设施管理" || $guanjianzi=="水利" || $guanjianzi=="环境" || $guanjianzi=="公共设施管理"){
                $sql = 'select * from projectinfo where protype = "水利、环境和公共设施管理" ';
                $rows =$findprojectModel->query($sql);
                $this->assign("rows",$rows);
                $this->display('index');
                 return;
            }
        } 
    }

    //按领域查询
    public function findkaifa(){
        //        检测是否登录
        A('Login')->checklogin();
        $findprojectModel = D('projectinfo');
        $sql = "select * from projectinfo where protype like '%软件开发%' ";
        $list =$findprojectModel->query($sql);
        $this->assign('list',$list);
        $this->display('index');
        return;
    }


    public function findwangluo(){
        //        检测是否登录
        A('Login')->checklogin();
        $findprojectModel = D('projectinfo');
           $sql = "select * from projectinfo where protype like '%计算机网络%' ";
        $list =$findprojectModel->query($sql);
        $this->assign('list',$list);
        $this->display('index');
        return;
    }

    public function findyingyong(){
        //        检测是否登录
        A('Login')->checklogin();
        $findprojectModel = D('projectinfo');
        $sql = "select * from projectinfo where protype like '%计算机应用%' ";
        $list =$findprojectModel->query($sql);
        $this->assign('list',$list);
        $this->display('index');
        return;
    }

    public function findceshi(){
        //        检测是否登录
        A('Login')->checklogin();
        $findprojectModel = D('projectinfo');
        $sql = "select * from projectinfo where protype like '%软件测试%' ";
        $list =$findprojectModel->query($sql);
        $this->assign('list',$list);
        $this->display('index');
        return;
    }

    public function findsheji(){
        //        检测是否登录
        A('Login')->checklogin();
        $findprojectModel = D('projectinfo');
        $sql = "select * from projectinfo where protype like '%系统架构设计%' ";
        $list =$findprojectModel->query($sql);
        $this->assign('list',$list);
        $this->display('index');
        return;
    }

    public function findweihu(){
        //        检测是否登录
        A('Login')->checklogin();
        $findprojectModel = D('projectinfo');
            $sql = "select * from projectinfo where protype like '%计算机系统维护%' ";
        $list =$findprojectModel->query($sql);
        $this->assign('list',$list);
        $this->display('index');
        return;
    }

    public function findshangwu(){
        //        检测是否登录
        A('Login')->checklogin();
        $findprojectModel = D('projectinfo');
        $sql = "select * from projectinfo where protype like '%电子商务%' ";
        $list =$findprojectModel->query($sql);
        $this->assign('list',$list);
        $this->display('index');
        return;
    }

    public function findyingjian(){
        //        检测是否登录
        A('Login')->checklogin();
        $findprojectModel = D('projectinfo');
        $sql = "select * from projectinfo where protype like '%计算机硬件%' ";
        $list =$findprojectModel->query($sql);
        $this->assign('list',$list);
        $this->display('index');
        return;
    }

    public function findduomeiti(){
        //        检测是否登录
        A('Login')->checklogin();
        $findprojectModel = D('projectinfo');
            $sql = "select * from projectinfo where protype like '%多媒体制作%' ";
        $list =$findprojectModel->query($sql);
        $this->assign('list',$list);
        $this->display('index');
        return;
    }

    public function findzidonghua(){
        //        检测是否登录
        A('Login')->checklogin();
        $findprojectModel = D('projectinfo');
      $sql = "select * from projectinfo where protype like '%办公自动化%' ";
        $list =$findprojectModel->query($sql);
        $this->assign('list',$list);
        $this->display('index');
        return;
    }

    public function finddongman(){
        //        检测是否登录
        A('Login')->checklogin();
        $findprojectModel = D('projectinfo');
        $sql = "select * from projectinfo where protype like '%动漫设计与制作%' ";
        $list =$findprojectModel->query($sql);
        $this->assign('list',$list);
        $this->display('index');
        return;
    }

    public function findfuwuye(){
        //        检测是否登录
        A('Login')->checklogin();
        $findprojectModel = D('projectinfo');
     $sql = "select * from projectinfo where protype like '%租赁和商务服务业%' ";
        $list =$findprojectModel->query($sql);
        $this->assign('list',$list);
        $this->display('index');
        return;
    }

    public function findjiaoyu(){
        //        检测是否登录
        A('Login')->checklogin();
        $findprojectModel = D('projectinfo');
        $sql = "select * from projectinfo where protype like '%教育%' ";
        $list =$findprojectModel->query($sql);
        $this->assign('list',$list);
        $this->display('index');
        return;
    }

    public function findguanli(){
        //        检测是否登录
        A('Login')->checklogin();
        $findprojectModel = D('projectinfo');
             $sql = "select * from projectinfo where protype like '%水利、环境和公共设施管理%' ";
        $list =$findprojectModel->query($sql);
        $this->assign('list',$list);
        $this->display('index');
        return;
    }


    public function  findcasesjianjie($sinfo_pid){

        //        检测是否登录
        A('Login')->checklogin();

        $indexmodel = D('projectinfo');
        $sql  = "select * from projectinfo where pid='$sinfo_pid' ";
        $res = $indexmodel -> query($sql);
        $this ->assign('list',$res);
//        dump($res);
//        exit;
        $this ->display('xiangmu1');
    }
}