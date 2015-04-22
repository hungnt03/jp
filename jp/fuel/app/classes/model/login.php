<?php
/**
 * Created by PhpStorm.
 * User: onizukasan
 * Date: 18/04/2015
 * Time: 12:39 CH
 */
class Model_Login extends Model
{

	/**
	 * Get user info current user
	 *
	 * @return Array: user info of current user
	 */
	public static function get_user_info_current_user()
	{
		$user_id = Auth::get('id');
		//Get role_id of current user
		$result = DB::select()->from('user')
			->join('position')->on('user.position_code', '=', 'position.position_code')
			->where('user.id', '=', $user_id)
			->execute();
		return $result[0];
	}
}