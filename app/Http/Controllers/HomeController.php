<?php

namespace App\Http\Controllers;

use App\Models\Act;
use App\Models\Commission;
use App\Models\Country;
use App\Models\Post;
use App\Models\Property;
use App\Models\Receipt;
use App\Models\Team;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public $data;
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
        $this->data['users'] = User::all();
        $this->data['posts'] = Post::all();
        $this->data['acts']= Act::all();
        $this->data['teams']= Team::all();
        $this->data['properties']= Property::all();
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $data['username'] = Auth::user()->username;
        $id = Auth::user()->id;
        $data['i'] = 1;
        $referer = Auth::user()->referal_id;
        $data['page_title']= 'Dashboard';
        $data['properties']= Property::all();
        $data['tops'] = User::take(5)->get();
        $data['posts'] = Post::take(5)->get();
        $data['commission'] = Commission::where('user_id',$id)->get();
        $data['sum']  =   Receipt::groupBy('user_id')->orderByRaw('SUM(amount) DESC')->take(10)->get();
        $data['upline'] = User::where('id',$referer)->first();
        $data['referrals'] = User::where('referal_id',$id)->get()->take(5);
        $data['receipts'] =Receipt::where('user_id',$id)->get()->take(5);
        $data['pending'] =  Receipt::where('user_id',$id)->where('status','PENDING')->get();
        $data['confirmed'] =  Receipt::where('user_id',$id)->where('status','APPROVED')->get();
        return view('pages.portal.home',$data);
    }
    public function profile()
    {
        $data['username'] = Auth::user()->username;
        $id = Auth::user()->id;
        $data['countries'] = Country::all();
        $referer = Auth::user()->referal_id;
        $data['page_title']= 'Profile';
        $data['upline'] = User::where('id',$referer)->first();
        $data['referrals'] = User::where('referal_id',$id)->get()->take(5);
        return view('pages.portal.profile',$data);
    }
    public function referrals()
    {
        $id = Auth::user()->id;
        $data['page_title'] = 'Referrals';
        $data['i'] = 1;
        $data['referrals'] = User::where('referal_id',$id)->get();
        return view('pages.portal.referrals',$data);
    }
    public function viewreferral($username)
    {
        $data['page_title'] = 'Referrals';
        $referral = User::where('username',$username)->first();
        $data['referral'] = User::where('username',$username)->first();
        $data['i'] = 1;
        $user =$referral->id;
        $data['downlines'] = User::where('referal_id',$user)->get();

        return view('pages.portal.view_referrals',$data);
    }


    public function updateprofile(Request $request, $id)
    {

        $request->validate([
            'id' => 'required',
            'name' => 'required',
            'phone' => 'required',
            'b_date' => 'required',
            'b_month' => 'required',
            'gender' => 'required',
            'address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'country' => 'required',
            'bank' => 'required',
            'acc_name' => 'required',
            'acc_number' => 'required',

        ]);
        $user = User::where('id',$id)->first();


        $user->name = $request->input('name');
        $user->phone = $request->input('phone');
        $user->b_date = $request->input('b_date');
        $user->b_month = $request->input('b_month');
        $user->gender = $request->input('gender');
        $user->address = $request->input('address');
        $user->city = $request->input('city');
        $user->state = $request->input('state');
        $user->country = $request->input('country');
        $user->bank = $request->input('bank');
        $user->acc_name = $request->input('acc_name');
        $user->acc_number = $request->input('acc_number');
        $user->update();
        $notification = array(
            'message' => 'Profile Updated Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with( $notification);

    }



    public function commission()
    {
        $id = Auth::user()->id;
        $data['i'] = 1;
        $data['page_title'] = 'Commissions';
        $data['commissions'] = Commission::where('user_id',$id)->get();
        return view('pages.portal.commission', $data);
    }

    public function updateimage(Request $request, $id)
    {
        $request->validate([
            'avatar' => 'required'
        ]);

        $uploadedFile = $request->file('avatar');
        $filename = time().$uploadedFile->getClientOriginalName();

        Storage::disk('local')->putFileAs(
            'public/'.'users',
            $uploadedFile,
            $filename
        );
        $user = User::where('id', $id)->first();
        $user->avatar = $filename;
        $user->update();

        $notification = array(
            'message' => 'Image Updated Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);


    }

    public function viewpost($slug)
    {
        $data['post'] = Post::where('slug', $slug)->first();
        $data['page_title'] = 'Read';
        return view('pages.main.view_post',$data);
    }

}
