


<div class="restaurant-block">
  
    <p class="panel-heading"><a href="/restaurants/{{ $restaurant->id }}">{{ $restaurant->name }}</a></h2>
      
    <p class="small">{{ $restaurant->address }}, {{ $restaurant->city }}, {{ $restaurant->state }} </p>
    
    <p class="small"><em>Friendship began: {{ $restaurant->created_at->toDateString() }}. </em></p>

    <i class="fa fa-folder-open-o" aria-hidden="true" alt="changing-table"></i>
    <i class="fa fa-users" aria-hidden="true" alt="family-restroom"></i>
    <i class="fa fa-upload" aria-hidden="true" alt="booster-seat"></i>

    
    <!-- <p><a class="btn btn-secondary" href="#" role="button">Show me &raquo;</a></p> -->
</div>