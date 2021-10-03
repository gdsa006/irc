
<form action="{{ route('fullName') }}" method="get" class="row col-md-9">
                            <div class="input-group" style="position: relative">
                            <span id="location-icon">
                            <i class="fas fa-map-marker-alt"></i>
                            </span>
                                <input type="text" class="form-control shadow-none" id="address" placeholder="Enter address...">
                                <button class="btn btn-outline-secondary btn-custom-submit" id="fullName" type="button"><i class="fas fa-calculator"></i></button>
                                <div id="search-results">
                                    <!-- populate results -->
                                </div>
                            </div>
                        </form>