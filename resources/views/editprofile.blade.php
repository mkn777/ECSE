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
<form method="post" action="{{route('User.update',['User'=>$user->id])}}" class="text-right">

    @method('PUT')
    @csrf


    <div class="form-group">
        <label for="name">نام و نام خانوادگی : </label>
        <input  value="{{$user->name}}" class="form-control" type="text" name="name" placeholder="">
    </div>

    <div class="form-group">
        <label for="address">آدرس </label>
        <input  value="{{$user->address}}" class="form-control" type="text" name="address" placeholder="">
    </div>


    <div class="form-group">
        <label for="mobile">موبایل </label>
        <input   value="{{$user->mobile}}" class="form-control" type="number" name="mobile" placeholder="">
    </div>


    <input type = "submit" class="btn btn-success" name="submit" value="ذخیره">


</form>


</div>


    @endsection