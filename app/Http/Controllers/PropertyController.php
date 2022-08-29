<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

/**
 * Class PropertyController
 * @package App\Http\Controllers
 */
class PropertyController extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {

        $data['properties']= Property::all();
        $data['i'] = 1;
        $data['page_title'] = 'Properties';
        return view('pages.admin.property.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $property = new Property();
        return view('pages.admin.property.create', compact('property'));
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
            'name' => 'required|min:3|max:255',
            'description' => 'required',
            'banner' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $property = $request->all();

        if ($banner = $request->file('banner')) {
            $postImage = time(). "." . $banner->getClientOriginalExtension();
            Storage::disk('local')->putFileAs(
                'public/'.'properties',
                $banner,
                $postImage
            );
            $property['banner'] = $postImage;
        }else{
            unset($property['banner']);

        }
        if($request->hasfile('images')) {
            foreach($request->file('images') as $file) {
                $filename = time() . '_' . $file->getClientOriginalName();
                $file->storeAs('public/properties', $filename);
                $data[] = $filename;
            }
        }
        $property['images'] = json_encode($data);
        Property::create( $property);
        $notification = array(
            'message' => 'Property created successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('properties.index')
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
        $property = Property::find($id);

        return view('pages.admin.property.show', compact('property'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $property = Property::find($id);

        return view('pages.admin.property.edit', compact('property'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Property $property
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Property $property)
    {
        $request->validate([
            'name' => 'required|min:3|max:255',
            'description' => 'required',
            'banner' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $input = $request->all();
        if ($banner = $request->file('banner')) {
            $postImage = time(). "." . $banner->getClientOriginalExtension();
            Storage::disk('local')->putFileAs(
                'public/'.'properties',
                $banner,
                $postImage
            );

            $input['banner'] = $postImage;
        }else{
            unset($input['banner']);
        }


        $property->update($input);
        $notification = array(
            'message' => 'Property updated successfully',
            'alert-type' => 'success'
        );


        return redirect()->route('properties.index')
            ->with( $notification);
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $property = Property::find($id)->delete();
        $notification = array(
            'message' => 'Property deleted successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('properties.index')
            ->with($notification);
    }
}
