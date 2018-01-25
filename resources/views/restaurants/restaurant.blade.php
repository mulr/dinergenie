@extends ('layouts.app')

@section ('content')

<div class="container">

    <div class="col-md-8">
        
        <h1>{{ $restaurant->name }}</h1>

        <p class="address">
            
            {{ $restaurant->address }}, {{ $restaurant->city }}, {{ $restaurant->state }} {{ $restaurant->zip }} 

            <hr>

            <div class="reviews">

                <ul class="list-group">
                    
                    @foreach ($restaurant->reviews as $review)
                    
                        <li class="list-group-item">                  
                            
                            {{ $review->body }} <small class="text-muted">{{ $review->created_at->diffForHumans() }}</small>
                                                 
                        </li>
                        
                    @endforeach
                                       
                </ul>

            </div>
            
        </p>


        <!-- REVIEW ADD SECTION -->

        <div class="card">
            
            <div class="card-block">

                <form method="POST" action="/restaurants/{{ $restaurant->id }}/reviews/">

                {{ csrf_field() }}
                    
                    <div class="form-group">
                        
                        <textarea name="body" class="form-control" required></textarea>
                        
                    </div>
                    
                    <div class="form-group">
                        
                        <button type="submit" class="btn btn-primary">Add Review</button>
                        
                    </div>
                    
                </form>

                @include ('layouts.errors')
                
            </div>
    
        </div>

    </div>
    

</div>

@endsection