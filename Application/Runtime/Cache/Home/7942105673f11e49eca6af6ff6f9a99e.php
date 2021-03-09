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
            margin-left: -180px; /*在增加个人简历时新加的*/
            width: 800px;
            height: 700px;
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

/*        .uploadImg_imgresultwrap {
            position: relative;
            background: url(//img.58cdn.com.cn/ui7/job/resume/imgdefaultapp.png);
            background-size: 100% 100%;
            border: none;
            width: 200px;
            height: 100px;
            overflow: hidden;
            border-radius: 100px;
            -o-border-radius: 40px;
            -webkit-border-radius: 40px;
            cursor: pointer;
            margin-left: 20px;
        }*/
       .toptwo{
           padding: 0 8px;
           background: #fff;
           margin-top: 70px;
           width: 100%;
           text-align: center;
           background: transparent;
           border-bottom: 1px solid #666666;
       }
       .toptwodiv{
           padding: 0 9px;
           font-size: 16px;
           color: #666;
           display: inline-block;


       }
        .toptwodivp{
            border-radius: 20px;
            background: #eef0ed;
            padding: 10px 20px;
            margin-bottom: -120px;
            margin-top: 50px;
        }

        .toptwodivi {
            float: left;
            width: 23px;
            height: 20px;
            background-repeat: no-repeat;
            background-image: url(http://sta.ganjistatic1.com/src/image/v5/want_manage/resume/detail_sprite.png);
        }

        table {
            border-collapse: separate;
            border-spacing: 22px;
            /*margin-left: -22px;*/
        }

        tbody{
            margin: 0;
            padding: 0;
            border: 0;
            outline: 0;

        }

        tr {
            display: table-row;
            vertical-align: inherit;
            border-color: inherit;
        }

        table td {
            text-align: center;
            padding-right: 22px;
            border-right: 1px solid #e0e0e0;
            overflow: hidden;
            text-overflow: ellipsis;
            max-width: 290px;
            white-space: nowrap;
        }
    </style>
</head>
<body style=" min-width:1264px;">
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
        <ul class="side-nav" data-ac="myProjects" style="height: 800px;">
            <li>
                <a href="index.html">
                    项目|简历
                </a>
            </li>
            <li >
                <a href="xiaoxi.html">
                    我的消息
                </a>
                <span></span>
            </li>
            <!--<li id="settingLink"  >
                <a href="info.html">
                    个人信息
                </a>
            </li>-->
            <li class="active">
                <a href="<?php echo U('Personal/readresume');?>">
                    个人简历
                </a>
            </li>
            <li>
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


    <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="main-content clearfix"  style="position:relative;">
            <div class="right-part">
                <div class="edit-box">
                    <div class="topjieshao">
                        <div class="resume-avatar">
                            <p></p>
                            <img src="/iekcpt/Public/<?php echo ($vo["jianlitp"]); ?>" alt="您没有上传照片！" width="170px" height="170px" style="float: left;margin-right: 35px;">
                            <div class="resume-lines" style="float: left;line-height: 23px; height: 160px;">
                                <div class="name-line">
                                    <span>姓&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;名：</span>
                                    <strong><?php echo ($vo["name"]); ?></strong>
                                    <span style="margin-left: 15px;">性别：</span>
                                    <span style="margin-right:10px; "><strong><?php echo ($vo["sex"]); ?></strong></span>
                                    <!--<span class="left-border">22岁</span>-->
                                    <i>求职类型：<strong><?php echo ($vo["jodtype"]); ?></strong></i>
                                </div>
                                <div class="college-line clearfix">
                                    <div class="left-box">
                                        <span>学&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;历：</span>
                                        <b><?php echo ($vo["heightxueli"]); ?></b>
                                    </div>
                                    <div class="right-box">
                                        <span>工作年限：</span>
                                        <b><?php echo ($vo["workexperience"]); ?></b>
                                    </div>
                                </div>
                                <div class="salary-line clearfix">
                                    <div class="left-box">
                                        <span>期望薪资：</span>
                                        <b><?php echo ($vo["hopesalary"]); ?></b>
                                    </div>
                                    <div class="right-box">
                                        <span>工作地点：</span>
                                        <b><?php echo ($vo["province"]); ?>—<?php echo ($vo["city"]); ?>—<?php echo ($vo["region"]); ?> </b>
                                    </div>
                                </div>
                                <div class="tend-line clearfix">
                                    <span>出生日期：</span>
                                    <b><label style="text-decoration:none;"  target="_blank"><?php echo ($vo["birthday"]); ?></label></b>
                                </div>

                                <ul class="offer_detail clearfix">
                                    <li class="cr notify-time-li">邮&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;箱：<span><strong><?php echo ($vo["mail"]); ?></strong></span></li></ul>
                                <ul class="offer_detail clearfix" id="js_contact_container">
                                    <li class="cr notify-time-li">联系电话：<span style="color: red;"><?php echo ($vo["phone"]); ?></span></li></ul>




                            </div>
                        </div>
                    </div>
                        <!--个人简历顶部结束-->
                        <div style="clear: both; margin-top: 50px;">
                            <h3 class="toptwo">
                                <div class="toptwodiv">
                                    <p class="toptwodivp"><i class="toptwodivi"></i><span style="margin-left: 5px;">教育经历</span></p>
                                </div>
                            </h3>

                        </div>
                    <table>
                        <tbody>
                            <tr style="font-weight: bold;font-size: 14px;">
                                <td style="margin-left: 20px;" ><?php echo ($vo["school"]); ?></td>
                                <td ><?php echo ($vo["major"]); ?></td>
                            </tr>
                        </tbody>
                    </table>

                        <div style="clear: both;">
                            <h3 class="toptwo">
                                <div class="toptwodiv">
                                    <p class="toptwodivp"><i class="toptwodivi"></i><span style="margin-left: 5px;">自我描述</span></p>
                                </div>
                            </h3>

                                <div style="margin: 30px 0 0 20px; letter-spacing: 4px;font-weight: bold;font-size: 14px;"><?php echo ($vo["selfintroduction"]); ?></div>

                        </div>
                    </div>
                </div>
            </div><?php endforeach; endif; else: echo "" ;endif; ?>
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
</html>