<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

/**
 * Class TeamController
 * @package App\Http\Controllers
 */
class TeamController extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        $data['teams']= Team::all();
        $data['i'] = 1;
        $data['page_title'] = 'Team';
        return view('pages.admin.team.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $team = new Team();

        return view('pages.admin.team.create', compact('team'));
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
            'rank' => 'required',
            'image' => 'required',
            'description' => 'required',

        ]);
        $uploadedFile = $request->file('image');
        $filename = time().$uploadedFile->getClientOriginalName();

        Storage::disk('local')->putFileAs(
            'public/'.'team',
            $uploadedFile,
            $filename
        );

        $team =   Team::create( [
            'name' => $request->get('name'),
            'rank' => $request->get( 'rank'),
            'description' => $request->get( 'description'),
            'image' => $filename,

        ]);
        $notification = array(
            'message' => 'Team  created successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('teams.index')
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
        $team = Team::find($id);

        return view('pages.admin.team.show', compact('team'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $team = Team::find($id);

        return view('pages.admin.team.edit', compact('team'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Team $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Team $team)
    {
        $request->validate([
            'name' => 'required',
            'rank' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $input = $request->all();
        if ($image = $request->file('image')) {
            $postImage = time(). "." . $image->getClientOriginalExtension();
            Storage::disk('local')->putFileAs(
                'public/'.'team',
                $image,
                $postImage
            );

            $input['image'] = $postImage;
        }else{
            unset($input['banner']);
        }


        $team->update($input);
        $notification = array(
            'message' => 'Team  updated successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('teams.index')
            ->with($notification);
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $team = Team::find($id)->delete();
        $notification = array(
            'message' => 'Team  updated successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('teams.index')
            ->with($notification);
    }
}
