<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = 'course';

    protected $fillable = ['id','name','description','language',];

    public $timestamps = false;

    public function level () {
        return $this->hasMany('App\Level');
    }
}
