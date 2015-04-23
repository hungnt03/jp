<?php
/**
 * Created by PhpStorm.
 * User: hungnt
 * Date: 4/22/2015
 * Time: 3:14 PM
 */
class Model_Kanji extends Model
{
	public static function insert($data = array())
	{
		$query = DB::insert('kanji');
		list($insert_id, $rows_affected) = $query->set(array(
			'id_char' => $data['id_char'],
			'id_level' => $data['id_level'],
			'name' => $data['name'],
			'number_line' => (int) $data['number_line'],
			'formula' => $data['formula'],
			'on' => $data['on'],
			'kun' =>  $data['kun'],
			'is_alone' => $data['is_alone'],
			'last_change' => $data['last_change'],
			'user_change' => $data['user_change'],

		))->execute();
		$report_id = $insert_id;
	}
}