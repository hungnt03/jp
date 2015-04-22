<?php
/**
 * Created by PhpStorm.
 * User: onizukasan
 * Date: 18/04/2015
 * Time: 1:06 CH
 */
/**
 * The Welcome Controller.
 *
 * A basic controller example.  Has examples of how to set the
 * response body and status.
 *
 * @package  app
 * @extends  Controller
 */
class Controller_User_Home extends Controller_Base
{

	/**
	 * The basic welcome message
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_index()
	{
		$view = "user/news";
		$this->template->content = View::forge($view, $data=array());
//		return Response::forge(View::forge('template_user'));
	}
}
