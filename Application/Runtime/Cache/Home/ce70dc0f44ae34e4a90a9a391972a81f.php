<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <title>简历界面</title>
    <link rel="stylesheet" type="text/css" href="/IEkcpt3.0/IEkcpt3.0/Public/weihong/login/css/onlinebusinesshall/newexpand/css/index-debug.css">
    <link rel="stylesheet" type="text/css" href="/IEkcpt3.0/IEkcpt3.0/Public/weihong/login/css/index.css">
    <link rel="stylesheet" type="text/css" href="/IEkcpt3.0/IEkcpt3.0/Public/weihong/login/static/lib/jquery-step/css/jquery.step.css">
    <link rel="stylesheet" href="/IEkcpt3.0/IEkcpt3.0/Public/weihong/css/animate.css" type="text/css" />

    <link href="/IEkcpt3.0/IEkcpt3.0/Public/weihong/student/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME ICONS  -->
    <link href="/IEkcpt3.0/IEkcpt3.0/Public/weihong/student/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="/IEkcpt3.0/IEkcpt3.0/Public/weihong/student/css/style.css" rel="stylesheet" />
    <link rel="stylesheet" href="/IEkcpt3.0/IEkcpt3.0/Public/weihong/css/simple-line-icons.css" type="text/css" />
    <link rel="stylesheet" href="/IEkcpt3.0/IEkcpt3.0/Public/weihong/css/font.css" type="text/css" />
    <link rel="stylesheet" href="/IEkcpt3.0/IEkcpt3.0/Public/weihong/css/app.css" type="text/css" />

    <!--<link rel="stylesheet" type="text/css" href="/IEkcpt3.0/IEkcpt3.0/Public/weihong/teacher/lib/layui/css/layui.css">-->
    <script src="/IEkcpt3.0/IEkcpt3.0/Public/weihong/js/index2016.js" type="text/javascript"></script>
    <!--<script type="text/javascript" src="/IEkcpt3.0/IEkcpt3.0/Public/weihong/teacher/lib/layui/layui.js"></script>-->

    <!--省市县三级联动-->
    <script src="http://www.jq22.com/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://www.jq22.com/jquery/bootstrap-3.3.4.js"></script>
    <script src="/IEkcpt3.0/IEkcpt3.0/Application/Home/View/post/web/js/distpicker.data.js"></script>
    <script src="/IEkcpt3.0/IEkcpt3.0/Application/Home/View/post/web/js/distpicker.js"></script>
    <script src="/IEkcpt3.0/IEkcpt3.0/Application/Home/View/post/web/js/main.js"></script>
</head>
<style type="text/css">
    .guangwangshouye{
        color:#54BCBA;
    }
    .guangwangshouye:hover{
        color:#0E5CAD;
    }

    element.style {
    }
    .resumePicTitle {
        width: 56px;
        margin: 0 20px 0 20px;
    }
  /*  .fl {
        float: left;
    }
    .uploadImg_imgresult {
        width: 80px;
        height: 80px;
    }
    .com-list li.resumePic {
        height: 80px;
        line-height: 80px;
    }
    .resumePicTitle {
        width: 56px;
        margin-left: 125px;
    }*/
   /* .uploadImg_imgresultwrap {
        position: relative;
        background: url(//img.58cdn.com.cn/ui7/job/resume/imgdefaultapp.png);
        background-size: 100% 100%;
        border: none;
        width: 80px;
        height: 80px;
        overflow: hidden;
        border-radius: 40px;
        -o-border-radius: 40px;
        -webkit-border-radius: 40px;
        cursor: pointer;
        margin-left: 20px;
    }*/
</style>
<script>
    $(document).ready(function(){
        $('#my-img').click(function(){
            $('#img-upload').click();
        });

    });


