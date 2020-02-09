<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Billboard extends Model
{
    //

    protected $fillable = ['region_id','type','location','width', 'height','path'];

    public function region()
    {
        return $this->belongsTo('App\Region');
    }
}
