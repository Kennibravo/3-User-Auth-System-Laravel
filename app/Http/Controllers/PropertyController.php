<?php

namespace Rumi\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use Rumi\Property;
use Rumi\Image;
use Session;


class PropertyController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userId = Auth::user()->id;
        $myProperties = DB::table('properties')
        ->join('images', 'properties.id', '=', 'images.property_id')
        ->select('properties.*', 'images.image')->get();

        return view('property.index')->withProperties($myProperties);
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
        $this->validate($request, [
            'type' => 'required|min:3|max:255',
            'limit' => 'required',
            'filename'=> 'required', //'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'required|min:3|max:255',
        ]);


         $userId = Auth::user()->id;

         $property = new Property;
         $property->type = $request->type;
         $property->users_id = $userId;
         $property->limit = $request->limit;
         $property->description = $request->description;

         $property->save();


          $lastPropertyId = $property->id;





         if($request->hasfile('filename'))
         {

                $imageAdd = new Image();
                $image = $request->filename;
                $name = $image->getClientOriginalName();

                if($image->move(public_path() . '/images/', $name)){
                $imageAdd->image = $name;
                $imageAdd->property_id = $lastPropertyId;

                $imageAdd->save();




                }



         }

        Session::flash('success', 'Property successfully created');
        return redirect()->route('property.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $myProperties = DB::table('properties')
        ->join('images', 'properties.id', '=', 'images.property_id')
        ->select('properties.*', 'images.image')->where('properties.'get();
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
