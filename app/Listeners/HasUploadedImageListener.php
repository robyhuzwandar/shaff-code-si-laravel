<?php

namespace App\Listeners;

use App\Events\Event;
use App\Post;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Unisharp\Laravelfilemanager\Events\ImageWasUploaded;

class HasUploadedImageListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */


    /**
     * Handle the event.
     *
     * @param  Event  $event
     * @return void
     */
    public function handle(ImageWasUploaded $event)
    {
        $publicFilePath = str_replace(public_path(),"",$event->path());
        Post::create([
            'path' =>$publicFilePath
        ]);
    }
}
