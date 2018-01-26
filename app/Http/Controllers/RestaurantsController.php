<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Restaurant;

use GMaps;

class RestaurantsController extends Controller
{
    //Making it so that all routes are locked...except:
    public function __construct()

        {

            $this->middleware('auth')->except(['index', 'show']);

        }
  
    
    public function index() 

        {
             
            $config['center'] = 'Orlando, FL';
            $config['zoom'] = '13';
            $config['map_height'] = '600px';
            $config['map_width'] = '100%';
            $config['scrollwheel'] = 'false';
        
            GMaps::initialize($config);
        

            $marker['position'] = 'Lake Eola Park';
            $marker['infowindow_content'] = 'Lake Eola Park';
            // $marker['icon'] = 'http://maps.google.com/mapfiles/ms/micons/orange-dot.png';

            GMaps::add_marker($marker);


            $maps = GMaps::create_map();

            $restaurants = Restaurant::latest()->get();

            return view('restaurants.index', compact(['restaurants', 'maps']));

        }


    public function show(Restaurant $restaurant) 
    
        {
            //was this, w/ just $restaurant on 26
            // $restaurant = Restaurant::find($restaurant);

            return view('restaurants.restaurant', compact('restaurant'));
        }
    

    public function create() 
    
        {
            return view('restaurants.create');
        }
    

    public function store(Request $request) 
    
        {

            $request->validate([
                'name' => 'required',
                'address' => 'required',
                'inputCity' => 'required',
                'inputState' => 'required',
                'inputZip' => 'required',
            ]);

                // dd($request->all());

            $post = new Restaurant;

                $post->name = $request->name;
                $post->address = $request->address;
                $post->city = $request->inputCity;
                $post->state = $request->inputState;
                $post->zip = $request->inputZip;
                $post->changingtable = $request->changeTableCheck === 'on' ? 1 : 0;
                $post->boosterseats = $request->boosterCheck === 'on' ? 1 : 0;
                $post->familybathroom = $request->familyRoomCheck === 'on' ? 1 : 0;
                $post->user_id = auth()->id();

            $post->save();

            return redirect('/restaurants');

        }

}
