<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    protected $fillable = [
        
            'title',
            'description',
            'author',
            'publishing_house',
            'number_of_pages',
            'thumb',
            'edition',
            'price',
            'created_at',
            'updated_at',
    ];
}
