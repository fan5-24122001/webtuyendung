<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Love extends Model
{
    use HasFactory;
    protected $table = 'post_favorite';
    protected $fillable = [ 
        'id',
        'post_id',
        'user_id'
    ];
}
