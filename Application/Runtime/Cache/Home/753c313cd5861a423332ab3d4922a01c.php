<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <title>指定视频的播放进度</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <script type="text/javascript">
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
            myVideo.play();
        }
    </script>
</head>
<body style="text-align:center">
<!-- HTML5新增的video标签，用于在网页里嵌入可以播放的视频 -->
<video width="320" height="240" controls="controls" id="myVideo">
    <!-- 提供了两种格式的视频文件，以适应不同浏览器对video的支持 -->
    <source src="/IEkcpt2.3/Public/Web/video/coursevideo3.mp4" type="video/mp4" />
    <source src="/IEkcpt2.3/Public/Web/video/coursevideo3.ogg" type="video/ogg" />
    对不起，您的浏览器暂不支持video视频标签!
</video>
<br/>
<input type="button" value="从头播放" onclick="playPause();"/>
<input type="button" value="从中间播放" onclick="playInMid();"/>
</body>
</html>