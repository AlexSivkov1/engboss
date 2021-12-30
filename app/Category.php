<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class Category extends Model
{
    use Sluggable;

    protected $guarded = [];

    public function products()
    {
        return $this->hasMany(Product::class);
    }


    public function brands()
    {
        return $this->hasMany(Brand::class);
    }


    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public static function uploadImage(Request $request, $image = null)
    {
        if ($request->hasFile('thumbnail')){
            if($image){
                Storage::delete($image);
            }
            $folder = date('Y-m-d');
            return $request->file('thumbnail')->store("cats_images/{$folder}");
        }
        return null;

    }

    public function getImage()
    {
        if (!$this->thumbnail) {
            return asset("no-image.jpeg");
        }
        return asset("uploads/{$this->thumbnail}");
    }
}