@extends('parent.app')
@section('body')
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
@if (session()->has('message'))
	<div class="alert alert-success" role="alert">
		<div class="alert-text"> {{session()->get('message')}}</div>
	</div>
@endif

@if (session()->has('delete'))
	<div class="alert alert-danger" role="alert">
		<div class="alert-text"> {{session()->get('delete')}}</div>
	</div>
@endif	
<div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
	<div class="row">
		<div class="col-xl-6">
			<!--begin::Portlet-->
			<div class="kt-portlet">
				<div class="kt-portlet__head">
					<div class="kt-portlet__head-label">
						<h3 class="kt-portlet__head-title">
							Team Table
						</h3>
					</div>
				</div>
				<div class="kt-portlet__body">

					<!--begin::Section-->
					<div class="kt-section">
						<div class="kt-section__content">
							<table class="table">
								<thead>
									<tr>
										<th>#</th>
										<th>Avatar</th>
										<th>First Name</th>
										<th>Last Name</th>
										<th>Email</th>
										<th>Role</th>
										<th>Coupon Code</th>
										<th> </th>
									</tr>
								</thead>
								<?php $serial = 1; ?>								
								@foreach ($views as $view)	
								<tbody>
									<tr>
										<th scope="row">{{$serial}}</th>

										@if(isset($view->avatar))
											<td><img src="{{ $view->avatar }}" alt="{{ $view->name }}" class="img-circle" width="50px" height="50px"></td>
										@else
											<td><img src="extras/dummy.png" alt="{{ $view->name }}" class="img-circle" width="50px" height="50px"></td>
										@endif

										<td>{{$view->name}}</td>
										<td>{{$view->last_name}}</td>
										<td>{{$view->email}}</td>
										<td>@if ($view->role == 1)
											{{'Admin'}}
											@elseif ($view->role == 2)
											{{'coordinator'}}
											@elseif ($view->role == 3)
											{{'Teacher'}}
											@elseif ($view->role == 4)
											{{'Main Dealer'}}
											@elseif ($view->role == 5)
											{{'Sub Dealer'}}
											@elseif ($view->role == 6)
											{{'Sales Rep'}}
										@endif
										</td>
										@foreach ($view->user_rels as $data)
											<td>{{$data->coupon_code}}</td>
										@endforeach											
										<td>
											<div class="dropdown">
												<button class="btn btn-danger btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
													Actions
												</button>
												<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
													<a class="dropdown-item" href="#"><i class="la la-edit-o"></i> Edit</a>
													<a class="dropdown-item" href="#" data-dell_id="{{$view->id}}" data-toggle="modal" data-target="#kt_modal_3"><i class="la la-trash-o"></i> Delete</a>
											</div>
											</div>
										</div>
										</td>
									</tr>
								</tbody>
								<?php $serial++ ?>
								@endforeach
							</table>
						</div>
					</div>
					<!--end::Section-->
				</div>
		</div>
			<!--end::Portlet-->
	</div>
</div>
</div>
<!--End::Section-->
@include('modals.delete')

@endsection