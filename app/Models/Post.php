<?php

namespace App\Models;

use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'author',   
        'body',
        'category_id',
        'user_id'
    ];

    protected $with = [
        'user', 
        'category'
    ];

    public function scopeFilter($query, array $fillters)
    {
        /**
         *   sama seperti dibawah
         * 
             if (isset($fillters['search']) ? $fillters['search'] : false) {
                 return $query
                    ->where('title', 'like', '%' . $fillters['search'] . '%');
            }
         * 
         */

        $query->when($fillters['search'] ?? false, function ($query, $search) {
            return $query->where('title', 'like', '%' . $search . '%');
        });
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}