<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta content="Display Webcam Stream" name="title">
<title>Display Webcam Stream</title>

  
<style>
#container {
    margin: 0px auto;
    width: 500px;
    height: 375px;
    border: 10px #333 solid;
}
#videoElement {
    width: 500px;
    height: 375px;
    background-color: #666;
}
</style>
</head>
  
<body>
<div id="container">
    <video id="videoElement" autoplay> </video>
</div>
<button id="stop">Stop</button>
<button id="start">Start</button>
</body>



 {!! Html::script('media/js/streaming.js') !!}
 {!! Html::script('media/js/lib/adapter.js') !!}

</html>