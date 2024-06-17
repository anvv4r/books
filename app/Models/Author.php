<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    protected $fillable = [
        'slug',
        'name',
    ];

    public function books()
    {
        return $this->belongsToMany(Book::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function getFullNameAttribute()
    {
        return $this->name;
    }

    public function getBioExcerptAttribute()
    {
        return substr($this->bio, 0, 100);
    }

}
