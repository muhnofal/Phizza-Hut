<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Pizza;

class Transaction extends Model
{

    protected $fillable = ['user_id', 'pizza_id', 'username'];


    public function user(){
        return $this->belongsTo(User::class);
    }

    public function pizza(){
        return $this->belongsTo(Pizza::class);
    }

}
