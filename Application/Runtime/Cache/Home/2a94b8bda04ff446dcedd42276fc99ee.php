<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>IE-科创平台</title>
  <meta name="Description" content="," />
  <script type="text/javascript">
      if ((navigator.userAgent.match(/(iPhone|iPod|Android|ios)/i))) {
          location.replace("#");
      }
  </script>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="author" content="C.H.L.Y团队" />
  <meta name="mobile-agent" content="format=html5;" />
  <!--[if lt IE 9]>
  <script type="text/javascript" src="/iekcpt/Public/Web/js/html5.js">
  </script>
  <![endif]-->
  <link href="/iekcpt/Public/Web/css/index2016.css" type="text/css" rel="stylesheet" />
  <link href="/iekcpt/Public/Web/css/myAlert.css" type="text/css" rel="stylesheet" />
  <script src="/iekcpt/Public/Web/js/jquery.min.js" type="text/javascript"></script>
  <script src="/iekcpt/Public/Web/js/myAlert.js" type="text/javascript"></script>
  <script src="/iekcpt/Public/Web/js/index2016.js" type="text/javascript"></script>
  <script>
      function login(){
        $.myAlert('您目前是未登录状态，请先登录！');
      }
  </script>

  <!--[if lt IE 9]>
  <script type="text/javascript" src="/iekcpt/Public/Web/js/respond.min.js">
  </script>
  <![endif]-->
</head>

<body>
<div id="section1" init="true" class="section section1">
  <header class="header">
    <div class="wrap">
      <h1 class="fl">
        <a href="#" class="fl logo">
          <img src="/iekcpt/Public/Web/images/banner/logo.png"
               alt="IE-科创平台" width="154" height="49" />
        </a>
      </h1>
      <div class="fl logo_text">
        <img src="/iekcpt/Public/Web/images/banner/logo_text.jpg"
             alt="懂你所需，做你所想" width="163" height="49" />
      </div>
      <div class="fr">
        <div class="top">
              <span class="call">
              </span>
        </div>
        <nav class="nav">
          <ul class="fix">
            <li id="menu1">
              <a href="<?php echo U('index');?>" >
                官网首页
              </a>
            </li>
            <li id="menu2"  onClick="login()">
              <a>
                寻找岗位
              </a>
            </li>
            <li id="menu3"  onClick="login()">
              <a>
                寻找项目
              </a>
            </li>
            <li id="menu4"  onClick="login()">
              <a>
                寻找融资
              </a>
            </li>
            <li id="menu5"  onClick="login()">
              <a>
                寻找人才
              </a>
            </li>
            <li id="menu6"  onClick="login()">
              <a>
                咨询导师
              </a>
            </li>
            <li id="menu7">
              <a href="<?php echo U('Login/login');?>" >
                登录
              </a>
              |
              <a href="<?php echo U('Login/login');?>" >
                注册
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
      document.getElementById("menu1").className = "on";
  </script>
  <!--banner-->
  <div class="banner">
      <ul class="pic" id="pic">
        <a onClick="login()">
              <li style="background-image:url(/iekcpt/Public/Web/images/banner/banner6.png)">
          </a>
          </li>
          <a  onClick="login()">
              <li style="background-image:url(/iekcpt/Public/Web/images/banner/banner02021.jpg)">
          </a>
          </li>
          
          <a onClick="login()">
              <li style="background-image:url(/iekcpt/Public/Web/images/banner/banner001.jpg)">

          </a>
          </li>

      </ul>
    <ul class="list" id="list_pic">
      <li class="on">
      </li>
      <li>
      </li>
      <li>
      </li>
    </ul>
  </div>
