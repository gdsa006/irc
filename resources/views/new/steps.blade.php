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
<h4>Enter your address to begin!</h4>
<div class="col-md-10 offset-md-1">
    <div class="input-group" style="position: relative">
    <div class="input-group-prepend">
      <span class="input-group-text">Sqft</span>
    </div>
        <input type="text" class="form-control new-custom-input" id="sqft" placeholder="Home SqFt" value="" name="sqft">
        <div class="buttons">
            <input type="submit" value="Looks good, next step!" class="btn new-custom-btn">
            <input type="button" value="Back" onclick="goBack('#frm-one');" class="btn new-custom-btn">
        </div>
    </div>
</div>   
</form>


<form method="post" id="frm-three" name="frm-three" class="row">

        <div class="form-check">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="steep" value="flat">Flat
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="steep" value="mellow">Mellow
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="steep" value="steep">Steep
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="steep" value="unsure">Unsure
            </label>
        </div>
    <div class="buttons">
        <input type="submit" value="next">
    </div>
</form>

<form method="post" id="frm-four" name="frm-four" class="row">
        <div class="form-check">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="existing_material" value="asphalt">Asphalt
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="existing_material" value="metal">Metal
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="existing_material" value="tile">Tile
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="existing_material" value="other">Other
            </label>
        </div>
    <div class="buttons">
        <input type="submit" value="next">
    </div>
</form>


<form method="post" id="frm-five" name="frm-five" class="row col-md-9">
        <div class="form-check">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="is_commercial" value="residential">Residential
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="is_commercial" value="commercial">Commercial
            </label>
        </div>
        <div class="buttons">
            <input type="submit" value="next">
        </div>
</form>



<form method="post" id="frm-six" name="frm-six" class="row col-md-9">
        <div class="form-check">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="urgency" value="checking">Checking
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="urgency" value="soon">Soon
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="urgency" value="urgent">Urgent
            </label>
        </div>
        <div class="buttons">
            <input type="submit" value="next">
        </div>
</form>



<form method="post" id="frm-seven" name="frm-seven" class="row col-md-9">
        <div class="form-check">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="true" value="yes">Yes
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="true" value="no">No
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="true" value="maybe">Maybe
            </label>
        </div>
        <div class="form-check">
        </div>
        <div class="buttons">
            <input type="submit" value="next">
        </div>
</form>




<form method="post" id="frm-eight" name="frm-eight" class="row col-md-9">
    <div class="input-group" style="position: relative">
        <div class="form-check">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="material" value="asphalt">Asphalt
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="material" value="metal">Metal
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="material" value="tile">Tile
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="material" value="other">Other
            </label>
        </div>
        <div class="form-check">
        </div>
        <div class="buttons">
            <input type="submit" value="next">
        </div>
</form>