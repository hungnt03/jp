<?php
/**
 * Created by PhpStorm.
 * User: hungnt
 * Date: 4/22/2015
 * Time: 3:14 PM
 */
class Controller_Admin_Kanji extends Controller_Admin
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
		$data_level = Model_Level::get_level();
		$data = array(
			'data_level' => $data_level,
		);
		$this->template->content = View::forge($view, $data);
	}

	public function action_insert()
	{
		$this->template->title = 'Member manager';
		$view = 'admin/kanji/insert';
		$data_level = Model_Level::get_level();
		$data_char = Model_Character::get_all_data_char();
		$data = array(
			'data_level' => $data_level,
			'data_character' => $data_char,
		);
		$this->template->content = View::forge($view, $data);
	}

	public function action_edit()
	{
		$this->template->title = 'Member manager';
		$view = 'admin/character/index';
		$data = array();
		$this->template->content = View::forge($view, $data);
	}

	public function action_delete()
	{
		$this->template->title = 'Member manager';
		$view = 'admin/character/index';
		$data = array();
		$this->template->content = View::forge($view, $data);
	}
}