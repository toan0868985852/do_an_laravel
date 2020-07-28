<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class massage_account extends Model
{
    protected $table = "massage_account" ;

    public function massage()
    {
        return $this->hasMany('App\massage', 'massage_id','id');

    }
    public function thong_tin_account()
    {
        return $this->hasMany('App\thong_tin_account', 'account_id','id');

    }
}
