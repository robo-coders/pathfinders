@extends('parent.app')
@section('header')

<!-- begin:: Content Head -->
<div class="kt-subheader   kt-grid__item" id="kt_subheader">
	<div class="kt-subheader__main">
		{{-- <h3 class="kt-subheader__title">
			<a href="{{ route('team_managent') }}">Team Management </a>
		</h3> --}}

		{{-- <h3 class="kt-subheader__title">
			<a href="{{ route('team_managent') }}">Team Management </a>
		</h3> --}}


		<div class="dropdown show">
  <a class="kt-subheader__title dropdown-toggle" style="color: #5867dd;" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Team Management
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" href="{{ route('team_managent') }}">All team</a>
    <a class="dropdown-item" href="{{ route('admin_all_coordinators') }}">My Coordinators</a>
    <a class="dropdown-item" href="#">Manage Team</a>
  </div>
</div>


		<span class="kt-subheader__separator kt-subheader__separator--v"></span>
		<div class="dropdown show">
			<h3 class="kt-subheader__title dropdown-toggle" style="color: #5867dd;" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				<a href="#">Course Management </a></h3>
			<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
			    <a class="dropdown-item" href="{{ route('course_management') }}">All Course</a>
			    <a class="dropdown-item" href="{{ route('upload_course_admin') }}">Upload Course</a>
			    <a class="dropdown-item" href="#">Course Report</a>
			    <a class="dropdown-item" href="{{ route('course_category') }}">Course Category</a>
		  </div>
		</div>
		<span class="kt-subheader__separator kt-subheader__separator--v"></span>
		<div class="dropdown show">
			<h3 class="kt-subheader__title dropdown-toggle" style="color: #5867dd;" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><a href="#">Sales Mangement</a></h3>
			<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
			    <a class="dropdown-item" href="{{ route('sales_management_admin') }}">Sale</a>
			</div>
		</div>
		<span class="kt-subheader__separator kt-subheader__separator--v"></span>
		<div class="kt-input-icon kt-input-icon--right kt-subheader__search kt-hidden">
			<input type="text" class="form-control" placeholder="Search order..." id="generalSearch">
			<span class="kt-input-icon__icon kt-input-icon__icon--right">
				<span><i class="flaticon2-search-1"></i></span>
			</span>
		</div>
	</div>
	<div class="kt-subheader__toolbar">
		<div class="kt-subheader__wrapper">
			<a href="{{ route('admin_dashboard') }}" class="btn btn-label-warning btn-bold btn-xl btn-icon-h kt-margin-l-10">
			Back
			</a>
		</div>
	</div>
</div>
<!-- end:: Content Head -->


