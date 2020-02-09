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
                        <a class="nav-link active" href="{{route('User.index')}}">
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
                        لیست کاربران به شرح زیر است :
                    </div>
                </div>




                <br>
                <table class="table table-bordered table-striped text-center">
                    <thead>
                    <th>#</th>
                    <th>نام </th>
                    <th> آدرس   </th>
                    <th> موبایل </th>
                    <th> ایمیل </th>
                    <th> حذف </th>
                    </thead>

                    <tbody>
                    @foreach($users as $user )

                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->address}}</td>
                            <td>{{$user->mobile}}</td>
                            <td>{{$user->email}}</td>

                            <td>
                                <form onsubmit="return confirm('آیا مطمئن هستید ؟ ')" action="{{route('User.destroy',['User'=>$user->id])}}" method="post">
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