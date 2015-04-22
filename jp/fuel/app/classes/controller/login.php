<?php
/**
 * Created by PhpStorm.
 * User: onizukasan
 * Date: 19/04/2015
 * Time: 11:18 SA
 */
class Controller_Login extends Controller_Base
{
	public function action_index()
	{
		$view = "user/login";
//		// already logged in?
		if (\Auth::check())
		{
			// yes, so go back to the page the user came from, or the
			// application dashboard if no previous page can be detected
			\Response::redirect_back('user/home');
		}
//
		$val = Validation::forge();
		$data['val'] = $val;

//
//		// was the login form posted?
		if (\Input::method() == 'POST')
		{
			//Add validate require username
			$val->add('username', 'Username')
				->add_rule('required')
				->add_rule('min_length', 8)
				->add_rule('max_length', 30);
			//Add validate require password
			$val->add('password', 'Password')
				->add_rule('required')
				->add_rule('min_length', 8)
				->add_rule('max_length', 30);

			// check validate
			if ($val->run()) {
				// check the credentials.
				if (\Auth::instance()->login(\Input::param('username'), \Input::param('password')))
				{
					// did the user want to be remembered?
					if (\Input::param('remember', false))
					{
						// create the remember-me cookie
						\Auth::remember_me();
					}
					else
					{
						// delete the remember-me cookie if present
						\Auth::dont_remember_me();
					}

					// logged in, go back to the page the user came from, or the
					// application dashboard if no previous page can be detected
					\Response::redirect_back('user/home');
				}
				else
				{
					// login failed, show an error message
					return \View::forge('auth/login', $data, false);
				}
			}else{
				return \View::forge('auth/login', $data, false);
			}


		}

		// display the login page
		$this->template->content = View::forge($view, $data=array());
	}


	public function action_logout()
	{
		// remove the remember-me cookie, we logged-out on purpose
		\Auth::dont_remember_me();

		// logout
		\Auth::logout();

		// inform the user the logout was successful
//		\Messages::success(__('login.logged-out'));

		// and go back to where you came from (or the application
		// homepage if no previous page can be determined)
		\Response::redirect_back();
	}

	public function action_register()
	{
		$view = "user/register";
		//check login
		if (\Auth::check())
		{
			// yes, so go back to the page the user came from, or the
			// application dashboard if no previous page can be detected
			\Response::redirect_back('user/home');
		}

		$val = Validation::forge();
		$data['val'] = $val;

		if (\Input::method() == 'POST'){
			if(\Input::param('type') == 2) {

				$val->add('username', 'username')->add_rule('required')->add_rule('min_length', 8)->add_rule('max_length', 30);
				//Add validate require password
				$val->add('password', 'password')->add_rule('required')->add_rule('min_length', 8)->add_rule('max_length', 30);
				$val->add('email', 'Email')->add_rule('valid_email');
				$val->set_message('required', 'Trường :label không được để trống.');
				if ($val->run()) {
					$create_user = Auth::create_user(
						\Input::param('username'),
						\Input::param('password'),
						\Input::param('email'),
						1,
						array(
							'birth' => \Input::param('birth'),
						)
					);
					// check the credentials.
					if ($create_user) {
						// Redirect to Home page
						\Response::redirect_back('user/home');
					} else {
//						Session::set_flash("message", $message_error_login[0]['message']);
						return \View::forge('user/login', $data, false);
					}
				} else {
					foreach ($val->error() as $field => $error)
					{
//						array_push($data,$error->get_message());
						print_r ($error->get_message()) ;
						// The field Title is required and must contain a value.
					}
//					die();
					return \View::forge('user/login', $data, false);
				}
			}
		}

		$this->template->content = View::forge($view, $data=array());
	}
}
