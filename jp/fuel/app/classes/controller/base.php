<?php
/**
 * Created by PhpStorm.
 * User: onizukasan
 * Date: 18/04/2015
 * Time: 12:26 CH
 */
class Controller_Base extends Controller_Template
{

	//set global timezone variable for all controller
	public $timezone = 'Asia/Ho_Chi_Minh';
	public $template = "template_user";

	/**
	 * Function before class using to config system
	 */
	public function before()
	{
		//Load language file
		Lang::load('jplang');
		//Date zero UTC
		$date_zero_utc = "UTC " . date("Y-m-d", 0);
//		if (!\Auth::check())
//		{
//			\Response::redirect_back('http://localhost/jp/public/login');
//		}
		parent::before(); // Without this line, templating won't work!
	}

	/**
	 * Make after() compatible with Controller_Template by adding $response as a parameter
	 */
	public function after($response)
	{
		$response = parent::after($response); // not needed if you create your own response object
		return $response; // make sure after() returns the response object
	}

}