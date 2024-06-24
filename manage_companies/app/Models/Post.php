<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Intervention\Image\Imagick\Commands\FitCommand;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Post extends Model implements HasMedia
{
    use InteractsWithMedia;

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('preview')
             ->width(100)
             ->height(50);

    }


}
