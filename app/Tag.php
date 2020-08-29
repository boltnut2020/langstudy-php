<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    //
    public function memos() {
        return $this->belongsToMany('App\Memos');
    }
}