@endsection
@section('body')
<div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
	<div class="kt-portlet">
		<div class="kt-portlet__head">
			<div class="kt-portlet__head-label">
				<h3 class="kt-portlet__head-title">
					Upload Course
				</h3>
			</div>
		</div>

		<!--begin::Form-->
		<form class="kt-form kt-form--fit kt-form--label-right" action="{{ route('create_upload_course') }}" method="post">
			@csrf
			<div class="kt-portlet__body">
				<div class="form-group row">
					<label class="col-lg-2 col-form-label">Course Id:</label>
					<div class="col-lg-3">
						<input type="text" class="form-control" name="course_id" placeholder="Enter Course Id">
					</div>
					<label class="col-lg-2 col-form-label">Course Name:</label>
					<div class="col-lg-3">
						<input type="text" name="course_name" class="form-control" placeholder="Enter Course Name">
					</div>
				</div>
				<div class="form-group row">
					<label class="col-lg-2 col-form-label">Course Category:</label>
					<div class="col-lg-3">
						<div class="kt-input-icon">
							<select class="custom-select form-control" name="course_category">
							<option  selected>Select your Course</option>
							@foreach ($views as $view)
							<option value="{{$view->category_name}}">{{$view->category_name}}</option>
							@endforeach
						</select>
						</div>
					</div>
					<label class="col-lg-2 col-form-label">Course Duration:</label>
					<div class="col-lg-3">
						<div class="kt-input-icon">
							<select class="custom-select form-control" name="course_duration">
							<option  selected>1 months</option>
							<option  selected>2 months</option>
							<option  selected>3 months</option>
							<option  selected>4 months</option>
							<option  selected>5 months</option>
							<option  selected>6 months</option>
						</select>
						</div>
					</div>
				</div>
				<div class="form-group row">
					<label class="col-lg-2 col-form-label">Course Fee:</label>
					<div class="col-lg-3">
						<input type="text" class="form-control" name="course_fee" placeholder="Rs">
					</div>
					<label class="col-lg-2 col-form-label">Select Seller:</label>
					<div class="col-lg-3">
						<div class="kt-input-icon">
							<select class="custom-select form-control" name="seller_name">
							<option  selected>Select your Seller</option>
							@foreach ($sellers as $seller)
							<option value="{{$seller->email}}">{{$seller->email}}</option>
							@endforeach
						</select>
						</div>
					</div>
				</div>
				<div class="form-group row">
					<label class="col-form-label col-lg-2 col-sm-12">Course Description</label>
					<div class="col-lg-3 col-md-9 col-sm-12">
						<textarea class="form-control" id="kt_maxlength_5" maxlength="220" placeholder="" rows="3" name="course_description"></textarea>
						<span class="form-text text-muted">Max length for course description is 220.</span>
					</div>
					<label class="col-lg-2 col-form-label">Upload Photo:</label>
					<div class="col-lg-3">
						<div class="custom-file">
							<input type="file" class="custom-file-input" id="customFile" name="course_picture">
							<label class="custom-file-label" for="customFile"><p align="left">Choose File </p></label>
						</div>
					</div>
				</div>
				<div class="kt-portlet__head">
					<div class="kt-portlet__head-label">
						<h3 class="kt-portlet__head-title">
							Coordinator Commission
						</h3>
					</div>
				</div> <br>
				<div class="form-group row">
					<label class="col-lg-2 col-form-label">Point:</label>
					<div class="col-lg-2">
						<input type="text" class="form-control" name="coordinator_point" placeholder="0000">
					</div>
					<label class="col-lg-2 col-form-label">Direct Sale Commission:</label>
					<div class="col-lg-2">
						<input type="text" name="coordinator_direct_sale_commission" class="form-control" placeholder="Rs">
					</div>
					<label class="col-lg-2 col-form-label">Inter Sale Commission:</label>
					<div class="col-lg-2">
						<input type="text" class="form-control" name="coordinator_inter_sale_commission" placeholder="Rs">
					</div>
				</div>
				<h6>Group Sale Commission</h6>
				<div class="form-group row">
					<label class="col-lg-2 col-form-label">Main Dealers:</label>
					<div class="col-lg-2">
						<input type="text" name="coordinator_main_dealer_commission" class="form-control" placeholder="Rs">
					</div>
					<label class="col-lg-2 col-form-label">Sub Dealers:</label>
					<div class="col-lg-2">
						<input type="text" class="form-control" name="coordinator_sub_dealer_commission" placeholder="Rs">
					</div>
					<label class="col-lg-2 col-form-label">Sales Rep:</label>
					<div class="col-lg-2">
						<input type="text" class="form-control" name="coordinator_sales_rep_commission" placeholder="Rs">
					</div>
				</div>
				<div class="kt-portlet__head">
					<div class="kt-portlet__head-label">
						<h3 class="kt-portlet__head-title">
							Main Dealer Commission
						</h3>
					</div>
				</div> <br>
				<div class="form-group row">
					<label class="col-lg-2 col-form-label">Point:</label>
					<div class="col-lg-2">
						<input type="text" class="form-control" name="main_dealer_point" placeholder="0000">
					</div>
					<label class="col-lg-2 col-form-label">Direct Sale Commission:</label>
					<div class="col-lg-2">
						<input type="text" name="main_dealer_direct_sale_commission" class="form-control" placeholder="Rs">
					</div>
					<label class="col-lg-2 col-form-label">Inter Sale Commission:</label>
					<div class="col-lg-2">
						<input type="text" class="form-control" name="main_dealer_inter_sale_commission" placeholder="Rs">
					</div>
				</div>
				<h6>Group Sale Commission</h6>
				<div class="form-group row">
					<label class="col-lg-2 col-form-label">Sub Dealers:</label>
					<div class="col-lg-2">
						<input type="text" class="form-control" name="main_dealer_sub_dealer_commission" placeholder="Rs">
					</div>
					<label class="col-lg-2 col-form-label">Sales Rep:</label>
					<div class="col-lg-2">
						<input type="text" class="form-control" name="main_dealer_sales_rep_commission" placeholder="Rs">
					</div>
				</div>
				<div class="kt-portlet__head">
					<div class="kt-portlet__head-label">
						<h3 class="kt-portlet__head-title">
							Sub Dealer Commission
						</h3>
					</div>
				</div> <br>
				<div class="form-group row">
					<label class="col-lg-2 col-form-label">Point:</label>
					<div class="col-lg-2">
						<input type="text" class="form-control" name="sub_dealer_point" placeholder="0000">
					</div>
					<label class="col-lg-2 col-form-label">Direct Sale Commission:</label>
					<div class="col-lg-2">
						<input type="text" name="sub_dealer_direct_sale_commission" class="form-control" placeholder="Rs">
					</div>
					<label class="col-lg-2 col-form-label">Inter Sale Commission:</label>
					<div class="col-lg-2">
						<input type="text" class="form-control" name="sub_dealer_inter_sale_commission" placeholder="Rs">
					</div>
				</div>
				<h6>Group Sale Commission</h6>
				<div class="form-group row">
					<label class="col-lg-2 col-form-label">Sales Rep:</label>
					<div class="col-lg-2">
						<input type="text" class="form-control" name="sub_dealer_sales_rep_commission" placeholder="Rs">
					</div>
				</div>
				<div class="kt-portlet__head">
					<div class="kt-portlet__head-label">
						<h3 class="kt-portlet__head-title">
							Sales Rep Commission
						</h3>
					</div>
				</div> <br>
				<div class="form-group row">
					<label class="col-lg-2 col-form-label">Point:</label>
					<div class="col-lg-2">
						<input type="text" class="form-control" name="sales_rep_point" placeholder="0000">
					</div>
					<label class="col-lg-2 col-form-label">Direct Sale Commission:</label>
					<div class="col-lg-2">
						<input type="text" name="sales_rep_direct_sale_commission" class="form-control" placeholder="Rs">
					</div>
					<label class="col-lg-2 col-form-label">Inter Sale Commission:</label>
					<div class="col-lg-2">
						<input type="text" class="form-control" name="sales_rep_inter_sale_commission" placeholder="Rs">
					</div>
				</div>
			</div>
			<div class="kt-portlet__foot kt-portlet__foot--fit-x">
				<div class="kt-form__actions">
					<div class="row">
						<div class="col-lg-2"></div>
						<div class="col-lg-10">
							<button type="submit" class="btn btn-success">Upload</button>
							<button type="reset" class="btn btn-secondary">Cancel</button>
						</div>
					</div>
				</div>
			</div>
		</form>

		<!--end::Form-->
	</div>

	<!--end::Portlet-->
</div>
@endsection