</div>
<!--main-->
<div id="section2" init="true" class="section section2">
  <div class="wrap">
    <div class="home_title">
      <!--<a href="cases/index.html" target="_blank">-->
        <img src="/iekcpt/Public/Web/images/banner/t_case.jpg" width="262" height="78" alt="寻找项目" onClick="login()"/>
      <!--</a>-->
    </div>
    <div class="service_text">
      创新的想法与项目
    </div>
    <div class="serve_column">
      <ul class="fix">
        <li class="c1">
          <dl>
            <dt class="pic">
              <a target="_blank">
                <img src="/iekcpt/Public/Web/images/ie.jpg" onClick="login()"alt="远海养殖新材料智能船" width="270" height="200" />
              </a>
            </dt>
            <dt class="t">
              <a onClick="login()" style="cursor: pointer;">
                 远海养殖新材料智能船
              </a>
            </dt>
            <dd onClick="login()">
                            
                           该远海养殖新材料智能船专门针对南海恶劣海况
                        </dd>
                        <dd>
                           
                            设计，常规海况下半潜养殖，可抵御12级台风，
                        </dd>
                        <dd>
                           
                             与此同时，近海养殖带来越来越大的环境压力也
                        </dd>
                        <dd>
                            
                             对先进智能装备和走向深远洋提出了要求....
                        </dd>
          </dl>
        </li>
        <li class="c2">
          <dl>
            <dt class="pic">
              <img src="/iekcpt/Public/Web/images/znlj.jpg" alt=" V型智能输送式自卸车" width="270" height="200" onClick="login()" />
              </a>
            </dt>
             <dt class="t">
                            <a style="cursor: pointer;">
                               V型智能输送式自卸车
                            </a>
                        </dt>
                        <dd>
                            
                         该车集普通后翻自卸车卸货快、侧翻自卸车装货
                        </dd>
                        <dd>
                            
                           多等优点于一体，既避免了后翻自卸车容易翻车、
                        </dd>
                        <dd>
                           
                           侧翻自卸车货物埋轮胎、边挡板易变形等缺点，又
                        </dd>
                        <dd>
                            
                          兼备安全系数高、工艺先进、自重轻、自动化程...
          </dl>
        </li>
        <li class="c3">
          <dl>
            <dt class="pic">
              <a>
                <img src="/iekcpt/Public/Web/images/dblx.jpg" alt="胆石病智能诊断平台" width="270" height="200" onClick="login()"/>
              </a>
            </dt>
            <dt class="t">
                            <a  style="cursor: pointer;">
                                胆石病智能诊断平台
                            </a>
                        </dt>
                        <dd>
                         
                             胆石病智能诊疗APP借助AI来辅助医生治疗，
                        </dd>
                        <dd>
                           
                             AI算法可报告结石位置、大小、密度等信息，
                        </dd>
                        <dd>
                           
                             准确率达94.5%，远远高于常值。APP的核心
                        </dd>
                        <dd>
                            
                            技术构架如下：首先，患者的原始医疗...
                        </dd>
          </dl>
        </li>
        <li class="c4">
          <dl>
            <dt class="pic">
              <a>
                <img src="/iekcpt/Public/Web/images/hyhyz.jpg" alt="海洋环游者”环形智能ROV" width="270" height="200" onClick="login()" />
              </a>
            </dt>
             </dt>
                        <dt class="t">
                            <a style="cursor: pointer;">
                                “海洋环游者”环形智能ROV
                            </a>
                        </dt>
                        <dd>
                           
                             ROV，即遥控无人潜水器(Remote Operated Vehicle)
                        </dd>
                        <dd>
                           Vehicle)，可分为作业级ROV和观察级ROV。作业级
                        </dd>
                        <dd>
                           
                            用于水下打捞、水下施工等应用。观察级ROV主要用
                        </dd>
                        <dd>
                         
                            于潜水娱乐、环境监测等领域，尺寸和重量较小...
                        </dd>
          </dl>
        </li>
      </ul>
      <div class="c">
      </div>
    </div>
  </div>
  <div class="service_foot">
    通过对现实存在事物的理解认知，衍生出的一种新的抽象思维项目。
  </div>
