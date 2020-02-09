<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

//require '../../vendor/autoload.php';


class OrderController extends Controller
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

        $orders = Order::get();

        return view('admin.orderlist',['orders'=>$orders]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        //
        
        
        return view('order',['id'=>$id]);
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



          // dd($request->title);
        //  dd(now()->format('d'));
        $customer_id = $request["customer"];
        $path = $request->file('photo')->store('photos','public');
        
      

        
        
        $billboard_id = $request["bill"];
        
        $plan_id = $request["plan"];
        $start_day = $request["start"];
        $end_day = $request["end"];
        $start_time = $request["starttime"];
        $end_time = $request["endtime"];

        $time1 = strtotime($start_day);
        $time2 = strtotime($end_day);

        $timedif = $time2 - $time1;

        $timedif = $timedif / 3600;

        $daydif = $timedif/24;


            $price = $daydif * $plan_id * 100;
            //$day = date('d', strtotime($start_day));
           // $day2 = date('d', strtotime($end_day));







      


        $order = new Order();

        $order->customer_id = $customer_id;
        $order->plan_id = $plan_id;
        $order->advertise_file_path = $path;
        $order->billboard_id = $billboard_id;
        $order->start_date = $start_day;
        $order->end_date = $end_day;
        $order->start_time = $start_time;
        $order->end_time = $end_time;

        $order->price = $price;


        $order->save();

       // dd('hi');

        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET',
            'https://api.kavenegar.com/v1/'.'414C7049764D336F5835586878514E39304A3752553972446557334D2B57585735324C4A4B4F66436765493D'.'/sms/send.json'
            ,
            [
                'query' => [
                    'receptor' => Auth::user()->mobile,
                    'message' => Auth::user()->name . ' عزیز سفارش شما ثبت شد ',
                ]
            ]
        );

//        echo $response->getStatusCode(); # 200
//        echo $response->getHeaderLine('content-type'); # 'application/json; charset=utf8'
        $json =  $response->getBody(); # '{"id": 1420053, "name": "guzzle", ...}'    }
        echo($json);
//        $array = json_decode($json,true);
//        dd($array['return']['message']);


        return redirect()->back()->with('success','سفارش شما با موفقیت ثبت شد اس ام اس اطلاعات سفارش به شماره همراه شما ارسال شد ');
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

        $order = Order::find($id);

        return view('admin.orderedit',['order'=>$order]);
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

        $plan_id = $request->plan;

        $bill_id = $request->bill;

        $price = $request->price;
        $start = $request->start;
        $end = $request->end;
        $start_time = $request->starttime;
        $end_time = $request->endtime;


        Order::find($id)->update(['plan_id'=>$plan_id,'billboard_id'=>$bill_id,'price'=>$price,'start_date'=>$start,'end_date'=>$end,'start_time'=>$start_time,'end_time'=>$end_time]);

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

        Order::where('id','=',$id)->get()->first()->delete();

        return redirect()->back()->with('success','سفارش  با موفقیت  حذف شد   ');

    }
}
