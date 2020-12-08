<?php

namespace App;
use App\Pizza;
use App\User;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{

    protected $fillable = [
        'user_id', 'pizza_id', 'quantity'
    ];

    
    public function pizza(){
        return $this->belongsTo(Pizza::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

}
