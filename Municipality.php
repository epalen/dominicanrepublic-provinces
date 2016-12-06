<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Municipality extends Model
{
    protected $table = 'municipalities';

	protected $fillable = ['name', 'province_id'];

	// Relation with Province
    public function province()
    {
        return $this->belongsTo('App\Province', 'province_id');
    }

    // Relation with District
    public function district()
    {
        return $this->hasMany('App\District');
    }
}
