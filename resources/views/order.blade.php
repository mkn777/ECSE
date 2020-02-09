@extends('layouts.app')


@section('content')

 <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
</head> 


    <div class="container text-right" style="color:#000000">



        @if(session()->has('success'))

            <div class="row text-right">

                <div class="col-12">
                    <div class="alert alert-success">

                        {{session('success')}}



                    </div>


                </div>

            </div>
        @endif
        <div class="jumbotron text-center">
            <h2>
                پلن انتخاب شده:

                @php

                    $plan = \App\Plan::find($id);
                @endphp

                <input type="number" hidden id="myText" value="{{request('id')}}">
               <h2 class="text-danger"> {{$plan->name}} </h2>
            </h2>
            اطلاعات تبلیغ مورد نظر را وارد کنید
        </div>
        <form  method="post" action="{{route('Order.store')}}" enctype="multipart/form-data" >

            @csrf

            <input type="hidden" value="{{$plan->id}}" name="plan">
            
           
            <input type="hidden" value="{{Auth::user()->id}}" name="customer">
            
            
            <div class="form-group">
                <label for="title">نام شرکت یا فرد تبلیغ کننده :</label>
                <input disabled type="text" value="{{Auth::user()->name}}" name="title" class="form-control" placeholder="نام">
            </div>

            <div class="form-group">
                <label>آدرس شرکت : </label>
                <input type="text" name="address" class="form-control" placeholder="آدرس شرکت ">
            </div>

            <div class="form-group">
                <div class="form-group">
                    <label for="photo"> آپلود محتوای تبلیغ :  </label>
                    <input required type="file" class="form-control-file" name = "photo" id="photo">
                </div>
            </div>



            @if($bill)
            
              <div class="form-group">
                <label for="region">منطقه  </label>
                <select  class="form-control" name = "city" id="city">
                    @foreach(\App\Region::get() as $region)
                        <option @if($region->id == $bill->region_id)
                                selected
                                @endif
                                value="{{$region->id}}">{{$region->name}}
                        </option>

                    @endforeach

                </select>
            </div>
            
            
            @else
            
            
            <div class="form-group">
                <label for="city">انتخاب منطقه :  </label>
                <select class="form-control" name = "city" id="city">
                    <option>- </option>
                    @foreach(\App\Region::get() as $region)
                        <option
                                @if(old('region_id') == $region->id)
                                selected
                                @endif
                                value="{{$region->id}}">{{$region->name}}</option>
                    @endforeach

                </select>
            </div>

            @endif




        @if($bill)
        
        
        
        
        <div class="form-group">
                <label for="bill"> لوکیشن بیلبورد : </label>
                <select  class="form-control" name ="bill" id="bill">
                    @foreach(\App\Billboard::get() as $billb)
                         <option @if($billb->id == $bill->id)
                                selected
                                @endif
                                value="{{$billb->id}}">{{$billb->location}}
                        </option>
                    @endforeach
                </select>
            </div>
        
        
        @else
        
        
        <div class="form-group">
                <label for="bill">لوکیشن بیلبورد :  </label>
                <select class="form-control" name = "bill" id="bill">
                    <option>-</option>
                </select>
            </div>
        @endif


            

            <div class="form-group">
                <label>شماره تماس : </label>
                <input disabled type="tel" name="mobile" class="form-control" value="{{Auth::user()->mobile}}" placeholder="موبایل">
            </div>

            <div class="form-group">
                <label>تاریخ شروع تبلیغ : </label>
                <input class="form-control" id="1" type="date" name="start" value="">
            </div>



            <div class="form-group">
                <label>تاریخ پایان تبلیغ : </label>
                <input class="form-control" onchange="getv()" id="2" type="date" name="end" value="">
            </div>


            <div class="form-group text-danger">
                <label>آیا قیمت را تایید می کنید ؟ ( به ازای هر روز {{100 * $plan->id}} هزار تومان )   </label>




            <div class="form-check">
                <input type="checkbox" id="check" onclick="test()" class="form-check-input" id="exampleCheck1">
                <br>
                <label class="form-check-label"   for="exampleCheck1"><p><span id="demo"></span> هزار تومان </p></label>
            </div>


            </div>


            <script>


            function getv() {



               var x =  document.getElementById("1").value;
               var y =  document.getElementById("2").value;
               var h =  document.getElementById("myText").value;



             //  alert(h);
                if(x){
                //    $num = request('id');

                   // alert('hh  ');


                    x = Date.parse(x);
                    y = Date.parse(y);

                    x = x/1000;
                    y =y/1000;

                    var z = y- x;

                    z = z / 3600;

                    var t = z/24;

                    var f = t * h * 100;


                    //  alert(f);
                    document.getElementById("demo").innerHTML = f;



                }

                else{
                    alert(x);
                }


            }


            function test() {
                var x = document.getElementById("check").checked;

                if(x == true){

                    document.getElementById("but").disabled = false;


                }

                else{
                    document.getElementById("but").disabled = true;

                }
            }

            </script>

            <div class="form-group">
                <label> زمان شروع تبلیغ : </label>
                <input class="form-control" type="time" name="starttime" value="00-00-00">
            </div>


            <div class="form-group">
                <label>زمان پایان تبلیغ : </label>
                <input class="form-control"  type="time" name="endtime" value="00-00-00">
            </div>








            <input disabled type = "submit" id="but" class="btn btn-primary" name="submit" value="ثبت درخواست">


        </form>
    </div>

<br>


    <script type="text/javascript">

        $(document).ready(function() {

            $('select[name="city"]').on('change', function() {

                var stateID = $(this).val();

            //   alert('hi');

                if(stateID) {

                    $.ajax({

                        url: '/myform/ajax/'+stateID,

                        type: "GET",

                        dataType: "json",

                        success:function(data) {

                            if(data != null) {

                                $('select[name="bill"]').empty();

                                var test = data[0];


                                // alert(test.location);


                                $.each(data, function (key, value) {

                                    $('select[name="bill"]').append('<option value="' + value.id + '">' + value.location + '</option>');

                                });
                            }
                            else {

                                $('select[name="bill"]').append('<option value="">بیلبوردی در این منطقه وجود ندارد </option>');

                            }

                        }

                    });

                }else{


                   $('select[name="bill"]').empty();

                }

            });

        });

    </script>
@endsection