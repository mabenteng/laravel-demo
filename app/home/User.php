<?php

namespace App\home;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public $table='user';
    public $timestamps=false;
    protected $primaryKey='id';
    //
}
