<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    protected $table = 'districts';

	protected $fillable = ['name', 'municipality_id'];

	// Relation with Municipality
    public function municipality()
    {
        return $this->belongsTo('App\Municipality', 'municipality_id');
    }
}
