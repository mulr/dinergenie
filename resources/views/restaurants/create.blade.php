@extends ('layouts.app')

@section ('content')

<div class="container">

    <div class="row">

        <div class="col-md-4">

            <hr>
            
            <a href="https://placeholder.com"><img src="http://via.placeholder.com/355x490"></a>
    
        </div>

        <div class="col-md-8">

                <hr>

            <h1>Adding New Restaurant!</h1>

                <hr>

                <form method="POST" action="/restaurants">

                    {{ csrf_field() }}

                    <div class="form-group">

                        <label for="inputAddress">Restaurant Name:</label>
                        
                        <input type="text" class="form-control" id="inputName" name="name" required>
                    
                    </div>

                    <div class="form-group">

                        <label for="inputAddress">Address</label>

                        <input type="text" class="form-control" id="inputAddress" name="address" required>

                    </div>
                
                    <div class="form-row">

                        <div class="form-group col-md-8">
                            
                            <label for="inputCity">City</label>
                        
                            <input type="text" class="form-control" id="inputCity" name="inputCity" required>
                        
                        </div>
                    
                        <div class="form-group col-md-2">
                            
                            <label for="inputState">State</label>
                            
                            <input type="text" class="form-control" id="inputState" name="inputState" required>
                        
                        </div>
                        
                        <div class="form-group col-md-2">
                        
                            <label for="inputZip">Zip</label>
                            
                            <input type="text" class="form-control" id="inputZip" name="inputZip">
                        
                        </div>

                    </div>
                    
                        <br>

                    <h5>Check available amenities:</h5>
                    
                    <div class="form-row text-center">
                        
                        <div class="form-check col-md-4">
                        
                            <input class="form-check-input" type="checkbox" id="changeTableCheck" name="changeTableCheck">
                            
                            <label class="form-check-label" for="gridCheck">Changing Table</label>
                        
                        </div>
                        
                        <div class="form-check col-md-4">
                        
                            <input class="form-check-input" type="checkbox" id="boosterCheck" name="boosterCheck">
                            
                            <label class="form-check-label" for="gridCheck">Booster Seats</label>
                        
                        </div>
                        
                        <div class="form-check col-md-4">
                        
                            <input class="form-check-input" type="checkbox" id="familyRoomCheck" name="familyRoomCheck">
                            
                            <label class="form-check-label" for="gridCheck">Family Restroom</label>
                        
                        </div>
                    
                    </div>

                        <br>

                    <div class="form-row text-center">

                        <div class="form-group col-md-6">
                            
                            <button type="button" class="btn btn-secondary">Back to Map</button>
    
                        </div>

                        <div class="form-group col-md-6">
                            
                            <button type="submit" class="btn btn-primary">Add Restaurant</button>
    
                        </div>


                    </div>
                    

                    @include ('layouts.errors')

                </form>

        </div>
    </div>
</div>
    <!-- <h1>TEST PANEL</h1>
    <div class="col-md-8">
        <div class="card-deck mb-3 text-center">
            <div class="card mb-4 box-shadow">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal">Free</h4>
                </div>
                <div class="card-body">
                    <h1 class="card-title pricing-card-title">$0 <small class="text-muted">/ mo</small></h1>
                    <ul class="list-unstyled mt-3 mb-4">
                        <li>10 users included</li>
                        <li>2 GB of storage</li>
                        <li>Email support</li>
                        <li>Help center access</li>
                    </ul>
                    <button type="button" class="btn btn-lg btn-block btn-outline-primary">Sign up for free</button>
                </div>
            </div>          
        </div>
    </div> -->



@endsection


