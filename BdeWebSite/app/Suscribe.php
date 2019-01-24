<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suscribe extends Model
{
   protected $fillable = ['id', 'idEvents', 'idUsers'];
}
