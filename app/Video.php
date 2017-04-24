<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $table = 'videos';

    protected $fillable = ['id','name'];

    public $timestamps = false;

    public function chapter () {
        return $this->belongsTo('App\Chapter');
    }
}
