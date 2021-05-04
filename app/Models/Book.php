<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'name',
        'img',
        'desc',
        'auth_id',
        'category_id',
        'status_id',
        'product_id'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function auth()
    {
        return $this->belongsTo(Auth::class, 'auth_id');
    }

    public function status()
    {
        return $this->belongsTo(Status::class, 'status_id');
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
