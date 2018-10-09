<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public $incrementing = false;

    protected $fillable = ['id','message','title','date_needed','initiated_by','job'];
}
