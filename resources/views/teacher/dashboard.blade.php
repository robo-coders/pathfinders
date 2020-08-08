@extends('parent.app3')
@section('header')
<!-- begin:: Content Head -->
<div class="kt-subheader   kt-grid__item" id="kt_subheader">
	<div class="kt-subheader__main">
		<h3 class="kt-subheader__title"><a href="{{ route('teacher_dashboard') }}">My Account </a></h3>
		<span class="kt-subheader__separator kt-subheader__separator--v"></span>
		<h3 class="kt-subheader__title"><a href="">Support</a></h3>
		<span class="kt-subheader__separator kt-subheader__separator--v"></span>
		<div class="kt-input-icon kt-input-icon--right kt-subheader__search kt-hidden">
			<input type="text" class="form-control" placeholder="Search order..." id="generalSearch">
			<span class="kt-input-icon__icon kt-input-icon__icon--right">
				<span><i class="flaticon2-search-1"></i></span>
			</span>
		</div>
	</div>
	<div class="kt-subh	eader__toolbar">
		<div class="kt-subheader__wrapper">
			<div class="col">
															<div class="btn-group dropleft">
																<button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																	Upload
																</button>
																<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
																	<a class="dropdown-item" href="#"><i class="kt-menu__link-icon flaticon2-analytics-2"></i> Course</a>
																	<a class="dropdown-item" href="#"><i class="fa fa-cog"></i> <path-path></path-path></a>
																</div>
															</div>
														</div>
		</div>
	</div>
</div>
<!-- end:: Content Head -->
@endsection

@section('body')


@endsection