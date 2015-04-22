<?php
/**
 * Created by PhpStorm.
 * User: onizukasan
 * Date: 18/04/2015
 * Time: 3:23 CH
 */

class Controller_Admin_Home extends Controller_BaseAdmin
{

	/**
	 * The basic welcome message
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_index()
	{
		return Response::forge(View::forge('admin/template'));
	}

	public function action_404()
	{
		return Response::forge(Presenter::forge('welcome/404'), 404);
	}
}