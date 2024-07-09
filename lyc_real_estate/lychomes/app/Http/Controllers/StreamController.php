<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Raju\Streamer\Helpers\VideoStream;

class StreamController extends Controller
{

    public function stream(Request $request, $filename)
    {
        $videosDir      = public_path('index2/img/videos');
        Log::debug($videosDir."/".$filename);
        if (file_exists($filePath = $videosDir."/".$filename)) {
            $stream = new VideoStream($filePath);
            return response()->stream(function() use ($stream) {
                $stream->start();
            });
        }
        return response("File doesn't exists", 404);
    }
}
