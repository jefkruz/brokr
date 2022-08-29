<?php

namespace App\Http\Controllers;

use App\Models\Commission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/**
 * Class CommissionController
 * @package App\Http\Controllers
 */
class CommissionController extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['i'] = 1;
        $data['commissions'] = Commission::all();
        $data['pending'] = Commission::where('status','PENDING')->get();
        $data['paid'] = Commission::where('status','PAID')->get();
        return view('pages.admin.commission.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $commission = new Commission();
        return view('pages.main.commission.create', compact('commission'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $commission = Commission::create($request->all());

        return redirect()->route('commissions.index')
            ->with('success', 'Commission created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $commission = Commission::find($id);

        return view('pages.main.commission.show', compact('commission'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $commission = Commission::find($id);

        return view('commission.edit', compact('commission'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Commission $commission
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Commission $commission)
    {

        $commission->update($request->all());

        return redirect()->route('commissions.index')
            ->with('success', 'Commission updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $commission = Commission::find($id)->delete();
        $notification = array(
            'message' => 'Commission deleted successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);

    }
}
