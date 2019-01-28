<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
	protected $fillable = ['idPhotos', 'ImageLink', 'nbrLike', 'idEvents', 'idUsers'];


}
