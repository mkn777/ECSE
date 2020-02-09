@extends('layouts.app')

@section('content')


    @if( Auth::user()->role_id ==1 )


        <script>window.location = "{{route('Order.index')}}";</script>


        @else
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-right">  سلام  {{ Auth::user()->name }}   </div>

                <div class="card-body text-right">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    لیست سفارشات شما به شرح زیر است :
                </div>
            </div>

            <br>

            <table class="table table-bordered table-striped text-right">

                <thead>
                <th>#</th>
                <th>پلن مالی </th>
                <th>محل بیلبورد  </th>
                <th>قیمت  </th>
                <th>پرداخت صورت حساب  </th>
                <th> وضعیت </th>
                <th> تصویر </th>


                </thead>


                <tbody>

                @php 
                
                $i = 1;
                
                @endphp

                @foreach (\App\Order::where('customer_id','=',Auth::user()->id)->get() as $order)
                <tr>

                    <td>{{$i++}}</td>
                    <td> {{$order->plan->name}}  </td>
                    <td>{{\App\Billboard::find($order->billboard_id)->location}}  </td>
                    <td>{{$order->price}}  </td>
                    <td><span class="badge badge-danger">  خیر </span></td>
                    <td><span class="badge badge-success">فعال  </span>  </td>
                    <td class="text-center"><img src= "https://mohammadkakuei.ir/storage/{{$order->advertise_file_path}}"  alt="Card image cap" style="width:60px;height:60px;"></td>


                </tr>


                    @endforeach
                </tbody>





            </table>
        </div>
    </div>
</div>

    @endif
@endsection
