<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Challenge extends Model
{
    protected $table = 'challenges';

    protected $fillable = ['id','name','content','source_code','type_challenge_id','chapter_id'];

    public $timestamps = false;

    public function task () {
        return $this->hasMany('App\Task');
    }

    public function chapter () {
        return $this->belongsTo('App\Chapter');
    }

    public function type_challenge () {
        return $this->belongsTo('App\TypeChallenge');
    }
}
