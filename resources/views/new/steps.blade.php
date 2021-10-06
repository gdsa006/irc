<form method="post" id="frm-one" name="frm-one" class="row">
    <h4>Enter your address to begin!</h4>
    <div class="col-md-10 offset-md-1">
    <div class="input-group" style="position: relative">
        <!-- <span id="location-icon">
            <i class="fas fa-map-marker-alt"></i>
        </span> -->
        <input type="text" class="form-control new-custom-input" id="address" placeholder="Enter address..."
            value="" name="address" autocomplete="off">
        <div id="search-results">
            <!-- populate results -->
        </div>
        <div class="buttons">
            <input type="submit" value="Get Started" class="btn new-custom-btn">
        </div>
    </div>
</div>
    
</form>


<form method="post" id="frm-two" name="frm-two" class="row">
<h4>Enter your homes square footage</h4>
<input type="button" value="< back" onclick="goBack('#frm-one');" class="btn back">
<div class="col-md-10 offset-md-1">
    <div class="input-group" style="position: relative">
    <div class="input-group-prepend">
      <span class="input-group-text">Sqft</span>
    </div>
        <input type="text" class="form-control new-custom-input" id="sqft" placeholder="Home SqFt" value="" name="sqft">
        <div class="buttons">
            <input type="submit" value="Looks good, next step!" class="btn new-custom-btn">
        </div>
    </div>
</div>   
</form>


<form method="post" id="frm-three" name="frm-three" class="row">
<h4>How steep is your roof?</h4>
<input type="button" value="< back" onclick="goBack('#frm-two');" class="btn back">
<div class="input-group">
        <div class="form-check col-12 col-md-3">
                <input type="radio" class="form-check-input" id="steep-flat" name="steep" value="flat">
                <label class="radio text-center" for="steep-flat">
                    <img src="{{ asset('images/flat.jpg') }}" width="100">
                    <span>Flat</span>
                </label>
        </div>
        <div class="form-check col-12 col-md-3">
                <input type="radio" class="form-check-input" name="steep" id="steep-mellow" value="mellow">
                <label class="radio text-center" for="steep-mellow">
                    <img src="{{ asset('images/mellow.jpg') }}" width="100">
                    <span>Mellow</span>
                </label>
        </div>
        <div class="form-check col-12 col-md-3">
                <input type="radio" class="form-check-input" name="steep" id="steep-steep" value="steep">
                <label class="radio text-center" for="steep-steep">
                    <img src="{{ asset('images/steep.jpg') }}" width="100">
                    <span>Steep</span>
                </label>
        </div>
        <div class="form-check col-12 col-md-3">
                <input type="radio" class="form-check-input" name="steep" id="steep-unsure" value="unsure">
                <label class="radio text-center" for="steep-unsure">
                    <img src="{{ asset('images/other.jpg') }}" width="100">
                    <span>Unsure</span>
                </label>
        </div>
</div>
    <div class="buttons w-100 text-center mt-4">
        <input type="submit" value="Looks good, next step!" class="btn new-custom-btn">
    </div>
</form>

<form method="post" id="frm-four" name="frm-four" class="row">
<h4>What's currently on your roof?</h4>
<input type="button" value="< back" onclick="goBack('#frm-three');" class="btn back">
<div class="input-group">
        <div class="form-check col-12 col-md-3">
                <input type="radio" class="form-check-input" id="existing_material-asphalt" name="existing_material" value="asphalt">
                <label class="radio text-center" for="existing_material-asphalt">
                    <img src="{{ asset('images/asphalt.jpg') }}" width="100">
                    <span>Asphalt</span>
                </label>
        </div>
        <div class="form-check col-12 col-md-3">
                <input type="radio" class="form-check-input" id="existing_material-metal" name="existing_material" value="metal">
                <label class="radio text-center" for="existing_material-metal">
                    <img src="{{ asset('images/metal.jpg') }}" width="100">
                    <span>Metal</span>
                </label>
        </div>
        <div class="form-check col-12 col-md-3">
                <input type="radio" class="form-check-input" id="existing_material-tile" name="existing_material" value="tile">
                <label class="radio text-center" for="existing_material-tile">
                    <img src="{{ asset('images/tile.jpg') }}" width="100">
                    <span>Tile</span>
                </label>
        </div>
        <div class="form-check col-12 col-md-3">
                <input type="radio" class="form-check-input" id="existing_material-other" name="existing_material" value="other">
                <label class="radio text-center" for="existing_material-other">
                    <img src="{{ asset('images/other-2.png') }}" width="100">
                    <span>Other</span>
                </label>
        </div>
