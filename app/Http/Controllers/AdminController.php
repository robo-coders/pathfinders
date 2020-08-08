<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\user;
use App\role_user;
use App\users_rel;
use App\course_category;
use App\upload_course;
use App\coordinator_commission;
use App\main_dealer_commission;
use App\sales_rep_commission;
use App\sub_dealer_commission;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function redirect_user(){
    	if (auth::user()->role ==  '1') {
    		return redirect('/admin-dashboard');
    	}elseif (auth::user()->role == '2') {
            return redirect('/coordinator-dashboard');
        }elseif (auth::user()->role == '3') {
            return redirect('/teacher-dashboard');
        }elseif (auth::user()->role == '4') {
            return redirect('/main-dealer-dashboard');
        }elseif (auth::user()->role == '5') {
            return redirect('/sub-dealer-dashboard');
        }elseif (auth::user()->role == '6') {
            return redirect('/sales-rep-dashboard');
        }
    	else{
    		return 'try again';
    	}
    }
    public function create_new_user(Request $request)
    {
        return $request;
    	$store = new user;
        $store->name = $request->first_name;
        $store->last_name = $request->last_name;
        $store->email = $request->email;
        $pswd = $request->password;
        $store->password = bcrypt($pswd);
        $store->contact = $request->contact;
        $store->role = $request->role;
        $store->save();

        //update avatar
        $path = $request->file('avatar')->storeAs(
            'public/avatars', time().".".$request->file('avatar')->extension()
        );

        $path = str_replace("public", "storage", $path);

        $store->avatar = $path;
        $store->save();

        $user_id = $store->id;
        $auth_id = auth::user()->role;

        $store2 = new users_rel;
        $store2->user_id = $user_id;
        $store2->rel_id = $auth_id;
        $store2->coupon_code = "0".$auth_id."CC".$user_id;
        $store2->save();

        $store3 = new role_user;
        $store3->user_id = $user_id;
        $store3->role_id = $request->role;
        $store3->save();
        session()->flash('message','User has been added successfully');
        return redirect('/admin-team-management');
    }
    public function create_new_sub(Request $request)
    {
        $auth_id = auth::user()->id;
        $store = new user;
        $store->name = $request->first_name;
        $store->last_name = $request->last_name;
        $store->email = $request->email;
        $pswd = $request->password;
        $store->password = bcrypt($pswd);
        $store->contact = $request->contact;
        $store->role = $request->role;
        $store->save();

        $user_id = $store->id;
        $store2 = new users_rel;
        $store2->user_id = $user_id;
        $store2->rel_id = $auth_id;
        $store2->coupon_code = "0".auth::user()->id."CC".$user_id;
        $store2->save();

        session()->flash('message','User has been added successfully');
        return redirect('/my-team');
    }
    public function delete_user(Request $request){
        $dell = user::find($request->dell_id);
        $dell->delete();
        session()->flash('delete','User has been Deleted Successfully');
        return redirect('/admin-team-management');

    }

    public function team()
    {
        $views = user::with('user_rels')->get();
        return view('admin.team_management',compact('views'));
    }
    public function all_coordinators(){
        $views = user::with('user_rels')->where('role','2')->get();
        return view('admin.coordinators',compact('views'));     
    }
    public function course()
    {
        $views = upload_course::all();
        return view('admin.course_management',compact('views'));
    }
    public function sales()
    {
        return view('admin.sales_management');
    }
    public function upload_course(){
        $views = course_category::all();
        $sellers = user::all();
        return view('admin.upload_course',compact('views','sellers'));
    }
    public function course_category(){
        $views = course_category::all();
        return view('admin.course_category',compact('views'));
    }
    public function create_course_category(Request $request){
        $store = new course_category;
        $store->category_name = $request->category_name;
        $store->save();
        session()->flash('message','Course Category has been added successfully');
        return redirect('/course-category');
    }
    public function create_upload_course(Request $request){
        $store = new upload_course();
        $store->course_id = $request->course_id;
        $store->course_name = $request->course_name;
        $store->course_category = $request->course_category;
        $store->course_duration = $request->course_duration;
        $store->course_fee = $request->course_fee;
        $store->course_description = $request->course_description;
        $store->course_picture = $request->course_picture;
        $store->save();

        $product_id = $store->id;

        $store2 = new coordinator_commission;
        $store2->role_id = '2';
        $store2->product_id = $product_id;
        $store2->coordinator_point = $request->coordinator_point;
        $store2->coordinator_direct_sale_commission = $request->coordinator_direct_sale_commission;
        $store2->coordinator_inter_sale_commission = $request->coordinator_inter_sale_commission;
        $store2->coordinator_main_dealer_commission = $request->coordinator_main_dealer_commission;
        $store2->coordinator_sub_dealer_commission = $request->coordinator_sub_dealer_commission;
        $store2->coordinator_sales_rep_commission = $request->coordinator_sales_rep_commission;
        $store2->save();

        $store3 = new main_dealer_commission;
        $store3->role_id = '4';
        $store3->product_id = $product_id;
        $store3->main_dealer_point = $request->main_dealer_point;
        $store3->main_dealer_direct_sale_commission = $request->main_dealer_direct_sale_commission;
        $store3->main_dealer_inter_sale_commission = $request->main_dealer_inter_sale_commission;
        $store3->main_dealer_sub_dealer_commission = $request->main_dealer_sub_dealer_commission;
        $store3->main_dealer_sales_rep_commission = $request->main_dealer_sales_rep_commission;
        $store3->save();

        $store4 = new sub_dealer_commission;
        $store4->role_id = '5';
        $store4->product_id = $product_id;
        $store4->sub_dealer_point = $request->sub_dealer_point;
        $store4->sub_dealer_direct_sale_commission = $request->sub_dealer_direct_sale_commission;
        $store4->sub_dealer_inter_sale_commission = $request->sub_dealer_inter_sale_commission;
        $store4->sub_dealer_sales_rep_commission = $request->sub_dealer_sales_rep_commission;
        $store4->save();

        $store5 = new sales_rep_commission;
        $store5->role_id = '6';
        $store5->product_id = $product_id;
        $store5->sales_rep_point = $request->sales_rep_point;
        $store5->sales_rep_direct_sale_commission = $request->sales_rep_direct_sale_commission;
        $store5->sales_rep_inter_sale_commission = $request->sales_rep_inter_sale_commission;
        $store5->save();

        session()->flash('message','Course has been uploaded successfully');
        return redirect('/course-management');
    }
    public function create_new_main_dealer(Request $request)
    {
        $auth_id = auth::user()->id;
        $store = new user;
        $store->name = $request->first_name;
        $store->last_name = $request->last_name;
        $store->email = $request->email;
        $pswd = $request->password;
        $store->password = bcrypt($pswd);
        $store->contact = $request->contact;
        $store->role = $request->role;
        $store->save();

        $user_id = $store->id;
        $store2 = new users_rel;
        $store2->user_id = $user_id;
        $store2->rel_id = $auth_id;
        $store2->coupon_code = "0".auth::user()->id."CC".$user_id;
        $store2->save();

        session()->flash('message','User has been added successfully');
        return redirect('/main-dealer-my-team');
    }
    public function create_new_sub_dealer(Request $request)
    {
        $auth_id = auth::user()->id;
        $store = new user;
        $store->name = $request->first_name;
        $store->last_name = $request->last_name;
        $store->email = $request->email;
        $pswd = $request->password;
        $store->password = bcrypt($pswd);
        $store->contact = $request->contact;
        $store->role = $request->role;
        $store->save();

        $user_id = $store->id;
        $store2 = new users_rel;
        $store2->user_id = $user_id;
        $store2->rel_id = $auth_id;
        $store2->coupon_code = "0".auth::user()->id."CC".$user_id;
        $store2->save();

        session()->flash('message','User has been added successfully');
        return redirect('/sub-dealer-my-team');
    }

}