</div>
<!--post-->
<div id="section3" init="false" class="section section3">
  <div class="succeed">
    <div class="succeed_title">
      <a>
        <img src="/iekcpt/Public/Web/images/banner/t_post.jpg"
             alt="工作岗位" width="296" height="74" onClick="login()"/>
      </a>
    </div>
    <div class="success_text">
      我们做任何工作，成败的关键不在于客观因素，而在于我们工作的态度。
      <br />
    </div>
  </div>
  <ul class="portfolio-grid fix">
    <!-- Thumbnail -->
    <li class="thumbnail" style="display:block;opacity:1;">
      <a class="thumbnail_a" onClick="login()"  >
        <img src="/iekcpt/Public/Web/images/php.jpg"  class="cases_img"  alt="PHP开发工程师 "  />
        <div class="projectinfo" style="display: none;">
        </div>
      </a>
      <div class="meta">
        <h4 class="fl">
          <a style="cursor: pointer;" onClick="login()"  >
            PHP开发工程师
          </a>
        </h4>
        <div class="c">
        </div>
      </div>
    </li>
    <li class="thumbnail" style="display:block;opacity:1;">
      <a class="thumbnail_a" onClick="login()">
        <img src="/iekcpt/Public/Web/images/java.jpg" onClick="login()" class="cases_img" alt="Java工程师" />
        <div class="projectinfo" style="display: none;">
        </div>
      </a>
      <div class="meta">
        <h4 class="fl">
          <a style="cursor: pointer;"  onClick="login()">
            Java工程师
          </a>
        </h4>
        <div class="c">
        </div>
      </div>
    </li>
    <li class="thumbnail" style="display:block;opacity:1;">
      <a class="thumbnail_a" onClick="login()" >
        <img src="/iekcpt/Public/Web/images/rjyf.jpg" onClick="login()" class="cases_img" alt="软件研发管理" />
        <div class="projectinfo" style="display: none;">
        </div>
      </a>
      <div class="meta">
        <h4 class="fl">
          <a style="cursor: pointer;" onClick="login()">
            软件研发管理
          </a>
        </h4>
        <div class="c">
        </div>
      </div>
    </li>
    <li class="thumbnail" style="display:block;opacity:1;">
      <a class="thumbnail_a" onClick="login()">
        <img src="/iekcpt/Public/Web/images/it.jpg" onClick="login()" class="cases_img" alt="IT技术总监" />
        <div class="projectinfo" style="display: none;">
        </div>
      </a>
      <div class="meta">
        <h4 class="fl">
          <a style="cursor: pointer;" onClick="login()">
            IT技术总监
          </a>
        </h4>
        <div class="c">
        </div>
      </div>
    </li>
    <li class="thumbnail" style="display:block;opacity:1;">
      <a class="thumbnail_a" onClick="login()">
        <img src="/iekcpt/Public/Web/images/ios.jpg" onClick="login()"  class="cases_img" alt="IOS开发工程师" />
        <div class="projectinfo" style="display: none;">
        </div>
      </a>
      <div class="meta">
        <h4 class="fl">
          <a style="cursor: pointer;" onClick="login()">
            IOS开发工程师
          </a>
        </h4>
        <div class="c">
        </div>
      </div>
    </li>
    <li class="thumbnail" style="display:block;opacity:1;">
      <a class="thumbnail_a" onClick="login()">
        <img src="/iekcpt/Public/Web/images/vue.jpg" onClick="login()" class="cases_img" alt="VUE前端开发" />
        <div class="projectinfo" style="display: none;">
        </div>
      </a>
      <div class="meta">
        <h4 class="fl">
          <a style="cursor: pointer;" onClick="login()">
            VUE前端开发
          </a>
        </h4>
        <div class="c">
        </div>
      </div>
    </li>
    <li class="thumbnail" style="display:block;opacity:1;">
      <a class="thumbnail_a" onClick="login()">
        <img src="/iekcpt/Public/Web/images/android.jpg"  onClick="login()" class="cases_img" alt="Android开发工程师" />
        <div class="projectinfo" style="display: none;">
        </div>
      </a>
      <div class="meta">
        <h4 class="fl">
          <a style="cursor: pointer;" onClick="login()">
            Android开发工程师
          </a>
        </h4>
        <div class="c">
        </div>
      </div>
    </li>
    <li class="thumbnail" style="display:block;opacity:1;">
      <a class="thumbnail_a" onClick="login()">
        <img src="/iekcpt/Public/Web/images/dpj.jpg" onClick="login()" class="cases_img" alt="单片机工程师" />
        <div class="projectinfo" style="display: none;">
        </div>
      </a>
      <div class="meta">
        <h4 class="fl">
          <a style="cursor: pointer;" onClick="login()">
            单片机工程师
          </a>
        </h4>
        <div class="c">
        </div>
      </div>
    </li>
  </ul>
  <div class="btn_cases_more">
    <a href="#"  title="工作岗位" class="btn" onClick="login()">
      查看更多
    </a>
  </div>
