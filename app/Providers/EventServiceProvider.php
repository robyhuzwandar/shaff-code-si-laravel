<?php

namespace App\Providers;

use Illuminate\Support\Facades\Event;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Unisharp\Laravelfilemanager\Events\ImageIsUploading;
use Unisharp\Laravelfilemanager\Events\ImageWasUploaded;
use Unisharp\Laravelfilemanager\Events\ImageIsRenaming;
use Unisharp\Laravelfilemanager\Events\ImageWasRenamed;
use Unisharp\Laravelfilemanager\Events\ImageIsDeleting;
use Unisharp\Laravelfilemanager\Events\ImageWasDeleted;
use Unisharp\Laravelfilemanager\Events\FolderIsRenaming;
use Unisharp\Laravelfilemanager\Events\FolderWasRenamed;
use Unisharp\Laravelfilemanager\Events\ImageIsResizing;
use Unisharp\Laravelfilemanager\Events\ImageWasResized;
use Unisharp\Laravelfilemanager\Events\ImageIsCropping;
use Unisharp\Laravelfilemanager\Events\ImageWasCropped;

use App\Listeners\DeleteImageListener;
use App\Listeners\RenameImageListener;
use App\Listeners\IsUploadingImageListener;
use App\Listeners\HasUploadedImageListener;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'App\Events\Event' => [
            'App\Listeners\EventListener',
        ],
        ImageIsDeleting::class => [
            DeleteImageListener::class
        ],
        ImageIsRenaming::class => [
            RenameImageListener::class
        ],
        ImageIsUploading::class => [
            IsUploadingImageListener::class
        ],
        ImageWasUploaded::class => [
            HasUploadedImageListener::class
        ]
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}