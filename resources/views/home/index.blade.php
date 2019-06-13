@extends('layouts.app')

@section('content')
<div class="service-area spt">
    <div class="arrow container bg1 spt-0"><br>
        <div class="text-center" style="color:#fff">
            <h1 style="color:#fff">We just need a few more details...</h1>
            <p>
                After submitting your information we will try find you a great personalize loan from our lending<br>
                partners. This will not affect your credit score and there is no obligation.
            </p>
        </div>
    </div>    
</div>      
<div class="service-area spt">
    <div class="container bg1 spt-1" style="padding:40px">
        <h2 style="color:#0091c8">Your Loan Details</h2>
        <p>Help us narrow down which lending partners can help you.</p>

    </div>
</div> 

<form method="post" action="{{ route('lead.store') }}">       
    <div class="service-area spt">
        <div class="container bg1 spt-2" style="padding:40px">  
            @if(Session::has('success'))
            <div class="alert alert-success alert-dismissible">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Success!</strong> {{ Session::get('success') }}
                @php
                Session::forget('success');
                @endphp
            </div>
            @endif
            <!-- Grid row -->
            <div class="form-row">
                @csrf
                <!-- Default input -->
                <div class="form-group col-md-6">
                    <label>First name</label>
                    <input type="text" name="first_name" class="form-control" id="inputEmail4" placeholder="Enter first name">
                    @if ($errors->has('first_name'))
                    <span class="text-danger">{{ $errors->first('first_name') }}</span>
                    @endif
                </div>
                <!-- Default input -->
                <div class="form-group col-md-6">
                    <label>Last name</label>
                    <input type="text" name="last_name" class="form-control" placeholder="Enter last name">
                    @if ($errors->has('last_name'))
                    <span class="text-danger">{{ $errors->first('last_name') }}</span>
                    @endif
                </div>
            </div>
            <!-- Grid row -->

            <!-- Default input -->
            <div class="form-group" id="locationField">
                <label>Address</label>
                <input type="text" id="autocomplete" name="address" class="form-control" onFocus="geolocate()" placeholder="Enter address">
            </div>
            <!-- Grid row -->
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Street Number</label>
                    <input type="text" id="street_number" name="street_number" class="form-control" placeholder="Enter street number">
                    @if ($errors->has('street_number'))
                    <span class="text-danger">{{ $errors->first('street_number') }}</span>
                    @endif
                </div>
                <div class="form-group col-md-6">
                    <label>Street Name</label>
                    <input type="text" id="route" name="street_name" class="form-control" placeholder="Enter street name">                    
                    @if ($errors->has('street_name'))
                    <span class="text-danger">{{ $errors->first('street_name') }}</span>
                    @endif
                </div>
            </div>
            <!-- Grid row -->
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Province / State</label>
                    <input type="text" id="administrative_area_level_1"  name="province" class="form-control" placeholder="Enter province or state">
                    @if ($errors->has('province'))
                    <span class="text-danger">{{ $errors->first('province') }}</span>
                    @endif
                </div>
                <div class="form-group col-md-6">
                    <label>City</label>
                    <input type="text" id="locality" name="city" name="city" class="form-control" placeholder="Enter city">
                    @if ($errors->has('city'))
                    <span class="text-danger">{{ $errors->first('city') }}</span>
                    @endif
                </div>
            </div>
            <!-- Grid row -->
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Country</label>
                    <input type="text" id="country" name="country" class="form-control" placeholder="Enter country">
                    @if ($errors->has('country'))
                    <span class="text-danger">{{ $errors->first('country') }}</span>
                    @endif
                </div>
                <div class="form-group col-md-6">
                    <label>Postal Code</label>
                    <input type="text" id="postal_code" name="postal_code" class="form-control" placeholder="Enter postal code">
                    @if ($errors->has('postal_code'))
                    <span class="text-danger">{{ $errors->first('postal_code') }}</span>
                    @endif
                </div>
            </div>
            <!-- Grid row -->
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Enter email">
                    @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
                </div>
                <div class="form-group col-md-6">
                    <label>Phone number</label>
                    <input type="text" name="phone_number" class="form-control" placeholder="Enter phone number">
                    @if ($errors->has('phone_number'))
                    <span class="text-danger">{{ $errors->first('phone_number') }}</span>
                    @endif
                </div>                
            </div>
            <div class="form-group">
                <label for="textarea-char-counter">Question</label>
                <textarea class="form-control" name="question" length="120" rows="3" placeholder="Please enter your question"></textarea>                
            </div>
            <!-- Checkbox -->
            <div class="form-group">
                <div class="col-xs-6 col-xs-offset-3">
                    <div class="checkbox">
                        <label>
                            <input type="hidden" name="opt_in" value="0">  
                            <input type="checkbox" name="opt_in" value="1">  
                            Email marketing opt-in
                        </label>
                    </div>                    
                </div>
            </div>
            <div class="form-group">
                <label class="col-xs-3 control-label">Terms of use</label>
                <div class="col-xs-9">
                    <div style="border: 1px solid #e5e5e5; height: 200px; overflow: auto; padding: 10px;">
                        <p>Lorem ipsum dolor sit amet, veniam numquam has te. No suas nonumes recusabo mea, est ut graeci definitiones. His ne melius vituperata scriptorem, cum paulo copiosae conclusionemque at. Facer inermis ius in, ad brute nominati referrentur vis. Dicat erant sit ex. Phaedrum imperdiet scribentur vix no, ad latine similique forensibus vel.</p>
                        <p>Dolore populo vivendum vis eu, mei quaestio liberavisse ex. Electram necessitatibus ut vel, quo at probatus oportere, molestie conclusionemque pri cu. Brute augue tincidunt vim id, ne munere fierent rationibus mei. Ut pro volutpat praesent qualisque, an iisque scripta intellegebat eam.</p>
                        <p>Mea ea nonumy labores lobortis, duo quaestio antiopam inimicus et. Ea natum solet iisque quo, prodesset mnesarchum ne vim. Sonet detraxit temporibus no has. Omnium blandit in vim, mea at omnium oblique.</p>                        
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-6 col-xs-offset-3">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="agree" value="agree"> Agree with the terms and conditions
                        </label>
                    </div>
                    @if ($errors->has('agree'))
                    <span class="text-danger">Please agree to our terms and conditions.</span>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div class="form-group text-center">
        <button type="submit" class="btn btn-success btn-lg btn-round-lg">Submit</button>
    </div><br><br>
