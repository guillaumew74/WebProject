<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
	 protected $fillable = ['iDArticles', 'name','description','quantity', 'price','sold','imageLink', 'categorie'];
}

	

	

