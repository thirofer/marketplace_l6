<?php


namespace App\Traits;

use Illuminate\Http\Request;

trait UploadTrait
{
    private function imageUpload (Request $request, $imageColumn)
    {
        $images = $request->file('photos');

        $uploadedImages = [];

        foreach($images as $image) {
            $uploadedImages[] =  [$imageColumn => $image->store('products', 'public')];
        }

        return $uploadedImages;
    }
}