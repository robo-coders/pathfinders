@extends('parent.app2')
@section('header')
<!-- begin:: Content Head -->
<div class="kt-subheader   kt-grid__item" id="kt_subheader">
	<div class="kt-subheader__main">
		<h3 class="kt-subheader__title"><a href="">My Tickets
 </a></h3>
		<span class="kt-subheader__separator kt-subheader__separator--v"></span>
		<h3 class="kt-subheader__title"><a href="">Open Ticket </a></h3>
		<span class="kt-subheader__separator kt-subheader__separator--v"></span>
		<h3 class="kt-subheader__title"><a href="">Announcements</a></h3>
		<span class="kt-subheader__separator kt-subheader__separator--v"></span>
		<h3 class="kt-subheader__title"><a href="">Knowledgebase</a></h3>
		<span class="kt-subheader__separator kt-subheader__separator--v"></span>
		<h3 class="kt-subheader__title"><a href="">Downloads</a></h3>
		<span class="kt-subheader__separator kt-subheader__separator--v"></span>
		<div class="kt-input-icon kt-input-icon--right kt-subheader__search kt-hidden">
			<input type="text" class="form-control" placeholder="Search order..." id="generalSearch">
			<span class="kt-input-icon__icon kt-input-icon__icon--right">
				<span><i class="flaticon2-search-1"></i></span>
			</span>
		</div>
	</div>
	<div class="kt-subheader__toolbar">
		<a href="{{ route('coordinator_dashboard') }}" class="btn btn-label-warning btn-bold btn-xl btn-icon-h kt-margin-l-10">
			Back
		</a>
	</div>
</div>
<!-- end:: Content Head -->
@endsection


@section('body')


@endsection