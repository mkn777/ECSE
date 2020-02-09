@extends('layouts.app')




@section('content')
    <div class="container">

        @if(session()->has('success'))

            <div class="row text-right">

                <div class="col-12">
                    <div class="alert alert-success">

                        {{session('success')}}



                    </div>


                </div>

            </div>
        @endif
        <div class="jumbotron text-right">

            مدیریت سفارش ها
        </div>
        <form  class="text-right" action="{{route('Order.update',['Order'=>$order->id])}}" enctype="multipart/form-data" method="post">

            @method('PUT')
            @csrf



            <div class="form-group hidden">
                <label>نام مشتری  : </label>
                <input type="text" name="cus" value="{{$order->customer_id}}" class="form-control">
            </div>


            <div class="form-group">
                <label>قیمت  : </label>
                <input type="text" name="price" value="{{$order->price}}" class="form-control">
            </div>






            <div class="form-group">
                <label for="plan">پلن اقتصادی :  </label>
                <select class="form-control" name = "plan" id="plan">
                    @foreach(\App\Plan::get() as $plan)
                        <option @if($order->plan_id == $plan->id)
                                selected
                                @endif
                                value="{{$plan->id}}">{{$plan->name}}
                        </option>

                    @endforeach
                </select>
            </div>



            <div class="form-group">
                <label for="bill">بیلبورد  :  </label>
                <select class="form-control" name = "bill" id="bill">
                    @foreach(\App\Billboard::get() as $bill)
                        <option @if($bill->city_id == $bill->id)
                                selected
                                @endif
                                value="{{$bill->id}}">{{$bill->location}}
                        </option>

                    @endforeach
                </select>
            </div>



            <div class="form-group">
                <label>تاریخ شروع تبلیغ : </label>
                <input class="form-control"  type="date" name="start" value="{{$order->start_date}}">
            </div>



            <div class="form-group">
                <label>تاریخ پایان تبلیغ : </label>
                <input class="form-control"  type="date" name="end" value="{{$order->end_date}}">
            </div>

            <div class="form-group">
                <label> زمان شروع تبلیغ : </label>
                <input class="form-control" type="time" name="starttime" value="{{$order->start_time}}">
            </div>


            <div class="form-group">
                <label>زمان پایان تبلیغ : </label>
                <input class="form-control"  type="time" name="endtime" value="{{$order->end_time}}">
            </div>


            <input type = "submit" class="btn btn-primary" name="submit" value="ذخیره">


        </form>
    </div>
@endsection