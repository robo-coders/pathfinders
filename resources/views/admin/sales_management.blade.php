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

jkdhfjkasd;fksd;kj;kljklj;klj

@endsection