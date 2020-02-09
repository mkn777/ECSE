<?php

namespace App\Http\Controllers;

use App\Plan;
use Illuminate\Http\Request;

class PlanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {

    }

    public function index()
    {
        //

      //  dd("hi");
        $plans = Plan::get();

        return view('admin.planlist',['plans'=> $plans]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('admin.createplan');
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
        $price = request("price");


        $plan = new Plan();


        $plan->name = $name;
        $plan->price = $price;

        $plan->save();

        return redirect()->back()->with('success','پلن  با موفقیت ایجاد شد  ');



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


        $plan = Plan::find($id);

        return view('admin.editplan',['plan'=>$plan]);
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


        $plans= Plan::where('id','=',$id)->get();

        $plan = ($plans->first());

        //update
        $plan->name = request('name');
        $plan->price = request('price');

        $plan->save();

        return redirect()->back()->with('success','پلن  با موفقیت تغییر یافت  ');

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



        $plans = Plan::where('id','=',$id)->get();

        $plan = ($plans->first());

        $plan->delete();

        return redirect()->back()->with('success','پلن  با موفقیت حذف شد  ');


    }
}
