<?php
/**
 * Created by PhpStorm.
 * User: onizukasan
 * Date: 18/04/2015
 * Time: 3:53 CH
 */
class Controller_Admin_User extends Controller_Admin
{
	/**
	 * Function before class
	 */
	public function before()
	{
		parent::before();
	}

	/**
	 * The basic welcome message
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_index()
	{
		$this->template->title = 'Member manager';
		$view = 'admin/user/index';
		$data = array();

		$this->template->content = View::forge($view, $data);
	}

	public function action_404()
	{
		return Response::forge(Presenter::forge('welcome/404'), 404);
	}
}