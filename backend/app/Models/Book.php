<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    // テーブル名指定
    // protected $table = 'actress';

    // 設定するカラム指定
    protected $fillable = [
        'book_name',
        'author',
        'likes'
    ];
}