</div>
<!--teacher-->
<div id="section4" init="false" class="section section4">
    <div class="home_news">
        <div class="home_news_title">
            <a onClick="login()"   target="_blank">
                <img src="/iekcpt/Public/Web/images/banner/t_teacher.jpg" onClick="login()" alt="优秀课程" width="310" height="71" />
            </a>
        </div>
        <div class="home_news_text">
            提供丰富的学习资料，专业教师在线指导，需要的我们都有
        </div>
        <div class="home_news_list">
            <div class="wrap">
                <div class="home_news_list_inner">
                    <div class="home_news_item" style="background-image: url(/iekcpt/Public/Web/images/gonxue.jpg);">
                        <dl>
                            <dt>
                                2019-07-26
                            </dt>
                            <dd class="t" style="margin:20px 0;width:334px;height:46px;line-height:70px;overflow:hidden;">
                                <label  target="_blank" style="font-size: 20px; font-weight: bolder;color: #04B78A;">
                                    工学
                                </label>
                            </dd>
                            <dd class="spec">
                                <label style="font-weight: bold;font-size: 13px; color: #0bbda5;">
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;工学全称工程学科,包含仪器仪表、能源动力、电气信息、交通运输、海洋工程、轻工纺织、航空航天、力学、生物工程、农业工程、林业工程、公安技术、植物生产、地矿、材料、机械、食品、武器、土建、水利、测绘、环境与安全、化工与制药等专业。
                                </label>
                            </dd>
                        </dl>
                    </div>
                    <div class="home_news_item" style="background-image: url(/iekcpt/Public/Web/images/lixue.jpg);">
                        <dl>
                            <dt>
                                2019-09-15
                            </dt>
                            <dd class="t" style="margin:20px 0;width:334px;height:46px;line-height:70px;overflow:hidden;">
                                <label target="_blank" style="font-size: 20px; font-weight: bolder;color: #04B78A;">
                                    理学
                                </label>
                            </dd>
                            <dd class="spec">
                                <label style="color: #0bbda5;">
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;理学，是中国大学教育中重要的一支学科，是指研究自然物质运动基本规律的科学。理学研究的内容广泛，本科专业通常有：数学与应用数学、信息与计算科学、统计学、物理学、应用物理学、材料物理、光学、化学、应用化学、材料化学、环境科学、天文学、地质学、地球...
                                </label>
                            </dd>
                        </dl>
                    </div>
                    <div class="home_news_item" style="background-image: url(/iekcpt/Public/Web/images/yixue.jpg);">
                        <dl>
                            <dt>
                                2019-8-25
                            </dt>
                            <dd class="t"style="margin:20px 0;width:334px;height:46px;line-height:70px;overflow:hidden;">
                                <label target="_blank" style="font-size: 20px; font-weight: bolder;color: #04B78A;">
                                    医学
                                </label>
                            </dd>
                            <dd class="spec">
                                <label style="color: #0bbda5;">医学，是通过科学或技术的手段处理生命的各种疾病或病变的一种学科，促进病患恢复健康的一种专业。它是生物学的应用学科，分基础医学、临床医学。从生理解剖、分子遗传、生化物理等层面来处理人体疾病的高级科学。
                                    医学，是通过科学或技术的手段处理生命的各种疾病或病变的一种学科，促进病患恢复健康的一种专业。它是生物学的应用学科，分基础医学、临床医学。从生理解剖、分子遗传、生化物理等层面来处理人体疾病的高级科学。
                                </label>
                            </dd>
                        </dl>
                    </div>
                    <div class="c">
                    </div>
                    <div class="home_news_item" style="background-image: url(/iekcpt/Public/Web/images/jiaoyuxue.jpg);">
                        <dl>
                            <dt>
                                2019-08-24
                            </dt>
                            <dd class="t"style="margin:20px 0;width:334px;height:46px;line-height:70px;overflow:hidden;">
                                <label target="_blank" style="font-size: 20px; font-weight: bolder;color: #04B78A;">
                                    教育学
                                </label>
                            </dd>
                            <dd class="spec">
                                <label style="color: #0bbda5;">教育学是一门研究人类的教育活动及其规律的社会科学。它广泛存在于人类生活中。通过对教育现象、教育问题的研究来揭示教育的一般规律。
                                </label>
                            </dd>
                        </dl>
                    </div>
                    <div class="home_news_item" style="background-image: url(/iekcpt/Public/Web/images/jingjixue.jpg);">
                        <dl>
                            <dt>
                                2019-03-23
                            </dt>
                            <dd class="t" style="margin:20px 0;width:334px;height:46px;line-height:70px;overflow:hidden;">
                                <label target="_blank" style="font-size: 20px; font-weight: bolder;color: #04B78A;">
                                    经济学
                                </label>
                            </dd>
                            <dd class="spec">
                                <label style="color: #0bbda5;" >经济学是研究人类经济活动的规律即价值的创造、转化、实现的规律——经济发展规律的理论，分为政治经济学与科学经济学两大类型
                                </label>
                            </dd>
                        </dl>
                    </div>
                    <div class="home_news_item" style="background-image: url(/iekcpt/Public/Web/images/nongxue.jpg);">
                        <dl>
                            <dt>
                                2019-03-22
                            </dt>
                            <dd class="t"  style="margin:20px 0;width:334px;height:46px;line-height:70px;overflow:hidden;">
                                <label target="_blank" style="font-size: 20px; font-weight: bolder;color: #04B78A;">
                                    农学
                                </label>
                            </dd>
                            <dd class="spec">
                                <label style="color: #0bbda5;">农学是农业科学领域的传统学科， 以解决人类的“吃饭穿衣”为首要己任。随着农业科技创新速度的不断加快，
                                    生物技术和信息技术的飞速发展及其在农业中的广泛应用，农学在保持传统特色的基础上，正焕发着勃勃生机。
                                </label>
                            </dd>
                        </dl>
                    </div>
                    <div class="c">
                    </div>
                </div>
                <div class="btn_news_more">
                    <a href="#" onClick="login()"
                       class="btn">
                        查看更多
                    </a>
                </div>
            </div>
        </div>
        <!--end-->


        <!--main-->



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
  </div>
</footer>
</div>
<div class="right" id="fp-nav">
  <ul>
    <li>
      <a class="active" index="0">
            <span>
            </span>
      </a>
    </li>
    <li>
      <a index="1">
            <span>
            </span>
      </a>
    </li>
    <li>
      <a index="2">
            <span>
            </span>
      </a>
    </li>
    <li>
      <a index="3">
            <span>
            </span>
      </a>
    </li>
  </ul>
</div>
<script>
  (function() {
	$.extend({
		myAlert: function(options) {
			var option={title:"提示",message:"程序员太傻，忘记输入提示内容啦……",callback:function(){}}
			if(typeof(options)=="string"){
				option.message=options
			}else{
				option=$.extend(option,options);
			}
			var top=$(window).height()*0.3;
			$('body').append('<div class="myModa"><div class="myAlertBox"  style="margin-top:'+top+'px"><h6>'+option.title+'</h6><p>'+option.message+'</p><div class="btn sure">确定</div></div></div>');
			$('.btn.sure').click(function(){
				$('.myModa').remove();
				option.callback();
			})
		}
	});
})(jQuery)
</script>
</body>
</html>