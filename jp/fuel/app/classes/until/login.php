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
	 * Get user info
	 *
	 * @return Object
	 */
//	public static function get_user_info()
//	{
//		$username = \Session::get('username');
//		$user = \DB::select_array(array('*'))
//			->where_open()
//			->where('username', '=', $username)
//			->where_close()
//			->from('user')
//			->execute()->current();
//		return $user;
//	}

	/**
	 * Get element user login
	 *
	 * @param   $element : element of user object
	 * @return  string
	 */
//	public static function get($element)
//	{
//		if ($element == 'username') {
//			return \Session::get('username');
//		} else {
//			$username = \Session::get('username');
//			$user = \DB::select_array(array('*'))
//				->where_open()
//				->where('username', '=', $username)
//				->where_close()
//				->from('user')
//				->execute()->current();
//			return $user[$element];
//		}
//	}

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

	/**
	 * Check the user exists
	 *
	 * @return  bool
	 */
//	public function validate_user($username = '', $password = '')
//	{
//		$username = trim($username) ? : trim(\Input::post('username'));
//		$password = trim($password) ? : trim(\Input::post('password'));
//
//		if (empty($username) or empty($password)) {
//			return false;
//		}
//
//		$password = $this->hash_password($password);
//		$user = \DB::select_array(array('*'))
//			->where_open()
//			->where('username', '=', $username)
//			->where_close()
//			->where('password', '=', $password)
//			->where('status', '=', 1)
//			->from('user')
//			->execute()->current();
//
//		return $user ? : false;
//	}

	/**
	 * Returns the hash object and creates it if necessary
	 *
	 * @return  PHPSecLib\Crypt_Hash
	 */
	public function hasher()
	{
		is_null($this->hasher) and $this->hasher = new \PHPSecLib\Crypt_Hash();

		return $this->hasher;
	}

	/**
	 * Default password hash method
	 *
	 * @param   string
	 * @return  string
	 */
	public function hash_password($password)
	{
		return base64_encode($this->hasher()->pbkdf2($password, 'put_your_salt_here', 10000, 32));
	}

	/**
	 * Logout user
	 *
	 * @return  bool
	 */
	public function logout()
	{
		\Session::delete('username');
		return true;
	}
}