<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
      寻找融资
    </title>
    <meta name="keywords" content="C.H.L.Y团队" />
    <meta name="mobile-agent" content="format=html5;"/>
    <link rel="stylesheet" href="/IEkcpt3.0/IEkcpt3.0/Public/Web/css/bootstrap.min-1.0.0.css">
    <link rel="stylesheet" href="/IEkcpt3.0/IEkcpt3.0/Public/Web/css/iconfont-1.0.0.css">
    <link rel="stylesheet" href="/IEkcpt3.0/IEkcpt3.0/Public/Web/css/pagination.css">
    <link rel="stylesheet" href="/IEkcpt3.0/IEkcpt3.0/Public/Web/css/project-search-1.0.1.css">
    <script src="/IEkcpt3.0/IEkcpt3.0/Public/Web/js/jquery-1.11.1.min.js"></script>
    <script src="/IEkcpt3.0/IEkcpt3.0/Public/Web/js/bootstrap.min-1.0.0.js"></script>
    <script type="text/javascript">
      if ((navigator.userAgent.match(/(iPhone|iPod|Android|ios)/i))) {
        location.replace("#");
      }
    </script>
    <!--[if lt IE 9]>
      <script type="text/javascript" src="./IEkcpt3.0/IEkcpt3.0/Public/Web/js/html5.js" tppabs="Public/Web/js/html5.js">
      </script>
    <![endif]-->
    <link href="/IEkcpt3.0/IEkcpt3.0/Public/Web/css/style.css" type="text/css" rel="stylesheet" />
    <script src="/IEkcpt3.0/IEkcpt3.0/Public/Web/js/base.js" type="text/javascript">
    </script>
    
    
    <!--[if lt IE 9]>
      <script type="text/javascript" src="/IEkcpt3.0/IEkcpt3.0/Public/Web/css//js/respond.min.js" tppabs="Public/Web/js/respond.min.js">
      </script>
    <![endif]-->
    <style>

    .header{
    	background-color: #FFFFFF;
    }
  .project-search-map-item::after {
    width: 1046px;
  }
	.container {
      width: 1180px;
	    padding-left: 0;
	    padding-right: 0;
	}
  .project-search-map-item .map-item-title {
    width: 200px;
  }

  .map-item-box>li.map-item-all-btn {
    left: 135px;
  }

  .project-search-list .synopsis {
    max-width: 420px;
  }
</style>
  </head>
  
  <body>
  <div style="mid-width:1404px;">
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
      document.getElementById("menu4").className = "on";
    </script>
    <!--banner-->

    <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="inside_banner_news">
    </div>
    <div class="project-banner banner" style="height: 139px;">

    <div class="inves-container clearfix banner-cont">
      <div class="project-img img-thumbnail pull-left">
          <img alt="/IEkcpt3.0/IEkcpt3.0/Public/Web/images/chenjing.jpg" class="" src="/IEkcpt3.0/IEkcpt3.0/Public/Web/images/banner/logo.png">
       </div>

       <div class="message-box pull-left">
        <h2><span class="vestor-name"><?php echo ($vo["investor"]); ?></span></h2>
        <p class="message-pone">
          <span title="中国高校创新创业孵化器联盟"><?php echo ($vo["companyname"]); ?></span>
          <span title="秘书长兼副理事长">投资人：<?php echo ($vo["investor"]); ?></span><br>
          <!--<span>从业18年</span>-->
          <span title="北京市">公司所在地：<?php echo ($vo["location"]); ?></span>
        </p>
        <p class="message-ptwo">
          <span>单笔投资额度：1万 - 200万</span>
        </p>
       </div>
       
    </div>
  </div>
<div class="inves-container project-content">
    <h4 class="tags-title" id="area">投资领域</h4>
    <!--<div class="ly2 hide investIndustry-box">信息技术服务业,教育,文化、体育和娱乐业</div>-->
    <div class="investor-area"><span><?php echo ($vo["field"]); ?></span></div>

  <h4 class="tags-title" id="orign-message" style="margin-top:14px;">机构信息</h4>
  <div class="orgin-message">
        <p><span class="bold">机构简介：</span></p>
        <p class="orgin-brief" style="white-space: pre-wrap;"><?php echo ($vo["description"]); ?></p></div>
  <div class="content-box" id="patent">
    <h5>
      <i class="iconfont icon-diploma"></i>联系方式</h5>

    <div class="invest-example" style="height: 50px;">
      <li class="fa fa-flask"></li>
      <div style="margin-left:40px;font-size:18px;line-height:36px;color:red;">
        电话：<?php echo ($vo["telephone"]); ?><br>
        邮箱：<?php echo ($vo["e-mail"]); ?>

       <!--  <img  src="/IEkcpt3.0/IEkcpt3.0/Public/Web/images/qqq.jpg" style="width: 100px "  onmouseleave="f2()" onmouseover="f1()">
        <img  src="/IEkcpt3.0/IEkcpt3.0/Public/Web/images/weixin.jpg" style="width: 100px" onmouseleave="f4()" onmouseover="f3()"> -->
        <!-- <img  src="/IEkcpt3.0/IEkcpt3.0/Public/Web/images/phone.jpg" style="width: 100px" onmouseleave="f6()" onmouseover="f5()"> -->
        <!-- <img  src="/IEkcpt3.0/IEkcpt3.0/Public/Web/images/youxiang.jpg" style="width: 100px" onmouseleave="f8()" onmouseover="f7()"> -->
        <script type="text/javascript">
            function f1(){
                document.getElementById('qqq').style.display="block";

            }
            function f2(){
                document.getElementById('qqq').style.display="none";
            }
            function f3(){
                document.getElementById('dvLoginBox1').style.display="block";

            }
            function f4(){
                document.getElementById('dvLoginBox1').style.display="none";
            }
            function f5(){
                document.getElementById('dvLoginBox2').style.display="block";

            }
            function f6(){
                document.getElementById('dvLoginBox2').style.display="none";
            }
            function f7(){
                document.getElementById('dvLoginBox3').style.display="block";

            }
            function f8(){
                document.getElementById('dvLoginBox3').style.display="none";
            }
        </script>

       <!-- <label id="qqq" style="display: none; color: #2EAFBB; border: 1px solid #ccc;width: 160px;
         margin-left: 200px; margin-top:10px; font-size: 12px;">qq：1440613133</label>
        <label id="dvLoginBox1" style="display: none; color: #2EAFBB; border: 1px solid #ccc;width: 160px;
         margin-left: 300px;font-size: 12px;">微信：<img src="/IEkcpt3.0/IEkcpt3.0/Public/Web/images/weixintupian.jpg" style="width: 50px;" ></label> -->
        <label id="dvLoginBox2" style="display: none; color: #2EAFBB; border: 1px solid #ccc;width: 160px;
         margin-left: 400px;font-size: 12px;">电话：<?php echo ($vo["telephone"]); ?></label>
      <!--   <label id="dvLoginBox3" style="display: none; color: #2EAFBB; border: 1px solid #ccc;width: 260px;
         margin-left: 500px;font-size: 12px;">e-mail：1440613133@qq.com</label> -->
      </div>

    </div>
  </div>
</div><?php endforeach; endif; else: echo "" ;endif; ?>
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
  </div>
  </body>

</html>