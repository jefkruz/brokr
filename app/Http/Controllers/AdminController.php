<?php

namespace App\Http\Controllers;

use App\Models\Act;
use App\Models\Client;
use App\Models\Commission;
use App\Models\Post;
use App\Models\Property;
use App\Models\Receipt;
use App\Models\Team;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
        $this->middleware('role:admin');
        $data['i'] = 1;

    }

    public function index()
    {
        $data['page_title'] = 'Dashboard';
        $data['users'] = User::all();
        $data['posts'] = Post::all();
        $data['properties']= Property::all();
        $data['receipts'] =Receipt::all();
        $data['commissions'] =Commission::all();
        $month = date('F');
        $data['birthdays'] = User::where('b_month',$month)->get();
        return view('pages.admin.index',$data);
    }
    public function viewusers($username)
    {
        $data['page_title'] = 'Referrals';

        $user = User::where('username',$username)->first();
        $data['user'] = User::where('username',$username)->first();
        $data['i'] = 1;
        $top =$user->id;
        $data['downlines'] = User::where('referal_id',$top)->get();
        //$user = User::find($id);

        return view('pages.admin.user.show', $data);
    }

    public function receipts()
    {

        $data['i'] = 1;
        $data['receipts'] =  Receipt::all();
        $data['page_title']= 'Transactions';
        $data['pending'] =  Receipt::where('status','PENDING')->get();
        $data['confirmed'] =  Receipt::where('status','APPROVED')->get();
        return view('pages.admin.receipt.index', $data);
    }
    public function showreceipts($id)
    {
        $receipt = Receipt::find($id);

        return view('admin.receipt.show', compact('receipt'));
    }

    public function confirm($id)
    {
        $receipt = Receipt::find($id);

        $receipt->status = 'APPROVED';
        $receipt->update();

        $amount = $receipt->amount*0.03;
        $commission = new Commission();
        $commission->user_id = $receipt->user_id;
        $commission->receipt_id = $receipt->id ;
        $commission->amount = $receipt->amount;
        $commission->commission = $amount;
        $commission->save();
        //INSERT UPLINES COMMISSION
        $user_id = $receipt->users->referral_id;
        $receipt_id = $receipt->id;

        if ($user_id==0){
            $receipt->amount;
        }else{

            $amount = $receipt->amount*0.005;
            $commission = new Commission();
            $commission->user_id = $user_id ;
            $commission->receipt_id = $receipt_id ;
            $commission->amount = $receipt->amount;
            $commission->commission = $amount;
            $commission->save();
        }

        $notification = array(
            'message' => 'Transaction Confirmed Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with( $notification);
    }

    public function paid($id)
    {
        $paid = Commission::find($id);

        $paid->status = 'PAID';
        $paid->update();
        $notification = array(
            'message' => 'Commission Payment Confirmed',
            'alert-type' => 'success'
        );

        return redirect()->back()->with( $notification);
    }
    public function birthdays()
    {
        $data['page_title'] = 'Birthdays';
        $data['i'] = 1;
        $month = date('F');
        $data['users'] = User::where('b_month',$month)->get();
        return view('pages.admin.birthday',$data);
    }

    public function settings()
    {
        $data['page_title'] = 'Homepage Settings';
        $data['acts']= Act::all();
        $data['teams']= Team::all();
        $data['clients']= Client::all();

        return view('pages.admin.settings',$data);
    }


}
