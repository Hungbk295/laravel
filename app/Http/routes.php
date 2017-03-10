<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
Route::get('hoclaravel',function(){
	return "Xin chao";
});


Route::get('/', function() {
 return 'Hello World';
});
Route::get('hoten/{ten?}', function($ten="Hung") {
 return 'Họ Tên Bạn Là '.$ten;
});
Route::get("thongtin/{hoten}/{sdt}", function($hoten,$sdt){
	return "thong tin cua ban $hoten la $sdt";
})-> where(["hoten"=>"[a-zA-Z]+","sdt"=>"[0-9]{1,10}"]);

Route::get("call-view",function(){
	$hoten = "Hung dep trai";
	$view ="admin";
	return view("view",compact("hoten","view"));
});
Route::get('test-controller','WelcomeController@testAction');
Route::get('phan-viet-hung',["as"=>"hungdepzai",function(){
	return "toi dep trai lam";
	}]);
Route::group(["prefix"=>"quan-ly"],function(){
	Route::get('tin-tuc',function () {
echo "Đây là trang quản lý tin tức";
});
Route::get('thanh-vien',function () {
echo "Đây là trang quan lý thành viên";
});

});


Route::get("goi-master",function(){
	return view("views.layout");
});
Route::get('schema/create',function(){
	Schema::create('khoapham',function($table){
		$table ->increments('id');
		$table->string('tenmonhoc');
		$table->integer('gia');
		$table->text('ghichu')->nullable();
		$table->timestamps();


	});
});
Route::get('schema/create/cate',function(){
 	Schema::create('category',function($table){
 		$table->increments('id');
 		$table->string('name');
 		$table->timestamps();
 	});
 });
Route::get('schema/create/product',function(){
 	Schema::create('Product',function($table){
 		$table->increments('id');
 		$table->string('name');
 		$table->integer('price');
 		$table->integer('cate_id')->unsigned();
 		$table->foreign('cate_id')->references('id')->on('category')->onDelete('cascade');
 		$table->timestamps();
 	});
 });
Route::get('model/select-all',function(){
	$data= App\Product::all()->tojSon();
	echo "<pre>";
	print_r($data);
	echo "</pre>";


});
Route::get('model/select-id',function(){
	$data= App\Product::find(14)->tojSon();
	echo "<pre>";
	print_r($data);
	echo "</pre>";


});
Route::get('model/where',function(){
	$data= App\Product::where('price',500000)->get()->tojSon();
	echo "<pre>";
	print_r($data);
	echo "</pre>";


});
Route::get('model/raw',function(){
	$data= App\Product::whereRaw('price = ? AND id = ?',[500000,17])->select('name')->get()->toArray();
	echo "<pre>";
	print_r($data);
	echo "</pre>";


});
Route::get('model/insert',function(){
	$product = new App\product;
	$product->name='quan cong so';
	$product->price=500000;
	$product->cate_id=2;
	$product->save();
	echo "Finish !";
});
Route::get('model/create', function(){
	$data=array(
			'name' => 'quan jean kaki',
			'price' => 600000,
			'cate_id' => 2,		
			);
	App\Product::create($data);
});
Route::get('authentication/getLogin',['as'=>'getLogin','uses'=>'Auth\AuthController@getLogin']);
Route::post('authentication/postLogin',['as'=>'postLogin','uses'=>'Auth\AuthController@postLogin']);
Route::get('authentication/getRegister',['as'=>'getRegister','uses'=>'Auth\AuthController@getRegister']);
Route::post('authentication/postRegister',['as'=>'postRegister','uses'=>'Auth\AuthController@postRegister']);
Route::get('admin',function(){
	return view('views.layout');
});





Route::get('thongtincanhan', function (){
	return view('thongtin');
} );
Route::get('khoahoc/{monhoc}', function($monhoc){
	return " Day la khoa hoc : $monhoc" ;
});
Route::get('thongtincanhan/{hoten}/{sodienthoai}', function($hoten,$sodienthoai){
	return " Xin chao ban $hoten co so dien thoai la $sodienthoai";
})-> where (['hoten'=>'[a-zA-Z]+', 'sodienthoai'=>'[0-9]{2,5}']); 
View::share('title',"lap trinh laravel");
View::share('thongtin',"Toi la Hung");

Route::get("goi-view",function(){
	return view('layout.sub.view');
});
Route::get("goi-layout",function(){
	return view('layout.sub.layout');
});
View::composer(['layout.sub.view','layout.sub.layout'],function($view){
	$view -> with ('thongtin', 'Toi la Viet Hung');
});
Route::get('check-view',function(){
	if(view()->exists('home')){
		return 'Ton tai View';

	} else{
		return 'Khong ton tai View';
	}
});
Route::get('login',function(){
	return view('view');
});