<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class urlshort extends Model
{

	protected $table = 'urlshorts';
	protected $primarykey = 'id';

	protected $fillable = [
		'url',
		'short'
	];

    // use HasFactory;
}
