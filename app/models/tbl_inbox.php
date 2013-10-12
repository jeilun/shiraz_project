<?php

class tbl_inbox extends Eloquent
{
    protected $table = 'tbl_inbox';
	public static $unguarded = true;
	public  $timestamps = false ;
}

/* class tbl_inbox extends Eloquent {
	 
	 public static $table = 'tbl_inbox';
	 
	 protected $fillable = array('sms_from', 'sms_to', 'sms_body' ,'sms_date');
	 
	 public static function save_sms($sms_from,$sms_to,$sms_body , $sms_date)
	 {
		 $sms = new tbl_inbox ;
		 $sms->sms_from = $sms_from ;
		 $sms->sms_to = $sms_to ; 
		 $sms->sms_body = $sms_body ; 
		 $sms->sms_date = $sms_date ; 
		 $sms->save();		 
	 }
	 
	
	 }
*/

?>