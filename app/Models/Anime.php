<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pokemon extends Model
{
    protected $fillable = [
        'nom',
        'description',
        'img_url',
        'date',
        'note',
    ];
}