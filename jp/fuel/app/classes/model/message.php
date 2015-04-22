<?php
/**
 * Created by PhpStorm.
 * User: onizukasan
 * Date: 19/04/2015
 * Time: 10:44 SA
 */
class Model_Message extends Model
{

	/**
	 * Get user info current user
	 *
	 * @return Array: user info of current user
	 */
	public static function get_message_by_type_code($code, $type)
	{
		//Get role_id of current user
		$result = DB::select()
			->from('message')
			->where('code', '=', $code)
			->where('type', '=', $type)
			->execute();
		return $result[0];
	}
}