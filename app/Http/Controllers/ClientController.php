<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

/**
 * Class ClientController
 * @package App\Http\Controllers
 */
class ClientController extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['clients']= Client::all();
        $data['i'] = 1;
        $data['page_title'] = 'Partners';
        return view('pages.admin.client.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $client = new Client();
        return view('pages.admin.client.create', compact('client'));
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
            'name' => 'required',
            'image' => 'required',
        ]);
        $uploadedFile = $request->file('image');
        $filename = time().$uploadedFile->getClientOriginalName();

        Storage::disk('local')->putFileAs(
            'public/'.'clients',
            $uploadedFile,
            $filename
        );

        $client =   Client::create( [
            'name' => $request->get('name'),
            'image' => $filename,

        ]);
        $notification = array(
            'message' => 'Partner  Added successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('clients.index')
            ->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $client = Client::find($id);

        return view('pages.admin.client.show', compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $client = Client::find($id);

        return view('client.edit', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Client $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {
        request()->validate(Client::$rules);

        $client->update($request->all());

        return redirect()->route('clients.index')
            ->with('success', 'Partner updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $client = Client::find($id)->delete();
        $notification = array(
            'message' => 'Partner  deleted successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('clients.index')
            ->with($notification);
    }
}
