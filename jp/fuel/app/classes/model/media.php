<?php
/**
 * Created by PhpStorm.
 * User: hungnt
 * Date: 4/22/2015
 * Time: 3:15 PM
 */
class Model_Media extends Model
{
	public static function insert($link)
	{
		$query = DB::insert('media');
		list($insert_id, $rows_affected) = $query->set(array(
			'link' => $link,
			'last_change'=>strtotime(date('Y-m-d H:i:s')),
			'user_change' =>Util_Login::get('username')
		))->execute();
		return $insert_id;
	}
}