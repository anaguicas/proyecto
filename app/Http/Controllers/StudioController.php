<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;


class StudioController extends Controller
{
    function showPerformers(){  	
    	 $performers = DB::table('Performers')->get();
    }

    

}
