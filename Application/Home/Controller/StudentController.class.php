<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2019-07-28
 * Time: 17:29
 */

namespace Home\Controller;

use Think\Controller;
use Home\Model\ResumeModel;
use Think\Upload;
use Think\Page;
header("Content-type:text/html;charset=utf-8");
class StudentController extends Controller
{
    public function  index(){
        //        检测是否登录
        A('Login')->checklogin();

//        $findtelentModel = new FindtelentModel();

        $ResumeModel = D('resume');
        
        //分页工具条
        $pageSize = 8;
        $count = $ResumeModel->count();
        $page = new Page($count,$pageSize);
        $pageHTML = $page->show();
        $this->assign("pageHTML",$pageHTML);

        //准备分页列数据
       /* $rows = $findtelentModel->limit($page->firstRow,$page->listRows)->select();
        $this->assign('rows',$rows);
        $this->display('index');*/

       //查找resume数据，放弃原有的数据！
        $rows = $ResumeModel->limit($page->firstRow,$page->listRows)->select();
        $this->assign('rows',$rows);
        $this->display('index');
    }


    public  function  index1(){
        //        检测是否登录
        A('Login')->checklogin();

        $StudentModel = D('sinfo');
        $list = $StudentModel->query("select * from sinfo");
//        dump($list);
//        exit;
        $this->assign('list',$list);
        $this->display('index');
    }
 /*   public function editstu(){
        $this->display('edit');
    }
    public function  editstu1(){
        $a[id] = session('userinfo.sid');
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

        $studentModel = D('sinfo');
        $result = $studentModel->add($a,'',true);
//        dump($result);
//        exit;
        if($result !== false)
        {
            //成功，跳转到列表页面、
            $this->success('添加成功', 'index');
        }
        else{
            $this->error('添加失败!');
        }

    }*/

    //删除一条数据
    public function  remove($sinfo_stuid){
        //        检测是否登录
        A('Login')->checklogin();

        $studentModel = M('sinfo');
        $res = $studentModel->delete ($sinfo_stuid);
        if($res !== false){
                $this->success('删除成功',U('index'));
        }
        else{
            $this->error('删除失败'.$studentModel->getError ());

        }
    }



