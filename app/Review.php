<?php

namespace App;



class Review extends Model
{
    public function restaurant()
    {

        return $this->belongsTo(Restaurant::class);

    }

    public function user()
    {

        return $this->belongsTo(User::class);

    }
}
