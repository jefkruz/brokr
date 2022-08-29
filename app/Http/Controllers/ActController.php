<?php

namespace App\Http\Controllers;

use App\Models\Act;
use Illuminate\Http\Request;

/**
 * Class ActController
 * @package App\Http\Controllers
 */
class ActController extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        $data['acts']= Act::all();
        $data['i'] = 1;
        $data['page_title'] = 'What we do';
        return view('pages.admin.act.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $act = new Act();
        return view('pages.admin.act.create', compact('act'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $act = Act::create($request->all());
        $notification = array(
            'message' => 'Act created successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('acts.index')
            ->with( $notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $act = Act::find($id);

        return view('pages.admin.act.show', compact('act'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $act = Act::find($id);

        return view('pages.admin.act.edit', compact('act'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Act $act
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Act $act)
    {
        $act->update($request->all());
        $notification = array(
            'message' => 'Act updated successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('acts.index')
            ->with( $notification);
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $act = Act::find($id)->delete();
        $notification = array(
            'message' => 'Act deleted successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('acts.index')
            ->with( $notification);
    }
}