    public function  prodisplay(){
        //        检测是否登录
        A('Login')->checklogin();

        $StudentModel = D('projectinfo');
        $list = $StudentModel->query("select * from projectinfo");
//        dump($list);
//        exit;
        $this->assign('list',$list);
        $this->display('prodisplay');


    }
    public function findtelent(){
        //        检测是否登录
        A('Login')->checklogin();
        if(IS_POST){
            $guanjianzi=I('post.all');
            $findtelentModel = new ResumeModel();
            //按学校查询
            if($guanjianzi=="山东建筑大学" || $guanjianzi=="山建大" || $guanjianzi=="山建"){
                $sql = 'select * from resume where school = "山东建筑大学" ';
                $rows =$findtelentModel->query($sql);
                $this->assign("rows",$rows);
                $this->display('index');
                 return;
            }
            if($guanjianzi=="山东大学"){
                $sql = 'select * from resume where school = "山东大学" ';
                $rows =$findtelentModel->query($sql);
                $this->assign("rows",$rows);
                $this->display('index');
                 return;
            }
            if($guanjianzi=="山东科技大学"){
                $sql = 'select * from resume where school = "山东科技大学" ';
                $rows =$findtelentModel->query($sql);
                $this->assign("rows",$rows);
                $this->display('index');
                 return;
            }
            if($guanjianzi=="中国石油大学"){
                $sql = 'select * from resume where school = "中国石油大学" ';
                $rows =$findtelentModel->query($sql);
                $this->assign("rows",$rows);
                $this->display('index');
                 return;
            }
            if($guanjianzi=="青岛科技大学"){
                $sql = 'select * from resume where school = "青岛科技大学" ';
                $rows =$findtelentModel->query($sql);
                $this->assign("rows",$rows);
                $this->display('index');
                 return;
            }
            if($guanjianzi=="济南大学"){
                $sql = 'select * from resume where school = "济南大学" ';
                $rows =$findtelentModel->query($sql);
                $this->assign("rows",$rows);
                $this->display('index');
                 return;
            }
            if($guanjianzi=="青岛理工大学"){
                $sql = 'select * from resume where school = "青岛理工大学" ';
                $rows =$findtelentModel->query($sql);
                $this->assign("rows",$rows);
                $this->display('index');
                 return;
            }
            if($guanjianzi=="齐鲁工业大学"){
                $sql = 'select * from resume where school = "齐鲁工业大学" ';
                $rows =$findtelentModel->query($sql);
                $this->assign("rows",$rows);
                $this->display('index');
                 return;
            }
            if($guanjianzi=="山东理工大学"){
                $sql = 'select * from resume where school = "山东理工大学" ';
                $rows =$findtelentModel->query($sql);
                $this->assign("rows",$rows);
                $this->display('index');
                 return;
            }
            if($guanjianzi=="山东农业大学"){
                $sql = 'select * from resume where school = "山东农业大学" ';
                $rows =$findtelentModel->query($sql);
                $this->assign("rows",$rows);
                $this->display('index');
                 return;
            }
            if($guanjianzi=="青岛农业大学"){
                $sql = 'select * from resume where school = "青岛农业大学" ';
                $rows =$findtelentModel->query($sql);
                $this->assign("rows",$rows);
                $this->display('index');
                 return;
            }
              if($guanjianzi=="潍坊医学院"){
                $sql = 'select * from resume where school = "潍坊医学院" ';
                $rows =$findtelentModel->query($sql);
                $this->assign("rows",$rows);
                $this->display('index');
                 return;
            }
              if($guanjianzi=="滨州医学院"){
                $sql = 'select * from resume where school = "滨州医学院" ';
                $rows =$findtelentModel->query($sql);
                $this->assign("rows",$rows);
                $this->display('index');
                 return;
            }
              if($guanjianzi=="山东第一医科大学"){
                $sql = 'select * from findtelent where school = "山东第一医科大学" ';
                $rows =$findtelentModel->query($sql);
                $this->assign("rows",$rows);
                $this->display('index');
                 return;
            }
              if($guanjianzi=="山东中医药大学"){
                $sql = 'select * from resume where school = "山东中医药大学" ';
                $rows =$findtelentModel->query($sql);
                $this->assign("rows",$rows);
                $this->display('index');
                 return;
            }
              if($guanjianzi=="山东师范大学"){
                $sql = 'select * from resume where school = "山东师范大学" ';
                $rows =$findtelentModel->query($sql);
                $this->assign("rows",$rows);
                $this->display('index');
                 return;
            }
              if($guanjianzi=="曲阜师范大学"){
                $sql = 'select * from resume where school = "曲阜师范大学" ';
                $rows =$findtelentModel->query($sql);
                $this->assign("rows",$rows);
                $this->display('index');
                 return;
            }
              if($guanjianzi=="烟台大学"){
                $sql = 'select * from resume where school = "烟台大学" ';
                $rows =$findtelentModel->query($sql);
                $this->assign("rows",$rows);
                $this->display('index');
                 return;
            }
              if($guanjianzi=="青岛大学"){
                $sql = 'select * from resume where school = "青岛大学" ';
                $rows =$findtelentModel->query($sql);
                $this->assign("rows",$rows);
                $this->display('index');
                 return;
            }
             if($guanjianzi=="山东农业工程学院"){
                $sql = 'select * from resume where school = "山东农业工程学院" ';
                $rows =$findtelentModel->query($sql);
                $this->assign("rows",$rows);
                $this->display('index');
                 return;
            }
            if($guanjianzi=="山东管理学院"){
                $sql = 'select * from resume where school = "山东管理学院" ';
                $rows =$findtelentModel->query($sql);
                $this->assign("rows",$rows);
                $this->display('index');
                 return;
            }
            if($guanjianzi=="山东交通学院"){
                $sql = 'select * from resume where school = "山东交通学院" ';
                $rows =$findtelentModel->query($sql);
                $this->assign("rows",$rows);
                $this->display('index');
                 return;
            }
            if($guanjianzi=="临沂大学"){
                $sql = 'select * from resume where school = "临沂大学" ';
                $rows =$findtelentModel->query($sql);
                $this->assign("rows",$rows);
                $this->display('index');
                 return;
            }
             if($guanjianzi=="聊城大学"){
                $sql = 'select * from resume where school = "聊城大学" ';
                $rows =$findtelentModel->query($sql);
                $this->assign("rows",$rows);
                $this->display('index');
                 return;
            }
            if($guanjianzi=="山东警察学院"){
                $sql = 'select * from resume where school = "山东警察学院" ';
                $rows =$findtelentModel->query($sql);
                $this->assign("rows",$rows);
                $this->display('index');
                 return;
            }
            if($guanjianzi=="枣庄学院"){
                $sql = 'select * from resume where school = "枣庄学院" ';
                $rows =$findtelentModel->query($sql);
                $this->assign("rows",$rows);
                $this->display('index');
                 return;
            }
            if($guanjianzi=="鲁东大学"){
                $sql = 'select * from resume where school = "鲁东大学" ';
                $rows =$findtelentModel->query($sql);
                $this->assign("rows",$rows);
                $this->display('index');
                 return;
            }
            if($guanjianzi=="山东财经大学"){
                $sql = 'select * from resume where school = "山东财经大学" ';
                $rows =$findtelentModel->query($sql);
                $this->assign("rows",$rows);
                $this->display('index');
                 return;
            }
             if($guanjianzi=="山东体育学院"){
                $sql = 'select * from resume where school = "山东体育学院" ';
                $rows =$findtelentModel->query($sql);
                $this->assign("rows",$rows);
                $this->display('index');
                 return;
            }
            if($guanjianzi=="山东政法学院"){
                $sql = 'select * from resume where school = "山东政法学院" ';
                $rows =$findtelentModel->query($sql);
                $this->assign("rows",$rows);
                $this->display('index');
                 return;
            }
            if($guanjianzi=="山东青年政治学院"){
                $sql = 'select * from resume where school = "山东青年政治学院" ';
                $rows =$findtelentModel->query($sql);
                $this->assign("rows",$rows);
                $this->display('index');
                 return;
            }
            if($guanjianzi=="山东管理学院"){
                $sql = 'select * from resume where school = "山东管理学院" ';
                $rows =$findtelentModel->query($sql);
                $this->assign("rows",$rows);
                $this->display('index');
                 return;
            }
            if($guanjianzi=="山东女子学院"){
                $sql = 'select * from resume where school = "山东女子学院" ';
                $rows =$findtelentModel->query($sql);
                $this->assign("rows",$rows);
                $this->display('index');
                 return;
            }
            if($guanjianzi=="济宁学院"){
                $sql = 'select * from resume where school = "济宁学院" ';
                $rows =$findtelentModel->query($sql);
                $this->assign("rows",$rows);
                $this->display('index');
                 return;
            }
            if($guanjianzi=="菏泽学院"){
                $sql = 'select * from resume where school = "菏泽学院" ';
                $rows =$findtelentModel->query($sql);
                $this->assign("rows",$rows);
                $this->display('index');
                 return;
            }
               if($guanjianzi=="齐鲁师范学院"){
                $sql = 'select * from resume where school = "齐鲁师范学院" ';
                $rows =$findtelentModel->query($sql);
                $this->assign("rows",$rows);
                $this->display('index');
                 return;
            }
               if($guanjianzi=="齐鲁理工学院"){
                $sql = 'select * from resume where school = "齐鲁理工学院" ';
                $rows =$findtelentModel->query($sql);
                $this->assign("rows",$rows);
                $this->display('index');
                 return;
            }
               if($guanjianzi=="青岛工学院"){
                $sql = 'select * from resume where school = "青岛工学院" ';
                $rows =$findtelentModel->query($sql);
                $this->assign("rows",$rows);
                $this->display('index');
                 return;
            }
            if($guanjianzi=="山东华宇工学院"){
                $sql = 'select * from resume where school = "山东华宇工学院" ';
                $rows =$findtelentModel->query($sql);
                $this->assign("rows",$rows);
                $this->display('index');
                 return;
            }
            if($guanjianzi=="山东协和学院"){
                $sql = 'select * from resume where school = "山东协和学院" ';
                $rows =$findtelentModel->query($sql);
                $this->assign("rows",$rows);
                $this->display('index');
                 return;
            }
            if($guanjianzi=="山东现代学院"){
                $sql = 'select * from resume where school = "山东现代学院" ';
                $rows =$findtelentModel->query($sql);
                $this->assign("rows",$rows);
                $this->display('index');
                 return;
            }
             if($guanjianzi=="青岛黄海学院"){
                $sql = 'select * from resume where school = "青岛黄海学院" ';
                $rows =$findtelentModel->query($sql);
                $this->assign("rows",$rows);
                $this->display('index');
                 return;
            }
             if($guanjianzi=="青岛恒星科技学院"){
                $sql = 'select * from resume where school = "青岛恒星科技学院" ';
                $rows =$findtelentModel->query($sql);
                $this->assign("rows",$rows);
                $this->display('index');
                 return;
            }
             if($guanjianzi=="山东英才学院"){
                $sql = 'select * from resume where school = "山东英才学院" ';
                $rows =$findtelentModel->query($sql);
                $this->assign("rows",$rows);
                $this->display('index');
                 return;
            }
                   if($guanjianzi=="潍坊科技学院"){
                $sql = 'select * from resume where school = "潍坊科技学院" ';
                $rows =$findtelentModel->query($sql);
                $this->assign("rows",$rows);
                $this->display('index');
                 return;
            }
             if($guanjianzi=="烟台南山学院"){
                $sql = 'select * from resume where school = "烟台南山学院" ';
                $rows =$findtelentModel->query($sql);
                $this->assign("rows",$rows);
                $this->display('index');
                 return;
            }

       if($guanjianzi=="山东工商学院"){
                $sql = 'select * from resume where school = "山东工商学院" ';
                $rows =$findtelentModel->query($sql);
                $this->assign("rows",$rows);
                $this->display('index');
                 return;
            }
             if($guanjianzi=="潍坊学院"){
                $sql = 'select * from resume where school = "潍坊学院" ';
                $rows =$findtelentModel->query($sql);
                $this->assign("rows",$rows);
                $this->display('index');
                 return;
            }

       if($guanjianzi=="山东工艺美术学院"){
                $sql = 'select * from resume where school = "山东工艺美术学院" ';
                $rows =$findtelentModel->query($sql);
                $this->assign("rows",$rows);
                $this->display('index');
                 return;
            }
             if($guanjianzi=="青岛滨海学院"){
                $sql = 'select * from resume where school = "青岛滨海学院" ';
                $rows =$findtelentModel->query($sql);
                $this->assign("rows",$rows);
                $this->display('index');
                 return;
            }
            //按城市查询
            if($guanjianzi=="济南市" || $guanjianzi=="济南" ){
                $sql = 'select * from resume where city = "济南市" ';
                $rows =$findtelentModel->query($sql);
                $this->assign("rows",$rows);
                $this->display('index');
                 return;
            }
            if($guanjianzi=="青岛市" || $guanjianzi=="青岛" ){
                $sql = 'select * from resume where city = "青岛市" ';
                $rows =$findtelentModel->query($sql);
                $this->assign("rows",$rows);
                $this->display('index');
                 return;
            }
            if($guanjianzi=="淄博市" || $guanjianzi=="淄博" ){
                $sql = 'select * from resume where city = "淄博市" ';
                $rows =$findtelentModel->query($sql);
                $this->assign("rows",$rows);
                $this->display('index');
                 return;
            }
            if($guanjianzi=="枣庄市" || $guanjianzi=="枣庄" ){
                $sql = 'select * from resume where city = "枣庄市" ';
                $rows =$findtelentModel->query($sql);
                $this->assign("rows",$rows);
                $this->display('index');
                 return;
            }
            if($guanjianzi=="东营市" || $guanjianzi=="东营" ){
                $sql = 'select * from resume where city = "东营市" ';
                $rows =$findtelentModel->query($sql);
                $this->assign("rows",$rows);
                $this->display('index');
                 return;
            }
            if($guanjianzi=="烟台市" || $guanjianzi=="烟台" ){
                $sql = 'select * from resume where city = "烟台" ';
                $rows =$findtelentModel->query($sql);
                $this->assign("rows",$rows);
                $this->display('index');
                 return;
            }
            if($guanjianzi=="潍坊市" || $guanjianzi=="潍坊" ){
                $sql = 'select * from resume where city = "潍坊市" ';
                $rows =$findtelentModel->query($sql);
                $this->assign("rows",$rows);
                $this->display('index');
                 return;
            }
            if($guanjianzi=="济宁市" || $guanjianzi=="济宁" ){
                $sql = 'select * from resume where city = "济宁市" ';
                $rows =$findtelentModel->query($sql);
                $this->assign("rows",$rows);
                $this->display('index');
                 return;
            }
            if($guanjianzi=="泰安市" || $guanjianzi=="泰安" ){
                $sql = 'select * from resume where city = "泰安市" ';
                $rows =$findtelentModel->query($sql);
                $this->assign("rows",$rows);
                $this->display('index');
                 return;
            }
            if($guanjianzi=="威海市" || $guanjianzi=="威海" ){
                $sql = 'select * from resume where city = "威海市" ';
                $rows =$findtelentModel->query($sql);
                $this->assign("rows",$rows);
                $this->display('index');
                 return;
            }
            if($guanjianzi=="日照市" || $guanjianzi=="日照" ){
                $sql = 'select * from resume where city = "日照市" ';
                $rows =$findtelentModel->query($sql);
                $this->assign("rows",$rows);
                $this->display('index');
                 return;
            }
            if($guanjianzi=="滨州市" || $guanjianzi=="滨州" ){
                $sql = 'select * from resume where city = "滨州市" ';
                $rows =$findtelentModel->query($sql);
                $this->assign("rows",$rows);
                $this->display('index');
                 return;
            }
            if($guanjianzi=="德州市" || $guanjianzi=="德州" ){
                $sql = 'select * from resume where city = 德州市"" ';
                $rows =$findtelentModel->query($sql);
                $this->assign("rows",$rows);
                $this->display('index');
                 return;
            }
            if($guanjianzi=="聊城市" || $guanjianzi=="聊城" ){
                $sql = 'select * from resume where city = "聊城市" ';
                $rows =$findtelentModel->query($sql);
                $this->assign("rows",$rows);
                $this->display('index');
                 return;
            }
            if($guanjianzi=="临沂市" || $guanjianzi=="临沂" ){
                $sql = 'select * from resume where city = "临沂市" ';
                $rows =$findtelentModel->query($sql);
                $this->assign("rows",$rows);
                $this->display('index');
                 return;
            }
            if($guanjianzi=="菏泽市" || $guanjianzi=="菏泽" ){
                $sql = 'select * from resume where city = "菏泽市" ';
                $rows =$findtelentModel->query($sql);
                $this->assign("rows",$rows);
                $this->display('index');
                 return;
            }
            if($guanjianzi=="莱芜市" || $guanjianzi=="莱芜" ){
                $sql = 'select * from resume where city = "莱芜市" ';
                $rows =$findtelentModel->query($sql);
                $this->assign("rows",$rows);
                $this->display('index');
                 return;
            }
            if (1){
               $sql = "select * from resume where name = '$guanjianzi' ";
               $rows =$findtelentModel->query($sql);
               
               if ($rows) {
                    $this->assign("rows",$rows);
                    $this->display('index');
               }
               else{
                     $this->error('没有该数据！',U('index'));
               }
            }
             else{
                $this->error('没有该数据！',U('index'));
            }
        }
    }
    
