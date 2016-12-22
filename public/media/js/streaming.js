'use strict';

navigator.getUserMedia = navigator.getUserMedia || navigator.webkitGetUserMedia || 
navigator.mozGetUserMedia || navigator.msGetUserMedia || navigator.oGetUserMedia;



var constraints = {
    video: true, 
    audio: true
  };
  
var video = document.querySelector("#videoElement");

var stopButton = document.getElementById('stop');
var startButton = document.getElementById('start');
var videoTracks;
var audioTracks;

 
startButton.addEventListener('click', function() {
});


stopButton.addEventListener('click', function() {
    // Stop all video streams.

      videoTracks.forEach(function(track) { track.stop() });
      audioTracks.forEach(function(track) { track.stop() });
    });

 
  function handleVideo(stream) {
    //pc = new RTCPeerConnection(configuration);
    video.src = window.URL.createObjectURL(stream); 
    videoTracks = stream.getVideoTracks();
    audioTracks = stream.getAudioTracks();
    
  }
 
  function videoError(e) {
      // do something
  }


if (navigator.getUserMedia) {       
     navigator.getUserMedia(constraints, handleVideo, videoError);
  }



