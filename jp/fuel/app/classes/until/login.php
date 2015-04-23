<?php
/**
 * Created by PhpStorm.
 * User: hungnt
 * Date: 4/21/2015
 * Time: 3:08 PM
 */
class Util_Login
{
	/**
	 * @var default instance
	 */
	private static $instance;

	/**
	 * @var  object  PHPSecLib hash object
	 */
	private $hasher = null;

	/**
	 * @var  Database_Result  when login succeeded
	 */
	protected $user = null;

	/**
	 * Get instance object
	 *
	 * @return instance
	 */
	public static function getInstance()
	{

		if (!self::$instance) {
			self::$instance = new self();
		}

		return self::$instance;
	}

	/**
	 * Check status login of user
	 *
	 * @return  bool
	 */
	public function check()
	{
		$username = \Session::get('username');
		if (empty($username)) {
			return false;
		} else {
			return true;
		}
	}

	/**
	 * Login user
	 *
	 * @param   string
	 * @param   string
	 * @return  bool
	 */
	public function check_login($username = '', $password = '')
	{
		if (!($this->user = $this->validate_user($username, $password))) {
			\Session::delete('username');
			return false;
		}

		\Session::set('username', $this->user['username']);
		\Session::instance()->rotate();
		return true;
	}


	public static function get($element)
	{
		if ($element == 'username') {
			return \Session::get('username');
		} else {
			$username = \Session::get('username');
			$user = \DB::select_array(array('*'))
				->where_open()
				->where('username', '=', $username)
				->where_close()
				->from('user')
				->execute()->current();
			return $user[$element];
		}
	}
}