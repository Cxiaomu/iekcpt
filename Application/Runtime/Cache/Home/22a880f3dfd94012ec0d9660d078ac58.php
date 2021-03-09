<?php if (!defined('THINK_PATH')) exit();?><!-- 发布项目的html -->
<!DOCTYPE html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="keywords" content="C.H.L.Y团队" />
    <meta name="mobile-agent" content="format=html5;"/>
  <link rel="stylesheet" href="/iekcpt/Application/Home/View/personal/web/bootstrap.min-1.0.0.css" />
  <link rel="stylesheet" href="/iekcpt/Application/Home/View/personal/web/modal-1.0.0.css" />
  <title>编辑项目</title>
  <script type="text/javascript">
      if ((navigator.userAgent.match(/(iPhone|iPod|Android|ios)/i))) {
        location.replace("#");
      }
    </script>
    <!--[if lt IE 9]>
      <script type="text/javascript" src="/iekcpt/Public/Web/js/html5.js" tppabs="Public/Web/js/html5.js">
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
<link rel="stylesheet" href="/iekcpt/Application/Home/View/personal/web/iconfont-1.0.0.css" />
<link rel="stylesheet" href="/iekcpt/Application/Home/View/personal/web/new-edit-project.css" />
<link href="/iekcpt/Public/Web/css/style.css" type="text/css" rel="stylesheet" />

<script src="/iekcpt/Public/Web/js/base.js" type="text/javascript">
    </script>
    <!--[if lt IE 9]>
      <script type="text/javascript" src="/iekcpt/Public/Web/js/respond.min.js" tppabs="Public/Web/js/respond.min.js">
      </script>
    <![endif]-->
