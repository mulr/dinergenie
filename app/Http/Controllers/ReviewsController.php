<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Restaurant;

use App\Review;



class ReviewsController extends Controller
{

    public function store(Restaurant $restaurant)
    {

        $this->validate(request(), ['body' => 'required|min:2']);

        $restaurant->reviews()->create(['user_id'=>request()->user()->id, 'body'=>request()->body ]);

        return back();
    }

}
