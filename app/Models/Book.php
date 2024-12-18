<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    // 允許批量填充的欄位
    protected $fillable = [
        'title',
        'author',
        'description',
        'image',
        'status'
    ];
}
