<?php
// File: app/Models/Post.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'content']; // Sesuaikan dengan atribut yang dimiliki oleh model Post

    // Contoh relasi jika diperlukan
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
