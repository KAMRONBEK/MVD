<?php
use App\User;
use App\Report;
use App\Police;
use App\Screen;

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

Route::get('/', function () {
    return view('welcome');
});

// USER CRUD ///////////////////////////////////
Route::get('user/report/read', function () {
   	$user=User::find(2);
   
   	//dd($user);

   	foreach ($user->reports as $report) {

   		echo $report->description . "<br>";

   	}
});

Route::get('/user/insert', function () {
      
   User::create(['name'=>'Usmonbek','surname'=>'Ravshanov','user_passport_id'=>'1']);
     
});

Route::get('/user/update', function () {
      
   $user=User::find(1)->first();

   $user->update(['name'=>'Usmonbek']);
     
});






//////////////REPORT/////////////////////
// Route::get('police/report', function () {
//    	$user=Police::find(9);
   
//    	//dd($user);

//    	foreach ($user->reports as $report) {

//    		echo $report->status . "<br>";

//    	}
// });

Route::get('user/report/create', function () {
     $user = User::find(1)->first();
     $report=new Report(['video'=>'/user/report.avi','description'=>'Crime']);

     $user->reports()->save($report);
});





Route::get('/screen/create', function () {
   	
   	 $report = Report::find(1)->first();

       $screen = new Screen(['screen'=>'screens/screen1.jpg']);

       $report->screens()->save($screen);
   	


});


Route::get('/screen/update', function () {
      

       $screen = Screen::where('screen','screens/screen1.jpg')->where('report_id','1')->first();
       //dd($screen);
      
      // echo $screen->screen;

       dd($screen);

       $screen->save();

});









Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
