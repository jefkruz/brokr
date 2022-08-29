<?php

namespace App\Http\Controllers;

use App\Models\Receipt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

/**
 * Class ReceiptController
 * @package App\Http\Controllers
 */
class ReceiptController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Auth::user()->id;
        $data['i'] = 1;
        $data['receipts'] =  Receipt::where('user_id',$id)->get();
        $data['page_title']= 'Transactions';
        $data['pending'] =  Receipt::where('user_id',$id)->where('status','PENDING')->get();
        $data['confirmed'] =  Receipt::where('user_id',$id)->where('status','APPROVED')->get();
        return view('pages.portal.transactions.index', $data);
    }




    public function download($id)
    {
        $receipt =  Receipt::where('id',$id)->get();
        $file = 'storage/receipts/'.$receipt[0]->file;
        $name = basename($file);
        return response()->download($file, $name);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $receipt = new Receipt();
        return view('pages.portal.transactions.create', compact('receipt'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'client_name' => 'required',
            'client_email' => 'required',
            'client_phone' => 'required',
            'estate_name' => 'required',
            'payment_type' => 'required',
            'number' => 'required',
            'payment_plan' => 'required',
            'bank' => 'required',
            'account_name' => 'required',
            'amount' => 'required',
            'description' => 'required',
            'user_id' => 'required',
            'file' => 'required'
        ]);


        $uploadedFile = $request->file('file');
        $filename = time().$uploadedFile->getClientOriginalName();

        Storage::disk('local')->putFileAs(
            'public/'.'receipts',
            $uploadedFile,
            $filename
        );
        Receipt::create([
            'client_name' => $request->get('client_name'),
            'client_email' => $request->get( 'client_email'),
            'client_phone' => $request->get( 'client_phone'),
            'estate_name' => $request->get( 'estate_name'),
            'payment_type' => $request->get('payment_type'),
            'number' => $request->get( 'number'),
            'payment_plan' => $request->get('payment_plan'),
            'bank' => $request->get( 'bank'),
            'account_name' => $request->get('account_name'),
            'amount' => $request->get( 'amount'),
            'description' => $request->get('description'),
            'file' => $filename,
            'user_id' => $request->get('user_id'),
        ]);
        $notification = array(
            'message' => 'Transaction Uploaded Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $receipt = Receipt::find($id);

        return view('pages.portal.transactions.show', compact('receipt'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $receipt = Receipt::find($id);

        return view('pages.portal.transactions.edit', compact('receipt'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Receipt $receipt
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Receipt $receipt)
    {

        $request->validate([
            'client_name' => 'required',
            'client_email' => 'required',
            'client_phone' => 'required',
            'estate_name' => 'required',
            'payment_type' => 'required',
            'number' => 'required',
            'payment_plan' => 'required',
            'bank' => 'required',
            'account_name' => 'required',
            'amount' => 'required',
            'relator_group' => 'required',
            'description' => 'required',
            'file' => 'required'

        ]);

        $uploadedFile = $request->file('file');
        $filename = time().$uploadedFile->getClientOriginalName();

        Storage::disk('local')->putFileAs(
            'public/'.'receipts',
            $uploadedFile,
            $filename
        );

        $receipt = Receipt::find($receipt);

        $receipt->client_name = $request->input('client_name');
        $receipt->client_email = $request->input('client_email');
        $receipt->client_phone = $request->input('client_phone');
        $receipt->estate_name = $request->input('estate_name');
        $receipt->payment_type = $request->input('payment_type');
        $receipt->number = $request->input('number');
        $receipt->payment_plan = $request->input('payment_plan');
        $receipt->bank = $request->input('bank');
        $receipt->account_name = $request->input('account_name');
        $receipt->amount = $request->input('amount');
        $receipt->relator_group = $request->input('relator_group');
        $receipt->description = $request->input('description');
        $receipt->file = $filename;
        $receipt->update();
        $notification = array(
            'message' => 'Transaction Updated Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('receipts.index')
            ->with( $notification);
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $receipt = Receipt::find($id)->delete();
        $notification = array(
            'message' => 'Transaction Deleted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
}
