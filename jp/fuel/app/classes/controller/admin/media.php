<?php
/**
 * Created by PhpStorm.
 * User: hungnt
 * Date: 4/22/2015
 * Time: 3:15 PM
 */
class Controller_Admin_Kanji extends Controller_Admin
{
	public function action_insert($data = array())
	{
		$this->template->title = 'Member manager';
		$view = 'admin/kanji/insert';
		$data_level = Model_Level::get_level();
		$data_char = Model_Character::get_all_data_char();
		$data = array(
			'data_level' => $data_level,
			'data_character' => $data_char,
		);
		if (\Input::method() == 'POST')
		{

		}
		$this->template->content = View::forge($view, $data);
	}
}