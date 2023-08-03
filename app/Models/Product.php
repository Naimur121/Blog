<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    private static $data, $image, $imageNewName, $directory, $imgUrl,$str;
    public static function addProduct($request)
    {
        if ($request->id) {
            self::$data = Product::find($request->id);
            if ($request->image) {
                if (file_exists(self::$data->image)) {
                    unlink(self::$data->image);
                }
                self::$data->image = self::getImgurl($request);
            } else {
                self::$data->image = self::$data->image;
            }
        } else {
            // $request->validate([
            //     'name'           =>'required',
            //     'slug '          =>'required',
            //     'price'          =>'required',
            //     'image'          =>'required',
            //     'styled_radio'   =>'required'
            // ]);
            self::$data = new Product();
            self::$data->image = self::getImgurl($request);
        }
        self::$data->brand_name        = $request->brand_name;
        self::$data->name              = $request->name;
        self::$data->slug              = self::makeSlug($request);;
        self::$data->year              = $request->year;
        self::$data->fuel_type         = $request->fuel_type;
        self::$data->stock             = $request->stock;
        self::$data->milage            = $request->milage;
        self::$data->engine            = $request->engine;
        self::$data->transmission      = $request->transmission;
        self::$data->drive             = $request->drive;
        self::$data->exterior_color    = $request->exterior_color;
        self::$data->interior_color    = $request->interior_color;
        self::$data->price             = $request->price;
        self::$data->short_description = $request->short_description;
        self::$data->long_description  = $request->long_description;
        self::$data->status            = $request->styled_radio;
        self::$data->save();
        return self::$data;
    }
    public static function getImgurl($request)
    {
        self::$image = $request->file('image');
        self::$imageNewName = rand() . '.' . self::$image->Extension();
        self::$directory = 'admin/product-image/';
        self::$imgUrl = self::$directory . self::$imageNewName;
        self::$image->move(self::$directory, self::$imageNewName);
        return self::$imgUrl;
    }
    private static function makeSlug($request){
        if ($request->slug){
            $str = $request->slug;
            return preg_replace('/\s+/u','-',trim($str));
        }else{
            $str = $request->name;
            return preg_replace('/\s+/u','-',trim($str));
        }

    }
    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
    public function brands()
    {
        return $this->hasMany(Brand::class,'brand_name','brand_name');
    }
    public function otherImage()
    {
        return $this->hasMany(OtherImage::class);
    }
    public static function delete_item($request)
    {
        self::$data = Product::find($request->id);
        if (self::$data->image) {
            if (file_exists(self::$data->image)) {
                unlink(self::$data->image);
            }
        }
        self::$data->delete();
    }
}
