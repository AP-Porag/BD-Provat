<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use UniSharp\LaravelFilemanager\Events\ImageWasUploaded  ;
use Image;

class ResizeUploadedImage
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  ImageWasUploaded   $event
     * @return void
     */
    public function handle(ImageWasUploaded   $event)
    {

        // Grab the uploaded file's path
        $imagePath = $event->path();

        // Open the image file
        $img = Image::make($imagePath);

        // Insert the watermark
        $img->insert(base_path('/public/settings-images/watermark.png'), 'bottom');

        // Save the image
        $img->save($imagePath);
//        $path = $event->path();
//        $image = Image::make($path);
//        if($image->width() < 1100) {
//            return;
//        }
//        // resize the image to a width of 1100 and constrain aspect ratio (auto height)
//        $image->resize(1100, null, function ($constraint) {
//            $constraint->aspectRatio();
//        })->save($path);


    }
}
