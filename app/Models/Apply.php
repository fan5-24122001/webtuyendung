<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apply extends Model
{
    use HasFactory;
    protected $table = 'apply';
    protected $fillable = [
        'id_user',
        'id_post',
        'name',
        'email',
        'numberPhone',
        'fileCV','status'
    ];
}
