<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class donate extends Model
{
    protected $table = "donate" ;

    public function thong_tin_account()
    {
        return $this->hasMany('App\thong_tin_account', 'account_id','id');

    }
    public function projects()
    {
        return $this->hasMany('App\projects', 'projects_id','id');

    }
}
