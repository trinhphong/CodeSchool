<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    protected $table = 'levels';

    protected $fillable = ['id','name','description','note','image','course_id','slide_id'];

    public $timestamps = false;

    public function chapter () {
        return $this->hasMany('App\Chapter');
    }

    public function course () {
        return $this->belongsTo('App\Course');
    }

    public function slide () {
        return $this->belongsTo('App\Slide');
    }
}
