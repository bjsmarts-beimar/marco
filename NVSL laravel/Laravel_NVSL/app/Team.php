<?php

namespace NVSLOnline;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
	protected $table = 'Teams';

	protected $primaryKey = 'Id';

	public $timestamps = false;

	protected $fillable =[
		'TeamName',
		'IsHidden',
		'DivisionId'
	];
}