</script>
<body>
<div class="step-body" id="myStep">

    <div class="row">
        <div class="col-sm-1"></div>
        <h1 class="col-sm-4" style="padding: 20px;">

            <div class="fl logo_text">
                <a href="indexafter.html">
                    <img src="/IEkcpt3.0/IEkcpt3.0/Public/Web/images/banner/logo.png"
                         alt="IE-科创平台" width="154" height="49" />
                </a>
                <img src="/IEkcpt3.0/IEkcpt3.0/Public/Web/images/banner/logo_text.jpg"
                     alt="懂你所需，做你所想" width="163" height="49" />
            </div>

        </h1>
        <span style="float: right; margin: 70px 70px 0 0; font-family: Microsoft YaHei;font-weight: bold;font-size: 18px;"><a href="<?php echo U('Indexafter/index');?>"  class="guangwangshouye" >官网首页</a></span>

    </div>
    <div ><hr style="height:1px;border:none;border-top:1px solid #ccc;top: 50px; " /></div>

    <div class="step-header" >
        <div class="step-header-ul">
            <ul>
                <li><h5 style="padding-top: 10px;">基本信息</h5></li>
                <li><h5 style="padding-top: 10px;">求职信息</h5></li>
                <li><h5 style="padding-top: 10px;">完成</h5></li>
            </ul>
        </div>
    </div>

    <div class="step-content">
        <form method="post"onsubmit="return prophotos();"  action="<?php echo U('Post/sendjianli');?>"   enctype="multipart/form-data">
            <div class="step-list">
                <div class="intro-flow">
                    <br>
                    <div ><hr style="height:1px;border:none;border-top:1px solid #ccc;top: 50px; " /></div>

                    <div class="row" >
                        <div class="col-md-2"></div>
                        <div class="col-md-8" style="margin: 12px;">
                            <table class="form-horizontal form-validation ng-pristine ng-invalid ng-invalid-required ng-valid-minlength ng-valid-maxlength ng-invalid-validator ng-invalid-b ng-invalid-a ng-valid-pattern"
                                   method="post"  ionsubmit="return check()" >
                                <div class="panel panel-default">
                                    <br>
                                    <div class="panel-body">
                                        <h2 style="text-align: center;">请输入基本信息</h2>
                                    </div>
                                    <div class="panel-body">

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" style="letter-spacing: 10px;padding-left: 126px;">姓名</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="tname" id="tname" class="form-control ng-pristine ng-invalid ng-invalid-required ng-touched" value="杨海涛"  placeholder="请输入您姓名">
                                                <p class='help-block' id="checktname" style="display: none;"><font style='color:red'></font></p>
                                            </div>
                                        </div>
                                        <div class="line line-dashed b-b line-lg " style="margin-top: 55px;"></div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" style="letter-spacing: 10px;padding-left: 126px;">性别</label>
                                            <div class="col-sm-4" >
                                                <input type="radio" name="sex" id="man" value="男"  checked="checked"> 男
                                                <input type="radio" name="sex" id="woman" value="女"  style="margin-left: 20px;"> 女
                                                </xblock>
                                                <p class='help-block' id="checksex" style="display: none;"><font style='color:red'></font></p>
                                            </div>
                                        </div>
                                        <div class="line line-dashed b-b line-lg " style="margin-top: 55px;"></div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label"  style="padding-left: 126px;">联系方式</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="tphone" id="tphone" class="form-control ng-pristine ng-invalid ng-invalid-required ng-touched" value="15286662395"  placeholder="请输入联系方式">
                                                <p class='help-block' id="checktphone" style="display: none;"><font style='color:red'></font></p>
                                            </div>
                                        </div>
                                        <div class="line line-dashed b-b line-lg " style="margin-top: 55px;"></div>
                                        <div class="form-group">
                                            <h5 class="col-sm-3 control-label"  style="padding-left: 126px;">出生年份</h5>
                                            <div class="col-sm-8">
                                                <input type="date" name="shengri" id="tpwd" class="form-control ng-pristine ng-invalid ng-invalid-required ng-touched"  value="1997-07-23" placeholder="请选择您的出生年份">
                                                <p class='help-block' id="checktpwd" style="display: none;"><font style='color:red'></font></p>
                                            </div>
                                        </div>
                                        <div class="line line-dashed b-b line-lg " style="margin-top: 55px;"></div>

                                        <div class="form-group">
                                            <h5 class="col-sm-3 control-label"  style="padding-left: 126px;">所在/毕业院校</h5>
                                            <div class="col-sm-8">
                                                <input type="text" name="school"  class="form-control ng-pristine ng-invalid ng-invalid-required ng-touched" value="山东建筑大学" placeholder="请填写您的学校名称">
                                                <p class='help-block'  style="display: none;"><font style='color:red'></font></p>
                                            </div>
                                        </div>
                                        <div class="line line-dashed b-b line-lg " style="margin-top: 55px;"></div>
                                        <div class="form-group">
                                            <h5 class="col-sm-3 control-label"  style="padding-left: 126px;">所学专业</h5>
                                            <div class="col-sm-8">
                                                <input type="text" name="major"  class="form-control ng-pristine ng-invalid ng-invalid-required ng-touched" value="软件开发"  placeholder="请填写您的专业">
                                                <p class='help-block'  style="display: none;"><font style='color:red'></font></p>
                                            </div>
                                        </div>
                                        <div class="line line-dashed b-b line-lg " style="margin-top: 55px;"></div>


                                        <div class="form-group">
                                            <h5 class="col-sm-3 control-label"  style="padding-left: 126px;">工作年限</h5>
                                            <div class="col-sm-8">
                                                <select class="form-control"  name="worktime" >
                                                    <option value="0">请选择您工作的经历</option>
                                                    <option selected="" value="无经验">无经验</option>
                                                    <option value="应届生">应届生</option>
                                                    <option value="1年以下">1年以下</option>
                                                    <option value="1-3年">1-3年</option>
                                                    <option value="3-5年">3-5年</option>
                                                    <option value="5-10年">5-10年</option>
                                                    <option value="10年以上">10年以上</option>
                                                </select>
                                                <p class='help-block' id="checktrepwd" style="display: none;"><font style='color:red'></font></p>
                                            </div>
                                        </div>
                                        <div class="line line-dashed b-b line-lg " style="margin-top: 55px;"></div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label"  style="padding-left: 126px;">最高学历</label>
                                            <div class="col-sm-8">
                                                <select class="form-control" name="bestxueli" >
                                                    <option value="">请选择您的最高学历层次</option>
                                                    <option value="中职中专">中职中专</option>
                                                    <option value="高职高专">高职高专</option>
                                                    <option selected="" value="本科" >本科</option>
                                                    <option value="硕士">硕士</option>
                                                    <option value="博士">博士</option>
                                                    <option value="其他">其他</option>
                                                </select>
                                                <p class='help-block' id="checktqq" style="display: none;"><font style='color:red'></font></p>
                                            </div>
                                        </div>
                                        <div class="line line-dashed b-b line-lg " style="margin-top: 55px;"></div>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label"  style="letter-spacing: 10px;padding-left: 126px;">邮箱</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="tmail" id="tmail" class="form-control ng-pristine ng-invalid ng-invalid-required ng-touched" value="1440613133@qq.com"  placeholder="请输入邮箱账号(选填)">
                                                <p class='help-block' id="checktmail" style="display: none;"><font style='color:red'></font></p>
                                            </div>
                                        </div>
                                        <div class="line line-dashed b-b line-lg " style="margin-top: 55px;"></div>
                                        <div class="form-group">
                                            <div class="uploadImg_imgresultout clearfix">
                                                <div class="fl uploadImg_imgresultwrap">
                                                    <div class="uploadImg_imgresultwrapzhao"></div>
                                                    <span class="fl resumePicTitle" style="margin-left: 125px;">本人照片</span>
                                                    <!--<img  src="/IEkcpt3.0/IEkcpt3.0/Public/{Think.session.infophoto}" id="my-img" class="uploadImg_imgresult">-->
                                                    <label style="margin-left: 70px;">
                                                        <input type="file" name="jianlitp"  id="protupian"  >
                                                    </label>
                                                </div>
                                                <div id="errorprotupian" style="color:#f00; display:inline;"></div><br>
                                            </div>
                                        </div>
                                        <div class="line line-dashed b-b line-lg "></div>

                                        <div class="form-group" style="display: none;">
                                            <label class="col-sm-3 control-label">学院</label>
                                            <div class="col-sm-8">
                                                <select class="form-control" id="tcollege" onchange="mjteamname()">

                                                </select>
                                                <p class='help-block' id="checktcollege" style="display: none;"><font style='color:red'>您未选择所在的学院</font></p>
                                            </div>
                                        </div>

                                    </div>
                                <footer class="panel-footer text-right bg-light lter ">
                                    <div class="" style="text-align: center;">
                                        <div class="footer-btn">
                                            <div class="common-btn">

                                                <a href="javascript:void(0);" id="applyBtn">马上申请
                                                    <!--<input type="submit" name="apply"value="马上申请" style="height: 33px;background-color: #7DDDDC;width: 114px;">-->
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                </footer>
                            </div>
                        </table>
                    </div>
                    <div class="col-md-2"></div>
                </div>
            </div>
        </div>

            <!--第二步，求职信息-->
        <div class="step-list">
            <div class="intro-flow">
                <br>
                <div ><hr style="height:1px;border:none;border-top:1px solid #ccc;top: 50px; " /></div>
                <div class="row" >
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8" style="margin-top: 20px;">

                        <div class="panel panel-default">
                            <br>
                            <div class="panel-body">
                                <h2 style="text-align: center;">请输入求职信息</h2>
                            </div>
                            <div class="panel-body">
                                <div class="form-group">
                                    <h5 class="col-sm-3 control-label" style="letter-spacing: 2px;padding-left: 126px;">职位类别</h5>
                                    <div class="col-sm-8">
                                        <select class="form-control" name="jobtype" style="width: 500px;">
                                            <option >请选择您的职位类别</option>
                                            <option  value="餐饮">餐饮</option>
                                            <option selected="" value="IT信息技术">IT信息技术</option>
                                            <option value="金融">金融</option>
                                            <option value="美容美发">美容美发</option>
                                            <option value="教育">教育</option>
                                            <option value="物流">物流</option>
                                            <option value="建筑">建筑</option>
                                        </select>
                                        <p class='help-block'  style="display: none;"><font style='color:red'></font></p>
                                    </div>
                                </div>
                                <div class="line line-dashed b-b line-lg " style="margin-top: 55px;"></div>


                                <div class="form-group">
                                    <h5 class="col-sm-3 control-label" style="letter-spacing: 2px;padding-left: 126px;">工作地点</h5>
                                    <table class="form-inline">
                                        <div data-toggle="distpicker">
                                            <div class="form-group" style="float: left;margin-left: 16px; ">
                                                <label class="sr-only" for="province2">Province</label>
                                                <select style="width: 120px;height: 34px;" class="form-control" id="province2" name="province"  data-province="---- 选择省 ----" ></select>
                                            </div>
                                            <div class="form-group" style="float: left;margin-left: 20px;">
                                                <label class="sr-only" for="city2">City</label>
                                                <select style="width: 120px;height: 34px;" class="form-control" id="city2" name="city" data-city="---- 选择市 ----"></select>
                                            </div>
                                            <div class="form-group" style="float: left;margin-left: 20px;">
                                                <label class="sr-only" for="district2">District</label>
                                                <select style="width: 120px;height: 34px;" class="form-control" id="district2" name="region" data-district="---- 选择区 ----"></select>
                                            </div>
                                        </div>
                                    </table>
                                    <p class='help-block'  style="display: none;"><font style='color:red'></font></p>
                                </div>
                                <div class="line line-dashed b-b line-lg " style="margin-top: 55px;"></div>

                                <div class="form-group" >
                                    <div class="form-group" >
                                        <h5 class="col-sm-4 control-label" style="letter-spacing: 2px;padding-left: 126px;">期望薪资</h5>
                                        <div class="col-sm-8" style="margin-left: -85px;">
                                            <select class="form-control" name="hopesalary" style="width: 500px;margin-left: 18px;">
                                                <option value="可议价">可议价</option>
                                                <option selected=""  value="1000-5000">1000-5000</option>
                                                <option value="5000-10000">5000-10000</option>
                                                <option value="10000-50000">10000-50000</option>
                                                <option value="50000-100000">50000-100000</option>
                                                <option value="100000-500000">100000-500000</option>
                                                <option value="500000以上">500000以上</option>
                                            </select>
                                            <p class='help-block'  style="display: none;"><font style='color:red'></font></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="line line-dashed b-b line-lg " style="margin-top: 55px;"></div>

                                <div class="form-group" >
                                    <div class="form-group" >
                                        <h5 class="col-sm-4 control-label" style="letter-spacing: 2px;padding-left: 126px;">自我介绍</h5>
                                        <div class="col-sm-8" style="margin-left: -85px;">
                                            <textarea style=" border:1px solid #cccccc;width: 500px;height: 200px;margin-left: 20px;" name="selfintroduction" id="requires"  placeholder="简单介绍一下自己，例如：特长、工作经历、性格特点!"  >本人性格开朗、稳重、有活力，待人热情、真诚；工作认真负责，积极主动，能吃苦耐劳，用于承受压力，勇于创新；有很强的组织能力和团队协作精神，具有较强的适应能力；纪律性强，工作积极配合；意志坚强，具有较强的无私奉献精神。
                                            </textarea>
                                            <p class='help-block'  style="display: none;"><font style='color:red'></font></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="line line-dashed b-b line-lg " style="margin-top: 55px;"></div>

                                </div>
                                <footer class="panel-footer text-right bg-light lter ">
                                    <div class="" style="text-align: center;">
                                        <div class="footer-btn">
                                            <div class="common-btn">
                                                <a href="javascript:void(0);" id="submitBtn">下一步</a>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                </footer>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="step-list">
                <div class="apply-finish">
                    <div class="apply-finish-header">
                        <img src="/IEkcpt3.0/IEkcpt3.0/Public/weihong/login/images/success.png" >
                        <div class="apply-finish-msg">您的简历已完善，请点击提交！</div>
                    </div>
                    <div class="apply-finish-footer">
                        <input type="submit" value="提 交" class="btn btn-primary subform-inline"
                               style="width: 180px;height: 50px;line-height: 40px;margin-bottom: 10px;">
                    </div>
                </div>
            </div>

        </form>
    </div>





