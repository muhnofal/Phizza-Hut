<?php

namespace App;
use App\Cart;

use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
   
    protected $fillable = [
        'name', 'price', 'description', 'photo',
    ];

    public function cart(){
        return $this->hasMany(Cart::class);
    }

}
