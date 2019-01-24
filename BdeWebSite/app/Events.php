<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    protected $fillable = ['idEvent', 'owner', 'title', 'date', 'description', 'validated', 'imageLink', 'like', 'vote','recurent', 'payable'];
}

