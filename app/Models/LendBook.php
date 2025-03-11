<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LendBook extends Model
{
    protected $fillable = [
        'lend_number',
        'user_id',
        'book_id',
        'lend_date',
        'return_date',
        'status',
        'fine_cost'
    ];

    public function user() {
        return $this->belongsTo('users', 'user_id');
    }

    public function book() {
        return $this->belongsTo('books', 'book_id');
    }
}
