<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chapter extends Model
{
    protected $table = 'chapters';

    protected $fillable = ['id','name','level_id','video_id'];

    public $timestamps = false;

    public function challenge () {
        return $this->hasMany('App\Challenge');
    }

    public function level () {
        return $this->belongsTo('App\Level');
    }

    public function video () {
        return $this->belongsTo('App\Video');
    }
}
