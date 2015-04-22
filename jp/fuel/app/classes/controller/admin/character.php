<?php
/**
 * Created by PhpStorm.
 * User: onizukasan
 * Date: 19/04/2015
 * Time: 12:58 SA
 */
class Controller_Admin_Character extends Controller_Admin
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
		$data_view = Model_Character::get_all_char();
		$data = array(
			'pagination' => $data_view['pagination'],
			'data_table' => $data_view['data_table'],
			'title_table' => 'Quản lý bộ thủ',
		);
		$this->template->content = View::forge($view, $data);
	}

	/**
	 * The basic welcome message
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_edit()
	{
		$view = 'admin/character/edit';
		$this->template->title = 'Member manager';

		if (Input::method() == 'GET') {
			$type = Input::get('type');
			if($type == 1) {
				$id = Input::get('id');

			}

		}

		$data = array();
		$this->template->content = View::forge($view, $data);
	}

	/**
	 * The basic welcome message
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_insert()
	{
		$this->template->title = 'Member manager';
		$view = 'admin/character/insert';
		$data = array();
		if (Input::method() == 'POST') {
			$data = array(
				'speak' => Input::post('speak'),
				'name' => Input::post('name'),
				'mean_c' => Input::post('mean_c'),
				'mean_v' => Input::post('mean_v'),
			);
			$id = Model_Character::insert_data($data);
			if(!isset($id)) {
				$this->template->content = View::forge('message/message', $data=array(
					'message' => Model_Message::get_message_by_type_code('001','ERR'),
				));
			}
		}
		$this->template->content = View::forge($view, $data);
	}

	/**
	 * The basic welcome message
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_delete()
	{
		if (Input::method() == 'GET') {
			$type = Input::get('type');
			if($type == 2) {
				$id = Input::get('id');

			}
		}
	}
}