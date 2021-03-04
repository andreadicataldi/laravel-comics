<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
  protected $fillable = ['title', 'description', 'price', 'availability', 'slug', 'cover'];

  public function getRouteKeyName()
  {
    return 'slug';
  }
}
