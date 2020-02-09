<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::view('/', 'index');


//Route::resource('Order','OrderController');
Route::resource('Order','OrderController');
Route::get('/NewOrder/{id}/', 'OrderController@create')->name('order')->middleware('auth');
//Route::get('OrderList', 'OrderController@index')->name('orderlist')->middleware('auth');
//Route::post('StoreOrder','OrderController@store')->name('StoreOrder');
//Route::post('DeleteOrder','OrderController@delete');

//Route::resource('Billboard','BilboradController');
Route::get('CreateBill','BilboradController@create');
Route::post('StoreBill','BilboradController@store');
Route::get('ListBill','BilboradController@index');
Route::get('EditBill/{id}','BilboradController@edit')->name('bill.edit');
Route::get('DeleteBill/{id}','BilboradController@destroy');
Route::post('UpdateBill','BilboradController@update')->name('bill.update');
Route::get('myform/ajax/{id}',array('as'=>'myform.ajax','uses'=>'BilboradController@myformAjax'));

//Route::resource('Plan','PlanController');
Route::resource('Plan','PlanController');


//Route::resource('Message','MessageController')
Route::get('MessageList','MessageController@index');
Route::get('DeleteMessage','MessageController@destroy');

Route::any('Billboards',function(){
    
    $bills = new \App\Billboard();
    
    if(request('bill_id') != null){
    
    if(request('bill_id') == 1){
        
        $text = "کنار جاده ای";
    }
    else if(request('bill_id') == 2){
        $text = "پانل های دیواری";
    }
    else if(request('bill_id') ==3)
    {
        $text = "بیلبورد عابر پیاده";
        
    }
    
 //dd(request('bill_id'));
     $bills = $bills->where('type', 'like', '%'.$text.'%');
     
     
    }
     
          if(request('q') != null){

            $bills = $bills->where(function($query){
                $query->where('location','like','%'.request('q').'%');
            
            })
            ;
        }

     
         
        
   $bills = $bills->get();
   //dd($bills);
    
    return view('bills', compact('bills'));

    
})->name('bill.list');


Route::get('Billboards/Select/{id}/{b_id}',function (){


    $id= request('id');


    $bill = \App\Billboard::find(request('b_id'));
    
            return view('order',['id'=>$id,'bill'=>$bill]);

    
    


})->name('bill.test')->middleware('auth');


//Route::get('PlanList','PlanController@index');





//Route::resource('User','UserController');
Route::resource('User','UserController');

Route::resource('Ticket','TicketController');

//Route::resource('Message','MessageController');

    // Route::get('/cache', function(){
    //      Artisan::call('make:controller TickerController --resource');
    // });


//Route::resource('Region','RegionController');
Route::resource('Region','RegionController');


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/editprofile/{id}/','ProfileController@edit')->name('profile.edit');

Route::post('contact',function (){

    $contact = new \App\Message();
    $contact->name = request('name');
    $contact->email = request('email');
    $contact->message = request('message');
    $contact->save();
    request()->session()->flash('success','نظر شما با موفقیت ارسال شد ') ;
    return redirect('index.php');
});