    //城市方法
    public function findjinan(){
        $findtelentModel = new ResumeModel();
        $sql = 'select * from resume where city = "济南市" ';
        $rows =$findtelentModel->query($sql);
        $this->assign("rows",$rows);
        $this->display('index');
        return;
    }
    public function findqingdao(){
        $findtelentModel = new ResumeModel();
        $sql = 'select * from resume where city = "青岛市" ';
        $rows =$findtelentModel->query($sql);
        $this->assign("rows",$rows);
        $this->display('index');
        return;
    }
    public function findzibo(){
        $findtelentModel = new ResumeModel();
        $sql = 'select * from resume where city = "淄博市" ';
        $rows =$findtelentModel->query($sql);
        $this->assign("rows",$rows);
        $this->display('index');
        return;
    }
    public function findzaozhuang(){
        $findtelentModel = new ResumeModel();
        $sql = 'select * from resume where city = "枣庄市" ';
        $rows =$findtelentModel->query($sql);
        $this->assign("rows",$rows);
        $this->display('index');
        return;
    }
    public function finddongying(){
        $findtelentModel = new ResumeModel();
        $sql = 'select * from resume where city = "东营市" ';
        $rows =$findtelentModel->query($sql);
        $this->assign("rows",$rows);
        $this->display('index');
        return;
    }
    public function findyantai(){
        $findtelentModel = new ResumeModel();
        $sql = 'select * from resume where city = "烟台市" ';
        $rows =$findtelentModel->query($sql);
        $this->assign("rows",$rows);
        $this->display('index');
        return;
    }
    public function findweifang(){
        $findtelentModel = new ResumeModel();
        $sql = 'select * from resume where city = "潍坊市" ';
        $rows =$findtelentModel->query($sql);
        $this->assign("rows",$rows);
        $this->display('index');
        return;
    }
    public function findjining(){
        $findtelentModel = new ResumeModel();
        $sql = 'select * from resume where city = "济宁市" ';
        $rows =$findtelentModel->query($sql);
        $this->assign("rows",$rows);
        $this->display('index');
        return;
    }
    public function findtaian(){
        $findtelentModel = new ResumeModel();
        $sql = 'select * from resume where city = "泰安市" ';
        $rows =$findtelentModel->query($sql);
        $this->assign("rows",$rows);
        $this->display('index');
        return;
    }
    public function findweihai(){
        $findtelentModel = new ResumeModel();
        $sql = 'select * from resume where city = "威海市" ';
        $rows =$findtelentModel->query($sql);
        $this->assign("rows",$rows);
        $this->display('index');
        return;
    }
    public function findrizhao(){
        $findtelentModel = new ResumeModel();
        $sql = 'select * from resume where city = "日照市" ';
        $rows =$findtelentModel->query($sql);
        $this->assign("rows",$rows);
        $this->display('index');
        return;
    }
    public function findbinzhou(){
        $findtelentModel = new ResumeModel();
        $sql = 'select * from resume where city = "滨州市" ';
        $rows =$findtelentModel->query($sql);
        $this->assign("rows",$rows);
        $this->display('index');
        return;
    }
    public function finddezhou(){
        $findtelentModel = new ResumeModel();
        $sql = 'select * from resume where city = "德州市" ';
        $rows =$findtelentModel->query($sql);
        $this->assign("rows",$rows);
        $this->display('index');
        return;
    }
    public function findliaocheng(){
        $findtelentModel = new ResumeModel();
        $sql = 'select * from resume where city = "聊城市" ';
        $rows =$findtelentModel->query($sql);
        $this->assign("rows",$rows);
        $this->display('index');
        return;
    }
    public function findlinyi(){
        $findtelentModel = new ResumeModel();
        $sql = 'select * from resume where city = "临沂市" ';
        $rows =$findtelentModel->query($sql);
        $this->assign("rows",$rows);
        $this->display('index');
        return;
    }
    public function findlaiwu(){
        $findtelentModel = new ResumeModel();
        $sql = 'select * from resume where city = "莱芜市" ';
        $rows =$findtelentModel->query($sql);
        $this->assign("rows",$rows);
        $this->display('index');
        return;
    }
    public function findheze(){
        $findtelentModel = new ResumeModel();
        $sql = 'select * from resume where city = "菏泽市" ';
        $rows =$findtelentModel->query($sql);
        $this->assign("rows",$rows);
        $this->display('index');
        return;
    }

