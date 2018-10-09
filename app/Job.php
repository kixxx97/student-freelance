<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    public $incrementing = false;

    protected $fillable = ['name'];
}
