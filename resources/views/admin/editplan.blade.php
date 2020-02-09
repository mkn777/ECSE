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

            مدیریت پلن های مالی
        </div>
        <form  class="text-right" action="{{route('Plan.update',['Plan'=>$plan->id])}}" enctype="multipart/form-data" method="post">

            @method('PUT')
            @csrf
            <div class="form-group">
                <label>نام :  </label>
                <input type="text" name="name" class="form-control" value="{{$plan->name}}" placeholder="نام ">
            </div>


            <div class="form-group">
                <label>قیمت  </label>
                <input type="text" name="price" class="form-control" value="{{$plan->price}}" placeholder="قیمت ">
            </div>



            <input type = "submit" class="btn btn-primary" name="submit" value="ذخیره">


        </form>
    </div>
@endsection