<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    protected $table = 'slides';

    protected $fillable = ['slides_id','slides_name'];

    public $timestamps = false;

    public function Level () {
        return $this->belongsTo('App\Level');
    }
}
