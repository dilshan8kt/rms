<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Location;
use Validator;

class LocationController extends Controller
{
    public function __construct(){
        $this->middleware(['auth']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Location::all();
        return view('home.master.locations')
            ->with('data',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:locations|max:25'
        ]);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator, 'add')
                ->withInput();
        }
    
        $location = new Location();
        $location->name = $request->name;
        $location->description = $request->description;
        $location->is_order_location = $request->is_order_location == 'on' ? 1:0;
        $location->status = $request->status == 'on' ? 1:0;
        $location->save();

        return redirect()->back()->with('success', 'New Location Created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id=null)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:25'
        ]);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator, 'edit')
                ->withInput();
        }
            
        $location = Location::find($request->id);
        $location->name = $request->name;
        $location->description = $request->description;
        $location->is_order_location = $request->is_order_location == 'on' ? 1:0;
        $location->status = $request->status == 'on' ? 1:0;
        $location->update();

        return redirect()->back()->with('success', 'Location Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $location = Location::findOrFail($request->id);
        $location->delete();

        return redirect()->back()->with('success', 'Category Deleted!');
    }
}
