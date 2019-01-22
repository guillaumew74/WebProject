<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    protected $fillable = ['idEvent', 'owner', 'title', 'date', 'description', 'validated', 'imageLink', 'like', 'vote'];
}

