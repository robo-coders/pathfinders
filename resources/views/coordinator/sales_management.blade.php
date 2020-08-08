@extends('parent.app2')
@section('header')
<!-- begin:: Content Head -->
<div class="kt-subheader   kt-grid__item" id="kt_subheader">
	<div class="kt-subheader__main">
		<h3 class="kt-subheader__title"><a href=""> xxxxxxx </a></h3>
		<span class="kt-subheader__separator kt-subheader__separator--v"></span>
		
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
(Merchant can monitor
his all sub merchants
Full Sales Report)

@endsection