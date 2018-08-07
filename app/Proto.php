<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Proto extends Model
{
  use SoftDeletes;
  protected $dates = ['deleted_at'];
    //Relationship With User
    public function users()
    {
        return $this->belongsToMany('App\User');
    }
}
