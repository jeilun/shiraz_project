<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|

Route::get('/{orderby}', 'GalleryController@showPics')
    ->where('orderBy', 'favorite|random|vote|view');

*/

Route::get('/', function()
{	
	return  View::make('home');
});

Route::get('ok_send', function()
{	


 
 $sms_to = Input::get('to') ;	      
 $sms_body = Input::get('message') ;

 $s = new sms_controller ;
 $s->action_send_sms($sms_to,$sms_body); 
   
	
});




Route::get('normal', function()
{	
	return View::make('normal_send');
});


Route::get('all_users', function()
{
    $users = User::all();
    return View::make('users')->with('users', $users);
});

//Route::get('user/{id}', 'UserController@showProfile');
/*
Route::get('h_gateway14', function()
{
	   $sms_from = Input::get('From') ;	   
	   $sms_to = Input::get('To') ;
	   $sms_body = Input::get('Message') ;
	   $sms_date = Input::get('Date') ;
//	   $s = new sms_controller ;
	   //$sms_params = array($sms_from,$sms_to,$sms_body , $sms_date);
       sms_controller::action_save_sms($sms_from,$sms_to,$sms_body , $sms_date);	   	   
       return 'User '.$sms_from;	
	   
});
*/
//Route::get('h_gateway14', 'sms_controller@action_save_sms');

//Route::get('h_gateway14', 'sms_controller@showWelcome');

//Route::model('h_gateway14', 'tbl_inbox');


Route::get('h_gateway14',  function() {

       $sms_from = Input::get('From') ;	   
	   $sms_to = Input::get('To') ;
	   $sms_body = Input::get('Body') ;
	   $sms_date = Input::get('Date') ;
	   $s = new sms_controller ;
       $s->action_save_sms($sms_from , $sms_to,$sms_body,$sms_date); 
   
   
    /*$rules = array(
        'post_title'     => 'required|min:3|max:255',
        'post_body'      => 'required|min:10'
    );
    
    $validation = Validator::make($new_post, $rules);
    if ( $validation -> fails() )
    {
        
        return Redirect::to('admin')
                ->with('user', Auth::user())
                ->with_errors($validation)
                ->with_input();
    }*/
    // create the new post after passing validation
	//$s = new sms_controller ;
	//$s->action_save_sms($sms_from,$sms_to,$sms_body,$sms_date);
	
    //$sms = new tbl_inbox($new_sms);
    //$post->save();
    // redirect to viewing all posts
    //return Redirect::to('/');
	
});

