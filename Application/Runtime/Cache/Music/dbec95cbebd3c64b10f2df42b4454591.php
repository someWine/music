<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="initial-scale=1,minimum-scale=1" />
    <meta name="keywords" content="极会玩,gofuns,gofuns.top,音乐,听歌,MV" />
    <meta name="description" content="随时随地感受音乐的魅力，让你乐在其中！"/>
    <meta name="application-name" content="极会玩"/>
    <title>听音乐-音随心动</title>
    <meta name="baidu-site-verification" content="iIVPjACiQN" />
    <meta name="360-site-verification" content="dd09ad53881cc0e08d4b69799fd79406" />
    <link rel="stylesheet" href="/music/Public/css/index.css">
    <link rel="stylesheet" href="/music/Public/css/video-js.min.css">
    <link rel="shortcut icon" type="image/x-icon" href="/music/Public/images/favicon.ico">
    <script>
        var apiUrl={
            getMusic:"<?php echo U('Api/getMusic');?>",
            getMv:"<?php echo U('Api/getMv');?>",
            getAlbum:"<?php echo U('Api/getAlbum');?>",
            getMv:"<?php echo U('Api/getMv');?>",
            cookieMusic:"<?php echo U('Api/cookieMusic');?>"
        };
        var img="/music/Public";
    </script> 
</head>
<body>
    <div class="fm-header">
        <div class="love">
            <div class="ico"></div> 
            <span class="mylove">我的收藏</span>
        </div>
        <div class="backimg">背景图</div>
    </div>
    <div class="cont">        
        <input type="image" src="/music/Public/images/102253-106.jpg" alt="">
        <input type="image" src="/music/Public/images/130796-106.jpg" alt="">
        <input type="image" src="/music/Public/images/forenoon.jpg" alt="">                   
        <input type="image" src="/music/Public/images/midnight.jpg" alt="">
        <input type="image" src="/music/Public/images/327533-106.jpg" alt="">
        <input type="image" src="/music/Public/images/329174-106.jpg" alt="">
        <P class="ba_close">×</P>
    </div>
    <div class="fm-player">
        <img src="http://p3.music.126.net/zbX8a1sTEnZL2cQ5oEFz_A==/69269232562638.jpg" alt="">
        <p id="name" mid="66476">偏偏喜欢你</p>
        <p id="album" alid="6519">《偏偏喜欢你》</p>
        <p id="artists">陈百强</p>
        <div class="fm-play-panel">
            <ul>
                <li class="fm-play">
                    <a class="play" hidefocus="true" title="暂停[空格键]" href="javascript:;"></a>
                </li>
                <li class="fm-next">
                    <a hidefocus="true" title="下一首[→]" href="javascript:;"></a>
                </li>
                <li class="fm-favor">
                    <a hidefocus="true" title="收藏" href="javascript:;"></a>
                </li>
                <li class="fm-trashcan">
                    <a hidefocus="true" title="垃圾桶" href="javascript:;"></a>
                </li>
            </ul>
        </div>
        <div class="progressbar">
            <div class="progress"></div>
        </div>
        <div id="fmTime" class="time">
        <span class="curTime">00:00</span>
        <span>/</span>
        <span class="totalTime">00:00</span>
        </div>


        <div id="fmVol" class="clearfix">
            <a class="fm-mute" title="音量控制" hidefocus="true" href="javascript:;"></a>
            <div id="fmVolSlider" class="fm-vol-slider" >
                <div class="ui-slider-range" style="width: 100%;">
                </div>
                
            </div>
        </div>
       


        <div class="fm-operation">
        <a class="fm-download" hidefocus="true" title="下载" href="javascript:;"></a>
        <a class="fm-mv" hidefocus="true" title="MV" href="javascript:;"></a>
        </div>




    </div>
    <div class="fm-lrc"></div>
    <div class="fm-love"></div>
    <div class="search">
        <input type="text" placeholder="单曲/歌手/专辑" />
        <input type="button" value="搜索"/>
    </div>
    <div class="fm-result">
        
    </div>


        
  <audio src="http://m2.music.126.net/rPTZ16ExH1Z9k-vTjvVZlA==/5688873162226787.mp3" id="mp3"></audio>

  <div id="opt"></div>

  <div id="popmp4">
      <div class="close"></div>
      <!-- <video id="mp4" class="video-js vjs-default-skin vjs-big-play-centered" controls preload="none"  width="640" height="480"data-setup="{}">
        <source src="" type='video/mp4' />
      </video> -->
  </div>
  <div id="mask"></div>
  <div id='share'><img src="/music/Public/images/share.png" alt=""></div>
  <div id='weixin'>
      <img src="/music/Public/images/weixin.jpg" alt="">
      <p>关注公众微信号在微信上体验听歌的乐趣，还有更多的新奇玩法等你来体验。</p>
  </div>
</body>
    <script src="/music/Public/js/video.min.js"></script>
    <script src="/music/Public/js/jquery-1.12.4.js"></script>
    <script src="/music/Public/js/jquery.cookie.js"></script>
    <script src="/music/Public/js/index.js"></script>
</html>