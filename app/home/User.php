<?php
/*
 * @Date: 2019-09-06 06:19:25
 * @LastEditors: benty
 * @LastEditTime: 2019-09-11 11:30:30
 */


namespace App\home;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public $table='user';
    public $timestamps=false;
    protected $primaryKey='id';
    public $guarded=['_token','capt'];
}
