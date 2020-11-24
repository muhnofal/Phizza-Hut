<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function users (){
        return $this->belongToMany(User::class, 'role_users');
    }
}
