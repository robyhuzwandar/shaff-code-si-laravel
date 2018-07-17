<?php

namespace App\Listeners;

use App\Events\Event;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Unisharp\Laravelfilemanager\Events\ImageIsUploading;
use Illuminate\Support\Facades\Auth;
class IsUploadingImageListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function handle(ImageIsUploading $event)
    {
        if (!Auth::guard('web')->check()) {
            die('<p>You need to be logged in in order to upload files.</p>');
        }
    }
}
