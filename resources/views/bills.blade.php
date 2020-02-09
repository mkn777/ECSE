@extends('layouts.config')


@section('content')




    <div class="container">


        <div id="portfolio" class="container-fluid text-center bg-grey">

            <h2>بیلبورد های موجود </h2><br>
            <p>لیست بیلبورد های در دسترس</p>
            <br>
            
    <div class="row">
        <form method="post" action="" class="form-inline">
            
            @csrf
            
              <div class="form-group">
            <input type="text" class="form-control" value="{{request('q')}}" name="q"  placeholder="منطقه  ">
            </div>
       
        <div class="form-group">
            <label>نوع بیلبورد : </label>
            <select name="bill_id" class="form-control">
                <option value="">نوع بیلبورد </option>
                <option  value="1">کنار جاده ای </option>
                <option  value="2">پانل های دیواری  </option>
                <option  value="3">پل عابر پیاده  </option>
                
            </select>
        </div>
    
      
      
       
            <button class="btn btn-success">
                فیلتر
            </button>
        </form>
    </div>
    <br>
            <div class="row text-center slideanim">


                @foreach($bills as $bill)
                <div class="col-sm-3">
                    <div class="thumbnail">
                        <img style="" src= "storage/{{$bill->path}}"  alt="Paris" width="400" height="300">
                        <br>

                        <h3 style="color: black">{{$bill->type}} </h3>
                        <p>{{$bill->location}}</p>
                        <br>
                        <a href="{{route('bill.test',['id'=>$bill->width/100,'b_id'=>$bill->id])}}" class="btn btn-primary">انتخاب </a>

                    </div>
                </div>

                @endforeach
                
                 


            </div><br>
            
           
            
   

        </div>
        
        
</div>
@endsection



