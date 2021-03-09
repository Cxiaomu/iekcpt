<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="author" content="C.H.L.Y团队" />
    <title>
      咨询导师
    </title>
    <!--[if lt IE 9]>
      <script type="text/javascript" src="/IEkcpt3.0/IEkcpt3.0/Public/Web/js/html5.js" tppabs="Public/Web/js/html5.js">
      </script>
    <![endif]-->
    <meta name="mobile-agent" content="format=html5;"
    />
    <script type="text/javascript">
      if ((navigator.userAgent.match(/(iPhone|iPod|Android|ios)/i))) {
        location.replace("#");
      }
    </script>
    <link href="/IEkcpt3.0/IEkcpt3.0/Public/Web/css/style.css" type="text/css" rel="stylesheet" />
    <script src="/IEkcpt3.0/IEkcpt3.0/Public/Web/js/base.js" type="text/javascript">
    </script>
    <script src="/IEkcpt3.0/IEkcpt3.0/Public/Web/js/service.js"  type="text/javascript">
    </script>
    <!--[if lt IE 9]>
      <script type="text/javascript" src="/IEkcpt3.0/IEkcpt3.0/Public/Web/js/respond.min.js" tppabs="Public/Web/js/respond.min.js">
      </script>
    <![endif]-->
      <script>
          //播放/暂停，采用同一个方法实现
          function playPause(){
              //获取视频DOM元素
              var myVideo = document.getElementById("myVideo");
              if (myVideo.paused)        //判断当前是否处于暂停状态
                  myVideo.play();        //调用play()方法开发播放
              else
                  myVideo.pause();        //调用pause()方法暂停视频播放
          }
          //从中间开始播放
          function playInMid(){
              //获取视频DOM元素
              var myVideo = document.getElementById("myVideo");
              //得到视频的总时长
              var duration = myVideo.duration;
              //得到当前的进度
              var currentTime = myVideo.currentTime;
              //判断是否暂停中
              if (!myVideo.paused)
                  myVideo.pause();
              //从总时长的一半的位置开始播放
              myVideo.currentTime = duration / 2;
              //继续播放视频
              myVideo.play();}


              function  playvideo() {
              document.getElementById('playvideo').style.display='block';
              }
              function  stopplay() {

                  document.getElementById('playvideo').style.display='none';
                  myVideo.pause();
              }
      </script>
  </head>
  
  <body>
    <header class="header">
      <div class="wrap">
        <h1 class="fl">
          <a href="<?php echo U('indexafter/index');?>" class="fl logo">
            <img src="/IEkcpt3.0/IEkcpt3.0/Public/Web/images/banner/logo.png" width="154" height="49" />
          </a>
        </h1>
        <div class="fl logo_text">
          <img src="/IEkcpt3.0/IEkcpt3.0/Public/Web/images/banner/logo_text.jpg" alt="懂你所需，做你所想" width="163" height="49" />
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
      document.getElementById("menu6").className = "on";
    </script>
    <!--banner-->
    <div class="inside_banner_service">
    </div>
<div class="course-package-info-txt">
      <em></em>
      <p>工学全称工程学科,包含仪器仪表、能源动力、电气信息、交通运输、海洋工程、轻工纺织、航空航天、力学、生物工程、农业工程、林业工程、公安技术、植物生产、地矿、材料、机械、食品、武器、土建、水利、测绘、环境与安全、化工与制药等专业。</p>
    </div>
    <table class="course-package-info-list">
      <thead>
        <tr>
          <th>课程名称</th>
          <th>学校</th>
          <th>教师</th>
        </tr>
      </thead>
      <tbody>
        <?php if(is_array($rows)): $i = 0; $__LIST__ = $rows;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
          <td><?php echo ($vo["coursename"]); ?></td>
          <td><?php echo ($vo["school"]); ?></td>
          <td><?php echo ($vo["teachername"]); ?></td>
        </tr><?php endforeach; endif; else: echo "" ;endif; ?>

      </tbody>
    </table>

    <div id="playvideo" style="text-align:center;  display: none; margin-top: 20px;">
        <!-- HTML5新增的video标签，用于在网页里嵌入可以播放的视频 -->

        <video width="320" height="240" controls="controls" id="myVideo">

            <!-- 提供了两种格式的视频文件，以适应不同浏览器对video的支持 -->
            <source src="/IEkcpt3.0/IEkcpt3.0/Public/Web/video/coursevideo3.mp4" type="video/mp4" />
            <source src="/IEkcpt3.0/IEkcpt3.0/Public/Web/video/coursevideo3.ogg" type="video/ogg" />
            对不起，您的浏览器暂不支持video视频标签!
        </video>
        <br/>
        <input type="button" value="从头播放" onclick="playPause();"/>
        <input type="button" value="从中间播放" onclick="playInMid();"/>
        <input type="button" value="关闭播放" onclick="stopplay();"/>
    </div>
  <?php if(is_array($rows)): $i = 0; $__LIST__ = $rows;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="course-package-info-txt-a" style="height: 270px;">
 <div class="course-info-lf fl">
  <div class="course-info-lf-a">
               <div class="course-info-pic">
                 <img src="/IEkcpt3.0/IEkcpt3.0/Public/<?php echo ($vo["courselogo"]); ?>" onclick="playvideo()" >
                  <div class="courseName txtEllipsis fl" title="<?php echo ($vo["coursename"]); ?>" style="margin-bottom: 100px;"><?php echo ($vo["coursename"]); ?></div>
               </div>
               <div class="teachInfo-box">
                   <div class="teach-info">
                    <span class="teacherNameInfo txtEllipsis-fl" title="<?php echo ($vo["teachername"]); ?>"><?php echo ($vo["teachername"]); ?>&nbsp;|</span>
                    
                    <span class="buildCourseSchool txtEllipsis-fl" title="<?php echo ($vo["tel"]); ?>">指导电话：<?php echo ($vo["tel"]); ?></span>
                    <br>
                    <div class="zhidian">课程链接：<?php echo ($vo["courselink"]); ?></div>
                  
                   </div>
                   </div>
               </div>
             </div>
<div class="course-info-rg fl">
              <dl>
                <dt>课程介绍</dt>
                <dd><?php echo ($vo["courseintroduce"]); ?></dd>
              </dl>

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
  </body>

</html>