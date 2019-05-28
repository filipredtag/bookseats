
<div id="map_frame" class="map-frame">
    <div class="d-md-none">
        @include('modules.header')
    	<form class="form-inline mt-3 mb-2">
            <div class="row no-gutters edit-search">
        		<div class="col-4 px-2">
        			<select id="htlftr_radiusMap" class="form-control">
                        <option value="1">1 KM</option>
                        <option value="2">2 KM</option>
                        <option value="3">3 KM</option>
                        <option value="4">4 KM</option>
                        <option value="5" selected>5 KM</option>
                        <option value="6">6 KM</option>
                        <option value="7">7 KM</option>
                        <option value="8">8 KM</option>
                        <option value="9">9 KM</option>
                        <option value="10">10 KM</option>
                        <option value="11">11 KM</option>
                        <option value="12">12 KM</option>
                        <option value="13">13 KM</option>
                        <option value="14">14 KM</option>
                        <option value="15">15 KM</option>
                        <option value="16">16 KM</option>
                        <option value="17">17 KM</option>
                        <option value="18">18 KM</option>
                        <option value="19">19 KM</option>
                        <option value="20">20 KM</option>
                    </select>

                </div>
                <div class="col-8 place text-center align-self-center">
                    <label class="d-inline-block" for="filterEdit">From:</label>
                    {{$venue}}
                </div>
            </div>
    	</form>
    </div>
	<div class="map-wrapper">
        <script src='https://maps.googleapis.com/maps/api/js?key=AIzaSyAlKSi-zAf8tL-CwrsVWnY0Qocl8iGmuGE'></script>
        {{-- <button id="map_hide" class="floater-hide-map d-none d-lg-block btn">Hide Map</button> --}}
        <div id="map_resultContainer"></div>
        <div id='gmap_canvas' class="map-canvas"></div>
	</div>
</div>
