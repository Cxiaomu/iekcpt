<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!-- 教师信息完善 -->
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        个人中心
    </title>
    <meta name="keywords" content="C.H.L.Y团队" />
    <meta name="mobile-agent" content="format=html5;"/>

    <link rel="stylesheet" href="/IEkcpt3.0/IEkcpt3.0/Application/Home/View/personal/web/bootstrap.min-1.0.0.css">
    <link rel="stylesheet" href="/IEkcpt3.0/IEkcpt3.0/Application/Home/View/personal/web/account-1.0.0.css">
    <link rel="stylesheet" href="/IEkcpt3.0/IEkcpt3.0/Application/Home/View/personal/web/myProjects.css">
    <link rel="stylesheet" href="/IEkcpt3.0/IEkcpt3.0/Application/Home/View/personal/web/new-edit-project.css" />


    <script type="text/javascript">
        if ((navigator.userAgent.match(/(iPhone|iPod|Android|ios)/i))) {
            location.replace("#");
        }
    </script>
    <!--[if lt IE 9]>
    <script type="text/javascript" src="/IEkcpt3.0/IEkcpt3.0/Public/Web/js/html5.js" tppabs="Public/Web/js/html5.js">
    </script>
    <![endif]-->
    <link href="/IEkcpt3.0/IEkcpt3.0/Public/Web/css/style.css" type="text/css" rel="stylesheet" />
    <script src="/IEkcpt3.0/IEkcpt3.0/Public/Web/js/base.js" type="text/javascript">
    </script>
    <!--[if lt IE 9]>
    <script type="text/javascript" src="/IEkcpt3.0/IEkcpt3.0/Public/Web/js/respond.min.js" tppabs="Public/Web/js/respond.min.js">
    </script>
    <![endif]-->
    <style>
        .main-content{
            background-color: #fff;
            padding-top: 50px;
            padding-left: 200px;
        }
        #editBox{
            position: absolute;
            top: 20px;
            right: 56px;
            cursor: pointer;
            z-index:100;
        }
        #resetpassword,#resetpassword2{
            margin-left: 20px;
        }
        #resetpassword:hover,#resetpassword2:hover{
            text-decoration: underline;
        }
        .left-part{
            float: left;
            width: 330px;
        }
        .right-part{
            float: left;
            padding-left: 30px;
            width: 435px;
        }
        .right-part .form-project .form-control{
            width: 280px;
        }

        .popover-title{padding:0;}
        .popover.top>.arrow{
            margin-left:-74px;
        }
        #settingLink{
            position:relative;
        }
        #settingLink .tishi{
            position: absolute;
            left: 2px;
            font-size: 14px;
            color: red;
            display: block;
            font-size: 12px;
            border: 1px solid red;
            border-radius: 10px;
            cursor: pointer;
            padding: 0 2px 0 3px;
        }
        .side-nav {
    height: 468px;
}
        .side-nav li:not(.time-box):not(.link-box){
            padding-left:35px;
        }
        .side-nav li .dot{
            left:100px;
        }
        .apply-btn {
            margin-top: 10px;
            margin-left: 225px;
            width: 160px;
            height: 44px;
            line-height: 44px;
            color: #fff;
            font-size: 20px;
            text-align: center;
            background-image: linear-gradient(45deg,#3b99fc,#6d93fe);
            border-radius: 100px;
            cursor: pointer;
        }
    </style>
</head>
<body style="min-width:1264px;">
<header class="header">
    <div class="wrap">
        <h1 class="fl">
            <a href="<?php echo U('indexafter/index');?>"  class="fl logo">
                <img src="/IEkcpt3.0/IEkcpt3.0/Public/Web/images/banner/logo.png"   width="154" height="49" />
            </a>
        </h1>
        <div class="fl logo_text">
            <img src="/IEkcpt3.0/IEkcpt3.0/Public/Web/images/banner/logo_text.jpg"  alt="懂你所需，做你所想" width="163" height="49" />
        </div>
        <div class="fr">
            <div class="top">
            <span class="call">
            </span>
            </div>
            <nav class="nav">
                <ul class="fix">
                    <li id="menu1">
                        <a href="<?php echo U('indexafter/index');?>">
                            官网首页
                        </a>
                    </li>
                    <li id="menu2">
                        <a href="<?php echo U('Post/findpost');?>">
                            寻找岗位
                        </a>
                    </li>
                    <li id="menu3">
                        <a href="<?php echo U('Cases/findcases');?>">
                            寻找项目
                        </a>
                    </li>
                    <li id="menu4">
                        <a href="<?php echo U('Finance/index');?>">
                            寻找融资
                        </a>
                    </li>
                    <li id="menu5">
                        <a href="<?php echo U('Student/index');?>">
                            寻找人才
                        </a>
                    </li>
                    <li id="menu6">
                        <a href="<?php echo U('Teacher/index');?>">
                            咨询导师
                        </a>
                    </li>
                    <li id="menu7">
                        <a href="<?php echo U('Personal/checksf');?>" >
                            个人中心
                        </a>
                        |
                        <a href="<?php echo U('Login/loginout');?>" >
                            退出
                        </a>
                    </li>
                </ul>
                <span class="nav_icon">
            </span>
            </nav>
        </div>
    </div>
</header>
<script type="text/javascript">
    document.getElementById("menu7").className = "on";
</script>
<div class="account-comment-header">
    <div class="header-main user-info" style="min-width: 1200px;">
        <div class="user-info-main">
            <p style="margin-left: 45px; margin-top: 30px; font-size: 22px;color: rgb(242, 232, 31);font-weight: bold;line-height: 22px;height: 22px;">个人中心</p>
            <p style="float: right; margin: 40px 40px 0 0;  font-size: 22px;color: rgb(242, 232, 31);font-weight: bold;line-height: 22px;height: 22px;">您好：<?php echo ($_SESSION['userinfo']['name']); ?></p>
            <div class="user-info-content">
                <!--<span>个人中心</span>-->
                <div style="color:#fff;margin-bottom:3px; margin-top: -10px"><p style="letter-spacing: 3px;margin-left: 5px;">用户类型: <?php echo ($_SESSION['userinfo']['leibei']); ?></p></div>
                <div style="color:#fff;margin-bottom:3px; margin-top: 3px"><p style="letter-spacing: 3px;margin-left: 5px;">登录账号: <?php echo ($_SESSION['userinfo']['sid']); ?></p></div>

            </div>
        </div>
    </div>
</div>
<div class="container right-main" >
    <ul class="side-nav" data-ac="myProjects" style="height:900px;">
        <li >
            <a href="indexprocompany.html">
                发布项目
            </a>
        </li>
        <li >
            <a href="post.html">发布岗位</a>
        </li>
        <li>
            <a href="companyxiaoxi.html">
                我的消息<sup style="color:red; font-weight: bold;margin-left: -2px;font-size: 16px">①</sup>
            </a>
            <span></span>
        </li>
        <li id="settingLink" class="active">
            <a href="infocompany.html">
                个人信息
            </a>
        </li>
        <li >
            <a href="<?php echo U('Personal/changemimacompany');?>" >
                修改密码
            </a>
        </li>
        <li class="link-box">
            <a href="https://www.ncss.cn/zx/zcfg/index.shtml" target="_blank"><img src="/IEkcpt3.0/IEkcpt3.0/Application/Home/View/personal/web/cyzc.jpg"></a>
        </li>
        <li class="link-box">
            <a href="https://www.ncss.cn/zd/index.shtml" target="_blank"><img src="/IEkcpt3.0/IEkcpt3.0/Application/Home/View/personal/web/cyzd.jpg"></a>
        </li>
    </ul>
    <div class="main-content clearfix" style="position:relative;">
        <div class="right-part">
            <div class="edit-box">
                <form class="form-horizontal form-project" onsubmit="return testyh(),checkxx(),otheryz(),test();" id="mainForm" method="post" action="<?php echo U('Personal/editcompany');?>" role="form">

                    <!--企业信息-->
               <!--         <div class="form-group show-group">
                            <div class="group-title">
                                <span class="star">*</span>
                                <span class="title">登录账号</span>
                            </div>
                            <div class="group-content">
                                <span>178****7231</span>
                            </div>
                        </div>-->
                          <div class="form-group">
                            <div class="group-title">
                                <span class="star">*</span>
                                <span class="title">公司注册编号</span>
                            </div>
                            <div class="group-content">
                                <input type="text" id="user" onblur="testyh()"  name="companyid" maxlength="64" class="form-control" value="201906010875" placeholder="请填写公司编号" >
                                <div id="errorhy" style="color:#F00; display:inline;"></div><br>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="group-title">
                                <span class="star">*</span>
                                <span class="title">公司名称</span>
                            </div>
                            <div class="group-content">
                                <input type="text" id="locationxx" onblur="checkxx()" maxlength="64" class="form-control" name="companyname" value="中国鸿运集团" placeholder="请填写公司名称" id="email" >
                                <div id="errorxx" style="color:#f00; display:inline;"></div><br>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="group-title">
                                <span class="star">*</span>
                                <span class="title">投资人</span>
                            </div>
                            <div class="group-content">
                                <input type="text" maxlength="64" class="form-control" name="investor" placeholder="请填写投资人姓名" value="杨枫" id="email" >
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="group-title">
                                <span class="star">*</span>
                                <span class="title">所属地区</span>
                            </div>
                            <div class="group-content">
                                <input type="text" maxlength="64" class="form-control" name="location" placeholder="请填写所在地区" value="山东省" id="email">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="group-title">
                                <span class="star">*</span>
                                <span class="title">联系方式</span>
                            </div>
                            <div class="group-content">
                                <input type="text" id="check" onblur="otheryz()" name="telephone" maxlength="64" class="form-control" value="15286662395"  placeholder="请输入您的联系方式" >
                                <div id="error" style="color:#f00; display:inline;"></div><br>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="group-title">
                                <span class="star">*</span>
                                <span class="title">电子邮箱</span>
                            </div>
                            <div class="group-content">
                                <input type="text" id="em" onblur="test()" maxlength="110" class="form-control" name="e-mail" value="1440613133@163.com" placeholder="请填写公司电子邮箱" >
                                <div id="erroryx" style="color:#F00; display:inline;"></div><br>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="group-title">
                                <span class="star">*</span>
                                <span class="title">发展领域</span>
                            </div>
                            <div class="group-content">
                                <!-- <input type="text" maxlength="64" class="form-control" name="field" placeholder="请填写您的发展领域 例：人工智能" > -->
                                <select  class="form-control"  name="field" >
                              <option value="交通运输仓储和物流业">交通运输仓储和物流业</option>
                              <option  value="农、林、牧、渔业">农、林、牧、渔业</option>
                              <option value="租赁和商务服务业">租赁和商务服务业</option>
                              <option value="医疗和社会工作">医疗和社会工作</option>
                              <option value="公共设施管理">公共设施管理</option>
                              <option selected="" value="科学技术服务业">科学技术服务业</option>
                              <option  value="信息技术服务">信息技术服务</option>
                              <option value="住宿和餐饮业">住宿和餐饮业</option>
                              <option value="制造业">制造业</option>
                              <option value="金融业">金融业</option>
                              
                       
                          </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="group-title">
                                <span class="star">*</span>
                                <span class="title">公司简介</span>
                            </div>
                            <div class="group-content">
                                <textarea rows="3" class="form-control" maxlength="64"  name="description" placeholder="请填写公司的简介(80字左右)">中国高校创新创业孵化器联盟（以下简称“联盟”）成立于2016年，是在教育部指导下成立服务大学生创新创业的重要平台之一。联盟成员单位是由高新技术开发区产业园、科创园、加速器、孵化器、众创空间、投资机构、金融机构、创新创业研究机构、创新创业媒体、科技企业、管理咨询机构、专利事务所、会计师事务所、律师事务所等机构以自愿的方式共同组成的社会团体。联盟以各组织机构的发展需求和各方的共同利益为基础，以提升产业技术创新能力为目标，以具有法律约束力的契约为保障，形成的联合孵化、联合投资、联合开发、优势互补、利益共享、风险共担的创新性合作组织。联盟成员单位承担为新创办的中小企业提供物理空间、加速升级、基础设施支持，开展创业辅导、信息交流、技术转移、人才引进和培训、金融投融资、市场开拓、国际合作等一系列服务，降低创业成本，提高创业成功率，助推科技创新，促进就业。</textarea><br>
                            </div>
                        </div>




                    <div class="form-group mid-btns" style="padding-left:130px;">
                        <button type="submit" id="subForm" class="btn btn-primary subform-inline">保存</button>
                        <input type="reset" id="cancelForm" class="btn btn-default subform-inline"></input>
                    </div>
                </form>
                <script type="text/javascript">
                    function testyh(){
                        var user = document.getElementById("user").value;
                        if(user.length == 0)
                        {
                            document.getElementById("errorhy").innerHTML="请输入公司编号！";
                            document.getElementById("user").style.border = "1px solid red";
                            return false;
                        }else{
                            document.getElementById("errorhy").innerHTML="";
                            document.getElementById("user").style.border = "1px solid #EEEEEE";
                        }
                    }

                    //公司名称验证
                    function checkxx(){
                        var user = document.getElementById("locationxx").value;
                        if(user.length == 0)
                        {
                            document.getElementById("errorxx").innerHTML="请选择公司名称！";
                            document.getElementById("locationxx").style.border = "1px solid red";
                            return false;
                        }else{
                            document.getElementById("errorxx").innerHTML="";
                            document.getElementById("locationxx").style.border = "1px solid #EEEEEE";
                        }
                    }

                   // 联系方式验证
                    function otheryz(){
                        var user = document.getElementById("check").value;
                        if(user.length == 0)
                        {
                            document.getElementById("error").innerHTML="请输入联系方式！";
                            document.getElementById("check").style.border = "1px solid red";
                            return false;
                        }else{
                            document.getElementById("error").innerHTML="";
                            document.getElementById("check").style.border = "1px solid #EEEEEE";
                        }
                    }

                    //邮箱测试
                    function test(str){
                        var em = document.getElementById("em");
                        var reg = /^([a-zA-Z0-9_-])+@([a-zA-Z0-9_-])+(.[a-zA-Z0-9_-])+/;
                        if(em.value.length == 0)
                        {
                            document.getElementById("erroryx").innerHTML="请输入邮箱。";
                            document.getElementById("em").style.border = "1px solid red";
                            return false;
                        }
                        if(!reg.test(em.value))
                        {
                            document.getElementById("erroryx").innerHTML="请输入有效的邮箱。";
                            document.getElementById("em").style.border = "1px solid red";
                            
                            return false;
                        }else{
                            document.getElementById("erroryx").innerHTML=" ";
                            document.getElementById("em").style.border = "1px solid red";
                            return true;
                        }

                    }
                </script>
            </div>
        </div>
    </div>
</div>
</div>
<footer class="footer">
    <div class="contact">
        <div class="wrap">
            <div class="home_about fl">
                <dl>
                    <dt>
                        <a href="index.html" >
                            平台介绍
                        </a>
                    </dt>
                    <dd>
                         IE-科创平台是学生、导师、企业三方交互的桥梁，企业可以在个人中心发布岗位与项目，对学生发布的项目进行投资，查看学生简历，寻找所需领域的人才；导师可以在个人中心发布课程与项目，回答学生咨询的问题，对学生项目进行指导；学生可以发布项目，寻找融资，学习需要的课程，咨询导师，寻找适合的岗位，投递简历。
                    </dd>
                </dl>
            </div>

            <div class="home_about fl">
                <dl>
                    <dt>
                        <a href="index.html" >
                            平台特色
                        </a>
                    </dt>
                    <dd>
                        作为双创潮流的主力，大学生们很乐于向投资人大谈自己的技术如何领先与独特，却很少涉及这些技术或产品究竟会有多大的市场空间，这些劣势是不可忽视的，
导师、企业恰巧拥有这些。IE-科创平台既能满足企业对人才、有价值的项目的需求，也能让学生的创意得到释放、找到心仪的岗位等，还能让导师实现自我价值，共同创造无限的可能！
                    </dd>
                </dl>
            </div>
            <div class="home_contact fl">
                <h2>
                    <a>
                        联系我们
                    </a>
                </h2>
                <ul>
                    <li>
                        Q Q：
                        <a target="_blank" rel="nofollow" href="#">
                            2691091258
                        </a>
                    </li>
                    <li>
                        邮 箱：
                        <a target="_blank" rel="nofollow" href="mailto:2691091258@qq.com">
                            2691091258@qq.com
                        </a>
                    </li>
                    <li>
                        电话：
                        <a target="_blank" rel="nofollow" href="#">
                            178-6061-8426
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="blogroll">
        <div class="wrap">
            友情链接：
            <a href="https://www.ncss.cn/" target="_blank">
                大学生就业网
            </a>
            &nbsp;
            <a href="https://cy.ncss.cn/" target="_blank">
                大学生创业服务网
            </a>
            &nbsp;
            <a href="https://www.csdn.net/" target="_blank">
                CSDN社区
            </a>
            &nbsp;
            <a href="https://www.imooc.com/" target="_blank">
                慕课网
            </a>
            &nbsp;
            <a href="https://www.runoob.com/" target="_blank">
                菜鸟教程
            </a>
            &nbsp;
            <a href="https://edu.51cto.com/" target="_blank">
                51CTO学院
            </a>
            &nbsp;
            <a href="https://www.jikexueyuan.com/" target="_blank">
                极客学院
            </a>
            &nbsp;
            <a href="https://ke.qq.com/" target="_blank">
                腾讯课堂
            </a>
            &nbsp;
            <a href="http://www.maiziedu.com/" target="_blank">
                麦子学院
            </a>
            &nbsp;
            <a href="https://study.163.com/" target="_blank">
                网易云课堂
            </a>
            &nbsp;
            <a href="http://www.xuetangx.com/" target="_blank">
                学堂在线
            </a>
            &nbsp;
            <a href="http://www.duobei.com/" target="_blank">
                多贝网
            </a>
            &nbsp;
            <p class="copyright">
                @2019-2021 版权所有  ICP备XXXXXXXX号 C.H.L.Y团队
            </p>
        </div>
    </div>
</footer>
</body>
</html>