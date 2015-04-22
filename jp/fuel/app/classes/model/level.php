<?php
/**
 * Created by PhpStorm.
 * User: hungnt
 * Date: 4/22/2015
 * Time: 4:18 PM
 */
class Model_Level extends Model
{
	public static function get_level()
	{
		$query = DB::select()
			->from('level')
			->execute()->as_array();
		return $query;
	}
}