    public function finddongmansheji(){
        $findtelentModel = new ResumeModel();
        $sql = 'select * from resume where major = "动漫设计与制作" ';
        $rows =$findtelentModel->query($sql);
        $this->assign("rows",$rows);
        $this->display('index');
        return;
    }
      public function findxitongjiagou(){
        $findtelentModel = new ResumeModel();
        $sql = 'select * from resume where major = "系统架构设计" ';
        $rows =$findtelentModel->query($sql);
        $this->assign("rows",$rows);
        $this->display('index');
        return;
    }
    public function findxitongweihu(){
        $findtelentModel = new ResumeModel();
        $sql = 'select * from resume where major = "计算机系统维护" ';
        $rows =$findtelentModel->query($sql);
        $this->assign("rows",$rows);
        $this->display('index');
        return;
    }
    public function findzulin(){
        $findtelentModel = new ResumeModel();
        $sql = 'select * from resume where major = "租赁和商务服务业" ';
        $rows =$findtelentModel->query($sql);
        $this->assign("rows",$rows);
        $this->display('index');
        return;
    }
    public function findruanjiankaifa(){
        $findtelentModel = new ResumeModel();
        $sql = 'select * from resume where major = "软件开发" ';
        $rows =$findtelentModel->query($sql);
        $this->assign("rows",$rows);
        $this->display('index');
        return;
    }
     public function finddianzishangwu(){
        $findtelentModel = new ResumeModel();
        $sql = 'select * from resume where major = "电子商务" ';
        $rows =$findtelentModel->query($sql);
        $this->assign("rows",$rows);
        $this->display('index');
        return;
    }
    public function findbangong(){
        $findtelentModel = new ResumeModel();
        $sql = 'select * from resume where major = "办公自动化" ';
        $rows =$findtelentModel->query($sql);
        $this->assign("rows",$rows);
        $this->display('index');
        return;
    }
    public function findwangluo(){
        $findtelentModel = new ResumeModel();
        $sql = 'select * from resume where major = "计算机网络" ';
        $rows =$findtelentModel->query($sql);
        $this->assign("rows",$rows);
        $this->display('index');
        return;
    }
    public function findruanajianceshi(){
        $findtelentModel = new ResumeModel();
        $sql = 'select * from resume where major = "软件测试" ';
        $rows =$findtelentModel->query($sql);
        $this->assign("rows",$rows);
        $this->display('index');
        return;
    }
    public function findyingyong(){
        $findtelentModel = new ResumeModel();
        $sql = 'select * from resume where major = "计算机应用" ';
        $rows =$findtelentModel->query($sql);
        $this->assign("rows",$rows);
        $this->display('index');
        return;
    }
    public function findjiaoyu(){
        $findtelentModel = new ResumeModel();
        $sql = 'select * from resume where major = "教育" ';
        $rows =$findtelentModel->query($sql);
        $this->assign("rows",$rows);
        $this->display('index');
        return;
    }
    public function findyingjian(){
        $findtelentModel = new ResumeModel();
        $sql = 'select * from resume where major = "计算机硬件" ';
        $rows =$findtelentModel->query($sql);
        $this->assign("rows",$rows);
        $this->display('index');
        return;
    }
}