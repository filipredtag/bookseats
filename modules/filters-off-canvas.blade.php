
<div class="filter-wrapper">
	<div class="site-filter">
		<div class="col-6 mt-4 text-right float-right">
			<a href="javascript:;" class="htlftr_resetButton">Reset All Filters</a>
		</div>
		<button type="button" class="mt-3 ml-3 close float-left htlftr_submitM" aria-label="Close">
		  <span aria-hidden="true">&times;</span>
		</button>
		<div class="filter-box">
			<article>
				<header>
					<h3>Star Rating</h3>
				</header>
				<ul id="htlftr_starM" class="list-grid-five star-rating filter-btns">
					<li class="icon-box btn btn-secondary">
						<label for="htlftr_starRating1M">
							<input type="checkbox" id="htlftr_starRating1M" class="htlftr_starRatingCheckboxM" value="1" />
							1<svg class="icon icon-box-icon mr-0 ml-1"><use xlink:href="/img/symbol-defs.svg#icon-star"></use></svg>
						</label>
					</li>
					<li class="icon-box btn btn-secondary">
						<label for="htlftr_starRating2M">
							<input type="checkbox" id="htlftr_starRating2M" class="htlftr_starRatingCheckboxM" value="2" />
							2<svg class="icon icon-box-icon mr-0 ml-1"><use xlink:href="/img/symbol-defs.svg#icon-star"></use></svg>
						</label>
					</li>
					<li class="icon-box btn btn-secondary">
						<label for="htlftr_starRating3M">
							<input type="checkbox" id="htlftr_starRating3M" class="htlftr_starRatingCheckboxM" value="3" />
							3<svg class="icon icon-box-icon mr-0 ml-1"><use xlink:href="/img/symbol-defs.svg#icon-star"></use></svg>
						</label>
					</li>
					<li class="icon-box btn btn-secondary">
						<label for="htlftr_starRating4M">
							<input type="checkbox" id="htlftr_starRating4M" class="htlftr_starRatingCheckboxM" value="4" />
							4<svg class="icon icon-box-icon mr-0 ml-1"><use xlink:href="/img/symbol-defs.svg#icon-star"></use></svg>
						</label>
					</li>
					<li class="icon-box btn btn-secondary">
						<label for="htlftr_starRating5M">
							<input type="checkbox" id="htlftr_starRating5M" class="htlftr_starRatingCheckboxM" value="5" />
							5<svg class="icon icon-box-icon mr-0 ml-1"><use xlink:href="/img/symbol-defs.svg#icon-star"></use></svg>
						</label>
					</li>
				</ul>
			</article>
			<article>
				<header>
					<h3>Reviews</h3>
				</header>
				<ul id="htlftr_reviewsM" class="list-grid-three icon-reviews filter-btns">
					<li class="icon-box btn">
						<label for="htl_reviewOKM">
							<input type="checkbox" id="htl_reviewOKM" name="review" class="htlftr_reviewCheckboxM" value="okay" />
							Okay
						</label>
					</li>
					<li class="icon-box btn">
						<label for="htl_reviewGDM">
							<input type="checkbox" id="htl_reviewGDM" name="review" class="htlftr_reviewCheckboxM" value="good" />
							Good
						</label>
					</li>
					<li class="icon-box btn">
						<label for="htl_reviewEXM">
							<input type="checkbox" id="htl_reviewEXM" name="review" class="htlftr_reviewCheckboxM" value="excellent" />
							Excellent
						</label>
					</li>
				</ul>
			</article>
			<article>
				<header>
					<h3>Price Range</h3>
				</header>
				<div id="htlftr_priceRangeM"></div>
				<div id="htlftr_minPriceM" class="low-head px-l-2">$99</div>
				<div id="htlftr_maxPriceM" class="high-head">$999</div>
			</article>
			<article>
				<header>
					<h3>Hotel Features</h3>
				</header>
				<ul id="htlftr_amenitiesM" class="list-grid-five icon-list filter-btns">
					<li class="icon-box btn btn-secondary">
						<label for="htl_amenity8M">
							<input type="checkbox" id="htl_amenity8M" class="htlftr_amenityCheckboxM" name="amenity" value="8" />
							<svg class="icon icon-box-icon mr-0"><use xlink:href="/img/symbol-defs.svg#icon-wifi"></use></svg>
							<p>Wi-fi</p>
						</label>
					</li>
					<li class="icon-box btn btn-secondary">
						<label for="htl_amenity16384M">
							<input type="checkbox" id="htl_amenity16384M" class="htlftr_amenityCheckboxM" name="amenity" value="16384" />
							<svg class="icon icon-box-icon mr-0"><use xlink:href="/img/symbol-defs.svg#icon-car"></use></svg>
							<p>Parking</p>
						</label>
					</li>
					<li class="icon-box btn btn-secondary">
						<label for="htl_amenity2048M">
							<input type="checkbox" id="htl_amenity2048M" class="htlftr_amenityCheckboxM" name="amenity" value="2048" />
							<svg class="icon icon-box-icon mr-0"><use xlink:href="/img/symbol-defs.svg#icon-cup"></use></svg>
							<p class="long">Breakfast</p>
						</label>
					</li>
					<li class="icon-box btn btn-secondary">
						<label for="htl_amenity2M">
							<input type="checkbox" id="htl_amenity2M" class="htlftr_amenityCheckboxM" name="amenity" value="2" />
							<svg class="icon icon-box-icon mr-0"><use xlink:href="/img/symbol-defs.svg#icon-gym"></use></svg>
							<p>Fitness</p>
						</label>
					</li>
					<li class="icon-box btn btn-secondary">
						<label for="htl_amenity128M">
							<input type="checkbox" id="htl_amenity128M" class="htlftr_amenityCheckboxM" name="amenity" value="128" />
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
				    <input type="text" class="form-control" id="htlftr_hotelNameM" aria-describedby="hotelBrandSearch" placeholder="Hotel name or brand">
				    <div class="clearfix"></div>
				</div>
			</article>
			<div class="text-center">
		    	<button type="button" class="btn btn-apply htlftr_submitM">Apply</button>
		    </div>
		</div>
	</div>
</div>





