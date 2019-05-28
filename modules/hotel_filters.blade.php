<section class="filter-widget sticky">
	<div id="map_openWrapper" class="btn-map closed">
		<button id="map_open" class="floater-shadow map btn"><svg class="icon icon-box-icon"><use xlink:href="/img/symbol-defs.svg#icon-pin"></use></svg>Go to map</button>
	</div>
	<div class="filter-box">
		<div id="htl_filterLoader">
			Loading...
			<svg class="icon icon-loader small float-right"><use xlink:href="/img/symbol-defs.svg#icon-spinner"></use></svg>
		</div>
		<div id="htl_filterOptions" class="d-none">
			<article>
				<header>
					<h3>Star Rating</h3>
				</header>
				<ul id="htlftr_star" class="list-grid-five star-rating filter-btns">
					<li class="icon-box btn btn-secondary">
						<label for="htl_star1">
							<input type="checkbox" id="htl_star1" class="htlftr_starRatingCheckbox" name="star" value="1" />
							1<svg class="icon icon-box-icon mr-0 ml-1"><use xlink:href="/img/symbol-defs.svg#icon-star"></use></svg>
						</label>
					</li>
					<li class="icon-box btn btn-secondary">
						<label for="htl_star2">
							<input type="checkbox" id="htl_star2" class="htlftr_starRatingCheckbox" name="star" value="2" />
							2<svg class="icon icon-box-icon mr-0 ml-1"><use xlink:href="/img/symbol-defs.svg#icon-star"></use></svg>
						</label>
					</li>
					<li class="icon-box btn btn-secondary">
						<label for="htl_star3">
							<input type="checkbox" id="htl_star3" class="htlftr_starRatingCheckbox" name="star" value="3" />
							3<svg class="icon icon-box-icon mr-0 ml-1"><use xlink:href="/img/symbol-defs.svg#icon-star"></use></svg>
						</label>
					</li>
					<li class="icon-box btn btn-secondary">
						<label for="htl_star4">
							<input type="checkbox" id="htl_star4" class="htlftr_starRatingCheckbox" name="star" value="4" />
							4<svg class="icon icon-box-icon mr-0 ml-1"><use xlink:href="/img/symbol-defs.svg#icon-star"></use></svg>
						</label>
					</li>
					<li class="icon-box btn btn-secondary">
						<label for="htl_star5">
							<input type="checkbox" id="htl_star5" class="htlftr_starRatingCheckbox" name="star" value="5" />
							5<svg class="icon icon-box-icon mr-0 ml-1"><use xlink:href="/img/symbol-defs.svg#icon-star"></use></svg>
						</label>
					</li>
				</ul>
			</article>
			<article>
				<header>
					<h3>Reviews</h3>
				</header>
				<ul id="htlftr_reviews" class="list-grid-three icon-reviews filter-btns">
					<li class="icon-box btn">
						<label for="htl_reviewOK">
							<input type="checkbox" id="htl_reviewOK" class="htlftr_reviewCheckbox" name="Reviews" value="okay" />
							Okay
						</label>
					</li>
					<li class="icon-box btn">
						<label for="htl_reviewGD">
							<input type="checkbox" id="htl_reviewGD" class="htlftr_reviewCheckbox" name="Reviews" value="good" />
							Good
						</label>
					</li>
					<li class="icon-box btn">
						<label for="htl_reviewEX">
							<input type="checkbox" id="htl_reviewEX" class="htlftr_reviewCheckbox" name="Reviews" value="excellent" />
							Excellent
						</label>
					</li>
				</ul>
			</article>
			<article>
				<header>
					<h3>Price Range</h3>
				</header>
				<div id="htlftr_priceRange"></div>
				<div id="htlftr_minPrice" class="low-head px-l-2">$99</div>
				<div id="htlftr_maxPrice" class="high-head">$999</div>
				{{-- <div class="slider slider-horizontal">
					<div class="slider-track">
						<div class="slider-selection" style="left: 0%; width: 100%;"></div>
						<div class="slider-handle round" style="left: 0%;"></div>
						<div class="slider-handle round" style="left: 100%;"></div>
					</div>
					<div class="tooltip top hide" style="top: -40px; left: 64px;">
						<div class="tooltip-arrow"></div>
						<div class="tooltip-inner">0 : 10000</div>
					</div>
					<input type="text" class="slider price-slider" data-slider-value="[0,10000]" data-slider-min="0" data-slider-max="10000" data-slider-step="50" data-slider-orientation="horizontal" data-slider-selection="after" data-slider-tooltip="hide">
				</div> --}}
			</article>
			<article>
				<header>
					<h3>Hotel Features</h3>
				</header>
				<ul id="htlftr_amenities" class="list-grid-five icon-list filter-btns">
					<li class="icon-box btn btn-secondary">
						<label for="htl_amenity8">
							<input type="checkbox" id="htl_amenity8" class="htlftr_amenityCheckbox" name="amenity" value="8" />
							<svg class="icon icon-box-icon mr-0"><use xlink:href="/img/symbol-defs.svg#icon-wifi"></use></svg>
							<p>Wi-fi</p>
						</label>
					</li>
					<li class="icon-box btn btn-secondary">
						<label for="htl_amenity16384">
							<input type="checkbox" id="htl_amenity16384" class="htlftr_amenityCheckbox" name="amenity" value="16384" />
							<svg class="icon icon-box-icon mr-0"><use xlink:href="/img/symbol-defs.svg#icon-car"></use></svg>
							<p>Parking</p>
						</label>
					</li>
					<li class="icon-box btn btn-secondary">
						<label for="htl_amenity2048">
							<input type="checkbox" id="htl_amenity2048" class="htlftr_amenityCheckbox" name="amenity" value="2048" />
							<svg class="icon icon-box-icon mr-0"><use xlink:href="/img/symbol-defs.svg#icon-cup"></use></svg>
							<p class="long">Breakfast</p>
						</label>
					</li>
					<li class="icon-box btn btn-secondary">
						<label for="htl_amenity2">
							<input type="checkbox" id="htl_amenity2" class="htlftr_amenityCheckbox" name="amenity" value="2" />
							<svg class="icon icon-box-icon mr-0"><use xlink:href="/img/symbol-defs.svg#icon-gym"></use></svg>
							<p>Fitness</p>
						</label>
					</li>
					<li class="icon-box btn btn-secondary">
						<label for="htl_amenity128">
							<input type="checkbox" id="htl_amenity128" class="htlftr_amenityCheckbox" name="amenity" value="128" />
							<svg class="icon icon-box-icon mr-0"><use xlink:href="/img/symbol-defs.svg#icon-swim"></use></svg>
							<p>Pool</p>
						</label>
					</li>
				</ul>
			</article>
			<article>
				<header>
					<h3>Search by hotel name</h3>
				</header>
				<div class="form-group">
				  	<svg class="icon icon-box-icon icon-search"><use xlink:href="/img/symbol-defs.svg#icon-search"></use></svg>
				    <input type="text" class="form-control" id="htlftr_hotelName" aria-describedby="hotelBrandSearch" placeholder="Hotel name or brand">
				    <div class="clearfix"></div>
				</div>
			</article>
			<div class="text-md-center">
		    	<button type="button" class="btn btn-secondary htlftr_resetButton btn-reset">Reset All Filters</button>
		    </div>
		</div>
	</div>
</section>





