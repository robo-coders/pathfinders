@extends('parent.sub_dealer')
@section('body')
@if (session()->has('message'))
	<div class="alert alert-success" role="alert">
		<div class="alert-text"> {{session()->get('message')}}</div>
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
							Coordinator'sTeam Table
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


@endsection