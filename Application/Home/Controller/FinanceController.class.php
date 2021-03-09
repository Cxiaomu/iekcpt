<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2019-08-05
 * Time: 8:55
 */

namespace Home\Controller;


use Think\Controller;
use Think\Page;
use Home\Model\CinfoModel;
header("Content-type:text/html;charset=utf-8");

class FinanceController extends Controller
{

    public function  index(){
        //        检测是否登录
        A('Login')->checklogin();
        $findfinanceModel = new CinfoModel();
        
        //分页工具条
        $pageSize = 8;
        $count = $findfinanceModel->count();
        $page = new Page($count,$pageSize);
        $pageHTML = $page->show();
        $this->assign("pageHTML",$pageHTML);

        //准备分页列数据
        $rows = $findfinanceModel->limit($page->firstRow,$page->listRows)->select();
        $this->assign('rows',$rows);
        $this->display('index');    
    }

     public function findfinance(){
         //        检测是否登录
         A('Login')->checklogin();
        if(IS_POST){
            $guanjianzi=I('post.all');
            $findfinanceModel = new CinfoModel();
           
            //按城市查询
            if($guanjianzi=="北京市" || $guanjianzi=="北京" ){
                $sql = 'select * from cinfo where location = "北京市" ';
                $rows =$findfinanceModel->query($sql);
                $this->assign("rows",$rows);
                $this->display('index');
                 return;
            }
            if($guanjianzi=="上海市" || $guanjianzi=="上海" ){
                $sql = 'select * from cinfo where location = "上海市" ';
                $rows =$findfinanceModel->query($sql);
                $this->assign("rows",$rows);
                $this->display('index');
                 return;
            }
            if($guanjianzi=="广东省" || $guanjianzi=="广东" ){
                $sql = 'select * from cinfo where location = "广东省" ';
                $rows =$findfinanceModel->query($sql);
                $this->assign("rows",$rows);
                $this->display('index');
                 return;
            }
            if($guanjianzi=="山东省" || $guanjianzi=="山东" ){
                $sql = 'select * from cinfo where location = "山东省" ';
                $rows =$findfinanceModel->query($sql);
                $this->assign("rows",$rows);
                $this->display('index');
                 return;
            }
            if($guanjianzi=="江苏省" || $guanjianzi=="江苏" ){
                $sql = 'select * from cinfo where location = "江苏省" ';
                $rows =$findfinanceModel->query($sql);
                $this->assign("rows",$rows);
                $this->display('index');
                 return;
            }
            if($guanjianzi=="浙江省" || $guanjianzi=="浙江" ){
                $sql = 'select * from cinfo where location = "浙江省" ';
                $rows =$findfinanceModel->query($sql);
                $this->assign("rows",$rows);
                $this->display('index');
                 return;
            }
            if($guanjianzi=="天津市" || $guanjianzi=="天津" ){
                $sql = 'select * from cinfo where location = "天津市" ';
                $rows =$findfinanceModel->query($sql);
                $this->assign("rows",$rows);
                $this->display('index');
                 return;
            }
            if($guanjianzi=="重庆市" || $guanjianzi=="重庆" ){
                $sql = 'select * from cinfo where location = "重庆市" ';
                $rows =$findfinanceModel->query($sql);
                $this->assign("rows",$rows);
                $this->display('index');
                 return;
            }if($guanjianzi=="河北省" || $guanjianzi=="河北" ){
                $sql = 'select * from cinfo where location = "河北省" ';
                $rows =$findfinanceModel->query($sql);
                $this->assign("rows",$rows);
                $this->display('index');
                 return;
            }
            if($guanjianzi=="山西省" || $guanjianzi=="山西" ){
                $sql = 'select * from cinfo where location = "山西省" ';
                $rows =$findfinanceModel->query($sql);
                $this->assign("rows",$rows);
                $this->display('index');
                 return;
            }if($guanjianzi=="辽宁省" || $guanjianzi=="辽宁" ){
                $sql = 'select * from cinfo where location = "辽宁省" ';
                $rows =$findfinanceModel->query($sql);
                $this->assign("rows",$rows);
                $this->display('index');
                 return;
            }
            if($guanjianzi=="吉林省" || $guanjianzi=="吉林" ){
                $sql = 'select * from cinfo where location = "吉林省" ';
                $rows =$findfinanceModel->query($sql);
                $this->assign("rows",$rows);
                $this->display('index');
                 return;
            }if($guanjianzi=="黑龙江省" || $guanjianzi=="黑龙江" ){
                $sql = 'select * from cinfo where location = "黑龙江" ';
                $rows =$findfinanceModel->query($sql);
                $this->assign("rows",$rows);
                $this->display('index');
                 return;
            }
            if($guanjianzi=="安徽省" || $guanjianzi=="安徽" ){
                $sql = 'select * from cinfo where location = "安徽省" ';
                $rows =$findfinanceModel->query($sql);
                $this->assign("rows",$rows);
                $this->display('index');
                 return;
            }if($guanjianzi=="福建省" || $guanjianzi=="福建" ){
                $sql = 'select * from cinfo where location = "福建省" ';
                $rows =$findfinanceModel->query($sql);
                $this->assign("rows",$rows);
                $this->display('index');
                 return;
            }
            if($guanjianzi=="江西省" || $guanjianzi=="江西" ){
                $sql = 'select * from cinfo where location = "江西省" ';
                $rows =$findfinanceModel->query($sql);
                $this->assign("rows",$rows);
                $this->display('index');
                 return;
            }if($guanjianzi=="河南省" || $guanjianzi=="河南" ){
                $sql = 'select * from cinfo where location = "河南省" ';
                $rows =$findfinanceModel->query($sql);
                $this->assign("rows",$rows);
                $this->display('index');
                 return;
            }
            if($guanjianzi=="湖北省" || $guanjianzi=="湖北" ){
                $sql = 'select * from cinfo where location = "湖北省" ';
                $rows =$findfinanceModel->query($sql);
                $this->assign("rows",$rows);
                $this->display('index');
                 return;
            }if($guanjianzi=="湖南省" || $guanjianzi=="湖南" ){
                $sql = 'select * from cinfo where location = "湖南省" ';
                $rows =$findfinanceModel->query($sql);
                $this->assign("rows",$rows);
                $this->display('index');
                 return;
            }
            if($guanjianzi=="海南省" || $guanjianzi=="海南" ){
                $sql = 'select * from cinfo where location = "海南省" ';
                $rows =$findfinanceModel->query($sql);
                $this->assign("rows",$rows);
                $this->display('index');
                 return;
            }
            if($guanjianzi=="四川省" || $guanjianzi=="四川" ){
                $sql = 'select * from cinfo where location = "四川省" ';
                $rows =$findfinanceModel->query($sql);
                $this->assign("rows",$rows);
                $this->display('index');
                 return;
            }if($guanjianzi=="贵州省" || $guanjianzi=="贵州省" ){
                $sql = 'select * from cinfo where location = "贵州省" ';
                $rows =$findfinanceModel->query($sql);
                $this->assign("rows",$rows);
                $this->display('index');
                 return;
            }if($guanjianzi=="云南省" || $guanjianzi=="云南" ){
                $sql = 'select * from cinfo where location = "云南省" ';
                $rows =$findfinanceModel->query($sql);
                $this->assign("rows",$rows);
                $this->display('index');
                 return;
            }if($guanjianzi=="陕西省" || $guanjianzi=="陕西" ){
                $sql = 'select * from cinfo where location = "陕西省" ';
                $rows =$findfinanceModel->query($sql);
                $this->assign("rows",$rows);
                $this->display('index');
                 return;
            }if($guanjianzi=="甘肃省" || $guanjianzi=="甘肃" ){
                $sql = 'select * from cinfo where location = "甘肃省" ';
                $rows =$findfinanceModel->query($sql);
                $this->assign("rows",$rows);
                $this->display('index');
                 return;
            }if($guanjianzi=="青海省" || $guanjianzi=="青海" ){
                $sql = 'select * from cinfo where location = "青海省" ';
                $rows =$findfinanceModel->query($sql);
                $this->assign("rows",$rows);
                $this->display('index');
                 return;
            }if($guanjianzi=="台湾省" || $guanjianzi=="台湾" ){
                $sql = 'select * from cinfo where location = "台湾省" ';
                $rows =$findfinanceModel->query($sql);
                $this->assign("rows",$rows);
                $this->display('index');
                 return;
            }
            if($guanjianzi=="交通运输仓储和物流业" || $guanjianzi=="交通" ){
                $sql = 'select * from cinfo where field = "交通运输仓储和物流业" ';
                $rows =$findfinanceModel->query($sql);
                $this->assign("rows",$rows);
                $this->display('index');
                 return;
            }
             if($guanjianzi=="制造业" || $guanjianzi=="制造" ){
                $sql = 'select * from cinfo where field = "制造业" ';
                $rows =$findfinanceModel->query($sql);
                $this->assign("rows",$rows);
                $this->display('index');
                 return;
            }
             if($guanjianzi=="租赁和商务服务业" || $guanjianzi=="租赁" ){
                $sql = 'select * from cinfo where field = "租赁和商务服务业" ';
                $rows =$findfinanceModel->query($sql);
                $this->assign("rows",$rows);
                $this->display('index');
                 return;
            }
             if($guanjianzi=="信息技术服务" || $guanjianzi=="信息" ){
                $sql = 'select * from cinfo where field = "信息技术服务" ';
                $rows =$findfinanceModel->query($sql);
                $this->assign("rows",$rows);
                $this->display('index');
                 return;
            }
             if($guanjianzi=="金融业" || $guanjianzi=="金融" ){
                $sql = 'select * from cinfo where field = "金融业" ';
                $rows =$findfinanceModel->query($sql);
                $this->assign("rows",$rows);
                $this->display('index');
                 return;
            }
             if($guanjianzi=="公共设施管理" || $guanjianzi=="公共设施" ){
                $sql = 'select * from cinfo where field = "公共设施管理" ';
                $rows =$findfinanceModel->query($sql);
                $this->assign("rows",$rows);
                $this->display('index');
                 return;
            }
             if($guanjianzi=="科学技术服务业" || $guanjianzi=="科技" ){
                $sql = 'select * from cinfo where field = "科学技术服务业" ';
                $rows =$findfinanceModel->query($sql);
                $this->assign("rows",$rows);
                $this->display('index');
                 return;
            }
             if($guanjianzi=="农、林、牧、渔业" || $guanjianzi=="农业" || $guanjianzi=="林业" || $guanjianzi=="牧业" || $guanjianzi=="渔业" ){
                $sql = 'select * from cinfo where field = "农、林、牧、渔业" ';
                $rows =$findfinanceModel->query($sql);
                $this->assign("rows",$rows);
                $this->display('index');
                 return;
            }
             if($guanjianzi=="医疗和社会工作" || $guanjianzi=="医疗" || $guanjianzi=="社会工作"){
                $sql = 'select * from cinfo where field = "医疗和社会工作" ';
                $rows =$findfinanceModel->query($sql);
                $this->assign("rows",$rows);
                $this->display('index');
                 return;
            }
            if($guanjianzi=="住宿和餐饮业" || $guanjianzi=="住宿" || $guanjianzi=="餐饮业"){
                $sql = 'select * from cinfo where field = "住宿和餐饮业" ';
                $rows =$findfinanceModel->query($sql);
                $this->assign("rows",$rows);
                $this->display('index');
                 return;
            }
             if (1){
               $sql = "select * from cinfo where investor = '$guanjianzi' ";
               $rows =$findfinanceModel->query($sql);
               
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
    public function findbeijing(){
        $findfinanceModel = new CinfoModel();
        $sql = 'select * from cinfo where location = "北京市" ';
        $rows =$findfinanceModel->query($sql);
        $this->assign("rows",$rows);
        $this->display('index');
        return;
    }
     public function findshanghai(){
        $findfinanceModel = new CinfoModel();
        $sql = 'select * from cinfo where location = "上海市" ';
        $rows =$findfinanceModel->query($sql);
        $this->assign("rows",$rows);
        $this->display('index');
        return;
    }
    public function findjiangsusheng(){
        $findfinanceModel = new CinfoModel();
        $sql = 'select * from cinfo where location = "江苏省" ';
        $rows =$findfinanceModel->query($sql);
        $this->assign("rows",$rows);
        $this->display('index');
        return;
    }
     public function findzhejiangsheng(){
        $findfinanceModel = new CinfoModel();
        $sql = 'select * from cinfo where location = "浙江省" ';
        $rows =$findfinanceModel->query($sql);
        $this->assign("rows",$rows);
        $this->display('index');
        return;
    }
    public function findshandongsheng(){
        $findfinanceModel = new CinfoModel();
        $sql = 'select * from cinfo where location = "山东省" ';
        $rows =$findfinanceModel->query($sql);
        $this->assign("rows",$rows);
        $this->display('index');
        return;
    }
     public function findguangdongsheng(){
        $findfinanceModel = new CinfoModel();
        $sql = 'select * from cinfo where location = "广东省" ';
        $rows =$findfinanceModel->query($sql);
        $this->assign("rows",$rows);
        $this->display('index');
        return;
    }
     public function findtianjin(){
        $findfinanceModel = new CinfoModel();
        $sql = 'select * from cinfo where location = "天津市" ';
        $rows =$findfinanceModel->query($sql);
        $this->assign("rows",$rows);
        $this->display('index');
        return;
    }
      public function findchingqing(){
        $findfinanceModel = new CinfoModel();
        $sql = 'select * from cinfo where location = "重庆市" ';
        $rows =$findfinanceModel->query($sql);
        $this->assign("rows",$rows);
        $this->display('index');
        return;
    }
       public function findhebei(){
        $findfinanceModel = new CinfoModel();
        $sql = 'select * from cinfo where location = "河北省" ';
        $rows =$findfinanceModel->query($sql);
        $this->assign("rows",$rows);
        $this->display('index');
        return;
    }
      public function findshanxi(){
        $findfinanceModel = new CinfoModel();
        $sql = 'select * from cinfo where location = "山西省" ';
        $rows =$findfinanceModel->query($sql);
        $this->assign("rows",$rows);
        $this->display('index');
        return;
    }
  public function findliaoning(){
        $findfinanceModel = new CinfoModel();
        $sql = 'select * from cinfo where location = "辽宁省" ';
        $rows =$findfinanceModel->query($sql);
        $this->assign("rows",$rows);
        $this->display('index');
        return;
    }
     public function findjilin(){
        $findfinanceModel = new CinfoModel();
        $sql = 'select * from cinfo where location = "吉林省" ';
        $rows =$findfinanceModel->query($sql);
        $this->assign("rows",$rows);
        $this->display('index');
        return;
    }
    public function findheilongjiang(){
        $findfinanceModel = new CinfoModel();
        $sql = 'select * from cinfo where location = "黑龙江" ';
        $rows =$findfinanceModel->query($sql);
        $this->assign("rows",$rows);
        $this->display('index');
        return;
    }
     public function findanhui(){
        $findfinanceModel = new CinfoModel();
        $sql = 'select * from cinfo where location = "安徽省" ';
        $rows =$findfinanceModel->query($sql);
        $this->assign("rows",$rows);
        $this->display('index');
        return;
    }
    public function findfujian(){
        $findfinanceModel = new CinfoModel();
        $sql = 'select * from cinfo where location = "福建省" ';
        $rows =$findfinanceModel->query($sql);
        $this->assign("rows",$rows);
        $this->display('index');
        return;
    }
     public function findjiangxi(){
        $findfinanceModel = new CinfoModel();
        $sql = 'select * from cinfo where location = "江西省" ';
        $rows =$findfinanceModel->query($sql);
        $this->assign("rows",$rows);
        $this->display('index');
        return;
    }
     public function findhenan(){
        $findfinanceModel = new CinfoModel();
        $sql = 'select * from cinfo where location = "河南省" ';
        $rows =$findfinanceModel->query($sql);
        $this->assign("rows",$rows);
        $this->display('index');
        return;
    }
      public function findhubei(){
        $findfinanceModel = new CinfoModel();
        $sql = 'select * from cinfo where location = "湖北省" ';
        $rows =$findfinanceModel->query($sql);
        $this->assign("rows",$rows);
        $this->display('index');
        return;
    }
       public function findhunan(){
        $findfinanceModel = new CinfoModel();
        $sql = 'select * from cinfo where location = "湖南省" ';
        $rows =$findfinanceModel->query($sql);
        $this->assign("rows",$rows);
        $this->display('index');
        return;
    }
      public function findhainan(){
        $findfinanceModel = new CinfoModel();
        $sql = 'select * from cinfo where location = "海南省" ';
        $rows =$findfinanceModel->query($sql);
        $this->assign("rows",$rows);
        $this->display('index');
        return;
    }
    public function findsichuan(){
        $findfinanceModel = new CinfoModel();
        $sql = 'select * from cinfo where location = "四川省" ';
        $rows =$findfinanceModel->query($sql);
        $this->assign("rows",$rows);
        $this->display('index');
        return;
    }
      public function findguizhou(){
        $findfinanceModel = new CinfoModel();
        $sql = 'select * from cinfo where location = "贵州省" ';
        $rows =$findfinanceModel->query($sql);
        $this->assign("rows",$rows);
        $this->display('index');
        return;
    }    public function findyunnan(){
        $findfinanceModel = new CinfoModel();
        $sql = 'select * from cinfo where location = "云南省" ';
        $rows =$findfinanceModel->query($sql);
        $this->assign("rows",$rows);
        $this->display('index');
        return;
    }
      public function findshanxisheng(){
        $findfinanceModel = new CinfoModel();
        $sql = 'select * from cinfo where location = "陕西省" ';
        $rows =$findfinanceModel->query($sql);
        $this->assign("rows",$rows);
        $this->display('index');
        return;
    }    public function findgansu(){
        $findfinanceModel = new CinfoModel();
        $sql = 'select * from cinfo where location = "甘肃省" ';
        $rows =$findfinanceModel->query($sql);
        $this->assign("rows",$rows);
        $this->display('index');
        return;
    }
        public function findqinghai(){
        $findfinanceModel = new CinfoModel();
        $sql = 'select * from cinfo where location = "青海省" ';
        $rows =$findfinanceModel->query($sql);
        $this->assign("rows",$rows);
        $this->display('index');
        return;
    }    public function findtaiwansheng(){
        $findfinanceModel = new CinfoModel();
        $sql = 'select * from cinfo where location = "台湾省" ';
        $rows =$findfinanceModel->query($sql);
        $this->assign("rows",$rows);
        $this->display('index');
        return;
    }

    //按领域查找
    public function findjiaotong(){
        $findfinanceModel = new CinfoModel();
        $sql = 'select * from cinfo where field = "交通运输仓储和物流业" ';
        $rows =$findfinanceModel->query($sql);
        $this->assign("rows",$rows);
        $this->display('index');
        return;
    }
      public function findnonglin(){
        $findfinanceModel = new CinfoModel();
        $sql = 'select * from cinfo where field = "农、林、牧、渔业" ';
        $rows =$findfinanceModel->query($sql);
        $this->assign("rows",$rows);
        $this->display('index');
        return;
    }
      public function findzilin(){
        $findfinanceModel = new CinfoModel();
        $sql = 'select * from cinfo where field = "租赁和商务服务业" ';
        $rows =$findfinanceModel->query($sql);
        $this->assign("rows",$rows);
        $this->display('index');
        return;
    }
      public function findxinxi(){
        $findfinanceModel = new CinfoModel();
        $sql = 'select * from cinfo where field = "信息技术服务" ';
        $rows =$findfinanceModel->query($sql);
        $this->assign("rows",$rows);
        $this->display('index');
        return;
    }
      public function findyiliao(){
        $findfinanceModel = new CinfoModel();
        $sql = 'select * from cinfo where field = "医疗和社会工作" ';
        $rows =$findfinanceModel->query($sql);
        $this->assign("rows",$rows);
        $this->display('index');
        return;
    }
       public function findgonggong(){
        $findfinanceModel = new CinfoModel();
        $sql = 'select * from cinfo where field = "公共设施管理" ';
        $rows =$findfinanceModel->query($sql);
        $this->assign("rows",$rows);
        $this->display('index');
        return;
    }
       public function findkexue(){
        $findfinanceModel = new CinfoModel();
        $sql = 'select * from cinfo where field = "科学技术服务业" ';
        $rows =$findfinanceModel->query($sql);
        $this->assign("rows",$rows);
        $this->display('index');
        return;
    }
      public function findzhusu(){
        $findfinanceModel = new CinfoModel();
        $sql = 'select * from cinfo where field = "住宿和餐饮业" ';
        $rows =$findfinanceModel->query($sql);
        $this->assign("rows",$rows);
        $this->display('index');
        return;
    }
      public function findzhizao(){
        $findfinanceModel = new CinfoModel();
        $sql = 'select * from cinfo where field = "制造业" ';
        $rows =$findfinanceModel->query($sql);
        $this->assign("rows",$rows);
        $this->display('index');
        return;
    }
      public function findjinrong(){
        $findfinanceModel = new CinfoModel();
        $sql = 'select * from cinfo where field = "金融业" ';
        $rows =$findfinanceModel->query($sql);
        $this->assign("rows",$rows);
        $this->display('index');
        return;
    }


    public function  Financecommany($sinfo_stuid){
        //        检测是否登录
        A('Login')->checklogin();

        $resumemode = D('cinfo');
        $sql  = "select * from cinfo where companyid='$sinfo_stuid' ";
        $res = $resumemode -> query($sql);
        $this ->assign('list',$res);
//        dump($res);
//        exit;
        $this ->display('rongzi1');
    }
}