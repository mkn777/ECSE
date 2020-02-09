@extends('layouts.app')

@section('content')

<div class="container-fluid">




    <div class="row justify-content-center">


        <div class="col-md-1 list-group text-right ">


            <ul class="nav nav-pills flex-column border" style="color: black; padding: 0;">

                <li class="nav-item border">
                    <a class="nav-link active" href="{{route('Order.index')}}">
                        <span data-feather="file"></span>
                        سفارش ها
                    </a>
                </li>
                <li class="nav-item border">
                    <a class="nav-link " href="/ListBill">
                        <span data-feather="shopping-cart"></span>

                        بیلبورد ها
                    </a>
                </li>
                <li class="nav-item border">
                    <a class="nav-link" href="{{route('User.index')}}">
                        <span data-feather="users"></span>
                        مشتری ها
                    </a>
                </li>
                <li class="nav-item border">
                    <a class="nav-link" href="/MessageList">
                        <span data-feather="bar-chart-2"></span>
                        پیام ها
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('Plan.index')}}">
                        <span data-feather="layers"></span>
                        پلن های مالی
                    </a>
                </li>
                <li class="nav-item border">
                    <a class="nav-link" href="{{route('Region.index')}}">
                        <span data-feather="layers"></span>
                        مناطق
                    </a>
                </li>

            </ul>


        </div>

        <div class="col-md-11">

            @if(session()->has('success'))

                <div class="row text-right">

                    <div class="col-md-11">
                        <div class="alert alert-success">

                            {{session('success')}}



                        </div>


                    </div>

                </div>
            @endif
            <div class="card">
                <div class="card-header text-right">  سلام  {{ Auth::user()->name }}   </div>

                <div class="card-body text-right">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    لیست سفارشات به شرح زیر است : </div>
            </div>

            <br>

    <table class="table table-bordered table-striped text-center">
        <thead>
            <th>#</th>
            <th>نام مشتری</th>
            <th>قیمت </th>
            <th> شماره بیلبورد  </th>
            <th> پلن مالی   </th>
            <th> شرو ع</th>
            <th>پایان </th>
            <th>ساعت شروع  </th>
            <th>ساعت پایان </th>
            <th>تصویر </th>
            <th> ویرایش </th>
            <th> حذف </th>
        </thead>

        <tbody>
        @foreach($orders as $order )

            <tr>
                <td>{{$order->id}}</td>
                <td>{{$order->customer->name}}</td>
                <td>{{$order->price}}</td>
                <td>{{$order->billboard_id}}</td>
                <td>{{$order->plan_id}}</td>
                <td>{{$order->start_date}}</td>
                <td>{{$order->end_date}}</td>
                <td>{{$order->start_time}}</td>
                <td>{{$order->end_time}}</td>


                <td class="text-center"><img src= "storage/{{$order->advertise_file_path}}"  alt="Card image cap" style="width:60px;height:60px;"></td>

                <td>

                    <a  href="{{route('Order.edit',['Order'=>$order->id])}}" class="btn btn-primary">ویرایش</a>
                </td>
                <td>
                    <form onsubmit="return confirm('آیا مطمئن هستید ؟ ')" action="{{route('Order.destroy',['Order'=>$order->id])}}" method="post">
                        @method('delete')
                        @csrf
                        <button  class="btn btn-danger">حذف</button>
                    </form>
                </td>
            </tr>



        @endforeach
        </tbody>
    </table>



        </div>

    </div>
</div>




@endsection