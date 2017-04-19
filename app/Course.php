<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = 'course';

    protected $fillable = ['course_id','course_name','course_description','course_image'];

    public $timestamps = false;

    public function level () {
        return $this->hasMany('App\Level');
    }
}
