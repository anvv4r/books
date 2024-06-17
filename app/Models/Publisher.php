<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publisher extends Model
{
    use HasFactory;

    protected $fillable = [
        'slug',
        'name',
    ];

    public function books()
    {
        return $this->hasMany(Book::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function getFullNameAttribute()
    {
        return $this->name;
    }

    public function getBooksCountAttribute()
    {
        return $this->books->count();
    }
}
