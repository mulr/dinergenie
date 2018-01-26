<?php

namespace App;



class Restaurant extends Model
{

    public function reviews()

    {

        return $this->hasMany(Review::class);
        
    }


    public function user()

    {

        return $this->hasMany(User::class);
        
    }


}
