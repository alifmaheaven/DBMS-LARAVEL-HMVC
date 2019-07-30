@extends('template')
@section('content')


<div class="containerku">
	<div class="bar-1">
		<img src="{{ URL::asset('img/dyah/ic-setting.png')}}')}}"><span>Profile</span>
	</div>
	<div class="bar-2">
		<b>My Profile</b>
	</div>
	<div class="sectionku">
			<div class="container">
				<div class="row">
					<div class="col-md-2 col-sm-2">
						<img src="{{ URL::asset('img/dyah/nigga.jpg')}}" class="rounded-circle foto-profil"><br>
						<div style="margin-left: 25px;">
							<img src="{{ URL::asset('img/dyah/ic-edit.png')}}" class="toolsku">
							<img src="{{ URL::asset('img/dyah/ic-del.png')}}" class="toolsku">
						</div>
					</div>
					<div class="col-md-10 col-sm-10">
						<div class="isi-section">
							<h4>Personal Information</h4>
							<div class="row" style="margin-top: 20px;">
								<div class="col-md-3 col-sm-3 col">
									<p>Name</p>
									<p>Email</p>
									<p>Phone Number</p>
									<p>Role</p>
								</div>
								<form>
								<div class="col-md-6 col-sm-6 col">
									<input type="text" name="" placeholder="Bambang" class="tb-responsive"><br>
									<input type="email" name="" placeholder="kardi@bambang.sch.id" class="tb-responsive"><br>
									<input type="number" name="" placeholder="081353444342" class="tb-responsive"><br>
									<select class="tb-responsive">
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
								<p>New Password</p>
								<p>Confirm Password</p>
								</div>
								<form>
								<div class="col-md-6 col-sm-6 mbku col">
								<input type="text" name="" placeholder="********" class="tb-responsive"><br>
								<input type="text" name="" placeholder="********" class="tb-responsive"><br>
								<input type="text" name="" placeholder="********" class="tb-responsive"><br>
								</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	<div class="bar-3">
		<button class="btn btn-danger btn-round">Cancel</button>
		<button class="btn btn-info btn-round">Save</button>
	</div>
</div>

@endsection