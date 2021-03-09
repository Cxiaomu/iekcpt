<?php if (!defined('THINK_PATH')) exit();?><!--发布岗位的html -->
<!DOCTYPE html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="keywords" content="C.H.L.Y团队" />
    <meta name="mobile-agent" content="format=html5;"/>
  <link rel="stylesheet" href="/IEkcpt3.0/IEkcpt3.0/Application/Home/View/personal/web/bootstrap.min-1.0.0.css" />
  <link rel="stylesheet" href="/IEkcpt3.0/IEkcpt3.0/Application/Home/View/personal/web/modal-1.0.0.css" />
  <title>编辑岗位</title>
  <script type="text/javascript">
      if ((navigator.userAgent.match(/(iPhone|iPod|Android|ios)/i))) {
        location.replace("#");
      }
    </script>
    <!--[if lt IE 9]>
      <script type="text/javascript" src="/IEkcpt3.0/IEkcpt3.0/Public/Web/js/html5.js" tppabs="Public/Web/js/html5.js">
      </script>
    <![endif]-->
    <style>
        .protype li{  list-style: none;
            display: inline-block;
            border: 1px solid #dcdcdc;
            padding: 0 20px;
            height: 40px;
            line-height: 38px;
            color: #333;
            font-size: 14px;
            margin-right: 17px;
            margin-bottom: 10px;
            cursor: pointer;
            position: relative;}
        .protype li:visited{color: blue;}
    </style>
</head>
<link rel="stylesheet" href="/IEkcpt3.0/IEkcpt3.0/Application/Home/View/personal/web/iconfont-1.0.0.css" />
<link rel="stylesheet" href="/IEkcpt3.0/IEkcpt3.0/Application/Home/View/personal/web/new-edit-project.css" />
<link href="/IEkcpt3.0/IEkcpt3.0/Public/Web/css/style.css" type="text/css" rel="stylesheet" />

<script src="/IEkcpt3.0/IEkcpt3.0/Public/Web/js/base.js" type="text/javascript">
    </script>
    <!--[if lt IE 9]>
      <script type="text/javascript" src="/IEkcpt3.0/IEkcpt3.0/Public/Web/js/respond.min.js" tppabs="Public/Web/js/respond.min.js">
      </script>
    <![endif]-->
