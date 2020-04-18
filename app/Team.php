<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
	//
	protected $table = 'team';
    protected $fillable = ['name', 'image', 'intelligence', 'strength', 'speed', 'durability', 'power', 'combat'];
}