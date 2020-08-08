@extends('parent.sub_dealer')
@section('body')
<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor">

   <!-- begin:: Content -->
   <div class="kt-content  kt-grid__item kt-grid__item--fluid">

      <div class="kt-portlet">
            <div class="kt-portlet__body kt-portlet__body--fit">
               <div class="kt-grid">
                  <div class="kt-grid__item kt-grid__item--fluid kt-wizard-v4__wrapper">
                     <!--begin: Form Wizard Form-->
                     <form method="POST" action="{{ route('create_new_sub_dealer') }}"  class="kt-form" id="kt_apps_user_add_user_form">
                        @csrf
                        <!--begin: Form Wizard Step 1-->
                        <div class="kt-wizard-v4__content m-5" data-ktwizard-type="step-content" data-ktwizard-state="current">
                           <div class="kt-heading kt-heading--md">User's Profile Details:</div>
                           <div class="kt-section kt-section--first">
                              <div class="kt-wizard-v4__form">
                                 <div class="row">
                                    <div class="col-xl-12">
                                       <div class="kt-section__body">
                                          <div class="form-group row">
                                             <label class="col-xl-3 col-lg-3 col-form-label">Avatar</label>
                                             <div class="col-lg-9 col-xl-6">
                                                <div class="kt-avatar kt-avatar--outline kt-avatar--circle" id="kt_apps_user_add_avatar">
                                                   <div class="kt-avatar__holder" style="background-image: url(./assets/media/users/user2.jpg)"></div>
                                                   <label class="kt-avatar__upload" data-toggle="kt-tooltip" title="" data-original-title="Change avatar">
                                                   <i class="fa fa-pen"></i>
                                                   <input type="file" name="">
                                                   </label>
                                                   <span class="kt-avatar__cancel" data-toggle="kt-tooltip" title="" data-original-title="Cancel avatar">
                                                   <i class="fa fa-times"></i>
                                                   </span>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="form-group row">
                                             <label class="col-xl-3 col-lg-3 col-form-label">First Name</label>
                                             <div class="col-lg-9 col-xl-9">
                                                <input class="form-control" name="first_name" type="text" value="">
                                             </div>
                                          </div>
                                          <div class="form-group row">
                                             <label class="col-xl-3 col-lg-3 col-form-label">Last Name</label>
                                             <div class="col-lg-9 col-xl-9">
                                                <input class="form-control" name="last_name" type="text" value="">
                                             </div>
                                          </div>
                                          <div class="form-group row">
                                             <label class="col-xl-3 col-lg-3 col-form-label">Password</label>
                                             <div class="col-lg-9 col-xl-9">
                                                <input class="form-control" name="password" type="password" value="">
                                             </div>
                                          </div>
                                          <div class="form-group row">
                                             <label class="col-xl-3 col-lg-3 col-form-label">Contact Phone</label>
                                             <div class="col-lg-9 col-xl-9">
                                                <div class="input-group">
                                                   <div class="input-group-prepend"><span class="input-group-text"><i class="la la-phone"></i></span></div>
                                                   <input type="text" class="form-control" name="contact" value="" placeholder="Phone" aria-describedby="basic-addon1">
                                                </div>
                                                <span class="form-text text-muted">Add with Country Code</span>
                                             </div>
                                          </div>
                                          <div class="form-group row">
                                             <label class="col-xl-3 col-lg-3 col-form-label">Email Address</label>
                                             <div class="col-lg-9 col-xl-9">
                                                <div class="input-group">
                                                   <div class="input-group-prepend"><span class="input-group-text"><i class="la la-at"></i></span></div>
                                                   <input type="text" class="form-control" name="email" value="" placeholder="Email" aria-describedby="basic-addon1">
                                                </div>
                                             </div>
                                          </div>
                                          <div class="form-group row">
                                             <label class="col-xl-3 col-lg-3 col-form-label">User Role</label>
                                             <div class="col-lg-9 col-xl-9">
                                                <select class="form-control" name="role">
                                                   <option data-offset="-39600" value="6">Sales Rep</option>
                                                </select>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!--end: Form Wizard Step 1-->
                        <!--begin: Form Actions -->
                        <div class="kt-form__actions m-5">
                           <button class="btn btn-success btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u"> Submit </button>
                        </div>
                        <!--end: Form Actions -->
                     </form>
                     <!--end: Form Wizard Form-->
                  </div>
               </div>
            </div>
         </div>
      
   </div>
   <!-- end:: Content -->
</div>
@endsection