<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="author" content="TI Alliance" />
    <title>
      寻找人才
    </title>
    <meta name="keywords" content="C.H.L.Y团队" />
    <meta name="mobile-agent" content="format=html5;"/>
    <link rel="stylesheet" href="/IEkcpt3.0/IEkcpt3.0/Application/Home/View/student/web/bootstrap.min-1.0.0.css">
    <link rel="stylesheet" href="/IEkcpt3.0/IEkcpt3.0/Application/Home/View/student/web/iconfont-1.0.0.css">
    <link rel="stylesheet" href="/IEkcpt3.0/IEkcpt3.0/Application/Home/View/student/web/pagination.css">
    <link rel="stylesheet" href="/IEkcpt3.0/IEkcpt3.0/Application/Home/View/student/web/project-search-1.0.1.css">
    <script src="/IEkcpt3.0/IEkcpt3.0/Application/Home/View/student/web/jquery-1.11.1.min.js"></script>
    <script src="/IEkcpt3.0/IEkcpt3.0/Application/Home/View/student/web/bootstrap.min-1.0.0.js"></script>
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

    .header{
    	background-color: #FFFFFF;
    }
  .project-search-map-item::after {
    width: 946px;
  }
	.container {
	    width: 1264px;
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


    /*按钮样式*/
    /*投资领域*/
    #industryCode li button{
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
    }
    #provinceCode li button{
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

    }

      /*搜索样式*/
    .map-item-box>li>a {
      padding: 5px 10px;
      text-align: center;
      color: #333;
      outline: none;
      font-size: 14px;
      line-height: 14px;
      display: inline-block;
    }
    .map-item-box>li>a.selected {
      border-radius: 2px;
      background-color: #FFFFFF;
      color: #41B3CF;
    }
</style>
  </head>
  
  <body style=" min-width:1264px;">
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
      document.getElementById("menu5").className = "on";
    </script>
    <!--banner-->
    <div class="inside_banner_student">
    </div>
