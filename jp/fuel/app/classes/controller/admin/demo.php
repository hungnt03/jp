<?php

/**
 * Created by PhpStorm.
 * User: hungnt
 * Date: 4/22/2015
 * Time: 3:14 PM
 */
class Controller_Admin_Demo extends Controller_Admin
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
		$view = 'admin/character/index';

		$this->template->content = View::forge($view, $data);
	}

	public function action_edit()
	{
		$this->template->title = 'Member manager';
		$view = 'admin/character/index';

		$this->template->content = View::forge($view, $data);
	}

	public function action_delete()
	{
		$this->template->title = 'Member manager';
		$view = 'admin/character/index';

		$this->template->content = View::forge($view, $data);
	}
}