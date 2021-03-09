<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE >
<html>
<head>
    <title>登录|注册</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script src="https://cdn.jsdelivr.net/npm/jquery@1.12.4/dist/jquery.min.js"></script>
    <script type="text/javascript" src="/iekcpt/Public/Web/js/jquery-1.9.0.min.js"></script>
    <script type="text/javascript" src="/iekcpt/Public/Web/js/login.js"></script>
    <script src="/iekcpt/Public/Web/js/jquery.min.js"></script>
    <script src="/iekcpt/Public/Web/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="/iekcpt/Public/Web/css/bootstrap.min.css">
    <link href="/iekcpt/Public/Web/css/login2.css" rel="stylesheet" type="text/css" />
    <script>

        $(function () {
            $("[data-toggle='popover']").popover();
        });
        $(document).ready(function() {

            $('#YHSelected').change(function(event) {
                var ch = $('#YHSelected').val();
                /* Act on the event */
                switch(ch){

                    case "学生":
                        $('#u').val("201711104089");
                        $('#p').val("123");

                        break;
                    case "教师":
                        $('#u').val("teacher");
                        $('#p').val("123");
                        break;
                    case "企业":
                        $('#u').val("company");
                        $('#p').val("123");
                        break;

                }
            });


        });

    </script>

</head>
<body style="background: url(/iekcpt/Public/Web/images/bj0827.16.47.jpg) 50% 0 no-repeat;background-color: #3E4154">
<div style="text-align: center; ">
    <img src="/iekcpt/Public/Web/images/logofuben1.png"   width="285px" height=""  style="text-align: center;margin-top: 100px;">
    <label id="myprojectlogo"></label>

<div class="login" style="margin-top: 30px;">
    <div class="header">
        <div class="switch" id="switch">
            <a class="switch_btn_focus" id="switch_qlogin" href="javascript:void(0);" tabindex="7">快速登录</a>
            <a class="switch_btn" id="switch_login" href="javascript:void(0);" tabindex="8">快速注册</a>
            <!--<a class="btn" title="提示"-->
               <!--data-container="body" data-toggle="popover" data-placement="right"-->
               <!--data-content="学生的账号长度为12-->
            <!--教师的账号长度为10-->
            <!--企业的账号长度为8">提示</a>-->
            <div class="switch_bottom" id="switch_bottom" style="position: absolute; width: 64px; left: 0px;"></div>
        </div>
    </div>
    <div class="web_qr_login" id="web_qr_login" style="display: block; height: 400px ;">
        <!--登录-->
        <div class="web_login" id="web_login">
            <div class="login-box">
                <div class="login_form">
                    <form  method="post" action="<?php echo U('Login/login');?>" accept-charset="utf-8" id="login_form"
                           class="loginForm form-inline"  id="login_form" >
                        <input type="hidden" name="did" value="0" />
                        <input type="hidden" name="to" value="log" />
                        <div class="form-group">
                            <div style="display: inline;line-height: 30px;">
                            <label style="line-height: 30px,width:50px;font-size: 16px;margin-left:-18px;">身份:</label>
                                <select style="width: 200px;margin-left: 10px;" class="form-control" id="YHSelected"  name="leibei" >
                                    <option value="">请选择</option>
                                    <option value="学生" onclick="choosestu()">学生</option>
                                    <option value="教师">教师</option>
                                    <option value="企业">企业</option>
                                </select>
                            </div>
                        </div>
                        <div class="uinArea" id="uinArea">
                            <label class="input-tips" for="u">帐号：</label>
                            <div class="inputOuter" id="uArea">
                                <input type="text" id="u" name="sid"  class="inputstyle" />
                            </div>
                        </div>
                        <div class="pwdArea" >
                            <label class="input-tips" for="p">密码：</label>
                            <div class="inputOuter" >
                                <input type="password" id="p" name="spwd" class="inputstyle" />
                            </div>
                        </div>
                        <div class="pwdArea" id="pwdArea">
                            <label class="input-tips" for="p" style="font-size: 12px;">验证码：</label>
                            <div class="inputOuter" id="pArea" style="display: block;">
                                <input type="text"  name="captcha" class="inputstyle" /> <img src="<?php echo U('Verify/verify');?>"  style="cursor: pointer;display: block; margin-top: 3px;" title="点击更换图片" onclick="this.src='<?php echo U('Verify/verify');?>'" />
                            </div>
                        </div>

                        <div style="padding-left:50px;margin-top:75px;">
                            <input type="submit" value="登 录" style="width:150px;" class="button_blue" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!--登录end-->
    </div>
    <!--注册-->
    <div class="qlogin" id="qlogin" style="display: none; ">
        <div class="web_login">
            <form  method="post"  action="<?php echo U('Login/addzc');?>" id="regUser"  >
                <!--  <input type="hidden" name="to" value="reg" />
                  <input type="hidden" name="did" value="0" />-->
                <ul class="reg_form" id="reg-ul">
                    <div class="form-group">
                        <label class="input-tips2"  >身份:</label>
                        <div class="inputOuter2">
                            <select class="form-control" name="leibei">
                                <option value="">请选择</option>
                                <option  value="学生">学生</option>
                                <option value="教师">教师</option>
                                <option value="企业">企业</option>
                            </select>
                        </div>
                    </div>
                    <li>
                        <label for="user1" class="input-tips2">账号：</label>
                        <div class="inputOuter2">
                            <input type="text" id="user1" name="sid" maxlength="16" class="inputstyle2" />
                        </div>
                    </li>
                    <li>
                        <label for="passwd2" class="input-tips2">密码：</label>
                        <div class="inputOuter2">
                            <input type="password" id="passwd2" name="spwd" maxlength="16" class="inputstyle2"  />
                        </div>
                    </li>
                    <li>
                        <label for="passwd2" class="input-tips2">确认密码：</label>
                        <div class="inputOuter2">
                            <input type="password" id="passwd21" name="respwd" maxlength="16" class="inputstyle2" />
                        </div>
                    </li>
                    <li>
                        <label  class="input-tips2">姓名：</label>
                        <div class="inputOuter2">
                            <input type="text" id="passwd" name="name" maxlength="16" class="inputstyle2" />
                        </div>
                    </li>
                    <li>
                        <div class="inputArea">
                            <input type="submit" id="reg" style="margin-top:10px;" class="button_blue" value="同意协议并注册" />
                            <a href="<?php echo U('Login/zcxy');?>" class="zcxy" target="_blank">注册协议</a>
                        </div>
                    </li>
                    <div class="cl"></div>
                </ul>
            </form>
        </div>
    </div>
    <!--注册end-->
</div>
</div>
</body>
</html>