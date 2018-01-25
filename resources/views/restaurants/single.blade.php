


<div class="restaurant-block">
  
    <h4><a href="/restaurants/{{ $restaurant->id }}">{{ $restaurant->name }}</a></h2>
      
    <p class="address">{{ $restaurant->address }}, {{ $restaurant->city }}, {{ $restaurant->state }} {{ $restaurant->zip }}</p>
    
    <p>Friendship began: {{ $restaurant->created_at->toDateString() }}. </p>
    
    <!-- <p><a class="btn btn-secondary" href="#" role="button">Show me &raquo;</a></p> -->
</div>