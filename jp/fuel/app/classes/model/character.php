<?php
/**
 * Created by PhpStorm.
 * User: onizukasan
 * Date: 19/04/2015
 * Time: 8:55 SA
 */
class Model_Character extends Model
{

	/**
	 * Get user info current user
	 *
	 * @return Array: user info of current user
	 */
	public static function get_all_char()
	{
		$query = DB::select()
			->from('character')
			->execute()->as_array();

		//pagination
		$config = array(
			'total_items' => count($query),
			'per_page' => 15,
			'num_links' => 5,
			'uri_segment' => 'page',
			'Name' => 'bootstrap',
			'show_last' => true,
			'show_first' => true,
		);
		$pagination = Pagination::forge('pagination', $config);
		$data['data_table'] = DB::select()
			->from('character')
			->limit($pagination->per_page)
			->offset($pagination->offset)
//			->order_by('id','asc')
			->execute()
			->as_array();
		$data['pagination'] = $pagination;
		return $data;
	}

	public static function delete_data_by_id($id)
	{
		$query = DB::delete('character')
			->where('id_char', '=', $id)
			->execute();
		return $query;
	}

	public static function insert_data($data = array())
	{
		$query = DB::insert('character');
		list($insert_id, $rows_affected) = $query->set(array(
			'speak' => $data['speak'],
			'name' => $data['name'],
			'mean_c' => $data['mean_c'],
			'mean_v' => $data['mean_v'],
		))->execute();
		return $insert_id;
	}

	public static function get_all_data_char()
	{
		$query = DB::select('id_char','name')
			->from('character')
			->execute()->as_array();
		return $query;
	}
}