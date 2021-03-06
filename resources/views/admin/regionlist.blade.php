@extends('layouts.app')

@section('content')

    <div class="container-fluid">




        <div class="row justify-content-center">


            <div class="col-md-1 list-group text-right ">


                <ul class="nav nav-pills flex-column border" style="color: black; padding: 0;">

                    <li class="nav-item border">
                        <a class="nav-link " href="{{route('Order.index')}}">
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
                        <a class="nav-link " href="/MessageList">
                            <span data-feather="bar-chart-2"></span>
                            پیام ها
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="{{route('Plan.index')}}">
                            <span data-feather="layers"></span>
                            پلن های مالی
                        </a>
                    </li>
                    <li class="nav-item border">
                        <a class="nav-link active" href="{{route('Region.index')}}">
                            <span data-feather="layers"></span>
                            مناطق
                        </a>
                    </li>

                </ul>


            </div>

            <div class="col-md-11">
                <div class="card">
                    <div class="card-header text-right">  سلام  {{ Auth::user()->name }}   </div>

                    <div class="card-body text-right">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        لیست مناطق به شرح زیر است :
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-11 text-right">

                        <a href="{{route('Region.create')}}" class="btn btn-primary"> اضافه کردن منطقه جدید </a>

                    </div>
                </div>


                <br>
                <table class="table table-bordered table-striped text-center">
                    <thead>
                    <th>#</th>
                    <th>نام </th>
                    <th>تعداد بیلبورد ها    </th>
                    <th> ویرایش </th>
                    <th> حذف </th>
                    </thead>

                    <tbody>
                    @foreach($regions as $region )

                        <tr>
                            <td>{{$region->id}}</td>
                            <td>{{$region->name}}</td>
                            <td>{{$region->billboard_count}}</td>
                            <td>
                                <a  href="{{route('Region.edit',['Region'=>$region->id])}}" class="btn btn-primary">ویرایش </a>
                            </td>
                            <td>
                                <form onsubmit="return confirm('آیا مطمئن هستید ؟ ')" action="{{route('Region.destroy',['Region'=>$region->id])}}" method="post">
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