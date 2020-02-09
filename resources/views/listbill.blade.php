@extends('layouts.app')

@section('content')





    <div class="container-fluid">


        <div class="row justify-content-center">


            <div class="col-md-1 list-group text-right ">


            <ul class="nav nav-pills flex-column border" style="color: black; padding: 0;">

                <!--
                <li class="nav-item border">
                    <a class="nav-link " href="home">
                        <span data-feather="home"></span>
                        داشبورد   <span class="sr-only">(current)</span>
                    </a>
                </li>
                -->
                <li class="nav-item border">
                    <a class="nav-link" href="{{route('Order.index')}}">
                        <span data-feather="file"></span>
                        سفارش ها
                    </a>
                </li>
                <li class="nav-item border">
                    <a class="nav-link active" href="#">
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
                <div class="card">
                    <div class="card-header text-right">  سلام  {{ Auth::user()->name }}   </div>

                    <div class="card-body text-right">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

وضعیت بیلبورد ها به شرح زیر است :                     </div>
                </div>



                <div class="row">
                    <div class="col-md-11 text-right">

                    <a href="CreateBill" class="btn btn-primary"> اضافه کردن بیلبورد </a>

                    </div>
                </div>

                <br>

                <table class="table table-bordered table-striped text-right">

                    <thead>
                    <th>#</th>
                    <th>منطقه  </th>
                    <th>نوع  </th>
                    <th>لوکیشن </th>
                    <th>طول   </th>
                    <th>عرض   </th>
                    <th> وضعیت </th>
                    <th> تصویر </th>
                    <th> ویرایش </th>
                    <th> حذف </th>


                    </thead>


                    <tbody>


                    @foreach($billboards as $bill)

                    <tr>

                        <td>{{$bill->id}}</td>
                        <td>{{$bill->region->name}} </td>
                        <td>{{$bill->type}}  </td>
                        <td>{{$bill->location}}  </td>
                        <td>{{$bill->width}}  </td>
                        <td>{{$bill->height}}  </td>

                        @if($bill->status == 1)
                        <td><span class="badge badge-success">  فعال </span></td>

                        @else
                        <td><span class="badge badge-danger">  غیرفعال </span></td>

                        @endif

                        <td class="text-center"><img src= "storage/{{$bill->path}}"  alt="Card image cap" style="width:60px;height:60px;"></td>

                        <td>
                            <a href="EditBill/{{$bill->id}}/" class="btn btn-primary">ویرایش </a>
                        </td>
                        <td>
                            <a href="DeleteBill/{{$bill->id}}/" class="btn btn-danger"> حذف </a>
                        </td>

                    </tr>


                        @endforeach
                    </tbody>





                </table>
            </div>
        </div>
    </div>
@endsection
