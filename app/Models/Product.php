<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable = ['name', 'slug', 'description', 'reviews', 'price', 'file'];
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}
