<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public function importphone()
    {
        return $this->hasOne('App\Phone');
    }
}
