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
    margin-left: 100px;
    width: 100px;
}

.map-item-box>li.map-item-all-btn {
    left: 135px;
}
.project-search-list .synopsis {
    max-width: 420px;
}

/*弹窗样式*/


 #dvLoginBox1 {
   border-radius: 6px;
   display: none;
   position: absolute;
   top: 41px;
   z-index: 9998;
   color: #434343;
   background-color: rgba(0,0,0,.05);
   background-color: #fff;
   left: 195px;
   box-shadow: 2px 5px 70px rgba(0,0,0,.5);
   width: 750px;
   height: 552px;
   top: 650px;
 }
#dvLoginBox {
  border-radius: 6px;
  display: none;
  position: absolute;
  top: 41px;
  z-index: 9998;
  color: #434343;
  background-color: rgba(0,0,0,.05);
  background-color: #fff;
  left: 195px;
  box-shadow: 2px 5px 70px rgba(0,0,0,.5);
  width: 710px;
  height: 612px;
  top: 800px;
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
</style>

</head>

<body style="min-width: 1264px;">
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
<div class="inside_banner_news"></div>
<div class="main-content">
  <div class="top-search-box">
    <div class="container">
      <div class="project-search-box">
        <form class="form-search project-search-form-box" method="post" action="<?php echo U('Finance/findfinance');?>" accept-charset="utf-8">
          <input id="name" data-id="name" class="search-control input-get" type="text" placeholder="请输入关键字,例：姓名，地区，领域" name="all">
          <button id="searchBtn">搜索</button>
        </form>
        <div class="clearfix"></div>
      </div>
      <!-- 主体内容 -->
      <div class="project-search-map" >
        <div class="project-search-map-item">
          <span class="map-item-title" >投资领域</span>
          <ul class="map-item-box" id="industryCode">
            <li  style="    border-radius: 2px;
    color: #41B3CF;width: 120px;"><a href="javascript:;" data-code="" ><form method="post" action="<?php echo U('Finance/index');?>" ><button>全部 </button></form></a></li>
            <li><a href="javascript:;" data-code="A"><form method="post" action="<?php echo U('Finance/findjiaotong');?>" ><button>交通运输仓储和物流业 </button></form></a></li>
            <li><a href="javascript:;" data-code="B"><form method="post" action="<?php echo U('Finance/findnonglin');?>" ><button>农、林、牧、渔业</button></form></a></li>
            <li><a href="javascript:;" data-code="C"><form method="post" action="<?php echo U('Finance/findzilin');?>" ><button>租赁和商务服务业</button></form></a></li>
            <li style="margin-left: 120px;"><a href="javascript:;" data-code="E"><form method="post" action="<?php echo U('Finance/findyiliao');?>"><button>医疗和社会工作</button></form></a></li>
            <li><a href="javascript:;" data-code="F"><form method="post" action="<?php echo U('Finance/findgonggong');?>" ><button>公共设施管理</button></form></a></li>
            <li><a href="javascript:;" data-code="G"><form method="post" action="<?php echo U('Finance/findkexue');?>" ><button>科学技术服务业</button></form></a></li>
            <li style="margin-left: 120px;"><a href="javascript:;" data-code="D"><form method="post" action="<?php echo U('Finance/findxinxi');?>" ><button>信息技术服务</button></form></a></li>
            <li><a href="javascript:;" data-code="H"><form method="post" action="<?php echo U('Finance/findzhusu');?>" ><button>住宿和餐饮业</button></form></a></li>
            <li ><a href="javascript:;" data-code="I"><form method="post" action="<?php echo U('Finance/findzhizao');?>" ><button>制造业</button></form></a></li>
            <li style="margin-left: 120px;"><a href="javascript:;" data-code="J"><form method="post" action="<?php echo U('Finance/findjinrong');?>" ><button>金融业</button></form></a></li>

            <div class="clearfix"></div>
          </ul>
          <div class="map-item-switch">
            <i class="iconfont icon-xiala"></i>
          </div>
          <div class="clearfix"></div>
        </div>
        <div class="project-search-map-item"  >
          <span class="map-item-title" >所在地区</span>
          <ul class="map-item-box" id="provinceCode" >
            <li ><a href="javascript:;" data-code="" ><form method="post" action="<?php echo U('Finance/index');?>" ><button>全部</button></form></a></li>
            <li style="margin-left: 30px;"><a href="javascript:;" data-code="11"><form method="post" action="<?php echo U('Finance/findbeijing');?>" ><button>北京市</button></form></a></li>
            <li><a href="javascript:;" data-code="12"><form method="post" action="<?php echo U('Finance/findshanghai');?>" ><button>上海市</button></form></a></li>
            <li><a href="javascript:;" data-code="13"><form method="post" action="<?php echo U('Finance/findjiangsusheng');?>" ><button>江苏省</button></form></a></li>
            <li><a href="javascript:;" data-code="14"><form method="post" action="<?php echo U('Finance/findzhejiangsheng');?>" ><button>浙江省</button></form></a></li>
            <li><a href="javascript:;" data-code="15"><form method="post" action="<?php echo U('Finance/findshandongsheng');?>" ><button>山东省</button></form></a></li>
            <li><a href="javascript:;" data-code="21"><form method="post" action="<?php echo U('Finance/findguangdongsheng');?>" ><button>广东省</button></form></a></li>
            <li><a href="javascript:;" data-code="11"><form method="post" action="<?php echo U('Finance/findtianjin');?>" ><button>天津市</button></form></a></li>
            <li><a href="javascript:;" data-code="12"><form method="post" action="<?php echo U('Finance/findchingqing');?>" ><button>重庆市</button></form></a></li>
            <li><a href="javascript:;" data-code="13"><form method="post" action="<?php echo U('Finance/findhebei');?>" ><button>河北省</button></form></a></li>
            <li style="margin-left: 120px;"><a href="javascript:;" data-code="14"><form method="post" action="<?php echo U('Finance/findshanxi');?>" ><button>山西省</button></form></a></li>
            <li><a href="javascript:;" data-code="15"><form method="post" action="<?php echo U('Finance/findliaoning');?>" ><button>辽宁省</button></form></a></li>
            <li><a href="javascript:;" data-code="21"><form method="post" action="<?php echo U('Finance/findjilin');?>" ><button>吉林省</button></form></a></li>
            <li><a href="javascript:;" data-code="12"><form method="post" action="<?php echo U('Finance/findanhui');?>" ><button>安徽省</button></form></a></li>
            <li><a href="javascript:;" data-code="13"><form method="post" action="<?php echo U('Finance/findfujian');?>" ><button>福建省</button></form></a></li>
            <li><a href="javascript:;" data-code="14"><form method="post" action="<?php echo U('Finance/findjiangxi');?>" ><button>江西省</button></form></a></li>
            <li><a href="javascript:;" data-code="15"><form method="post" action="<?php echo U('Finance/findhenan');?>" ><button>河南省</button></form></a></li>
            <li><a href="javascript:;" data-code="21"><form method="post" action="<?php echo U('Finance/findhubei');?>" ><button>湖北省</button></form></a></li>
            <li><a href="javascript:;" data-code="11"><form method="post" action="<?php echo U('Finance/findhunan');?>" ><button>湖南省</button></form></a></li>
            <li><a href="javascript:;" data-code="12"><form method="post" action="<?php echo U('Finance/findhainan');?>" ><button>海南省</button></form></a></li>
            <li><a href="javascript:;" data-code="13"><form method="post" action="<?php echo U('Finance/findsichuan');?>" ><button>四川省</button></form></a></li>
            <li><a href="javascript:;" data-code="14"><form method="post" action="<?php echo U('Finance/findguizhou');?>" ><button>贵州省</button></form></a></li>
            <li><a href="javascript:;" data-code="15"><form method="post" action="<?php echo U('Finance/findyunnan');?>" ><button>云南省</button></form></a></li>
            <li><a href="javascript:;" data-code="21"><form method="post" action="<?php echo U('Finance/findshanxisheng');?>" ><button>陕西省</button></form></a></li>
            <li><a href="javascript:;" data-code="11"><form method="post" action="<?php echo U('Finance/findgansu');?>" ><button>甘肃省</button></form></a></li>
            <li><a href="javascript:;" data-code="12"><form method="post" action="<?php echo U('Finance/findqinghai');?>" ><button>青海省</button></form></a></li>
            <li><a href="javascript:;" data-code="13"><form method="post" action="<?php echo U('Finance/findtaiwansheng');?>" ><button>台湾省</button></form></a></li>
            <li><a href="javascript:;" data-code="11"><form method="post" action="<?php echo U('Finance/findheilongjiang');?>" ><button>黑龙江省</button></form></a></li>
          </ul>
          <div class="map-item-switch">
            <i class="iconfont icon-xiala"></i>
          </div>
          <div class="clearfix" ></div>
        </div>

      </div>
    </div>
  </div>

  <div class="container main-container">
    <div class="project-search-list">
      <table class="table table-list" style="text-align: center;">
        <colgroup>
          <col width="200">
          <col width="200">
          <col width="100">
          <col width="100">
          <col width="250">
          <col width="100">
        </colgroup>
        <tbody>
        <tr>
          <th>公司注册编号</th>
          <th>公司名称</th>
          <th>投资人</th> 
          <th>所在地区</th>
          <th>投资领域</th>
          <th>操作</th>
        </tr>
        <?php if(is_array($rows)): $i = 0; $__LIST__ = $rows;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row): $mod = ($i % 2 );++$i;?><tr style="height: 70px;" >
          <td class="title-box">
            <div class="project-title">
              <span><?php echo ($row["companyid"]); ?></span>
            </div>
          </td>
          <td>
            <div class="synopsis" ><?php echo ($row["companyname"]); ?> </div>
          </td>
          <td class="text-center">
            <span class="indus-span"><?php echo ($row["investor"]); ?></span>
          </td>
          <td class="text-center"><?php echo ($row["location"]); ?></td>
          <td class="text-center">
            <span><?php echo ($row["field"]); ?></span>
          </td>
          <td><a href="<?php echo U('Finance/Financecommany',array('sinfo_stuid'=>$row['companyid']));?>">查看更多</a></td>
        </tr>
          <!--弹框js内容-->
          <!--<div id="dvLoginBox1">
            <span class="tanchuang1">公司编号：<?php echo ($row["companyid"]); ?></span><br>
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
            <span id="spnCloseButton" onclick="f2()" title="关闭" style="font-size: 20px;">X</span>
          </div>-->
          <!--end--><?php endforeach; endif; else: echo "" ;endif; ?>
        </tbody>
      </table>
    </div>



    <script type="text/javascript">
// 弹窗js
        function jsxianshi()
        {
            // document.getElementById("spnLoginText").className="spnLoginText_hover";
            document.getElementById("dvLoginBox1").style.display='block';
        }
        function f2(){
                document.getElementById('dvLoginBox1').style.display="none";
        }
    </script>

          <div class="project-search-pages pages">
           <div id="Pagination" class="Pagination">
          <div class="pagination" >
          <!-- <a class="current prev">上一页</a><a class="current">1</a><a href="P2.html">2</a><a href="P3.html">3</a><a href="P2.html" class="next">下一页 </a> -->
          <div style="color: red"><?php echo ($pageHTML); ?></div>
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
<script src="/IEkcpt3.0/IEkcpt3.0/Public/Web/js/jquery.pagination.js"></script>
<script src="/IEkcpt3.0/IEkcpt3.0/Public/Web/js/set-page-1.0.0.js"></script>
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