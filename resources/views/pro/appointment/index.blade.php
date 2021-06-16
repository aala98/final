
@extends('pro.dashboard')











@section('content')

























  <section>
    <body style="background-color:rgb(123,184,108)">

    @if(Session::has('flash_message'))
            <div class="alert alert-success">
                {{ Session::get('flash_message') }}
            </div>
        @endif

    <div class="container">


    </div>
    <div class="container">


        <h1>Appointment List</h1>
        <p class="lead">Here's a list of all your appointments.
            <a href="{{ route('appointments.create') }}">Book a new one?</a>
        </p>
        <hr>




        <h2> My Bookings </h2><br>




        <div id="center" style="background-color:#eeeeee;"><span> You have no bookings right now</span></div>
        <p> </p>



        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th style="background-color:#eeeeee;">Booking Description</th>
                        <th style="background-color:#eeeeee;">Date </th>
                        <th style="background-color:#eeeeee;">Time </th>
                        <th style="background-color:#eeeeee;">Practitioner </th>
                        <th class="active" style="background-color:#eeeeee;">Notes</th>
                        <th class="active" style="background-color:#eeeeee;">&nbsp;</th>
                    </tr>
                </thead>
                <tbody>

					@foreach($appointments as $appointment)
					    <tr>
					    	<td>{{ $appointment->brief_desc }}</td>
					    	<td>DATEHERE</td>
					    	<td>TIMEHERE</td>
					    	<td>DOCHERE</td>
					    	<td>{{ $appointment->full_desc}}</td>
					    	<td>
					    		<a href="{{ route('appointments.show', $appointment->id) }}" class="btn btn-info">View Appointment</a>
					    		<a href="{{ route('appointments.edit', $appointment->id) }}" class="btn btn-primary">Edit Appointment</a>
					    	</td>
					    </tr>

					@endforeach

                </tbody>
            </table>
        </div>
    </div>




    <script src="js/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>



@endsection
