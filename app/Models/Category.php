<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'slug',
        'name',
        'left',
        'right',
    ];

    public function books()
    {
        return $this->hasMany(Book::class);
    }

    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id');
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
