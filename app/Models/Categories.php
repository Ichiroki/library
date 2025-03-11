<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $fillable = [
        'id',
        'name',
        'slug'
    ];

    public function books() {
        return $this->hasMany('books');
    }
}
