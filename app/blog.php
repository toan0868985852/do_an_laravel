<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class blog extends Model
{
    protected $table = "blog" ;

    public function projects()
    {
        return $this->hasMany('App\projects', 'projects_id','id');
    }
}