</div>
    <div class="buttons w-100 text-center mt-4">
        <input type="submit" value="Looks good, next step!" class="btn new-custom-btn">
    </div>
</form>


<form method="post" id="frm-five" name="frm-five" class="row">
<h4>Is this a residential or commercial roof?</h4>
<input type="button" value="< back" onclick="goBack('#frm-four');" class="btn back">
<div class="input-group">
        <div class="form-check col-12 col-md-3">
                <input type="radio" class="form-check-input" id="is_commercial-residential" name="is_commercial" value="residential">
                <label class="radio text-center" for="is_commercial-residential">
                    <img src="{{ asset('images/steep.jpg') }}" width="100">
                    <span>Residential</span>
                </label>
        </div>
        <div class="form-check col-12 col-md-3">
                <input type="radio" class="form-check-input" id="is_commercial-commercial" name="is_commercial" value="commercial">
                <label class="radio text-center" for="is_commercial-commercial">
                    <img src="{{ asset('images/flat.jpg') }}" width="100">
                    <span>Commercial</span>
                </label>
        </div>
</div>
        <div class="buttons w-100 text-center mt-4">
            <input type="submit" value="Looks good, next step!" class="btn new-custom-btn">
        </div>
</form>



<form method="post" id="frm-six" name="frm-six" class="row">
<h4>How urgent is this project?</h4>
<input type="button" value="< back" onclick="goBack('#frm-five');" class="btn back">
<div class="input-group">
        <div class="form-check col-12 col-md-3">
                <input type="radio" class="form-check-input" id="urgency-checking" name="urgency" value="checking">
                <label class="radio text-center" for="urgency-checking">
                    <img src="{{ asset('images/happy.png') }}" width="100">
                    <span>Checking</span>
                </label>
        </div>
        <div class="form-check col-12 col-md-3">
                <input type="radio" class="form-check-input" id="urgency-soon" name="urgency" value="soon">
                <label class="radio text-center" for="urgency-soon">
                    <img src="{{ asset('images/surprised.png') }}" width="100">
                    <span>Soon</span>
                </label>
        </div>
        <div class="form-check col-12 col-md-3">
                <input type="radio" class="form-check-input" id="urgency-urgent" name="urgency" value="urgent">
                <label class="radio text-center" for="urgency-urgent">
                    <img src="{{ asset('images/sad.png') }}" width="100">
                    <span>Urgent</span>
                </label>
        </div>
</div>
        <div class="buttons w-100 text-center mt-4">
            <input type="submit" value="Looks good, next step!" class="btn new-custom-btn">
        </div>
</form>



<form method="post" id="frm-seven" name="frm-seven" class="row">
<h4>Are you using insurance to repair your roof?</h4>
<input type="button" value="< back" onclick="goBack('#frm-six');" class="btn back">
<div class="input-group">
        <div class="form-check col-12 col-md-3">
                <input type="radio" class="form-check-input" id="true-yes" name="true" value="yes">
                <label class="radio text-center" for="true-yes">
                    <img src="{{ asset('images/yes.png') }}" width="100">
                    <span>Yes</span>
                </label>
        </div>
        <div class="form-check col-12 col-md-3">
                <input type="radio" class="form-check-input" id="true-no" name="true" value="no">
                <label class="radio text-center" for="true-no">
                    <img src="{{ asset('images/no.png') }}" width="100">
                    <span>No</span>
                </label>
        </div>
        <div class="form-check col-12 col-md-3">
                <input type="radio" class="form-check-input" id="true-maybe" name="true" value="maybe">
                <label class="radio text-center" for="true-maybe">
                    <img src="{{ asset('images/maybe.png') }}" width="100">
                    <span>Maybe</span>
                </label>
        </div>
