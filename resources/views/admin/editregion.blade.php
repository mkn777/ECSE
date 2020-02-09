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

            مدیریت مناطق        </div>
        <form  class="text-right" action="{{route('Region.update',['Region'=>$region->id])}}" enctype="multipart/form-data" method="post">


            @method('PUT')

            @csrf
            <div class="form-group">
                <label>نام :  </label>
                <input type="text" name="name" class="form-control" value="{{$region->name}}">
            </div>


            <div class="form-group">
                <label>تعداد بیلبود ها:  </label>
                <input type="text" name="count" class="form-control" value="{{$region->billboard_count}}">
            </div>



            <input type = "submit" class="btn btn-primary" name="submit" value="ذخیره">


        </form>
    </div>
@endsection