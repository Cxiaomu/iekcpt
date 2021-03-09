<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2019-08-12
 * Time: 17:14
 */

class PersonalModel extends \Think\Model
{
    protected $_auto            =   array(
        array('protype','arr2strr','','callback')
    );  // 自动完成定义

    public function arr2strr($arr){
        return implode (',',$arr);
    }

}