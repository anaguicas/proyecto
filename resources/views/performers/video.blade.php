	<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta content="stuff, to, help, search, engines, not" name="keywords">
<meta content="What this page is about." name="description">
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
    <video autoplay="true" id="videoElement">
     
    </video>
</div>

<button id="stop">Stop</button>
<button id="start">Start</button>

<script>
	var video = document.querySelector("#videoElement");
	var stopButton = document.getElementById('stop');
	var startButton = document.getElementById('start');
	var videoTracks;
	var audioTracks;
	
 
	startButton.addEventListener('click', function() {
		navigator.getUserMedia = navigator.getUserMedia || navigator.webkitGetUserMedia || navigator.mozGetUserMedia || navigator.msGetUserMedia || navigator.oGetUserMedia;
 
		if (navigator.getUserMedia) {       
	    	navigator.getUserMedia({video: true, audio: true}, handleVideo, videoError);
		}
	});
 
	function handleVideo(stream) {
		pc = new RTCPeerConnection(configuration);
		videostream = window.URL.createObjectURL(stream); 
		videoTracks = stream.getVideoTracks();
		audioTracks = stream.getAudioTracks();
		video.src = videostream;


	}
 
	function videoError(e) {
    	// do something
	}

	stopButton.addEventListener('click', function() {
		// Stop all video streams.

    	videoTracks.forEach(function(track) { track.stop() });
    	audioTracks.forEach(function(track) { track.stop() });
    });


</script>
</body>
</html>