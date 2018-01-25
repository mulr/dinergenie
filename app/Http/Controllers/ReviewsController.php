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


        $restaurant->addReview(request('body'));

        // Review::create([

        //     'body' => request('body'),

        //     'restaurant_id' => $restaurant->id 
        
        // ]);


        return back();
    }


}
