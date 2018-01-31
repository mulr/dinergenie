@extends ('layouts.app')

@section ('content')

    <head>{!! $maps['js'] !!}</head>

    <div class="container">

    <div class="row">

        <div class="col-md-3">
            
            <form method="GET" action="/update/amenity">

                {{ csrf_field() }}

                <div class="form-row align-items-center">

                    <div class="col-12">

                        <!-- <label class="mr-sm-2" for="inlineFormCustomSelect">Narrow it down...</label> -->
                    
                        <select class="custom-select mr-sm-2" id="search" name="search">

                            <option selected>Get specific...</option>

                            <option value="changingtable">Changing Table</option>

                            <option value="familybathroom">Family-Restroom</option>

                            <option value="boosterseats">Booster-Seats</option>

                        </select>

                    </div>

                    <div class="col-auto my-1">

                        <div class="custom-control custom-checkbox mr-sm-2">
    
                            <input type="checkbox" class="custom-control-input" id="customControlAutosizing">
        
                        </div>
    
                    </div>
    
                    <div class="col-auto my-1">
        
                        <button type="submit" class="btn update-btn">Update Results</button>
            
                    </div>
        
                </div>

            </form>
        
        </div>

        <div class="col-md-9">

            <a class="btn btn-secondary btn-sm ml-auto" href="/restaurants/create/" role="button">Add New Restaurant &raquo;</a>

        </div>

    </div>

    
    <div id="rest-map" class="row">
            
            <div class="col-md-3">   
                
                    <div class="row">

                        <div class="col-md-12">

                            <h3>Restaurants</h3>

                        </div>
                
                    </div>

                    <div class="row">

                        <div class="col-md-12" id="restaurant-list">

                            @foreach ($restaurants as $restaurant)
                            
                                @include ('restaurants.single')
                            
                            @endforeach

                        </div>

                    </div>
                
            </div>
            
                <hr>
            
            <div id="map" class="col-md-9">

                     {!! $maps['html'] !!}
              
            </div>
            
            
            
        </div>
        
    </div>   
      
      <hr>



@endsection