<div>
<div style=" min-width:1264px;">
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

      //项目名称js
      function testyh(){
          var user = document.getElementById("user").value;
          if(user.length == 0)
          {
              document.getElementById("errorhy").innerHTML="请输入岗位名称";
              document.getElementById("user").style.border = "1px solid red";
              return false;
          }else{
              document.getElementById("errorhy").innerHTML="";
              document.getElementById("user").style.border = "1px solid #EEEEEE";
          }


      }

      //检验项目是否被选择
      function chooseproject(){
          var protype1 = document.getElementById("protype1");
          var protype2 = document.getElementById("protype2");
          var protype3 = document.getElementById("protype3");
          var protype4 = document.getElementById("protype4");
          var protype5 = document.getElementById("protype5");
          var protype6 = document.getElementById("protype6");
          var protype7 = document.getElementById("protype7");
          var protype8 = document.getElementById("protype8");
          var protype9 = document.getElementById("protype9");
          var protype10 = document.getElementById("protype10");
          var protype11 = document.getElementById("protype11");
          var protype12 = document.getElementById("protype12");
          var protype13 = document.getElementById("protype13");
          var protype14 = document.getElementById("protype14");
          if(protype1.checked!=true && protype2.checked!=true  && protype3.checked!=true
              && protype4.checked!=true && protype5.checked!=true  && protype6.checked!=true
              && protype7.checked!=true && protype8.checked!=true && protype9.checked!=true
              && protype10.checked!=true && protype11.checked!=true && protype12.checked!=true
              && protype13.checked!=true && protype14.checked!=true)
          {
              document.getElementById("errorpro").innerHTML="请选择您的岗位类型";
              return false;

          }

          else{
              document.getElementById("errorsex").innerHTML="";
          }
      }

      function promiaoshu(){
          var user = document.getElementById("requires").value;
          if(user.length == 0)
          {
              document.getElementById("errorpromiaoshu").innerHTML="请输入岗位概述！";
              document.getElementById("user").style.border = "1px solid red";
              return false;
          }else{
              document.getElementById("errorpromiaoshu").innerHTML="";
              document.getElementById("user").style.border = "1px solid #EEEEEE";
          }
      }
      //电话验证
      function otheryz(){
          var user = document.getElementById("check").value;
          if(user.length == 0)
          {
              document.getElementById("error").innerHTML="请输入联系电话！";
              document.getElementById("user").style.border = "1px solid red";
              return false;
          }else{
              document.getElementById("error").innerHTML="";
              document.getElementById("user").style.border = "1px solid #EEEEEE";
          }
      }

      //图片验证
      /*function prophotos(){
          var user = document.getElementById("protupian").value;
          if(user.length == 0)
          {
              document.getElementById("errorprotupian").innerHTML="请选择公司LOGO！";
              
              return false;
          }else{
              document.getElementById("errorprotupian").innerHTML="";
              
          }
      }*/

    </script>
    <!--主体内容-->
    <div class="container">
        <form class="form-horizontal form-project" id="mainForm" onsubmit="return testyh(), chooseproject(),promiaoshu(),otheryz(),prophotos()"  action="<?php echo U('Post/publishpost');?>" method="post" enctype="multipart/form-data">
            <a href="#topError" class="hidden">aa</a>
            <div class="project-block">
                <div>
                    <h2 class="h2-title">岗位基本信息</h2>
                    <div class="form-group file-box">
                        <div class="group-title">
                            <span class="star">*</span>
                            <span class="title">公司LOGO</span>
                        </div>
                    <div class="group-content">
                            
                            <input type='file' id="protupian" onblur="prophotos()" name='companylogo' ></a><br>
                            <p class="upload-tip">
                                格式为jpg、png，文件数量限一个。<span id="ieTip" class="hidden">（IE10浏览器请双击选择文件。）</span></p>
                            <div id="errorprotupian" style="color:#f00; display:inline;"></div><br>
                           
                        </div>
                    </div>
                    <div class="form-group">

                        <div class="group-title">
                            <span class="star">*</span>
                            <span class="title">岗位名称</span>
                        </div>
                        <div class="group-content">
                            <input  id="user" onblur="testyh()" type="text" class="form-control color-readonly" maxlength="50" name="postname" value="php工程师" placeholder="请输入待发布的岗位名称"  />
                            <div id="errorhy" style="color:#F00; display:inline;"></div><br>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="group-title">
                            <span class="star">*</span>
                            <span class="title">岗位所属领域</span>
                        </div >
                       <div>
                            <!--<ul class="select-blocks">-->
                           <ul class="protype"  >
                               <li><p><input id="protype1" type="checkbox" name="posttype[]" value="软件开发"><label>软件开发</label></p></li>
                               <li><p><input  id="protype2" type="checkbox" name="posttype[]" value="计算机网络"><label>计算机网络</label></p></li>
                               <li> <p><input id="protype3" type="checkbox" name="posttype[]" value="计算机应用"><label>计算机应用</label></p></li>
                               <li><p><input id="protype4" type="checkbox" name="posttype[]" value="软件测试 "><label>软件测试</label></p></li>
                               <li> <p><input  id="protype5"type="checkbox" name="posttype[]" value="系统架构设计 "><label>系统架构设计</label></p></li>
                               <li><p><input  id="protype6" type="checkbox" name="posttype[]" value="计算机系统维护 "><label>计算机系统维护</label></p></li>
                               <li><p><input id="protype7" type="checkbox" name="posttype[]" value=" 电子商务"><label>电子商务</label></p></li>
                               <li><p><input id="protype8" type="checkbox" name="posttype[]" value="计算机硬件 "><label>计算机硬件</label></p></li>
                               <li><input  id="protype9" type="checkbox" name="posttype[]" value="多媒体制作 "><label>多媒体制作</label></p></li>
                               <li><input id="protype10" type="checkbox" name="posttype[]" value="办公自动化 "><label>办公自动化</label></p></li>
                               <li><input id="protype11" type="checkbox" name="posttype[]" value=" 动漫设计与制作"><label>动漫设计与制作</label></p></li>
                               <li><input id="protype12" type="checkbox" name="posttype[]" value=" 租赁和商务服务业"><label>租赁和商务服务业</label></p></li>
                               <li><input  id="protype13" type="checkbox" name="posttype[]" value=" 教育"><label>教育</label></p></li>
                               <li><input id="protype14" type="checkbox" name="posttype[]" value=" 水利、环境和公共设施管理"><label>水利、环境和公共设施管理</label></p></li>
                            </ul>
                        </div>
                        <div id="errorpro" style="color:#f00; display:inline;"></div><br>

                        </div>
                        <small class="help-block hidden" id="indusErr">请选择岗位所属领域</small>
                </div>
                <h2 class="h2-title">岗位介绍</h2>
                    <div class="form-group textarea-group">
                        <div class="group-title">
                            <span class="star">*</span>
                            <span class="title">岗位概述</span>
                        </div>

                        <textarea style=" border:1px solid #6CABE7;width: 700px;height: 250px;" name="postintroduce" id="requires" onblur="promiaoshu()" placeholder="可拆分为产品描述、用户群体、项目愿景、竞争对手等方面详细描述，不少于100字，但不超过500字。
