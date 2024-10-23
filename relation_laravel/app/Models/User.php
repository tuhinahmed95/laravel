<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public function contacts(){
        return $this->hasOne(Contact::class);
    }
}
