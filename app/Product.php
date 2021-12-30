<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Support\Facades\Storage;

class Product extends Model
{



    use Sluggable;

    protected $guarded = [];



    public function category()
    {
        return $this->belongsTo(Category::class);

    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);

    }



    public function status()
    {
        return $this->belongsTo(Status::class);

    }

    public static function uploadImage(Request $request, $image = null)
    {
        if ($request->hasFile('thumbnail')){
            if($image){
                Storage::delete($image);
            }
            $folder = date('Y-m-d');
            return $request->file('thumbnail')->store("images/{$folder}");
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





    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
