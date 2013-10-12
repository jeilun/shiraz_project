<?php

class sms_model
{
	public static		 $user = 'mrparnian@live.com' ;
	public static		 $pass = '4885903' ;
	
	public function save_sms($new_sms)
	{		
		$sms_tbl = new tbl_inbox($new_sms);
        $sms_tbl->save();
	}
	
	
   public  function send_sms($sms_from,$sms_to,$sms_body)
	{
					
			 ob_start();
			error_reporting(0);
			
			 require_once('nusoap/nusoap.php'); 
			
			
			
			 $wsdl="http://www.afe.ir/WebService/WebService.asmx?wsdl";
			 $client=new nusoap_client($wsdl, 'wsdl');
			 $client->soap_defencoding = 'UTF-8';
			 $client->decode_utf8 = false;
			 
			 
			 if (is_array($sms_to))
			  $mobiles = $sms_to  ;
			 else 
			  $mobiles[0] = $sms_to ;	      
			 
			 
//		     $number = '30007957952175' ;
			  			
			$param=array(
			'Username' => sms_model::$user,
			'Password' => sms_model::$pass,
			'Number' => $sms_from, //شماره اختصاصی
			'Mobile' => array('string' => $mobiles) ,
			'Message' => $sms_body,
			'Type' => '1'
			);
			
			print_r($param) ;
			
			$results = $client->call('SendMessage', $param);
			$results = $results["SendMessageResult"];
			 $results = $results["string"];
			 echo  $results ;
			 
			ob_end_flush();
		
	}
}


?>