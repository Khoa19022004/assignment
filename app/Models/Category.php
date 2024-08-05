<?php

namespace App\Models;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['ten_loai', 'slug','image']; // Define fillable attributes

    // Mutator to automatically generate slug from title
    public function setTenLoaiAttribute($value)
    {
        $this->attributes['ten_loai'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }
    public function posts(){
        return $this->hasMany(Posts::class,'id_category');
    }
}
