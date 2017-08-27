<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class YearEstreno extends Model
{
    protected $table = 'pelis';
	protected $primaryKey = 'year_estreno.year_a';	
    public $incrementing = false;
	public $timestamps = false;
}
