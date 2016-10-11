<?php
namespace App\Http\Controllers;

use bitcodin\Bitcodin;
use bitcodin\VideoStreamConfig;
use bitcodin\AudioStreamConfig;
use bitcodin\Job;
use bitcodin\JobConfig;
use bitcodin\Input;
use bitcodin\HttpInputConfig;
use bitcodin\EncodingProfile;
use bitcodin\EncodingProfileConfig;
use bitcodin\ManifestTypes;
use bitcodin\Output;
use bitcodin\FtpOutputConfig;

use App\Http\Controllers\Controller;

//require_once __DIR__.'/vendor/autoload.php';

class StreamingController extends Controller{

/* CONFIGURATION */
	public function getinit()
	{
		Bitcodin::setApiToken('bc74b7f40d2274953f8944e5f8162cec54a105e1a20803f237e69cc3a523e395');
		/* CREATE ENCODING PROFILE FOR YOUR LIVE STREAM */
		$encodingProfileConfig = new EncodingProfileConfig();
		$encodingProfileConfig->name = 'Live Stream Profile';
		/* CREATE VIDEO STREAM CONFIGS */
		$low = new VideoStreamConfig();
		$low->bitrate = 1000000;
		$low->height = 480;
		$low->width = 854;
		$encodingProfileConfig->videoStreamConfigs[] = $low;
		$medium = new VideoStreamConfig();
		$medium->bitrate = 1500000;
		$medium->height = 720;
		$medium->width = 1280;
		$encodingProfileConfig->videoStreamConfigs[] = $medium;
		$high = new VideoStreamConfig();
		$high->bitrate = 3000000;
		$high->height = 1080;
		$high->width = 1920;
		$encodingProfileConfig->videoStreamConfigs[] = $high;
		/* CREATE AUDIO STREAM CONFIGS */
		$audio = new AudioStreamConfig();
		$audio->bitrate = 128000;
		$encodingProfileConfig->audioStreamConfigs[] = $audio;
		echo "HELLOO!!!!";
	}	


	public function getCam(){
		return view('performers/video');
	}

}