<div class="main-content">
    <div class="top-search-box">
      <div class="container">
        <div class="project-search-box">
          <form class="form-search project-search-form-box" method="post" action="<?php echo U('Student/findtelent');?>" accept-charset="utf-8">
            <input id="name" data-id="name" class="search-control input-get" type="text" placeholder="请输入关键字，例：姓名，学校，地区" name="all">
            <button id="searchBtn">搜索</button>
          </form>
          <div class="clearfix"></div>
        </div>
        <!-- 主体内容 -->
        <div class="project-search-map">
          <div class="project-search-map-item">
            <span class="map-item-title">专业技能</span>
            <ul class="map-item-box" id="industryCode">
              <li class="map-item-all-btn" style="width:auto;"><a href="javascript:;" data-code="" ><form method="post" action="<?php echo U('Student/index');?>" ><button>全部 </button></form></a></li>
              <li><a href="javascript:;" data-code="A"><form method="post" action="<?php echo U('Student/finddongmansheji');?>" ><button>动漫设计与制作</button></form></a></li>
              <li><a href="javascript:;" data-code="B"><form method="post" action="<?php echo U('Student/findxitongjiagou');?>" ><button>系统架构设计</button></form></a></li>
              <li><a href="javascript:;" data-code="C"><form method="post" action="<?php echo U('Student/findxitongweihu');?>" ><button>计算机系统维护</button></form></a></li>
              <li><a href="javascript:;" data-code="D"><form method="post" action="<?php echo U('Student/findzulin');?>" ><button>租赁和商务服务业</button></form></a></li>
              <li><a href="javascript:;" data-code="E"><form method="post" action="<?php echo U('Student/findruanjiankaifa');?>" ><button>软件开发</button></form></a></li>
              <li><a href="javascript:;" data-code="F"><form method="post" action="<?php echo U('Student/finddianzishangwu');?>" ><button>电子商务</button></form></a></li>
              <li><a href="javascript:;" data-code="G"><form method="post" action="<?php echo U('Student/findbangong');?>" ><button>办公自动化</button></form> </a></li>
              <li><a href="javascript:;" data-code="H"><form method="post" action="<?php echo U('Student/findwangluo');?>" ><button>计算机网络</button></form></a></li>
              <li><a href="javascript:;" data-code="I"><form method="post" action="<?php echo U('Student/findruanajianceshi');?>" ><button>软件测试</button></form></a></li>
              <li><a href="javascript:;" data-code="J"><form method="post" action="<?php echo U('Student/findyingyong');?>" ><button>计算机应用</button></form></a></li>
              <li><a href="javascript:;" data-code="K"><form method="post" action="<?php echo U('Student/findjiaoyu');?>" ><button>教育</button></form></a></li>
              <li><a href="javascript:;" data-code="L"><form method="post" action="<?php echo U('Student/findyingjian');?>"><button>计算机硬件</button></form></a></li>
              <div class="clearfix"></div>
            </ul>
            <div class="map-item-switch">
              <i class="iconfont icon-xiala"></i>
            </div>
            <div class="clearfix"></div>
          </div>
          <div class="project-search-map-item">
            <span class="map-item-title">所在地区</span>
            <ul class="map-item-box" id="provinceCode">
               <li class="map-item-all-btn"><a href="javascript:;" data-code="" class="selected"><form method="post" action="<?php echo U('Student/index');?>" ><button>全部</button></form></a></li>
              <li><a href="javascript:;" data-code="11"><form method="post" action="<?php echo U('Student/findjinan');?>" ><button>济南市</button></form></a></li>
              <li><a href="javascript:;" data-code="12"><form method="post" action="<?php echo U('Student/findqingdao');?>" ><button>青岛市</button></form></a></li>
              <li><a href="javascript:;" data-code="13"><form method="post" action="<?php echo U('Student/findzibo');?>" ><button>淄博市</button></form></a></li>
              <li><a href="javascript:;" data-code="14"><form method="post" action="<?php echo U('Student/findzaozhuang');?>" ><button>枣庄市</button></form></a></li>
              <li><a href="javascript:;" data-code="15"><form method="post" action="<?php echo U('Student/finddongying');?>" ><button>东营市</button></form></a></li>
              <li><a href="javascript:;" data-code="16"><form method="post" action="<?php echo U('Student/findyantai');?>" ><button>烟台市</button></form></a></li>
              <li><a href="javascript:;" data-code="17"><form method="post" action="<?php echo U('Student/findweifang');?>" ><button>潍坊市</button></form></a></li>
              <li><a href="javascript:;" data-code="18"><form method="post" action="<?php echo U('Student/findjining');?>" ><button>济宁市</button></form></a></li>
              <li><a href="javascript:;" data-code="19"><form method="post" action="<?php echo U('Student/findtaian');?>" ><button>泰安市</button></form></a></li>
              <li><a href="javascript:;" data-code="20"><form method="post" action="<?php echo U('Student/findweihai');?>" ><button>威海市</button></form></a></li>
              <li><a href="javascript:;" data-code="21"><form method="post" action="<?php echo U('Student/findrizhao');?>" ><button>日照市</button></form></a></li>
              <li><a href="javascript:;" data-code="22"><form method="post" action="<?php echo U('Student/findbinzhou');?>" ><button>滨州市</button></form></a></li>
              <li><a href="javascript:;" data-code="23"><form method="post" action="<?php echo U('Student/finddezhou');?>" ><button>德州市</button></form></a></li>
              <li><a href="javascript:;" data-code="24"><form method="post" action="<?php echo U('Student/findliaocheng');?>" ><button>聊城市</button></form></a></li>
              <li><a href="javascript:;" data-code="25"><form method="post" action="<?php echo U('Student/findlinyi');?>" ><button>临沂市</button></form></a></li>
              <li><a href="javascript:;" data-code="26"><form method="post" action="<?php echo U('Student/findheze');?>" ><button>菏泽市</button></form></a></li>
              <li><a href="javascript:;" data-code="27"><form method="post" action="<?php echo U('Student/findlaiwu');?>" ><button>莱芜市</button></form></a></li>
            </ul>
            <div class="map-item-switch">
              <i class="iconfont icon-xiala"></i>
            </div>
            <div class="clearfix"></div>
          </div>

        </div>
      </div>
    </div>


    <div class="container main-container">

      <div class="project-search-list">
