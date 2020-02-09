<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //


    protected $fillable = ['plan_id','price','billboard_id','start_data','end_date','start_time','end_time'];



    public function customer()
    {
        return $this->belongsTo('App\User');
    }



    public function plan()
    {
        return $this->belongsTo('App\Plan');
    }


    public function bill()
    {
        return $this->belongsTo('App\Billboard');
    }


}
