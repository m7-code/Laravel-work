<?php


namespace App\Models;
use App\Models\Post;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public function posts(){
        return $this->hasMany(Post::class);
    }

    // protected static function booted()
    // {
    //     static::deleted(function ($user):void {
    //         // jab user delete ho
    //         $user->post()->delete();
    //     });
    // }

     public function scopeHasPosts($query)
    {
        return $query->whereHas('posts');
    }
}
