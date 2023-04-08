<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table = 'post';
    protected $fillable = [ 
        'id_user',
        'name',
        'email',
        'numberPhone',
        'address',
        'location',
        'skill',
        'amount',
        'type',
        'minMoney',
        'maxMoney',
        'status',
        'content',
        'title',
        'views',
        'timeEnd'
    ];

   
}