<script type="text/javascript" src="/IEkcpt3.0/IEkcpt3.0/Public/weihong/login/js/index.js"></script>
<script src="/IEkcpt3.0/IEkcpt3.0/Public/weihong/login/static/lib/jquery/1.8/jquery.min.js"></script>
<script src="/IEkcpt3.0/IEkcpt3.0/Public/weihong/login/static/lib/jquery-step/js/jquery.step.js"></script>
<script>
    $(function() {
        var step= $("#myStep").step({
            animate:true,
            initStep:1,
            speed:1000
        });

        // $("#preBtn").click(function(event) {
        // 	var yes=step.preStep();

        // });
        $("#applyBtn").click(function() {

            var tname = $("#tname").val();
            // var myname = /^[\u4E00-\u9FA5]{2,4}$/;//2-4个汉字
             var sex = $('input:radio:checked').val();//male或femal
            var tphone = $("#tphone").val();
            var myphone = /^[1][3,4,5,7,8][0-9]{9}$/;

            var tmail = $("#tmail").val();
            var mytmail = /^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;

            $("#checktname").hide();
            $("#checktphone").hide();

            $("#checktmail").hide();

            if(tname == ""){
                $("#checktname font").html("姓名不能为空！");
                $("#checktname").show();
                return false;
            }
            // if (!myname.test(tname)) {
            // 	$("#checktname font").html("请输入正确的姓名格式！(2-4个汉字)");
            //     $("#checktname").show();
            //     return false;
            // }
            if(tphone == ""){
            	$("#checktphone font").html("联系方式不能为空！");
                $("#checktphone").show();
                return false;
            }
            // if(!myphone.test(tphone)){
            // 	$("#checktphone font").html("请输入正确格式的联系方式！(11位纯数字)");
            //     $("#checktphone").show();
            //     return false;
            // }

            if(!mytmail.test(tmail)){
            	$("#checktmail font").html("邮箱账号的格式不对！");
            	$("#checktmail").show();
            	return false;
            }


            var yes=step.nextStep();


        });

        $("#submitBtn").click(function() {

            var yes=step.nextStep();


        });

        // $("#goBtn").click(function(event) {
        // 	var yes=step.goStep(3);

        // });




    });



    //图片验证
    // function prophotos(){
    //     var user = document.getElementById("protupian").value;
    //     if(user.length == 0)
    //     {
    //         document.getElementById("errorprotupian").innerHTML="请选择项目LOGO！";
    //         document.getElementById("protupian").style.border = "1px solid red";
    //         return false;
    //     }else{
    //         document.getElementById("errorprotupian").innerHTML="";
    //         document.getElementById("protupian").style.border = "1px solid #EEEEEE";
    //     }
    // }

   /* function prophotos(){
        var touxiang = document.getElementById("protupian");
        // var woman = document.getElementById("woman");
        if(touxiang.checked!=true)
        {
            document.getElementById("errorprotupian").innerHTML="请选择您的照片";
            return false;

        }

        else{
            document.getElementById("errorprotupian").innerHTML="";
        }
    }*/

</script>
</div>

</body>
</html>