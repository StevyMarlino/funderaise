<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Funderaise extends Model
{
    use HasFactory;

     protected $fillable = [
        'title',
        'category',
        'region',
        'description',
        'number',
        'file'
    ];

        public function user()
        {
            return $this->belongsTo(User::class);
        }
    
}
