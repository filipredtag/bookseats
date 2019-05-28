@extends('layouts.base-back')

@section('content')

	<div class="container">
		<div id="chk_section">
		</div>
		<div class="row">
			<div class="col-12 big-title">
				<h1>Build Your Package</h1>
			</div>
		</div>
		<div class="row no-gutters accord-wrapper">
			<article id="bpk_tickets" class="col-12 accord-segment">
				<section class="accord-header">
					<header>
						<h1>
							<span id="bpk_ticketStatusIconNum" class="">
								<svg class="icon icon-box-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/img/symbol-defs.svg#icon-1"></use></svg>
							</span>
							<span id="bpk_ticketStatusIconSelected" class="d-none">
								<svg class="icon icon-box-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/img/symbol-defs.svg#icon-complete-bold"></use></svg>
							</span>
							<span id="bpk_ticketStatusIconUnSelected" class="d-none">
								<svg class="icon icon-box-icon unselected" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/img/symbol-defs.svg#icon-no-icon"></use></svg>
							</span>
							<svg class="icon icon-box-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/img/symbol-defs.svg#icon-tickets"></use></svg>
							Event Tickets
						</h1>
						<span class="package-special">Book this ticket with a hotel, get 50% off your ticket</span>
					</header>
					<button type="button" id="bpk_ticketEdit" class="btn btn-secondary btn-edit d-none">

                    </button>
				</section>
				<section id="bpk_ticketEngine" class="accord-body collapse">
					<div class="item">
						<div id="tck_engine">
							<header>
								<h2 class="title">How many tickets do you need?</h2>
							</header>
							<div class="body row no-gutters">
								<div class="col-12 col-md-5 col-lg-4 col-xl-3">
									<select id="tck_number" class="form-control custom-shadow" name="numTickets">
										<option value="" readonly>Select number of tickets</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>
										<option value="7">7</option>
										<option value="8">8</option>
									</select>
								</div>
							</div>
						</div>
						<div id="tck_summary" class="pb-3 d-none">
							<h3 class="subtitle">Number of event tickets:</h3>
			                <p id="tck_numberSummary" class="mb-1"></p>
			            </div>
			        </div>
				</section>
				<section id="bpk_ticketButtons" class="next-step pt-3 pb-3 d-none">
					<button type="button" id="bpk_ticketContinue" class="btn btn-primary col-md-3 col-lg-2 col-7 float-none float-md-right">Continue</button>
					<button type="button" id="bpk_ticketNo" class="btn btn-secondary special-padding col-md-5 col-lg-4 col-xl-3 col-4 mr-0 mr-md-3 float-left float-md-right">
						<span class="d-block d-md-none">No Thanks</span><span class="d-none d-md-block">No, I don't need event tickets</span>
					</button>
				</section>
			</article>

			{{-- <article class="col-12 accord-segment">
				<section class="accord-header">
					<header>
						<h1>
							<span class="circle-wrapper px-2 mr-3">
								<svg class="icon icon-box-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/img/symbol-defs.svg#icon-complete"></use></svg>
							</span>
							Event Tickets
						</h1>
					</header>
					<button type="button" class="btn col-1 mt-3 mr-4 btn-secondary btn-edit">
                        Edit
                    </button>
				</section>
				<section class="accord-body" style="display:block">
					<div class="item">
						<header>
							<h2 class="title">Number of event tickets</h2>
						</header>
						<p>2</p>
					</div>
				</section>
			</article> --}}

			<article id="bpk_hotels" class="col-12 accord-segment">
				<section class="accord-header">
					<header>
						<h1>
							<span id="bpk_hotelStatusIconNum" class="">
								<svg class="icon icon-box-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/img/symbol-defs.svg#icon-2"></use></svg>
							</span>
							<span id="bpk_hotelStatusIconSelected" class="d-none">
								<svg class="icon icon-box-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/img/symbol-defs.svg#icon-complete-bold"></use></svg>
							</span>
							<span id="bpk_hotelStatusIconUnSelected" class="d-none">
								<svg class="icon icon-box-icon unselected" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/img/symbol-defs.svg#icon-no-icon"></use></svg>
							</span>
							<svg class="icon icon-box-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/img/symbol-defs.svg#icon-building"></use></svg>
							Hotel
						</h1>
						<span class="package-special">Book this ticket with a hotel, get 50% off your ticket</span>
					</header>
					<button type="button" id="bpk_hotelEdit" class="btn btn-secondary btn-edit d-none">
                        Edit
                    </button>
				</section>
				<section id="bpk_hotelEngine" class="accord-body collapse">
					<div class="item">
						<form id="htl_engine">
							<div class="body row no-gutters">
								<div class="with-icon col-12 col-lg-5 mb-2 pr-0 pr-md-1">
									<div id="htl_destination">
					                    <div class="input-container">
					                    	<svg class="icon icon-box-icon pin"><use xlink:href="/img/symbol-defs.svg#icon-pin"></use></svg>
					                        <input type="text" id="htlMdl_locationField" class="dd-field form-control" name="locationString" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" value="{{$parameters['locationString']}}" placeholder="Type city, area or hotel name">
					                        <svg role="img" title="Departure" class="icon close dd-clear">
					                            <use xmlns:xlink="http://www.w3.org/2000/svg" xlink:href="/img/symbol-defs.svg#icon-close"></use>
					                        </svg>
					                    </div>
					                    <input type="hidden" name="locationKey" class="dd-value" value="{{$parameters['locationKey']}}">
					                    <ul class="list-unstyled auto-complete dd-list" style="display:none;"></ul>
					                </div>
								</div>
								<div id="htl_dateRange" class="col-12 col-lg-5 mb-2 pl-0 pl-md-1">
									<div class="form-control d-flex datepicker-control with-icon">
										<svg class="icon icon-box-icon"><use xlink:href="/img/symbol-defs.svg#icon-calendar"></use></svg>
										<input type="text" readonly="true" id="htl_startDate" class="" name="arrDate" placeholder="Check In" value="">
										<span class="align-self-center px-2">&#8211;</span>
										<input type="text" readonly="true" id="htl_endDate" class="second" name="depDate" placeholder="Check Out" value="">
									</div>
								</div>
								<div id="htl_rangePickerElement" style="position: absolute; z-index: 5; display: none;">
									<button type="button" id="" class="close calendar" data-room="" aria-label="Close">×</button>
									<div id="htl_rangePickerContainer"></div>
									<div class="calendar-footer">
										<div class="wrapper">
											<button type="button" id="htl_clearDates" class="btn btn-secondary btn-link">Clear Calendar</button>
										</div>
									</div>
									<svg class="icon icon-box-icon"><use xlink:href="/img/symbol-defs.svg#icon-arrow"></use></svg>
								</div>
								<div class="col-12 col-lg-5 mb-2 pr-0 pr-md-1 paxSelector">
									<button type="button" id="htl_occupancyToggle" class="btn btn-secondary btn-pax-selector form-control text-left with-chevron collapsed">
										1 Room(s), 1 Adult(s), 0 Child(ren)
										<svg class="icon icon-box-icon float-right" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/img/symbol-defs.svg#icon-chevron"></use></svg>
									</button>
									<div id="htl_occupancyDropdown" class="col-12 pax-selector-wrapper bld-pkg d-none">
										<div id="htl_occupancy">
										</div>
										<div class="form-inline">
											<div class="row no-gutters form-group">
												<div class="col-12 col-md-6">
													<button type="button" id="htl_addRoom" class="btn btn-secondary btn-default col-12 col-md-8">+ Add Room</button>
												</div>
												<button type="button" id="htl_occupancyClose" class="btn btn-search edit-search col-12 col-md-4 mt-2">Done</button>
											</div>
										</div>
									</div>
								</div>
								<div class="col-12 col-lg-6 px-0 pt-2">
									<div class="custom-checkmark col-12 col-sm-6 col-xl-5 px-1 float-left">
					        			<input type="radio" id="bpk_hotelNearVenue" class="htl_event" name="hotelCentre" value="ev_1" checked />
							            <label class="justify-content-start label-xl" for="bpk_hotelNearVenue"> <span></span>
							                <svg class="icon icon-checkmark"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/img/symbol-defs.svg#icon-checkmark"></use></svg>
							                Hotel Near Venue
							            </label>
					        		</div>
					        		<div class="custom-checkmark col-12 col-sm-6 pl-1 pr-0 float-left">
					        			<input type="radio" id="bpk_hotel_NearCentre" class="htl_event" name="hotelCentre" value="ev_2" />
							            <label class="justify-content-start label-xl" for="bpk_hotel_NearCentre"> <span></span>
							                <svg class="icon icon-checkmark"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/img/symbol-defs.svg#icon-checkmark"></use></svg>
							                Hotel Near City Centre
							            </label>
					        		</div>
								</div>
							</div>
						</form>
						<div id="htl_summary" class="pb-3 d-none">
							<div class="hotel-details">
				                <h3 class="subtitle">Hotel Details</h3>
				                <p id="htl_destinationSummary" class="mb-1">Destination city: Toronto, Ontario</p>
				                <p id="htl_checkinSummary" class="mb-1">Check-in: 04/21/2018</p>
				                <p id="htl_checkoutSummary" class="mb-1">Check-out: 04/23/2018</p>
				                <p id="htl_occupancySummary" class="mb-1">1 room, 2 adults 1 child</p>
				            </div>
			            </div>
		            </div>
				</section>
				<section id="bpk_hotelButtons" class="next-step pt-3 pb-3 d-none">
					<button type="button" id="bpk_hotelContinue" class="btn btn-primary col-md-3 col-lg-2 col-7 float-none float-md-right">Continue</button>
					<button type="button" id="bpk_hotelNo" class="btn btn-secondary special-padding col-md-5 col-lg-4 col-xl-3 col-4 mr-0 mr-md-3 float-left float-md-right">
						<span class="d-block d-md-none">No Thanks</span><span class="d-none d-md-block">No, I don't need a hotel</span></button>
				</section>

			</article>

			{{-- <article class="col-12 accord-segment">
				<section class="accord-header">
					<header>
						<h1>
							<span class="circle-wrapper px-2 mr-3">
								<svg class="icon icon-box-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/img/symbol-defs.svg#icon-complete"></use></svg>
							</span>
							Hotel Details
						</h1>
					</header>
					<button type="button" class="btn col-1 mt-3 mr-4 btn-secondary btn-edit">
                        Edit
                    </button>
				</section>
				<section class="accord-body" style="display:block">
					<div class="item">
						<header>
							<h2 class="title">Number of event tickets</h2>
						</header>
						<p>Destination city: Toronto, Ontario</p>
						<p>Check-out: 08/16/2017</p>
						<p>1 room, 2 adults</p>
						<p>Hotel near city centre</p>
					</div>
				</section>
			</article> --}}

			{{-- <article id="bpk_flights" class="col-12 accord-segment">
				<section class="accord-header">
					<header>
						<h1>
							<svg class="icon icon-box-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/img/symbol-defs.svg#icon-no-icon"></use></svg>
							Hotel
						</h1>
						<span class="package-special">Book this ticket with a hotel, get 50% off your ticket</span>
					</header>
					<button type="button" class="btn col-1 mt-3 mr-4 btn-secondary btn-edit">
                        Add Hotel
                    </button>
				</section>
			</article> --}}

			<article class="col-12 accord-segment">
				<section class="accord-header">
					<header>
						<h1>
							<span id="bpk_flightStatusIconNum" class="">
								<svg class="icon icon-box-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/img/symbol-defs.svg#icon-3"></use></svg>
							</span>
							<span id="bpk_flightStatusIconUnSelected" class="d-none">
								<svg class="icon icon-box-icon unselected" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/img/symbol-defs.svg#icon-no-icon"></use></svg>
							</span>
							<svg class="icon icon-box-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/img/symbol-defs.svg#icon-plane"></use></svg>
							Flights
						</h1>
						<span class="package-special">Book this flight and get 85% off your hotel</span>
					</header>
					<button type="button" id="bpk_flightEdit" class="btn btn-secondary btn-edit d-none">
                        Add Flights
                    </button>
				</section>
				<section id="bpk_flightEngine" class="accord-body collapse">
					<div id="flt_engine" class="item">
						<div class="row no-gutters px-0 col-12 col-lg-11 mt-3 mb-3 flight-edit-search" id="editSearch">
							<div class="with-icon col-12 col-md-4 mb-2 pr-2">
								<div id="flt_origin">
				                    <div class="input-container">
				                    	<svg class="icon icon-box-icon pin"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/img/symbol-defs.svg#icon-pin"></use></svg>
				                        <input type="text" id="flt_originField" class="dd-field form-control text-truncate" name="origin" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" value="" placeholder="Type city, code or airport name">
				                        <svg role="img" title="Departure" class="icon close dd-clear">
				                            <use xmlns:xlink="http://www.w3.org/2000/svg" xlink:href="/img/symbol-defs.svg#icon-close"></use>
				                        </svg>
				                    </div>
				                    <input type="hidden" name="originCode" class="dd-value" value="">
				                    <ul class="list-unstyled auto-complete dd-list" style="display:none;"></ul>
				                </div>
							</div>
							<div class="with-icon col-12 col-md-4 mb-2 pr-2">
								<div id="flt_destination">
				                    <div class="input-container">
				                    	<svg class="icon icon-box-icon pin"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/img/symbol-defs.svg#icon-pin"></use></svg>
				                        <input type="text" id="flt_destinationField" class="dd-field form-control text-truncate" name="destination" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" value="" placeholder="Type city, code or airport name">
				                        <svg role="img" title="Destination" class="icon close dd-clear">
				                            <use xmlns:xlink="http://www.w3.org/2000/svg" xlink:href="/img/symbol-defs.svg#icon-close"></use>
				                        </svg>
				                    </div>
				                    <input type="hidden" name="destinationCode" class="dd-value" value="">
				                    <ul class="list-unstyled auto-complete dd-list" style="display:none;"></ul>
				                </div>
							</div>
							<div id="flt_dateRange" class="col-12 col-md-4 mb-2 pr-2 px-md-0 ">
								<div class="form-control d-flex datepicker-control custom with-icon">
									<svg class="icon icon-box-icon d-none d-xl-inline"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/img/symbol-defs.svg#icon-calendar"></use></svg>
									<input type="text" readonly="true" id="flt_startDate" class="" name="depDate" placeholder="Departure" value="">
									<span class="align-self-center px-2">–</span>
									<input type="text" readonly="true" id="flt_endDate" class="second" name="retDate" placeholder="Return" value="">
								</div>
							</div>
							<div id="flt_rangePickerElement" style="position: absolute; z-index: 5; display: none;">
								<button type="button" id="" class="close calendar" data-room="" aria-label="Close">×</button>
								<div id="flt_rangePickerContainer"></div>
								<div class="calendar-footer">
									<div class="wrapper">
										<button type="button" id="flt_clearDates" class="btn btn-secondary btn-link">Clear Calendar</button>
									</div>
								</div>
								<svg class="icon icon-box-icon"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/img/symbol-defs.svg#icon-arrow"></use></svg>
							</div>
							<div id="flt_dateSingle" class="col-12 col-md-4 mb-2 px-0  d-none">
							<div class="form-control d-flex datepicker-control with-icon">
								<svg class="icon icon-box-icon"><use xlink:href="/img/symbol-defs.svg#icon-calendar"></use></svg>
								<input type="text" id="flt_travelDate" class="" name="travelDate" placeholder="Departure" value="">
							</div>
						</div>
							<div class="col-6 col-md-2 mb-2 pr-2">
								<select class="form-control dd-field" id="flt_adults" name="">
									<option value="1">1 Adult</option>
	                                <option value="2">2 Adults</option>
	                                <option value="3">3 Adults</option>
	                                <option value="4">4 Adults</option>
	                                <option value="5">5 Adults</option>
	                                <option value="6">6 Adults</option>
								</select>
							</div>
							<div class="col-6 col-md-2 mb-2 pr-2 paxSelector">
								<button type="button" id="flt_occupancyToggle" class="btn btn-secondary btn-pax-selector form-control text-left text-truncate">0 Child(ren)</button>
								<div id="flt_occupancyDropdown" class="pax-selector-wrapper lft d-none">
									<div id="flt_occupancy">
										<div class="row no-gutters form-group">
											<div class="col-4">
												<h3 class="px-1">0 Child(ren)</h3>
												<div class="row no-gutters">
													<select id="flt_children" class="form-control" name="">
														<option value="0">0</option>
														<option value="1">1</option>
														<option value="2">2</option>
														<option value="3">3</option>
														<option value="4">4 {{-- Children --}}</option>
													</select>
												</div>
											</div>
											<div class="col-8">
												<h3 class="subheader px-1">Child's age upon return</h3>
												<div id="flt_ageElements" class="row no-gutters child-age-row"></div>
											</div>
										</div>
									</div>
									<div class="row no-gutters mt-3 pt-3 with-border-top">
										<div class="col-12 text-right">
											<button type="button" class="btn btn-search">Done</button>
											{{-- <button type="button" class="btn btn-cancel">Cancel</button> --}}
										</div>
									</div>
								</div>
							</div>
							<div class="col-6 col-md-3 pr-2">
								<select class="form-control dd-field" name="cabinType">
									<option value="Y">Economy Class</option>
	                                <option value="S">Premium Economy</option>
	                                <option value="C">Business Class</option>
								</select>
							</div>
					        <div class="col-5 mt-2">
				        		<div class="pr-2 float-left custom-checkmark">
				        			<input type="radio" id="roundtrip" class="flt_trip" name="trip" value="roundtrip" checked />
						            <label class="justify-content-start" for="roundtrip"> <span></span>
						                <svg class="icon icon-checkmark"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/img/symbol-defs.svg#icon-checkmark"></use></svg>
						                Roundtrip
						            </label>
				        		</div>
				        		<div class="custom-checkmark float-left">
				        			<input type="radio" id="oneway" class="flt_trip" name="trip" value="oneway" />
						            <label class="justify-content-start" for="oneway"> <span></span>
						                <svg class="icon icon-checkmark"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/img/symbol-defs.svg#icon-checkmark"></use></svg>
						                Oneway
						            </label>
				        		</div>
					        </div>
						</div>
					</div>
				</section>
				<section id="bpk_flightButtons" class="next-step pt-3 pb-3 d-none">
					<a id="bpk_flightContinue" class="btn btn-primary special-padding col-lg-3 col-md-5 col-7 float-none float-md-right" href="/hotel-details">Search for my package</a>
					<button type="button" id="bpk_flightNo" class="btn btn-secondary special-padding col-md-5 col-lg-4 col-xl-3 col-4 mr-0 mr-md-3 float-left float-md-right">
						<span class="d-block d-md-none">No Thanks</span>
						<span class="d-none d-md-block">No, I don't need flights</span>
					</button>
				</section>
			</article>
		</div>
	</div>

	<script type="text/javascript">
		var searchParameters = {!!json_encode($parameters)!!};
	</script>
@stop








