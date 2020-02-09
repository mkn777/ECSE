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

            مدیریت بیلبورد ها
        </div>
        <form  class="text-right" action="{{route('bill.update')}}" enctype="multipart/form-data" method="post">
            
            

            @csrf
              <div class="form-group hidden">
                <input hidden type="text" name="id" class="form-control" value="{{$bill->id}}">
            </div>
            

            <div class="form-group">
                <label>نوع بیلبورد </label>
                <input type="text" name="type" class="form-control" value="{{$bill->type}}">
            </div>


            <div class="form-group">
                <label for="region">منطقه  </label>
                <select class="form-control" name = "region" id="region">
                    @foreach(\App\Region::get() as $region)
                        <option @if($region->id == $bill->region_id)
                                selected
                                @endif
                                value="{{$region->id}}">{{$region->name}}
                        </option>

                    @endforeach

                </select>
            </div>

            <div class="form-group">
                <label>لوکیشن </label>
                <input type="text" name="location" class="form-control" value="{{$bill->location}}">
            </div>



            <div class="form-group">
                <div class="form-group">
                    <label for="photo"> تصویر  </label>
                    <input type="file" class="form-control-file" name = "photo" id="photo" value="{{$bill->path}}">
                </div>
            </div>



            <div class="form-group">
                <label>طول :</label>
                <input type="number" name="width" class="form-control" value="{{$bill->width}}">
            </div>

            <div class="form-group">
                <label>عرض : </label>
                <input type="number" name="height" class="form-control" value="{{$bill->height}}">
            </div>




            <input type = "submit" class="btn btn-primary" name="submit" value="ذخیره">


        </form>
    </div>
@endsection