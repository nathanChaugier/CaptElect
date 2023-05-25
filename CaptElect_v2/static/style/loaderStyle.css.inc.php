<?php
    require_once('config.php');
?>
.loader{
  width: 50px;
  height: 50px;
  border-radius: 100%;
  position: relative;
  margin: 0 auto;
  margin-top: 10px;
}

#loader-1:before, #loader-1:after{
  content: "";
  position: absolute;
  top: -10px;
  left: -10px;
  width: 100%;
  height: 100%;
  border-radius: 100%;
  border: 10px solid transparent;
  border-top-color: <?=$themes[$_COOKIE['themUsed']]['fg']?>;
}

#loader-1:before{
  z-index: 100;
  animation: spin 1.5s infinite;
}

#loader-1:after{
  border: 10px solid <?=$themes[$_COOKIE['themUsed']]['headerBg']?>;
}

@keyframes spin{
  0%{
    -webkit-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  
  100%{
    -webkit-transform: rotate(360deg);
    -ms-transform: rotate(360deg);
    -o-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}