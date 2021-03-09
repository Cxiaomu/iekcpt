<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2019-07-26
 * Time: 11:46
 */

namespace Home\Model;


use Think\Model;

class SuserModel extends Model
{

    // 是否批处理验证
    protected $patchValidate    =   true;
    // 自动验证定义
    protected $_validate        =   array(
        array('sid','require','用户名不能为空！'),
        array('spwd','require','密码不能为空！'),
        array('respwd','require','确认密码不能为空！'),
        array('respwd','spwd','密码不一致！','','confirm'),
        array('name','require','姓名不能为空！'),
        array('leibei','学生,教师,企业','请选择用户类型！','','in'),

    );

 //    自动完成定义
    protected $_auto            =   array(
        array('password','md5','','function'),


    );


    /**
     * @return int
     */
    public function login(){
        $sid = $this->data['sid'];
        $spwd = $this->data['spwd'];
        $leibei = $this->data['leibei'];
        //打印输入账号和密码
//        dump($this->getBySid($sid));
//        dump($leibei);
//        exit;
        $row = $this->getBySid($sid);
//        exit;
        if($row){
            //打印数据库得密码和输入的密码
//            var_dump($row['spwd']);
//            var_dump($row1);
//            exit;
            //$row['$spwd'] 数据库的密码；
            //存在用户名
            if($row["spwd"] == $spwd & $leibei == '学生' ){
                return $row;
            }
            if($row["spwd"] == $spwd & $leibei == '教师' ){
                return $row;
            }
            if($row["spwd"] == $spwd & $leibei == '企业' ){
                return $row;
            }

            else{

                return -2;
            }

        }else{
            return -1;
        }
    }
}