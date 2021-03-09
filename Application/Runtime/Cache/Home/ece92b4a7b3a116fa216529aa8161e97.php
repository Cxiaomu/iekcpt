<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html>
  
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
      寻找岗位
    </title>
    <meta name="author" content="C.H.L.Y团队" />
    <meta name="mobile-agent" content="format=html5;"
    />
    <script type="text/javascript">
      if ((navigator.userAgent.match(/(iPhone|iPod|Android|ios)/i))) {
        location.replace("#");
      }
    </script>
    
      <script type="text/javascript" src="/iekcpt/Public/Web/js/html5.js">
      </script>
    
    <link href="/iekcpt/Public/Web/css/style.css" type="text/css" rel="stylesheet" />
    <script src="/iekcpt/Public/Web/js/base.js" type="text/javascript">
    </script>
    <!--[if lt IE 9]>
      <script type="text/javascript" src="/iekcpt/Public/Web/js/respond.min.js" tppabs="http://www.sucainiu.com/Public/Web/js/respond.min.js">
      </script>
    <![endif]-->

    <style>
      #dvLoginBox {
        border-radius: 6px;
        display: none;
        position: absolute;
        top: 41px;
        z-index: 9998;
        color: #434343;
        background-color: rgba(0,0,0,.05);
        background-color: #fff;
        left: 245px;
        box-shadow: 2px 5px 70px rgba(0,0,0,.5);
        width: 750px;
        height: 512px;
        top: 650px;
      }

      .apply-btn {
        margin-top: 30px;
        margin-left: 255px;
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

      #spnCloseButton {
        font-family: Arial;
        position: absolute;
        top: 6px;
        right: 14px;
        cursor: pointer;
        padding: 3px;

      }
      #spnCloseButton:hover{
        color:red;
      }
      .solution_list h2 a:hover {
        color: #2eafbb;
      }
      .tanchuang1{
        color: #999;
        margin: 33px 30px 36px;
        font-size: 1em;
      }
      .tanchuang2{

        font-size: 2em;
        color: #000;
        margin:33px 30px 36px;
      }
      .source3{

        padding: 33px 30px 36px;
        padding-right: 0px;
        font-size: 20px;
        color: #ff7900;
      }
      .source4{
        font-size: 15px;

      }
      .source5{
        padding: 33px 30px 36px;
        color: #666;
        font-size: 15px;

      }
      .source6{
        padding: 3px 30px 3px;
        border-top: 1px solid #eee;
        font-size: 17px;
      }
      .source7{
        font-size: 18px;
        font-weight: bold;
      }
      .apply-btn {
        margin-top: 30px;
        margin-left: 255px;
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
  
  <body>
    <header class="header">
      <div class="wrap">
        <h1 class="fl">
          <a href="<?php echo U('indexafter/index');?>" class="fl logo">
            <img src="/iekcpt/Public/Web/images/banner/logo.png"  width="154" height="49" />
          </a>
        </h1>
        <div class="fl logo_text">
          <img src="/iekcpt/Public/Web/images/banner/logo_text.jpg" alt="懂你所需，做你所想" width="163" height="49" />
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
      document.getElementById("menu2").className = "on";
    </script>
    <!--banner-->
    <div class="inside_banner_solution">
    </div>
    <div class="solution">
      <div class="home_title">
        <img src="/iekcpt/Public/Web/images/post01.jpg" 
        width="182" height="54" alt="工作岗位" />
      </div>
      <div class="solution_list" style="clear: both;">
        <ul class="fix" style="">



        <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
            <div class="solu_img"  onclick ="showInform();" >
              <a style="cursor: pointer;" id="spnLoginText" tppabs="#">
              <div class="img_icon">

                  <img src="/iekcpt/Public/Web/images/post_icon.png" 
                  alt="查看<?php echo ($vo["postname"]); ?>详细" width="40" height="40" />

              </div>
              <img src="/iekcpt/Public/<?php echo ($vo["companylogo"]); ?>"  style="width: 370px; height: 160px;" alt="您没有上传图片！" />
              </a>
            </div>
            <h2>
              <label style="cursor: pointer;" onclick ="showInform();">
                <?php echo ($vo["postname"]); ?>
              </label>
               <span class="salary"> 
                <?php echo ($vo["postsalary"]); ?> 
              </span>
            </h2>
            <p class="intro">
              <a href="#" >
               <?php echo ($vo["postintroduce"]); ?>
              </a>
            </p>
          </li><?php endforeach; endif; else: echo "" ;endif; ?>
          <!--弹框js-->
          <div id="dvLoginBox" onMouseOver="javascript:showInform();" onMouseOut="hiddenInform(event)" >
            <span class="tanchuang1">2019-08-07发布
            </span><br>
            <span class="tanchuang2">PHP开发工程师(日照京华电商管理服务有限公司)
          </span><br>
            <span class="source3">8000-10000</span><span class="source4">元/月</span><br>
            <span class="source5">学历：本科&nbsp;&nbsp;&nbsp;&nbsp;经验：3-5年
          &nbsp;&nbsp;&nbsp;招聘人数：若干
          </span><br>
            <div class="source6"><span class="source7">岗位职责：</span><br>
              <p>1、根据用户及公司需求，负责php端的开发；<br>
                2、不断优化用户体验以及php服务端的性能；<br>
                3、负责产品系统的开发，编写、接口的开发；<br>
                4、配合产品设计、ui、ue设计师完成产品的调试开发；<br>
                5、维护相关系统、保证系统运行的稳定性；<br>
                6、配合后期IT系统建设，提出系统功能的改进建议；<br>
                7、使用php语言开发应用服务、平台及接口。</p></div>
            <div class="source6"><span class="source7">岗位要求：</span><br>
              <p>1、可以熟练使用php开发框架；<br>
                2、熟悉SQLSERVER，oracle等数据库；<br>
                3、可以编程、善于学习、可以独立完成上级下发的任务；<br>
                4、对php语言开发有足够的热情;<br>
                5、对服务器端的负载性嫩有一定理解可以进行评估优化；<br>
                6、善于沟通，有良好的沟通能力以及责任心，有团队合作精神。<br>
              </p>
            </div>
            <div class="source6"><span class="source7">工作地址：</span><br>
              <p>山东省日照市东港区学苑路与学海路交叉路口南300米日照电子商务科技园</p>
            </div>
            <span id="spnCloseButton" title="关闭" style="font-size: 20px;">X</span>
            <a href="<?php echo U('Post/applypost');?>">
              <div data-click="{&quot;click-act&quot;:&quot;vote&quot;}" class="apply-btn" data-a-840b789c="">申请岗位</div>
            </a>
          </div>


        </ul>
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