<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2019-08-11
 * Time: 10:14
 */

namespace Home\Controller;


use Think\Controller;
header("Content-type:text/html;charset=utf-8");
class IndexafterController extends Controller
{
    public function index(){
        //        检测是否登录
        A('Login')->checklogin();
        $this->display('indexafter');
    }

}