<div>
<div style=" min-width:1264px;">
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

        //项目名称js
        function testyh(){
            var user = document.getElementById("user").value;
            if(user.length == 0)
            {
                document.getElementById("errorhy").innerHTML="请输入项目名称";
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
            if(protype1.checked!=true || protype2.checked!=true  || protype3.checked!=true
                || protype4.checked!=true || protype5.checked!=true  || protype6.checked!=true
                || protype7.checked!=true || protype8.checked!=true || protype9.checked!=true
                || protype10.checked!=true || protype11.checked!=true || protype12.checked!=true
                || protype13.checked!=true || protype14.checked!=true)
            {
                document.getElementById("errorpro").innerHTML="请选择您的项目类型";
                return false;

            }

            else{
                document.getElementById("errorpro").innerHTML="";
            }
        }

        function promiaoshu(){
            var user = document.getElementById("requires").value;
            if(user.length == 0)
            {
                document.getElementById("errorpromiaoshu").innerHTML="请输入改信息！";
                document.getElementById("requires").style.border = "1px solid red";
                return false;
            }else{
                document.getElementById("errorpromiaoshu").innerHTML="";
                document.getElementById("requires").style.border = "1px solid #EEEEEE";
            }
        }
        //电话验证
        function otheryz(){
            var user = document.getElementById("check").value;
            if(user.length == 0)
            {
                document.getElementById("error").innerHTML="请输入联系电话！";
                document.getElementById("check").style.border = "1px solid red";
                return false;
            }else{
                document.getElementById("error").innerHTML="";
                document.getElementById("check").style.border = "1px solid #EEEEEE";
            }
        }

        //图片验证
       /* function prophotos(){
            var user = document.getElementById("protupian").value;
            if(user.length == 0)
            {
                document.getElementById("errorprotupian").innerHTML="请选择项目LOGO！";
                // document.getElementById("protupian").style.border = "1px solid red";
                return false;
            }else{
                document.getElementById("errorprotupian").innerHTML="";
                document.getElementById("protupian").style.border = "1px solid #EEEEEE";
            }
        }*/

    </script>
	<!--主体内容-->
	<div class="container">
		<form class="form-horizontal form-project" id="mainForm" onsubmit="return testyh(), chooseproject(),promiaoshu(),otheryz(),prophotos()"  action="<?php echo U('Personal/publishproject');?>" method="post" enctype="multipart/form-data">
			<a href="#topError" class="hidden">aa</a>
			<div class="project-block">
				<div>
					<h2 class="h2-title">基本信息</h2>
                    <!-- 项目logo-->
                    <div class="form-group file-box">
                        <div class="group-title">
                            <span class="star">*</span>
                            <span class="title">项目LOGO</span>
                        </div>
                        <div class="group-content">
                        
                                <input type='file' id="protupian" onblur="prophotos()" name='prologo' ><br>
                            <p class="upload-tip">
                                格式为jpg、png，文件数量限一个。<span id="ieTip" class="hidden">（IE10浏览器请双击选择文件。）</span>
                            </p>
                            <div id="errorprotupian" style="color:#f00; display:inline;"></div><br>
                        </div>
                    </div>

					<div class="form-group">
						<div class="group-title">
							<span class="star">*</span>
							<span class="title">项目名称</span>
						</div>
						<div class="group-content">
							<input  id="user" onblur="testyh()" type="text" class="form-control color-readonly" maxlength="50" name='proname'  value="校园通" placeholder="请输入您的项目名称"  />
                            <div id="errorhy" style="color:#F00; display:inline;"></div><br>
                        </div>
					</div>
					<div class="form-group">
						<div class="group-title">
							<span class="star">*</span>
							<span class="title">所属领域</span>
						</div>

							<!--<ul class="select-blocks">-->
                           <ul class="protype">
                               <li><p><input id="protype1" type="checkbox" name="protype[]" value="软件开发"><label>软件开发</label></p></li>
                               <li><p><input  id="protype2" type="checkbox" name="protype[]" value="计算机网络"><label>计算机网络</label></p></li>
                               <li> <p><input id="protype3" type="checkbox" name="protype[]" value="计算机应用"><label>计算机应用</label></p></li>
                               <li><p><input id="protype4" type="checkbox" name="protype[]" value="软件测试 "><label>软件测试</label></p></li>
                               <li> <p><input  id="protype5"type="checkbox" name="protype[]" value="系统架构设计 "><label>系统架构设计</label></p></li>
                               <li><p><input  id="protype6" type="checkbox" name="protype[]" value="计算机系统维护 "><label>计算机系统维护</label></p></li>
                               <li><p><input id="protype7" type="checkbox" name="protype[]" value=" 电子商务"><label>电子商务</label></p></li>
                               <li><p><input id="protype8" type="checkbox" name="protype[]" value="计算机硬件 "><label>计算机硬件</label></p></li>
                               <li><input  id="protype9" type="checkbox" name="protype[]" value="多媒体制作 "><label>多媒体制作</label></p></li>
                               <li><input id="protype10" type="checkbox" name="protype[]" value="办公自动化 "><label>办公自动化</label></p></li>
                               <li><input id="protype11" type="checkbox" name="protype[]" value=" 动漫设计与制作"><label>动漫设计与制作</label></p></li>
                               <li><input id="protype12" type="checkbox" name="protype[]" value=" 租赁和商务服务业"><label>租赁和商务服务业</label></p></li>
                               <li><input  id="protype13" type="checkbox" name="protype[]" value=" 教育"><label>教育</label></p></li>
                               <li><input id="protype14" type="checkbox" name="protype[]" value=" 水利、环境和公共设施管理"><label>水利、环境和公共设施管理</label></p></li>
							</ul>
                        <div id="errorpro" style="color:#f00; display:inline;"></div><br>

						</div>
						<small class="help-block hidden" id="indusErr">请选择项目所属领域</small>
				</div>
				<h2 class="h2-title">项目介绍</h2>
					<div class="form-group textarea-group">
						<div class="group-title">
							<span class="star">*</span>
							<span class="title">项目概述</span>
						</div>

                        <textarea style=" border:1px solid #6CABE7;width: 700px;height: 250px;" name="requires" id="requires" onblur="promiaoshu()" placeholder="可拆分为产品描述、用户群体、项目愿景、竞争对手等方面详细描述，不少于100字，但不超过500字。
项目功能
1.设计开专门的大学生创新创业平台，仅仅针对大学生，为提出的有创意的项目提供全面的服务；
2.实现学生、导师、企业三方交互，企业、导师可以在个人中心进行优秀课程推荐、岗位推荐给学生、对学生项目进行资助，查看学生资质能力；
3.导师可以对学生进行项目指导，企业能够通过平台招聘学生，学生创建项目，自行组队，接受资助，应聘岗位。
4.个人资料编辑时运用GPS定位，证书上传，录入信息选择标签，查询导师、企业、学生、项目时使用标签分类查询。">一、新颖全面且线上线下深度融合，出行是人类活动的刚需。二、“微校通”是利用现代信息技术实现家庭与学校快捷、实时沟通的教育网络平台。是一套可以有效解决老师和家长之间沟通，帮助孩子健康成长的、集先进的计算机技术和无线通信技术于一体的信息交流系统。三、他可以让家长每天都能了解到自己孩子在学校的情况，也可以让家长随时、随地的向老师提出建议或反映孩子在家里的表现。他充分调动社会教育资源，利用现代信息技术架起学校、家庭之间实时、快捷、有效沟通的桥梁，形成社会、学校、家庭和谐共育的局面，促进学生健康成长。</textarea><br>
                        <div id="errorpromiaoshu" style="color:#f00; display:inline; margin-left: 160px;"></div><br>
                    </div>
				<h2 class="h2-title">认证信息</h2>
				<div>
					<div class="form-group" style="padding-bottom:20px;">
					<!--	<div class="group-title">
							<span class="star">*</span>
							<span class="title">需要融资</span>
						</div>-->
					<!--	<div class="group-content redios-box">
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
			              <span class="title">工期</span>
			            </div>
			            <div class="group-content">
			              <input type="text" class="form-control" maxlength="10" name="prodate" placeholder="您期望多少天完成 " value="60" style="padding-right:30px;" id="registerCapital" value="" />
			              <p class="addon" style="left: 596px;">天</p><br>
			            </div>

                          <div class="group-title" >
                              <span class="star">*</span>
                              <span class="title">预算</span>
                          </div>
                          <select  class="form-control" maxlength="10" style="width:500px; height:40px;" size="1" name="procost" >
                              <option value="可议价">可议价</option>
                              <option  value="1000-5000">1000-5000</option>
                              <option value="5000-10000">5000-10000</option>
                              <option selected="" value="10000-50000">10000-50000</option>
                              <option value="50000-100000">50000-100000</option>
                              <option value="100000-500000">100000-500000</option>
                              <option value="500000以上">500000以上</option>
                          </select><br>
                          <div class="group-title">
                              <span class="star">*</span>
                              <span class="title">联系电话</span>
                          </div>
                          <div class="group-content">
                              <input type="text" class="form-control" maxlength="11" id="check" onblur="otheryz()" value="15286662395" name="prophone" placeholder="请输入您的电话 " style="padding-right:30px;" value="" />
                              <div id="error" style="color:#f00; display:inline;"></div><br>
                          </div>
			          </div>
			          <div class="form-group com-only">
			            <div class="group-title">
			              <span class="star">*</span>
			              <span class="title">获得投资情况</span>
			            </div>
			            <div class="group-content">
			              <div class="clearfix radio-box">
			                <div class="radio pull-left" id='wasIncested'>
			                  <label>
			                    <input type="radio" name="isInvest" value="已获投资">已获投资
			                  </label>
			                </div>
			                <div class="radio pull-left" id='wasNotIncested'>
			                  <label>
			                    <input type="radio" name="isInvest" value="未获投资" checked="checked">未获投资
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