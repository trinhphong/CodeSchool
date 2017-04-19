<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Solution extends Model
{
    protected $table = 'solutions';

    protected $fillable = ['solution_id','solution_name','solution_content'];

    public $timestamps = false;

    public function task () {
        return $this->belongsTo('App\Task');
    }
}
