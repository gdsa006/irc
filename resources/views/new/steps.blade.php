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
        <div class="form-check col-3">
                <input type="radio" class="form-check-input" id="steep-flat" name="steep" value="flat">
                <label class="radio text-center" for="steep-flat">
                    <img src="{{ asset('images/flat.jpg') }}" width="100">
                    <span>Flat</span>
                </label>
        </div>
        <div class="form-check col-3">
                <input type="radio" class="form-check-input" name="steep" id="steep-mellow" value="mellow">
                <label class="radio text-center" for="steep-mellow">
                    <img src="{{ asset('images/mellow.jpg') }}" width="100">
                    <span>Mellow</span>
                </label>
        </div>
        <div class="form-check col-3">
                <input type="radio" class="form-check-input" name="steep" id="steep-steep" value="steep">
                <label class="radio text-center" for="steep-steep">
                    <img src="{{ asset('images/steep.jpg') }}" width="100">
                    <span>Steep</span>
                </label>
        </div>
        <div class="form-check col-3">
                <input type="radio" class="form-check-input" name="steep" id="steep-unsure" value="unsure">
                <label class="radio text-center" for="steep-unsure">
                    <img src="{{ asset('images/other.jpg') }}" width="100">
                    <span>Unsure</span>
                </label>
        </div>
</div>
    <div class="buttons w-100 text-center mt-4">
        <input type="submit" value="next" class="btn new-custom-btn">
    </div>
</form>

<form method="post" id="frm-four" name="frm-four" class="row">
<h4>What's currently on your roof?</h4>
<input type="button" value="< back" onclick="goBack('#frm-three');" class="btn back">
<div class="input-group">
        <div class="form-check col-3">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="existing_material" value="asphalt">Asphalt
            </label>
        </div>
        <div class="form-check col-3">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="existing_material" value="metal">Metal
            </label>
        </div>
        <div class="form-check col-3">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="existing_material" value="tile">Tile
            </label>
        </div>
        <div class="form-check col-3">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="existing_material" value="other">Other
            </label>
        </div>
</div>
    <div class="buttons w-100 text-center mt-4">
        <input type="submit" value="next" class="btn new-custom-btn">
    </div>
</form>


<form method="post" id="frm-five" name="frm-five" class="row col-md-9">
<h4>Is this a residential or commercial roof?</h4>
<input type="button" value="< back" onclick="goBack('#frm-four');" class="btn back">
<div class="input-group">
        <div class="form-check col-6">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="is_commercial" value="residential">Residential
            </label>
        </div>
        <div class="form-check col-6">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="is_commercial" value="commercial">Commercial
            </label>
        </div>
</div>
        <div class="buttons w-100 text-center mt-4">
            <input type="submit" value="next" class="btn new-custom-btn">
        </div>
</form>



<form method="post" id="frm-six" name="frm-six" class="row col-md-9">
<h4>How urgent is this project?</h4>
<input type="button" value="< back" onclick="goBack('#frm-five');" class="btn back">
<div class="input-group">
        <div class="form-check col-4">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="urgency" value="checking">Checking
            </label>
        </div>
        <div class="form-check col-4">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="urgency" value="soon">Soon
            </label>
        </div>
        <div class="form-check col-4">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="urgency" value="urgent">Urgent
            </label>
        </div>
</div>
        <div class="buttons w-100 text-center mt-4">
            <input type="submit" value="next" class="btn new-custom-btn">
        </div>
</form>



<form method="post" id="frm-seven" name="frm-seven" class="row col-md-9">
<h4>Are you using insurance to repair your roof?</h4>
<input type="button" value="< back" onclick="goBack('#frm-six');" class="btn back">
<div class="input-group">
        <div class="form-check col-4">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="true" value="yes">Yes
            </label>
        </div>
        <div class="form-check col-4">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="true" value="no">No
            </label>
        </div>
        <div class="form-check col-4">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="true" value="maybe">Maybe
            </label>
        </div>
</div>
    
        <div class="buttons w-100 text-center mt-4">
            <input type="submit" value="next" class="btn new-custom-btn">
        </div>
</form>




<form method="post" id="frm-eight" name="frm-eight" class="row col-md-9">
<h4>What would you like on your roof?</h4>
<input type="button" value="< back" onclick="goBack('#frm-seven');" class="btn back">
    <div class="input-group" style="position: relative">
        <div class="form-check col-3">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="material" value="asphalt">Asphalt
            </label>
        </div>
        <div class="form-check col-3">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="material" value="metal">Metal
            </label>
        </div>
        <div class="form-check col-3">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="material" value="tile">Tile
            </label>
        </div>
        <div class="form-check col-3">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="material" value="other">Other
            </label>
        </div>
</div>
        <div class="buttons w-100 text-center mt-4">
            <input type="submit" value="next" class="btn new-custom-btn">
        </div>
</form>