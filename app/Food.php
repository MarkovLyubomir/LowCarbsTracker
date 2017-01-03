<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
	protected $fillable = [
		'id',
		'name',
		'water',
		'proteins',
		'fats',
		'carbs',
		'calories'
	];
}
