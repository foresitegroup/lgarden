<?php
$PageTitle = "Media";
include "header.php";
?>

<div id="main">
  <h2>Media</h2>
  
  <h3>The Morning Blend (Milwaukee, WI) - May 8, 2013</h3>
  <iframe width="696" height="392" src="http://www.youtube.com/embed/BObi-Lao3dA?rel=0" frameborder="0" allowfullscreen></iframe><br>
  <br>
  
  
  <h3>LGarden Assembly</h3>
  <iframe width="696" height="392" src="http://www.youtube.com/embed/MOvkOeaHg1Q?rel=0" frameborder="0" allowfullscreen></iframe><br>
  <br>
  
  
  <h3>The Villages Daily Sun (Orlando, FL) - May 11, 2013</h3>
  <a href="images/tvds20130511a.jpg" rel="fancybox"><img src="images/tvds20130511a.jpg" alt="" style="height: 325px; vertical-align: middle;"></a>
  <a href="images/tvds20130511b.jpg" rel="fancybox"><img src="images/tvds20130511b.jpg" alt="" style="height: 325px; vertical-align: middle;"></a>
  <a href="tvds20130511.php" rel="fancybox-text">Read the article</a><br>
  <br>
  
  
  <h3>LGarden on Designer Yard Show, WTMJ 620 (Milwaukee, WI) - May 11, 2013</h3>
  <script type="text/javascript">
    $(document).ready(function(){
      $("#jquery_jplayer_1").jPlayer({
        ready: function () {
          $(this).jPlayer("setMedia", {
            mp3: "audio/2013-05-11_WTMJ.mp3"
          });
        },
        swfPath: "inc/jplayer",
        solution: "flash,html",
        supplied: "mp3",
        wmode: "window"
      });
    });
  </script>
  <div id="jquery_jplayer_1" class="jp-jplayer"></div>
  <div id="jp_container_1" class="jp-audio">
    <div class="jp-type-single">
      <div class="jp-gui jp-interface">
        <ul class="jp-controls">
          <li><a href="javascript:;" class="jp-play" tabindex="1">play</a></li>
          <li><a href="javascript:;" class="jp-pause" tabindex="1">pause</a></li>
          <li><a href="javascript:;" class="jp-stop" tabindex="1">stop</a></li>
          <li><a href="javascript:;" class="jp-mute" tabindex="1" title="mute">mute</a></li>
          <li><a href="javascript:;" class="jp-unmute" tabindex="1" title="unmute">unmute</a></li>
          <li><a href="javascript:;" class="jp-volume-max" tabindex="1" title="max volume">max volume</a></li>
        </ul>
        <div class="jp-progress">
          <div class="jp-seek-bar">
            <div class="jp-play-bar"></div>
          </div>
        </div>
        <div class="jp-volume-bar">
          <div class="jp-volume-bar-value"></div>
        </div>
        <div class="jp-time-holder">
          <div class="jp-current-time"></div>
          <div class="jp-duration"></div>
          <ul class="jp-toggles">
            <li><a href="javascript:;" class="jp-repeat" tabindex="1" title="repeat">repeat</a></li>
            <li><a href="javascript:;" class="jp-repeat-off" tabindex="1" title="repeat off">repeat off</a></li>
          </ul>
        </div>
      </div>
      <div class="jp-no-solution">
        <span>Update Required</span>
        To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>.
      </div>
    </div>
  </div>
</div> <!-- END main -->

<div id="sidebar">
  The LGarden contains enough space for 15 mature vegetable plants
</div> <!-- END sidebar -->

<?php include "footer.php"; ?>