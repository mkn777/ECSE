<?php

namespace App\Http\Controllers;

use App\Billboard;
use Illuminate\Http\Request;
use DB;

class BilboradController extends Controller
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


        $billboards = Billboard::get();
        return view('listbill',['billboards'=>$billboards]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('createbillboard');
    }


    public function myformAjax($id)
    {
        //




        $billboards = Billboard::where('region_id','=',$id)->select('id','location')->get();


   //dd(json_encode($billboards));

        return json_encode($billboards);


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





        $location  = request("location");
        $type = request("type");
        $region = request('region');
        $width = request('width');
        $height = request('height');

        $bill = new Billboard();



        $path = $request->file('photo')->store('photos','public');
        // $targetdir = "file:///C:/project/goodfood/storage/app/";
        //$image = $targetdir.$path;
        $bill->path = $path;
        
        $bill->location = $location;

        $bill->type = $type;
        $bill->region_id = $region;
        $bill->width = $width;
        $bill->height = $height;


        $bill->save();

        return redirect()->back()->with('success','بیلبورد با موفقیت ایجاد شد  ');
      //  return redirect('/');


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
   

        $bill = Billboard::find($id);

        return view('admin.editbillboard',['bill'=>$bill]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //


        $path = $request->file('photo')->store('photos','public');
        // $targetdir = "file:///C:/project/goodfood/storage/app/";
        //$image = $targetdir.$path;
        $id = $request->id;
        $region_id = $request->region;
        $type = $request->type;
        $location = $request->location;
        $width = $request->width;
        $height = $request->height;



        Billboard::find($id)->update(['region_id'=>$region_id,'type'=>$type,'location'=>$location,'width'=>$width,'path'=>$path,'height'=>$height]);

        return redirect()->back()->with('success','سفارش  با موفقیت تغییر یافت  ');




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

        $bills = Billboard::where('id','=',$id)->get();

        $bill = ($bills->first());

        $bill->delete();

        return redirect()->back()->with('success','بیلبورد  با موفقیت حذف شد  ');
    }
}
