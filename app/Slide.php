<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    protected $table = 'slides';

    protected $fillable = ['id','name'];

    public $timestamps = false;

    public function Level () {
        return $this->belongsTo('App\Level');
    }
}
