<section class="row userDashboardPictureSection">
	<div class="col-md-1"></div>
	
	<div class="col-md-2 dashboard-creativeSpace">
		<h3>Creative Space</h3>
	</div>

	<div class="col-md-1"></div>
	<div class="col-md-1"></div>

	
	
	<div class="col-md-2">
		@if (Storage::disk('local')->has($user->users_firstName . '-' . $user->id . '.jpg'))
	    	<img class="img-circle img-responsive" width="300" height="300" src="{{ route('account.image', ['filename' => $$user->users_firstName . '-' . $user->id  . '.jpg']) }}" alt="" class="img-responsive">
		@else
			<section class="row new-post">
	                <p>Image not found!</p>
	        </section>
		@endif
		Name: {{ $user->users_firstName }} {{ $user->users_lastName }} <br>
		Area: {{ $user->zipCode }}
	</div>

	<div class="col-md-1"></div>
	<div class="col-md-1"></div>

	<div class="col-md-2 dashboard-trackedHours">
		<div class="row">
			<h3>Hours Volunteer!</h3>
			<div class="hours-circle">
			 	<div class="hours-circle__inner">
			    	<div class="hours-circle__wrapper">
			      		<div class="hours-circle__content">{{ $user->trackedHours }}</div>
			    	</div>
			  	</div>
			</div>
		</div>
		<h3><br/>Badges goes here</h3></div>
	</div>

	<div class="col-md-1"></div>

</section>