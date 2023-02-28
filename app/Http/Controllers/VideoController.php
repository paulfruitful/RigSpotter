<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    //
    public function all(){
        $videos=Video::latest();
        return view('videos',compact('videos'));

    }
}
