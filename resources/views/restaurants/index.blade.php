@extends ('layouts.app')

@section ('content')

  <!-- <div class="container"> -->
        <!-- Example row of columns -->
        <div class="row">

            <div class="col-md-4">              
              
                @foreach ($restaurants as $restaurant)
                
                  @include ('restaurants.single')
                
                @endforeach
                
                <a class="btn btn-secondary btn-sm" href="/restaurants/create/" role="button">Add Restaurant &raquo;</a>
            
            </div>

              <hr>
            
            <div class="col-md-8">

                <!-- <iframe
                    width="100%"
                    height="450"
                    frameborder="0" style="border:0"
                    src="https://www.google.com/maps/embed/v1/place?key=AIzaSyCv2GzRlwgcTLmU3EZjGhuToBqLISaNj_8
                      &q=Lake+Eola,Seattle+WA" allowfullscreen>
                </iframe> -->
                
              

            </div>
              
        </div>   

  <!-- </div> /container -->
      
      <hr>



@endsection





