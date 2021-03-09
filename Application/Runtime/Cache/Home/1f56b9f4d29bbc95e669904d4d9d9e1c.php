<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="author" content="TI Alliance" />
    <title>
      寻找项目
    </title>
    <meta name="keywords" content="C.H.L.Y团队" />
    <meta name="mobile-agent" content="format=html5;"/>
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
    <script src="/iekcpt/Public/Web/js/case2016.js" type="text/javascript">
    </script>
    <!--[if lt IE 9]>
      <script type="text/javascript" src="/iekcpt/Public/Web/js/respond.min.js" tppabs="Public/Web/js/respond.min.js">
      </script>
    <![endif]-->
    <style>
      /*寻找项目菜单栏*/
      #casesmuen{
        margin-top: 60px;
        margin-left: 10px;
        width: 1000px;
        margin: 0 auto;
        height: 100px;

      }
      #casesmuen li{
        float: left;
        padding: 5px 10px;
      }
      #casesmuen li button{
        /*width: 100px;*/
        /*padding:8px;*/
        cursor:pointer;
        background-color: #428bca;
        border-color: #357ebd;
        color: #fff;
        -moz-border-radius: 10px;
        -webkit-border-radius: 10px;
        border-radius: 10px; /* future proofing */
        -khtml-border-radius: 10px; /* for old Konqueror browsers */
        text-align: center;
        vertical-align: middle;
        border: 1px solid transparent;
        /*height: 35px;*/
        /*font-weight: 900;*/
        /*font-size:125%*/
      }
    </style>
  </head>
  <body style="min-width: 1264px;">
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
      document.getElementById("menu3").className = "on";
    </script>
    <!--banner-->
    <div class="inside_banner_case">
    </div>
    <a name="case">
    </a>
    <div class="case_t wrap" style="margin-bottom: 40px;margin-top:-20px;">
      <div class="case_t_img">
        <img src="/iekcpt/Public/Web/images/banner/case_t.jpg" 
        width="156" height="39" alt="CASE" />
      </div>
      <div class="case_t_title">
        寻找项目
      </div>
      <div class="case_t_line">
      </div>
    </div>




    <div id="casesmuen">
      <ul >
          <!--<li style="float: left; font-weight: bold;color: #0b6cbc;font-size: 16px;margin-top: 10px;margin-left: 10px;">项目类别:</li>-->
            <!--按钮查找的样式是<li>标签所导致的-->
          <li ><label style="font-family: '微软雅黑', Arial; font-size: 15px;">项目类别：</label></li>
          <li>
            <a >
              <form method="post" action="<?php echo U('Cases/findcases');?>" ><button >全部</button></form>
            </a>
          </li>
        <li>
          <a>
            <form method="post" action="<?php echo U('Cases/findguanli');?>" ><button>水利、环境和公共设施管理</button></form>
          </a>
        </li>
        <li>
          <a>
            <form method="post" action="<?php echo U('Cases/findweihu');?>" ><button >计算机系统维护</button></form>
          </a>
        </li>
        <li>
          <a>
            <form method="post" action="<?php echo U('Cases/finddongman');?>" ><button>动漫设计与制作</button></form>
          </a>
        </li>
        <li>
          <a>
            <form method="post" action="<?php echo U('Cases/findfuwuye');?>" ><button>租赁和商务服务业</button></form>
          </a>
        </li>
        <li>
            <a>
              <form method="post" action="<?php echo U('Cases/findkaifa');?>" ><button >软件开发</button></form>
            </a>
          </li>
          <li>
            <a >
              <form method="post" action="<?php echo U('Cases/findwangluo');?>" ><button >计算机网络</button></form>
            </a>
          </li>
          <li style="margin-left: 156px;">
            <a >
              <form method="post" action="<?php echo U('Cases/findyingyong');?>" ><button >计算机应用</button></form>
            </a>
          </li>
          <li>
            <a >
              <form method="post" action="<?php echo U('Cases/findceshi');?>" ><button > 软件测试</button></form>
            </a>
          </li>
          <li>
            <a>
              <form method="post" action="<?php echo U('Cases/findsheji');?>" ><button>系统架构设计</button></form>
            </a>
          </li>

          <li>
            <a>
              <form method="post" action="<?php echo U('Cases/findshangwu');?>" ><button>电子商务</button></form>
            </a>
          </li>
          <li>
            <a>
              <form method="post" action="<?php echo U('Cases/findyingjian');?>" ><button>计算机硬件</button></form>
            </a>
          </li>
          <li>
            <a>
              <form method="post" action="<?php echo U('Cases/findshangwu');?>" ><button>多媒体制作</button></form></a>
            </a>
          </li>
           <li>
            <a>
              <form method="post" action="<?php echo U('Cases/findzidonghua');?>" ><button>办公自动化</button></form>
            </a>
          </li>


        <li>
          <a>
            <form method="post" action="<?php echo U('Cases/findjiaoyu');?>" ><button>教育</button></form>
          </a>
        </li>
      </ul>


      <div class="case_search" >
        <div class="case_seek">
          <form class="form-search project-search-form-box" method="post" action="<?php echo U('Cases/findproject');?>" accept-charset="utf-8">
          <!--<input type="text" value="" name="all" id="k" class="text" />-->
          <!--<img src="/iekcpt/Public/Web/images/c03.jpg" onClick="search_cases()" alt="搜索网站案例" width="16" height="16" />-->
            <!--<button id="searchBtn">搜索</button>-->
          </form>
        </div>
      </div>
    </div>