项目功能
1.设计开专门的大学生创新创业平台，仅仅针对大学生，为提出的有创意的项目提供全面的服务；
2.实现学生、导师、企业三方交互，企业、导师可以在个人中心进行优秀课程推荐、岗位推荐给学生、对学生项目进行资助，查看学生资质能力；
3.导师可以对学生进行项目指导，企业能够通过平台招聘学生，学生创建项目，自行组队，接受资助，应聘岗位。
4.个人资料编辑时运用GPS定位，证书上传，录入信息选择标签，查询导师、企业、学生、项目时使用标签分类查询。">PHP技术人才，正迎合了目前的互联网的发展趋势；PHP作为非常优秀的、简便的Web开发语言，和Linux，Apache，MySQL紧密结合，形成LAMP的开源黄金组合，不仅降低使用成本，还提升了开发速度，满足最新的互动式网络开发的应用，这使得php软件工程师成为一个发展迅速的职业。
</textarea><br>
                        <div id="errorpromiaoshu" style="color:#f00; display:inline; margin-left: 160px;"></div><br>
                    </div>
                <h2 class="h2-title">招聘信息</h2>
                <div>
                    <div class="form-group" style="padding-bottom:20px;">
                    <!--    <div class="group-title">
                            <span class="star">*</span>
                            <span class="title">需要融资</span>
                        </div>-->
                    <!--    <div class="group-content redios-box">
                            <div class="clearfix radio-box">
                                <div class="radio pull-left">
                                    <label> <input type="radio" name="progress" value="0" id="progress1" checked="checked">是
                                    </label>
                                </div>
                                <div class="radio pull-left">
                                    <label> <input type="radio" name="progress" value="1" id="progress2">否
                                    </label>
                                </div>
                            </div>
                        </div>-->
                    </div>
                    <div id="company" class='sub-contents'>
                      <div class="form-group com-only" style="position:relative;">
                        <div class="group-title">
                          <span class="star">*</span>
                          <span class="title">公司名称</span>
                        </div>
                        <div class="group-content">
                          <input type="text" class="form-control" maxlength="10" name="companyname" placeholder="请输入公司名称" style="padding-right:30px;" id="registerCapital" value="鸿运科技" />
                         <!--  <p class="addon" style="left: 596px;">天</p> -->
                          <br>
                        </div>

                          <div class="group-title" >
                              <span class="star">*</span>
                              <span class="title">月薪</span>
                          </div>
                          <select  class="form-control" maxlength="10" style="width:500px; height:40px;" size="1" name="postsalary" >
                              <option value="可议价">可议价</option>
                              <option selected="" value="月薪1K-5K">1K-5K</option>
                              <option value="月薪5K-10K">5K-10K</option>
                              <option value="月薪10K-50K">10K-50K</option>
                              <option value="月薪50K-100K">50K-100K</option>
                              <option value="月薪100K-500K">100K-500K</option>
                              <option value="月薪500K以上">500K以上</option>
                          </select><br>
                          <div class="group-title">
                              <span class="star">*</span>
                              <span class="title">联系电话</span>
                          </div>
                          <div class="group-content">
                              <input type="text" class="form-control" maxlength="10" id="check" onblur="otheryz()" name="posttelephone" placeholder="请输入您的电话 " style="padding-right:30px;" value="15286662395" />
                              <div id="error" style="color:#f00; display:inline;"></div>
                          </div>
                      </div>
                      <div class="form-group com-only">
                        <div class="group-title">
                          <span class="star">*</span>
                          <span class="title">是否接受加班</span>
                        </div>
                        <div class="group-content">
                          <div class="clearfix radio-box">
                            <div class="radio pull-left" id='wasIncested'>
                              <label>
                                <input type="radio" name="isjiaban" value="是">是
                              </label>
                            </div>
                            <div class="radio pull-left" id='wasNotIncested'>
                              <label>
                                <input type="radio" name="isjiaban" value="否" checked="checked">否
                              </label>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                <div>
                   
                </div>
                </div>
                <div class="form-group text-center">
                    <input type="submit" id="subForm" class="btn btn-primary subform-inline" value="保存">
                    <input type="reset" id="cancelForm" class="btn btn-default subform-inline" value="取消">
                </div>
            </div>
        </form>
    </div>
    </div>
</div>
  <footer class="footer" style="min-width:1264px;">
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