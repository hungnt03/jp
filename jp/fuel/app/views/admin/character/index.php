<p class="text-center"><?php echo $title_table; ?></p>
<a href="<?php echo Uri::create('admin/character/insert'); ?>" ><button="button" class="btn btn-success pull-left"><i class="glyphicon glyphicon-ok"></i>&nbsp;&nbsp;Thêm bộ thủ</button></a>
<table class="table table-hover">
	<thead>
	<tr>
		<th>id</th>
		<th>Bộ</th>
		<th>Nghĩa hán việt</th>
		<th>Nghĩa việt</th>
		<th>Cách đọc</th>
		<th>Delete</th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($data_table as $key) : ?>
	<tbody>
		<th scope="row"><?php echo $key['id_char']; ?></th>
		<td><a href="<?php echo Uri::create('admin/character/edit').'?id='.$key['id_char'].'&'.'type=1'; ?>"><?php echo $key['name']; ?></a></td>
		<td><?php echo $key['mean_c']; ?></td>
		<td><?php echo $key['mean_v']; ?></td>
		<td><?php echo $key['speak']; ?></td>
		<td><a href=""><i class="glyphicon glyphicon-remove" style="color: black;"></i></a></td>
	</tbody>
	<?php endforeach; ?>

</table>
<div class="pull-right"><?php echo Pagination::instance('pagination')->render(); ?></div>