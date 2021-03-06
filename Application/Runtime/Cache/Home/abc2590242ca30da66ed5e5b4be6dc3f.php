<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!-- 个人信息完善 -->
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>个人中心</title>
    <meta name="keywords" content="C.H.L.Y团队" />
    <meta name="mobile-agent" content="format=html5;"/>
    <link rel="stylesheet" href="/iekcpt/Application/Home/View/personal/web/bootstrap.min-1.0.0.css">
    <link rel="stylesheet" href="/iekcpt/Application/Home/View/personal/web/account-1.0.0.css">
    <link rel="stylesheet" href="/iekcpt/Application/Home/View/personal/web/myProjects.css">
    <link rel="stylesheet" href="/iekcpt/Application/Home/View/personal/web/new-edit-project.css" />
    <script type="text/javascript">
        if ((navigator.userAgent.match(/(iPhone|iPod|Android|ios)/i))) {
            location.replace("#");
        }
    </script>
    <!--[if lt IE 9]>
    <script type="text/javascript" src="/iekcpt/Public/Web/js/html5.js" tppabs="Public/Web/js/html5.js">
    </script>
    <![endif]-->
    <link href="/iekcpt/Public/Web/css/style.css" type="text/css" rel="stylesheet" />
    <script src="/iekcpt/Public/Web/js/base.js" type="text/javascript">
    </script>
    <!--[if lt IE 9]>
    <script type="text/javascript" src="/iekcpt/Public/Web/js/respond.min.js" tppabs="Public/Web/js/respond.min.js">
    </script>
    <![endif]-->
    <style>
        /*顶部边框样式*/
        .wrap{border:0;padding:0;width:1200px;margin:0 auto;*zoom:1;}
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
            width: 588px;
        }
        .right-part .form-project .form-control{
            width: 420px;
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
        .side-nav li:not(.time-box):not(.link-box){
            padding-left:35px;
        }
        .side-nav li .dot{
            left:100px;
        }
    </style>
</head>
<body>
<div style="min-width:1264px;">
    <header class="header">
        <div class="wrap">
            <h1 class="fl">
                <a href="<?php echo U('indexafter/index');?>"  class="fl logo">
                    <img src="/iekcpt/Public/Web/images/banner/logo.png"   width="154" height="49" />
                </a>
            </h1>
            <div class="fl logo_text">
                <img src="/iekcpt/Public/Web/images/banner/logo_text.jpg"  alt="懂你所需，做你所想" width="163" height="49" />
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
        <div class="header-main user-info"  style="min-width: 1200px;">
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
        <ul class="side-nav" data-ac="myProjects" style="height: 900px;">
            <li>
                <a href="index.html">
                    项目|简历
                </a>
            </li>
            <li>
                <a href="xiaoxi.html">
                    我的消息
                </a>
                <span></span>
            </li>
            <!--<li id="settingLink" >
                <a href="info.html">
                    个人信息
                </a>
            </li>-->
            <li>
                <a href="<?php echo U('Personal/readresume');?>">
                    个人简历
                </a>
            </li>
            <li  class="active">
                <a href="<?php echo U('Personal/changemimastu');?>">
                    修改密码
                </a>
            </li>
            <li class="link-box">
                <a href="https://www.ncss.cn/zx/zcfg/index.shtml" target="_blank"><img src="/iekcpt/Application/Home/View/personal/web/cyzc.jpg"></a>
            </li>
            <li class="link-box">
                <a href="https://www.ncss.cn/zd/index.shtml" target="_blank"><img src="/iekcpt/Application/Home/View/personal/web/cyzd.jpg"></a>
            </li>
        </ul>
       


        <div class="main-content clearfix" style="position:relative;">
            <div class="right-part">
                <div class="edit-box">
                    <form  id="mainForm" method="post"  onsubmit="return testyh(),testmima(),checkmima(),mynewmima();"  action="<?php echo U('Personal/changemima');?>">
                    <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="container" style="margin: 30px 0 0 -35px ">
                            <div class="input-group col-xs-4 col-xs-offset-2" style="margin-top: 20px; height: 30px;">
                                <div class="input-group-addon" style="width:80px; ">账&nbsp;&nbsp;&nbsp;&nbsp; 号</div>
                                <input type="text" id="user" onblur="testyh()" name="sid" class="form-control" value="<?php echo ($vo["sid"]); ?>" style="width:200px; height: 50px;" >
                            </div>
                            <div id="errorhy" style="color:#F00; display:inline;margin-left: 180px; "></div>
                            <div class="input-group col-xs-4 col-xs-offset-2" style="margin-top: 20px; height: 50px;">
                                <div class="input-group-addon" style="width:80px; ">旧 密 码</div>
                                <input type="password" onblur="testmima()" name="beforemima" value="<?php echo ($vo["spwd"]); ?>" id="oldmima" class="form-control" style="width:200px; height: 50px;" >
                            </div>
                            <div id="errormima" style="color:#F00; display:inline;margin-left: 180px;"></div><br>
                            <div class="input-group col-xs-4 col-xs-offset-2" style="margin-top: 30px; height: 50px;">
                                <div class="input-group-addon" style="width:80px;">新 密 码</div>
                                <input type="password" id="mima" onblur="mynewmima()" name="newmima" class="form-control" style="width:200px; height: 50px;">
                            </div>
                            <div id="newerrormima" style="color:#F00; display:inline;margin-left: 180px;";></div><br>
                            <div class="input-group col-xs-4 col-xs-offset-2" style="margin-top: 30px; height: 50px;">
                                <div class="input-group-addon" style="width:80px;">确认密码</div>
                                <input type="password" id="mima1" onblur="checkmima()" name="querenmima" class="form-control" style="width:200px; height: 50px;">
                            </div>
                            <div id="errormima1" style="color:#F00; display:inline; margin-left: 180px;"></div><br>
                            <input type="submit" class="btn btn-primary col-xs-2 col-xs-offset-4" style="font-size: 17px; margin-top: 30px; margin-bottom: 150px; width: 100px;  height: 50px;" value="修改">
                        </div>
                        <script type="text/javascript">
                            function testyh(){
                                var user = document.getElementById("user").value;
                                if(user.length == 0)
                                {
                                    document.getElementById("errorhy").innerHTML="请输入用户名!";
                                    document.getElementById("user").style.border = "1px solid red";
                                    return false;
                                }else{
                                    document.getElementById("errorhy").innerHTML="";
                                    document.getElementById("user").style.border = "1px solid #EEEEEE";
                                }
                            }

                            //密码验证
                            function testmima(){
                                var mima = document.getElementById("oldmima");
                                if(mima.value.length == 0)
                                {
                                    document.getElementById("errormima").innerHTML="请输入原密码。";
                                    mima.style.border = "1px solid red";
                                    return false;
                                }else{
                                    document.getElementById("errormima").innerHTML="";
                                    mima.style.border = "1px solid #EEEEEE";
                                }
                            }

                            //新密码验证
                            function mynewmima(){
                                var mima = document.getElementById("mima");
                                if(mima.value.length == 0)
                                {
                                    document.getElementById("newerrormima").innerHTML="请输入新密码。";
                                    mima.style.border = "1px solid red";
                                    return false;
                                }else{
                                    document.getElementById("newerrormima").innerHTML="";
                                    mima.style.border = "1px solid #EEEEEE";
                                }
                            }

                            //确认密码
                            function checkmima(){

                                var mima = document.getElementById("mima");
                                var mima1 = document.getElementById("mima1");
                                if(mima1.value.length == 0)
                                {
                                    document.getElementById("errormima1").innerHTML="请输入改密码。";
                                    mima1.style.border = "1px solid red";
                                    return false;
                                }
                                if(mima1.value!=mima.value){
                                    document.getElementById("errormima1").innerHTML="两次输入的密码不一致！";
                                    mima1.style.border = "1px solid #EEEEEE";
                                    return false;

                                }
                                else{
                                    document.getElementById("errormima1").innerHTML="";
                                    mima.style.border = "1px solid #EEEEEE";
                                }
                            }
                        </script><?php endforeach; endif; else: echo "" ;endif; ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<footer class="footer" style="min-width: 1264px;">
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
</body>

</html>