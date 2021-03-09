<?php if (!defined('THINK_PATH')) exit();?><!-- 发布项目的html -->
<!DOCTYPE html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="keywords" content="C.H.L.Y团队" />
    <meta name="mobile-agent" content="format=html5;"/>
  <link rel="stylesheet" href="/IEkcpt3.0/IEkcpt3.0/Application/Home/View/personal/web/bootstrap.min-1.0.0.css" />
  <link rel="stylesheet" href="/IEkcpt3.0/IEkcpt3.0/Application/Home/View/personal/web/modal-1.0.0.css" />
  <title>发布课程</title>
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

      //课程名称js
      function testyh(){
          var coursename = document.getElementById("coursename").value;
          if(coursename.length == 0)
          {
              document.getElementById("errorcoursename").innerHTML="请输入课程名称";
              document.getElementById("coursename").style.border = "1px solid red";
              return false;
          }else{
              document.getElementById("errorcoursename").innerHTML="";
              document.getElementById("coursename").style.border = "1px solid #EEEEEE";
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
          if(protype1.checked!=true || protype2.checked!=true || protype3.checked!=true
              || protype4.checked!=true || protype5.checked!=true  || protype6.checked!=true
              || protype7.checked!=true || protype8.checked!=true || protype9.checked!=true
              || protype10.checked!=true || protype11.checked!=true || protype12.checked!=true
              || protype13.checked!=true || protype14.checked!=true)
          {
              document.getElementById("errorpro").innerHTML="请选择您的课程类型";
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
              document.getElementById("errorpromiaoshu").innerHTML="请输入信息！";
              document.getElementById("requires").style.border = "1px solid red";
              return false;
          }else{
              document.getElementById("errorpromiaoshu").innerHTML="";
              document.getElementById("requires").style.border = "1px solid #EEEEEE";
          }
      }


      //图片验证
      function prophotos(){
          var user = document.getElementById("protupian").value;
          if(user.length == 0)
          {
              document.getElementById("errorprotupian").innerHTML="请选择课程封面！";
              // document.getElementById("protupian").style.border = "1px solid red";
              return false;
          }else{
              document.getElementById("errorprotupian").innerHTML="";
              document.getElementById("protupian").style.border = "1px solid #EEEEEE";
          }
      }

      //教师姓名验证
      function otheryz(){
          var user = document.getElementById("registerCapital").value;
          if(user.length == 0)
          {
              document.getElementById("errorjsname").innerHTML="请输入教师姓名！";
              document.getElementById("registerCapital").style.border = "1px solid red";
              return false;
          }else{
              document.getElementById("errorjsname").innerHTML="";
              document.getElementById("registerCapital").style.border = "1px solid #EEEEEE";
          }
      }


    </script>
	<!--主体内容-->
	<div class="container">
		<form class="form-horizontal form-project" id="mainForm" onsubmit="return testyh(),chooseproject(),promiaoshu(), prophotos(),otheryz()"  action="<?php echo U('Teacher/publishcourse');?>" method="post" enctype="multipart/form-data">
			<a href="#topError" class="hidden">aa</a>
			<div class="project-block">
				<div>
					<h2 class="h2-title">课程基本信息</h2>
                    <div>
                        <!-- 课程封面-->
                        <div class="form-group file-box">
                            <div class="group-title">
                                <span class="star">*</span>
                                <span class="title">课程封面</span>
                            </div>
                            <div class="group-content">
                               
                                    <input type='file' id="protupian" onblur="prophotos()" name='courselogo' ><br>
                                <p class="upload-tip">
                                    格式为jpg、png，文件数量限一个。<span id="ieTip" class="hidden">（IE10浏览器请双击选择文件。）</span>
                                </p>
                                <div id="errorprotupian" style="color:#f00; display:inline;"></div><br>
                            </div>
                        </div>
                    </div>

					<div class="form-group">
						<div class="group-title">
							<span class="star">*</span>
							<span class="title">课程名称</span>
						</div>
						<div class="group-content">
							<input  onblur="testyh()" type="text" class="form-control color-readonly" maxlength="50" id="coursename" name='coursename' value="多媒体技术" placeholder="请输入您的课程名称"  />
                            <div id="errorcoursename" style="color:#F00; display:inline;"></div><br>
                        </div>
					</div>
					<div class="form-group">
						<div class="group-title">
							<span class="star">*</span>
							<span class="title">所属领域</span>
						</div>

							<!--<ul class="select-blocks">-->
                           <ul class="protype"  >
                               <li><p><input id="protype1" type="checkbox" name="coursetype[]" value="工学"><label>工学</label></p></li>
                               <li> <p><input id="protype2" type="checkbox" name="coursetype[]" value="理学"><label>理学</label></p></li>
                               <li><p><input id="protype3" type="checkbox" name="coursetype[]" value="医学"><label>医学</label></p></li>
                               <li> <p><input  id="protype4"type="checkbox" name="coursetype[]" value="教育学"><label>教育学</label></p></li>
                               <li><p><input  id="protype5" type="checkbox" name="coursetype[]" value="经济学"><label>经济学</label></p></li>
                               <li><p><input id="protype6" type="checkbox" name="coursetype[]" value="农学"><label>农学</label></p></li>
                               <li><input id="protype7" type="checkbox" name="coursetype[]" value="管理学"><label>管理学</label></p></li>
                               <li><input id="protype8" type="checkbox" name="coursetype[]" value="文学"><label>文学</label></p></li>
                               <li><input id="protype9" type="checkbox" name="coursetype[]" value=" 艺术学"><label>艺术学</label></p></li>
                               <li><input id="protype10" type="checkbox" name="coursetype[]" value=" 历史学"><label>历史学</label></p></li>
                               <li><input id="protype11" type="checkbox" name="coursetype[]" value="哲学"><label>哲学</label></p></li>
                               <li><input id="protype12" type="checkbox" name="coursetype[]" value="法学"><label>法学</label></p></li>
							             </ul>
                        <div id="errorpro" style="color:#f00; display:inline;"></div><br>

						</div>
						<small class="help-block hidden" id="indusErr">请选择课程所属领域</small>
				</div>
				<h2 class="h2-title">课程介绍</h2>
					<div class="form-group textarea-group">
						<div class="group-title">
							<span class="star">*</span>
							<span class="title">课程概述</span>
						</div>

                        <textarea style=" border:1px solid #6CABE7;width: 700px;height: 250px;" name="courseintroduce" id="requires" onblur="promiaoshu()" placeholder="可拆分为产品描述、用户群体、项目愿景、竞争对手等方面详细描述，不少于100字，但不超过500字。
项目功能
1.设计开专门的大学生创新创业平台，仅仅针对大学生，为提出的有创意的项目提供全面的服务；
2.实现学生、导师、企业三方交互，企业、导师可以在个人中心进行优秀课程推荐、岗位推荐给学生、对学生项目进行资助，查看学生资质能力；
3.导师可以对学生进行项目指导，企业能够通过平台招聘学生，学生创建项目，自行组队，接受资助，应聘岗位。
4.个人资料编辑时运用GPS定位，证书上传，录入信息选择标签，查询导师、企业、学生、项目时使用标签分类查询。">多媒体技术是指通过计算机对文字、数据、图形、图像、动画、声音等多种媒体信息进行综合处理和管理，使用户可以通过多种感官与计算机进行实时信息交互的技术，又称为计算机多媒体技术。</textarea><br>
                        <div id="errorpromiaoshu" style="color:#f00; display:inline; margin-left: 160px;"></div><br>
                    </div>
				<h2 class="h2-title">教师信息</h2>
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
			              <span class="title">主讲老师</span>
			            </div>
			            <div class="group-content">
			              <input type="text" class="form-control" onblur="otheryz()" name="teachername" placeholder="教师姓名" style="padding-right:30px;" id="registerCapital" value="李四" />
			            <br>
                            <div id="errorjsname" style="color:#F00; display:inline;"></div><br>
			            </div>
                  <div class="group-title">
                    <span class="star">*</span>
                    <span class="title">教师电话</span>
                  </div>
                  <div class="group-content">
                    <input type="text" class="form-control" onblur="otheryz()" name="tel" placeholder="教师电话" style="padding-right:30px;" id="registerCapital" value="15286662395" />
                  <br>
                            <div id="errorjsname" style="color:#F00; display:inline;"></div><br>
                  </div>

                          <div class="group-title" >
                              <span class="star">*</span>
                              <span class="title">所在高校</span>
                          </div>
                          <select  class="form-control" maxlength="10" style="width:500px; height:40px;" size="1" name="school" >
                              <option value="山东建筑大学">山东建筑大学</option>
                              <option  value="山东大学">山东大学</option>
                              <option value="山东科技大学">山东科技大学</option>
                              <option value="中国石油大学">中国石油大学</option>
                              <option value="青岛科技大学">青岛科技大学</option>
                              <option value="济南大学">济南大学</option>
                              <option  value="青岛理工大学">青岛理工大学</option>
                              <option value="齐鲁工业大学">齐鲁工业大学</option>
                              <option value="山东理工大学">山东理工大学</option>
                              <option value="山东农业大学">山东农业大学</option>
                              <option value="青岛农业大学">青岛农业大学</option>   
                              <option value="潍坊医学院">潍坊医学院</option>
                              <option  value="滨州医学院">滨州医学院</option>
                              <option value="山东第一医科大学">山东第一医科大学</option>
                              <option value="山东中医药大学">山东中医药大学</option>
                              <option value="山东师范大学">山东师范大学</option>
                              <option value="曲阜师范大学">曲阜师范大学</option>  
                              <option value="烟台大学">烟台大学</option>
                              <option  value="青岛大学">青岛大学</option>
                              <option value="山东农业工程学院">山东农业工程学院</option>
                              <option value="山东管理学院">山东管理学院</option>
                              <option value="山东交通学院">山东交通学院</option>
                              <option value="临沂大学">临沂大学</option>
                              <option value="聊城大学">聊城大学</option>
                              <option value="山东警察学院">山东警察学院</option>
                              <option  value="枣庄学院">枣庄学院</option>
                              <option value="鲁东大学">鲁东大学</option>
                              <option value="山东财经大学">山东财经大学</option>
                              <option value="山东体育学院">山东体育学院</option>
                              <option value="山东政法学院">山东政法学院</option>  
                              <option value="山东青年政治学院">山东青年政治学院</option>
                              <option  value="山东管理学院">山东管理学院</option>
                              <option value="山东女子学院">山东女子学院</option>
                              <option value="济宁学院">济宁学院</option>
                              <option value="菏泽学院">菏泽学院</option>
                              <option value="齐鲁师范学院">齐鲁师范学院</option>
                              <option value="齐鲁理工学院">齐鲁理工学院</option>
                              <option value="青岛工学院">青岛工学院</option>
                              <option value="山东华宇工学院">山东华宇工学院</option>
                              <option value="山东协和学院">山东协和学院</option>
                              <option value="山东现代学院">山东现代学院</option>
                              <option  value="青岛黄海学院">青岛黄海学院</option>
                              <option value="青岛恒星科技学院">青岛恒星科技学院</option>
                              <option value="山东英才学院">山东英才学院</option>
                              <option value="潍坊科技学院">潍坊科技学院</option>
                              <option value="烟台南山学院">烟台南山学院</option>  
                              <option value="山东工商学院">山东工商学院</option>
                              <option  value="潍坊学院">潍坊学院</option>
                              <option value="山东工艺美术学院">山东工艺美术学院</option>
                              <option value="青岛滨海学院">青岛滨海学院</option>
                          </select>
                          <br>
                          <div class="group-title">
                              <span class="star">*</span>
                              <span class="title">课程链接</span>
                          </div>
                          <div class="group-content">
                              <input type="text" class="form-control" maxlength="100" id="check" onblur="otheryz()" name="courselink" placeholder="请输入课程链接" style="padding-right:30px;" value="" />
                              <div id="error" style="color:#f00; display:inline;"></div><br>
                          </div>
			          </div>
			          <div class="form-group com-only">
			            <div class="group-title">
			              <span class="star">*</span>
			              <span class="title">免费课程</span>
			            </div>
			            <div class="group-content">
			              <div class="clearfix radio-box">
			                <div class="radio pull-left" id='wasIncested'>
			                  <label>
			                    <input type="radio" name="isfree" value="是">是
			                  </label>
			                </div>
			                <div class="radio pull-left" id='wasNotIncested'>
			                  <label>
			                    <input type="radio" name="isfree" value="否" checked="checked">否
			                  </label>
			                </div>
			              </div>
			            </div>
			          </div>
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

              </dl>
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