<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;
    protected $table = 'status';
    protected $guarded = [];

    public function books()
    {
        return $this->hasMany(Book::class, 'status_id');
    }
}
