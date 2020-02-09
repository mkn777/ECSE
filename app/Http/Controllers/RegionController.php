<?php

namespace App\Http\Controllers;

use App\Region;
use Illuminate\Http\Request;

class RegionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $regions = Region::get();

        return view('admin.regionlist',['regions'=>$regions]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('admin.createregion');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $name  = request("name");
        $count = request("count");


        $region = new Region();


        $region->name = $name;
        $region->billboard_count = $count;

        $region->save();

        return redirect()->back()->with('success','منطقه  با موفقیت ایجاد شد  ');

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

        $region = Region::find($id);

        return view('admin.editregion',['region'=>$region]);
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

        $regions= Region::where('id','=',$id)->get();

        $region = ($regions->first());

        //update
        $region->name = request('name');
        $region->billboard_count = request('count');

        $region->save();

        return redirect()->back()->with('success','منطقه  با موفقیت تغییر یافت  ');


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


        Region::find($id)->delete();

        return redirect()->back()->with('success','منطقه  با موفقیت  حذف شد   ');

    }
}
