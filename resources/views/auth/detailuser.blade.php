@extends('template')
@section('content')


<div class="containerku">
	<div class="bar-1">
			<a href="{{ url('/partner/home') }}"><span><img src="{{ URL ::asset('img/dyah/home-icon-silhouette.png')}}">Home</span></a>
            <a href="{{ url('/partner') }}"><span style="margin-left: 40px;"><img src="{{ URL ::asset('img/dyah/ic-customer.png')}}">Customer</span></a>
            <a href="{{ url('/detail') }}"><span style="margin-left: 40px;"><img src="{{ URL::asset('img/dyah/settings.png')}}">Profile</span></a>
	</div>

	<div class="bar-2">
		<b>My Profile</b>
	</div>
	<div class="sectionku">
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-sm-3">
						<center>
						<img src="{{ URL::asset('img/dyah/user.png')}}" class="rounded-circle foto-profil"><br>
						<div style="margin-left: 25px;">
							<img src="{{ URL::asset('img/dyah/ic-edit.png')}}" class="toolsku">
							<img src="{{ URL::asset('img/dyah/ic-del.png')}}" class="toolsku">
						</div>
						</center>
					</div>
					<div class="col-md-9 col-sm-9">
						<div class="isi-section">
							<h4>Personal Information</h4>
							<div class="row" style="margin-top: 20px;">
								<div class="col-md-3 col-sm-3 col">
									<p>Name</p>
									<br>
									<p>Email</p>
									<br>
									<p>NIK</p>
									<br>
									<p>Role</p>
								</div>
								<form>
								<div class="col-md-6 col-sm-6 col">
									<input type="text" name="" placeholder="" value="{{Session::get('user_name')}}" class="tb-responsive form-control " style="border: solid 1px lightgrey;border-radius: 3px;"><br>

									<input type="email" name="" placeholder="" class="tb-responsive form-control" value="{{Session::get('user_email')}}" style="border: solid 1px lightgrey;border-radius: 3px;"><br>

									<input type="text" name="" placeholder="" class="tb-responsive form-control" value="{{Session::get('user_nik')}}" readonly="" style="border: solid 1px lightgrey;border-radius: 3px;"><br>

									<select class="tb-responsive form-control" style="border: solid 1px lightgrey;border-radius: 3px;">
										<option>Administrator</option>
										<option>Rombeng</option>
										<option>Bambang</option>
									</select>
								</div>
								</form>
							</div>
	
							<h4>Change Password</h4>
							<div class="row" style="margin-top: 20px;">
								<div class="col-md-3 col-sm-3 col">
								<p>Current Password</p>
								<br>
								<p>New Password</p>
								<br>
								<p>Confirm Password</p>
								</div>

								<form>
								<div class="col-md-6 col-sm-6 mbku col">
								<input type="text" name="" placeholder="" class="tb-responsive form-control" value="{{Session::get('user_pass')}}" style=" border: solid 1px lightgrey;border-radius: 3px;"><br>

								<input type="text" name="" placeholder="********" class="tb-responsive form-control" style="border: solid 1px lightgrey;border-radius: 3px;"><br>

								<input type="text" name="" placeholder="********" class="tb-responsive form-control" style="border: solid 1px lightgrey;border-radius: 3px;"><br>
								</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	<div class="bar-3">
		<a href="{{ url('/partner') }}"><button class="btn btn-danger btn-round">Cancel</button></a>
		<button onclick="SubmitAll()" data-toggle="modal" data-target="#succesafterclick" class="btn btn-info btn-round">Save</button>
	</div>
</div>

{{-- Success after poping up --}}
<div class="modal" id="succesafterclick" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
        <div class="modal-dialog" role="document">
                <div class="modal-content">
                        
                        <div class="modal-body">
                           
                            <div class="thank-you-pop">
                                <img src="http://goactionstations.co.uk/wp-content/uploads/2017/03/Green-Round-Tick.png" alt="">
                                <h1>Success!</h1>
                                <p>Data Hasbeen Update!</p>
                                {{-- <h3 class="cupon-pop">Your Id: <span>12345</span></h3> --}}
                                
                             </div>
                             
                        </div>
                        
                    </div>
        </div>
</div>

@endsection