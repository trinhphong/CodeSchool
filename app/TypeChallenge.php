<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeChallenge extends Model
{
    protected $table = 'type_challenges';

    protected $fillable = ['id','name'];

    public $timestamps = false;

    public function challenge () {
        return $this->belongsTo('App\Challenge');
    }
}
