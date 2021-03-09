<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!-- 老师页面 -->
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
    #settingLink{
      position:relative;
    }
    .side-nav li:not(.time-box):not(.link-box){
      padding-left:35px;
    }
    .side-nav li .dot{
      left:100px;
    }
    .project-list li .top1 h3 a{
        word-break: break-word;
    }
    .side-nav {
    height: 468px;}
    .project-list li {
      height: 300px
    }
    .project-list li .mid {
    height: 300px;
    padding: 20px;}
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
          <img src="/IEkcpt3.0/IEkcpt3.0/Public/Web/images/banner/logo_text.jpg"  width="163" height="49" />
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
<!--     <div class="account-comment-header">
    <div class="header-main user-info">
      <div class="user-info-main">
        <div class="user-info-content">
          <span>肖梦</span>
          <div style="color:#fff;margin-bottom:-13px;">个人中心</div>
          <div class="user-info-tags">
            <span class="school" title="山东建筑大学">山东建筑大学</span><span class="major" title="计算机科学与技术学院">计算机科学与技术学院</span>
          </div>
          <div>
            <span class="user-info-contact-item contact-tel">178****8426</span>
            <span class="user-info-contact-item contact-email">2691091258@qq.com</span>
          </div>
        </div>
      </div>
    </div>
  </div>-->
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
  <div class="container right-main">
    <!-- <ul class="side-nav" data-ac="myProjects" style="height: 900px;">
      <li>
        <a href="indexproteacher.html">
          我的项目
        </a>
      </li>
      <li  class="active">
        <a href="courses.html">我的课程</a>
      </li>
      <li>
        <a href="wodexiaoxi.html">
          我的消息
        </a>
      </li>
      <li id="settingLink">
        <a href="infotea.html">
          个人信息
        </a>
      </li>
      <li >
        <a href="xiugaimimateacher.html">
          修改密码
        </a>
      </li>
      <li class="link-box">
        <a href="https://www.ncss.cn/zx/zcfg/index.shtml" target="_blank"><img src="/IEkcpt3.0/IEkcpt3.0/Application/Home/View/personal/web/cyzc.jpg"></a>
      </li>
      <li class="link-box">
        <a href="https://www.ncss.cn/zd/index.shtml" target="_blank"><img src="/IEkcpt3.0/IEkcpt3.0/Application/Home/View/personal/web/cyzd.jpg"></a>
      </li>
    </ul> -->

    <ul class="side-nav" data-ac="myProjects" style="height: 900px;">
        <li>
            <a href="indexproteacher.html">
                我的项目
            </a>
        </li>
        <li id="settingLink"  class="active">
            <a href="courses.html">我的课程</a>
        </li>
        <li>
            <a href="teacherxiaoxi.html">
                我的消息
            </a>
        </li>
        <li>
            <a href="infotea.html">
                个人信息
            </a>
        </li>
        <li >
          <a href="<?php echo U('Personal/changemimateacher');?>" >
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


    <div class="main-content">
      <ul class="project-list clearfix" id="projectList" style="min-height: 650px;">
        <!--<li class="project-item" >
          <div class="top1">
            <h3>
              <a class="project-name" >BootStrap视频教程</a>
            </h3>
            <p class="oprate-box">
              <a class="del-project national deleteLimit" >删除</a>
            </p>
          </div>
          <div class="mid">
            <p class="creater1 ellipsis">
              主讲老师：李炎恢
            </p>
            <p class="creater2 ellipsis">
              课程类型：前端开发
            </p>
            <p class="creater2 ellipsis">课程链接：<a href="https://edu.51cto.com/center/course/lesson/index?id=65584"  target="_blank">点我</a>
            </p>
            <p class="creater2">
              课程简介：Bootstrap是目前最为流行的前端
              开发框架，由Twitter的两位工程师设计推出。
              学习本套课程，可以快速的建立HTML5的响应
              式前端页面。
            </p>
          </div>
          
        </li>-->
        <li class="create-project" style="margin-left: 50px">
          <a id="creatNew" style="cursor: pointer;" href="<?php echo U('Teacher/teacherpublishcourse');?>">
            <div class="plus">
              +
            </div>
            <p class="create-p">
              发布课程
            </p>
          </a>
        </li>
      </ul>
    </div>
  </div>
  </div>
    <footer class="footer" >
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