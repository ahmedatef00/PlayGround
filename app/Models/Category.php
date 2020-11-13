<?php

namespace App\Models;


use Jenssegers\Mongodb\Eloquent\Model as Eloquent;


class Category extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'categories';


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [
    ];


    public function books(){

      return  $this->hasMany(Book::class);
    }
}