</form>
<script>
    var placeSearch, autocomplete;
    var componentForm = {
        street_number: 'short_name',
        route: 'long_name',
        locality: 'long_name',
        administrative_area_level_1: 'short_name',
        country: 'long_name',
        postal_code: 'short_name'
    };

    function initAutocomplete() {
        // Create the autocomplete object, restricting the search predictions to
        // geographical location types.
        var input = document.getElementById('autocomplete');
        var option = {
            types: ['geocode']
                    //types: ['(cities)'],
                    //componentRestrictions: {country: 'fr'}                            
        }
        autocomplete = new google.maps.places.Autocomplete(
                input, option);
        // Avoid paying for data that you don't need by restricting the set of
        // place fields that are returned to just the address components.
        autocomplete.setFields(['address_component']);
        // When the user selects an address from the drop-down, populate the
        // address fields in the form.
        autocomplete.addListener('place_changed', fillInAddress);

    }

    function fillInAddress() {
        // Get the place details from the autocomplete object.
        var place = autocomplete.getPlace();

        for (var component in componentForm) {
            document.getElementById(component).value = '';
            document.getElementById(component).disabled = false;
        }

        // Get each component of the address from the place details,
        // and then fill-in the corresponding field on the form.
        for (var i = 0; i < place.address_components.length; i++) {
            var addressType = place.address_components[i].types[0];
            if (componentForm[addressType]) {
                var val = place.address_components[i][componentForm[addressType]];
                document.getElementById(addressType).value = val;
            }
        }
    }

    // Bias the autocomplete object to the user's geographical location,
    // as supplied by the browser's 'navigator.geolocation' object.
    function geolocate() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function (position) {
                var geolocation = {
                    lat: position.coords.latitude,
                    lng: position.coords.longitude
                };
                var circle = new google.maps.Circle({
                    center: geolocation,
                    radius: position.coords.accuracy
                });
                autocomplete.setBounds(circle.getBounds());
            });

        }
    }
</script>  
@endsection
