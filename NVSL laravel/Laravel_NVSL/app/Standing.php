<?php

namespace NVSLOnline;

use Illuminate\Database\Eloquent\Model;

class Standing extends Model
{
    protected $table = 'Standings';

	protected $primaryKey = 'Id';
	protected $id = 'Id';

	public $timestamps = false;

	protected $fillable =[
		'Wins',
		'Losses',
		'Ties',
		'Points',
		'GoalsFor',
		'GoalsAgainst',
		'IsHidden',
		'DivisionId',
		'TeamId'
	];
}
