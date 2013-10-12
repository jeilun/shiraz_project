<?php

 class sms_controller extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/
	

	
			 
	public function showWelcome()
	{
		return View::make('hello');
	}

   public  function action_save_sms($sms_from , $sms_to,$sms_body,$sms_date)
	{
		
		$new_sms = array(
        'sms_from'    => $sms_from,
        'sms_to'     => $sms_to,
        'sms_body'   => $sms_body ,
		'sms_date'   => $sms_date ,
		
        );
	
		$sms_obj = new sms_model();
        $sms_obj->save_sms($new_sms);

		
		
		//tbl_inbox::save($sms_from,$sms_to,$sms_body , $sms_date);
		
	}
	
	public  function action_send_sms($sms_to,$sms_body)
	{									
		$sms_obj = new sms_model();
		$sms_from = '30007957952175';
        $sms_obj->send_sms($sms_from,$sms_to,$sms_body);	
		
	}



}