<table class="table table-list" style="text-align: center;">
  <colgroup>
    <!--<col width="100">-->
    <col width="100">
    <col width="200">
    <col width="100">
    <col width="120">
    <col width="120">
  </colgroup>
  <tbody><tr>
    <th>姓名</th>
    <th>学校</th>
    <th>所在地区</th>
    <th>专业技能</th>
    <th>操作</th>
  </tr>

  <!--弃用原有数据，查找resume的数据-->
  <?php if(is_array($rows)): $i = 0; $__LIST__ = $rows;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row): $mod = ($i % 2 );++$i;?><tr height="80">
      <!--<td><?php echo ($row["resumeid"]); ?></td>-->
      <td class="title-box">
        <div class="project-title">
          <span><?php echo ($row["name"]); ?></span>
        </div>
      </td>
      <td>
        <div class="synopsis"><?php echo ($row["school"]); ?></div>
      </td>
      <td class="text-center"><?php echo ($row["city"]); ?></td>
      <td class="text-center">
        <span><?php echo ($row["major"]); ?></span>
      </td>
      <td><a href="<?php echo U('Personal/readresumestudent',array('sinfo_stuid'=>$row['resumeid']));?>">查看个人简历</a></td>
    </tr><?php endforeach; endif; else: echo "" ;endif; ?>

</tbody>
</table>
      </div>
      <div class="project-search-pages pages">
          <div id="Pagination" class="Pagination">
              <div class="pagination" >
                <div style="color: red"><?php echo ($pageHTML); ?></div>
                <!-- <a class="current prev">上一页</a><a class="current">1</a><a href="P2.html">2</a><a href="P3.html">3</a><a href="P2.html" class="next">下一页 </a> -->
              </div>
          </div>
      </div>
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
  <script src="/IEkcpt3.0/IEkcpt3.0/Application/Home/View/student/web/jquery.pagination.js"></script>
  <script>
    $(function () {
      // 为下拉菜单按钮绑定移入移出事件
      $(".drop-hover").mouseover(function () {
        // $(this).addClass("text-primary");
        $(this).addClass("dropup");
        $(".drop-menu").removeClass("hidden");
      });
      $(".drop-hover").mouseout(function () {
        $(".drop-menu").addClass("hidden");
        $(this).removeClass("dropup");
      });

      // 为下拉菜单选项绑定移入移出事件
      $(".drop-menu").mouseover(function () {
        // $(".drop-hover").removeClass("text-primary");
        // alert(111);
        $(".drop-hover").addClass("dropup");
        $(".drop-menu").removeClass("hidden");
      });
      $(".drop-menu").mouseout(function () {
        $(".drop-menu a").mouseover(function () {
          $(this).addClass("text-primary");
        });
        $(".drop-menu").addClass("hidden");
        $(".drop-hover").removeClass("dropup");
      });
    });
  </script>

  <script type="text/javascript">
    $(function () {
      //进入页面时给所有“全部”添加选中状态
      $('.map-item-box li.map-item-all-btn a').addClass('selected');

      //展开与折叠
      $('.project-search-map-item .map-item-switch').click(function () {
        if ($(this).hasClass('rotate')) {
          $(this).removeClass('rotate');
          $(this).parent().find('.map-item-box').removeClass('map-item-box-open');
        } else {
          $(this).addClass('rotate');
          $(this).parent().find('.map-item-box').addClass('map-item-box-open');
        }
      });
      //选择选项时，添加选中状态
      $('.map-item-box li a').click(function () {
        $(this).parent().parent().find("a").not($(this)).removeClass('selected');
        $(this).addClass('selected');
        $("#industryCodeFake").val($("#industryCode .selected").attr('data-code'));
        $("#wasBindUniTechnologyFake").val($("#wasBindUniTechnology .selected").attr('data-code'));
        $("#investStageCodeFake").val($("#investStageCode .selected").attr('data-code'));
        $("#provinceCodeFake").val($("#provinceCode .selected").attr('data-code'));
        pageInit.btnSearch();
      });
      $(".project-search-list").on("click", "*[data-link]", function () {
        window.open('/search/' + escapeData($(this).attr("data-link")));
      })
    })
  </script>
  
  </body>

</html>