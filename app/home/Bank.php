<?php

namespace App\home;

use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    protected $table='bank';
    public $timestamps=false;
    //这个是反过来一对一
    public function user(){
        return $this->belongsTo('App\home\User','who_id','id');
    }
    //多对多的查询
    public function manyuser(){
        return $this->belongsToMany('App\home\User','manytomany');
    }
}
