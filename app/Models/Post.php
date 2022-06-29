<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'text',
        'category_id',
        'status'
    ];

    public function category()
    {
        return $this->belongsTo(category::class);
    }

}
