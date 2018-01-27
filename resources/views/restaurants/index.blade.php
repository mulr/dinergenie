@extends ('layouts.app')

@section ('content')

    <head>{!! $maps['js'] !!}</head>

    <div class="container">
    
    <div id="rest-map" class="row">
            
            <div class="col-md-3">    

                    <!-- Specified Search Drop-down: -->
                    
                    <form>

                        <div class="form-row align-items-center">

                                <div class="col-auto my-1">

                                    <!-- <label class="mr-sm-2" for="inlineFormCustomSelect">Choose...</label> -->
                                
                                    <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">

                                        <option selected>All...</option>
            
                                        <option value="1">Changing Table</option>
            
                                        <option value="2">Family Restroom</option>
            
                                        <option value="3">Booster Seats</option>
            
                                    </select>
        
                                </div>
            
                                <div class="col-auto my-1">
            
                                    <div class="custom-control custom-checkbox mr-sm-2">
                
                                        <input type="checkbox" class="custom-control-input" id="customControlAutosizing">
                    
                                    </div>
                
                                </div>
                
                                <div class="col-auto my-1">
                    
                                    <button type="button" class="btn btn-primary">Update Results</button>
                        
                                </div>
                
                        </div>

                    </form>
                
                @foreach ($restaurants as $restaurant)
                
                    @include ('restaurants.single')
                
                @endforeach
                
                <a class="btn btn-secondary btn-sm" href="/restaurants/create/" role="button">Add New Restaurant &raquo;</a>

            </div>
            
                <hr>
            
            <div id="map" class="col-md-9">



                     {!! $maps['html'] !!}
              
            </div>
            
            
            
        </div>
        
    </div>   
      
      <hr>



@endsection





