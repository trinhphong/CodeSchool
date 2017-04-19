<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeChallenge extends Model
{
    protected $table = 'type_challenges';

    protected $fillable = ['type_challenges_id','type_challenges_name'];

    public $timestamps = false;

    public function challenge () {
        return $this->belongsTo('App\Challenge');
    }
}
