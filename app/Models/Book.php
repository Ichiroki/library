<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public $primaryKey = 'id';

    protected $fillable = [
        'id',
        'title',
        'author',
        'publisher',
        'date_publish',
        'categories_id',
        'stock',
        'page',
        'description'
    ];

    public function categories() {
        return $this->belongsTo('categories', 'categories_id');
    }
}
