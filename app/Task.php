<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $table = 'tasks';

    protected $fillable = ['id','name','content','solution_id','challenge_id'];

    public $timestamps = false;

    public function challenge () {
        return $this->belongsTo('App\Challenge');
    }

    public function solution () {
        return $this->belongsTo('App\Solution');
    }
}
