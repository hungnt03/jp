<?php
/**
 * Created by PhpStorm.
 * User: onizukasan
 * Date: 18/04/2015
 * Time: 3:24 CH
 */
class Controller_Admin extends Controller_Template
{
	//set layout
	public $template = "template_admin";
	//set global timezone variable for all controller
	public $timezone = 'Asia/Ho_Chi_Minh';

	/**
	 * Function before class using to config system
	 */
	public function before()
	{
		//Load language file
		Lang::load('vnlang');
		//Date zero UTC
		$date_zero_utc = "UTC " . date("Y-m-d", 0);
		if (!\Auth::check())
		{
			\Response::redirect_back('login');
		}
		parent::before(); // Without this line, templating won't work!
	}
}