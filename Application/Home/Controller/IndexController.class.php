<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2019-08-04
 * Time: 21:45
 */

namespace Home\Controller;
use Think\Controller;
header("Content-type:text/html;charset=utf-8");
class IndexController extends Controller
{
    public function  index(){
        $this->display('index');

    }
     public function checkHex($img) {
        $status = 0;
        $tips = array(
            "0" => "文件没问题",
            "5" => "文件有毒",
            "-1" => "文件没有上传"
        );
        if (file_exists($img)) {
            $resource = fopen($img, 'rb');
            $fileSize = filesize($img);
            fseek($resource, 0);
            if ($fileSize > 512) { // 取头和尾
                $hexCode = bin2hex(fread($resource, 512));
                fseek($resource, $fileSize - 512);
                $hexCode .= bin2hex(fread($resource, 512));
            } else { // 取全部
                $hexCode = bin2hex(fread($resource, $fileSize));
            }
            fclose($resource);
            /* 匹配16进制中的 <% ( ) %> */
            /* 匹配16进制中的 <? ( ) ?> */
            /* 匹配16进制中的 <script | /script> 大小写亦可 */
            if (preg_match("/(3c25.*?28.*?29.*?253e)|(3c3f.*?28.*?29.*?3f3e)|(3C534352495054)|(2F5343524950543E)|(3C736372697074)|(2F7363726970743E)/is", $hexCode)) {
                $status = 5;
            }
        } else {
            $status = -1;
        }

       /* dump ($tips[$status]);
        exit;*/
        return $tips[$status];
    }





}