<div class="case_list_201601">
      <ul class="portfolio-grid fix">
        <!-- Thumbnail -->
        <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="thumbnail" style="display:block;opacity:1;">
          <a class="thumbnail_a" href="<?php echo U('Cases/findcasesjianjie',array('sinfo_pid'=>$vo['pid']));?>"  target="_blank">
            <img src="/iekcpt/Public/<?php echo ($vo["prologo"]); ?>" class="cases_img" style="width:385px;height:240px; " alt="您没有上传照片！" />
            <div class="projectinfo" style="display: none;">
            </div>
          </a>
          <div class="meta">
            <a  href="<?php echo U('Cases/findcasesjianjie',array('sinfo_pid'=>$vo['pid']));?>">
              <h4 class="fl">
                <a><label><?php echo ($vo["proname"]); ?></label></a>
              </h4>
            </a>
            <div class="c">
            </div>
          </div>
        </li><?php endforeach; endif; else: echo "" ;endif; ?>
      </ul>
    </div>
    <!-- <div class="case_list_201601">
      <ul class="portfolio-grid fix" style="margin-bottom: 50px;">
        <form action="<?php echo U('Cases/findcases');?>"  method="post" enctype="multipart/form-data" style="float: left; width: 1263px;">

          <table class="portfolio-grid fix" style=" float: left;margin: 0 auto;">
            <tbody style="width: 1263px;">
            <tr style="width: 1263px;">
              <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><td  class="thumbnail" style="display:block;opacity:1; margin: 6px 10px 10px 10px;">
                  <a class="thumbnail_a" href="<?php echo U('Cases/findcasesjianjie',array('sinfo_pid'=>$vo['pid']));?>"  target="_blank">
                    <img src="/iekcpt/Public/<?php echo ($vo["prologo"]); ?>" class="cases_img" style="width:385px;height:240px;display: inline;float: left;  " alt="  IE-科创平台" />
                  </a>
                  <div class="meta">
                    <a  href="<?php echo U('Cases/findcasesjianjie',array('sinfo_pid'=>$vo['pid']));?>">
                      <h4 class="fl">
                        <a><label><?php echo ($vo["proname"]); ?></label></a>
                      </h4>
                    </a>
                  </div>
                </td><?php endforeach; endif; else: echo "" ;endif; ?>
            </tr>
            </tbody>
          </table>
        </form>
      </ul>
    </div>
 -->


   
    <footer class="footer" style="clear: both;">
      <div class="contact">
        <div class="wrap">
          <div class="home_about fl" >
            <dl>
              <dt>
                  <a href="index.html">
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