</div>
    
        <div class="buttons w-100 text-center mt-4">
            <input type="submit" value="Looks good, next step!" class="btn new-custom-btn">
        </div>
</form>




<form method="post" id="frm-eight" name="frm-eight" class="row">
<h4>What would you like on your roof?</h4>
<input type="button" value="< back" onclick="goBack('#frm-seven');" class="btn back">
    <div class="input-group" style="position: relative">
        <div class="form-check col-12 col-md-3">
                <input type="radio" class="form-check-input" id="material-asphalt" name="material" value="asphalt">
                <label class="radio text-center" for="material-asphalt">
                    <img src="{{ asset('images/asphalt.jpg') }}" width="100">
                    <span>Asphalt</span>
                </label>
        </div>
        <div class="form-check col-12 col-md-3">
                <input type="radio" class="form-check-input" id="material-metal" name="material" value="metal">
                <label class="radio text-center" for="material-metal">
                    <img src="{{ asset('images/metal.jpg') }}" width="100">
                    <span>Asphalt</span>
                </label>
        </div>
        <div class="form-check col-12 col-md-3">
                <input type="radio" class="form-check-input" id="material-tile" name="material" value="tile">
                <label class="radio text-center" for="material-tile">
                    <img src="{{ asset('images/tile.jpg') }}" width="100">
                    <span>Tile</span>
                </label>
        </div>
        <div class="form-check col-12 col-md-3">
                <input type="radio" class="form-check-input" id="material-other" name="material" value="other">
                <label class="radio text-center" for="material-other">
                    <img src="{{ asset('images/other.jpg') }}" width="100">
                    <span>Other</span>
                </label>
        </div>
</div>
        <div class="buttons w-100 text-center mt-4">
            <input type="submit" value="Looks good, next step!" class="btn new-custom-btn">
        </div>
</form>





<form method="post" id="frm-nine" name="frm-nine" class="row">
<h4>Are you interested in financing this project over time?</h4>
<input type="button" value="< back" onclick="goBack('#frm-eight');" class="btn back">
    <div class="input-group" style="position: relative">
        <div class="form-check col-12 col-md-3">
                <input type="radio" class="form-check-input" id="is_interested_in_financing-true" name="is_interested_in_financing" value="true">
                <label class="radio text-center" for="is_interested_in_financing-true">
                    <img src="{{ asset('images/yes.png') }}" width="100">
                    <span>Yes</span>
                </label>
        </div>
        <div class="form-check col-12 col-md-3">
                <input type="radio" class="form-check-input" id="is_interested_in_financing-false" name="is_interested_in_financing" value="false">
                <label class="radio text-center" for="is_interested_in_financing-false">
                    <img src="{{ asset('images/no.png') }}" width="100">
                    <span>No</span>
                </label>
        </div>
        <div class="form-check col-12 col-md-3">
                <input type="radio" class="form-check-input" id="is_interested_in_financing-maybe" name="is_interested_in_financing" value="maybe">
                <label class="radio text-center" for="is_interested_in_financing-maybe">
                    <img src="{{ asset('images/maybe.png') }}" width="100">
                    <span>Maybe</span>
                </label>
        </div>
</div>
        <div class="buttons w-100 text-center mt-4">
            <input type="submit" value="Looks good, next step!" class="btn new-custom-btn">
        </div>
</form>






<form method="post" id="frm-ten" name="frm-ten" class="row">
<h4>Are you interested in financing this project over time?</h4>
<h5>Just enter your information and get your no obligation estimate!</h5>
<input type="button" value="< back" onclick="goBack('#frm-nine');" class="btn back">

        <div class="input-group" style="position: relative">
            <input type="text" class="form-control new-custom-input" name="email" placeholder="Email">
        </div>
        <div class="input-group mt-2">
            <input type="text" class="form-control new-custom-input fullname" placeholder="Name" name="fname">
            <input type="text" class="form-control new-custom-input phone-format" name="mobile" placeholder="Phone">
        </div>
        <div class="buttons w-100 text-center mt-4">
            <input type="submit" value="Get Estimate" class="btn btn-block new-custom-btn">
        </div>



</form>