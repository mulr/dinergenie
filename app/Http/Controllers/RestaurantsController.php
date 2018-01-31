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

            $this->middleware('auth')->except(['index', 'show', 'changingtables']);

        }
  
        
    public function index() 

        {
             
            $config['center'] = 'Orlando, FL';
            $config['zoom'] = '12';
            $config['map_height'] = '100%';
            $config['map_width'] = '100%';
            $config['scrollwheel'] = 'false';
            $config['places'] = 'true';
            $marker['animation'] = 'DROP';
        
            GMaps::initialize($config);
        
            $drop_pin = Restaurant::get();
            
            //For specific queries to DB:
            // $drop_pin = Restaurant::get()->where('changingtable', 1);
            // $drop_pin = Restaurant::get()->where('familybathroom', 1);
            // $drop_pin = Restaurant::get()->where('boosterseats', 1);

            foreach ($drop_pin as $pin) {
                $marker['position'] = $pin->address . $pin->city . $pin->zip;
                $marker['infowindow_content'] = $pin->name;
                $marker['icon'] = '../images/babymark.png';
                GMaps::add_marker($marker);
             }

            $maps = GMaps::create_map();

            $restaurants = Restaurant::latest()->get();

            return view('restaurants.index', compact(['restaurants', 'maps']));

        }


    public function show(Restaurant $restaurant) 
    
        {

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


    public function amenity($amenity)

        {

            $config['center'] = 'Orlando, FL';
            $config['zoom'] = '12';
            $config['map_height'] = '100%';
            $config['map_width'] = '100%';
            $config['scrollwheel'] = 'false';
            $config['places'] = 'true';
            $marker['animation'] = 'DROP';
        
            GMaps::initialize($config);
            
            //For specific queries to DB:
            $drop_pin = Restaurant::get()->where($amenity, 1);

            foreach ($drop_pin as $pin) {
                $marker['position'] = $pin->address . $pin->city . $pin->zip;
                $marker['infowindow_content'] = $pin->name;
                $marker['icon'] = '../images/babymark.png';
                GMaps::add_marker($marker);
             }

            $maps = GMaps::create_map();

            $restaurants = Restaurant::latest()->get()->where($amenity, 1);

            return view('restaurants.index', compact(['restaurants', 'maps']));

        }
        


    }
