<?php

namespace App\Models;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'slug','id_category','id_category','id_user','content','image','description']; // Define fillable attributes

    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }
    public function category(){
        return $this->belongsTo(Category::class,'id_category');
    }
    // public function comment(){
    //     return $this->hasMany(Comment::class);
    // }
}
