<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['content','id_post','id_user']; // Define fillable attributes

    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class,'id_user');
    }
}
