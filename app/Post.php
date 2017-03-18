<?php

namespace Slomemes;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
 protected $fillable = [
        'user_id', 'naslov', 'url',
    ];
}
