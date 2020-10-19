<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movies extends Model
{
    protected $fillable = [
        'IMDB', 'genre_id', 'pic_link', 'title','description'
    ];
}
