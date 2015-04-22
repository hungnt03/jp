<?php
/**
 * Created by PhpStorm.
 * User: onizukasan
 * Date: 18/04/2015
 * Time: 3:04 CH
 */

class Model_User extends Model
{

	public function action_login()
	{
		// already logged in?
		if (Util_Login::getInstance()->check()) {
			// if user logged redirect to Home page
			\Response::redirect_back('top');
		}
		$val = Validation::forge();
		$data = array();
		// Get message error blank
		$data['message_blank'] = Model_MstMessage::get_mst_message_by_id('ERR_015');
		$data['val'] = $val;
		//Get message error login
		$message_error_login = Model_MstMessage::get_mst_message_by_id('ERR_004');
		// was the login form posted?
		if (\Input::method() == 'POST') {
			//Add validate require username
			$val->add('username', 'Username')
				->add_rule('required');
			//Add validate require password
			$val->add('password', 'Password')
				->add_rule('required');
			//Check validate
			if ($val->run()) {
				// check the credentials.
				if (Util_Login::getInstance()->check_login(\Input::param('username'), \Input::param('password'))) {
					// Redirect to Home page
					\Response::redirect_back('top');
				} else {
					// login failed, show an error message
					Session::set_flash("message", $message_error_login[0]['message']);
					return \View::forge('auth/login', $data, false);
				}
			} else {
				return \View::forge('auth/login', $data, false);
			}
		}
		$data['val'] = $val;
		// display the login page
		return \View::forge('auth/login', $data, false);
	}

	public function action_logout()
	{
		Session::destroy();
		// Redirect to Login page
		\Response::redirect_back('/auth/login');
	}
}