<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Image\Manipulations;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Blog extends Model implements HasMedia
{
    use HasFactory, SoftDeletes, InteractsWithMedia;

    protected $fillable = [
        'title',
        'slug',
        'meta_title',
        'meta_description',
        'short_description',
        'content',
        'is_active',
        'published_at'
    ];

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('large')
            ->fit(Manipulations::FIT_MAX, 800, 600);

        $this->addMediaConversion('medium')
            ->fit(Manipulations::FIT_MAX, 400, 300);
            
        $this->addMediaConversion('thumb')
            ->fit(Manipulations::FIT_MAX, 150, 150);
    }
}
