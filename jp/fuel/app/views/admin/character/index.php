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
		<td><a><i id="<?php echo $key['id_char'];?>" class="glyphicon glyphicon-remove" style="color: black;" data-toggle="modal" data-target="#myModal"><b></b></i></a></td>
	</tbody>
	<?php endforeach; ?>

</table>
<div class="pull-right"><?php echo Pagination::instance('pagination')->render(); ?></div>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Xác nhận xóa</h4>
			</div>
			<div class="modal-body">
				bạn có muốn xóa ... ra khỏi hệ thống?
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Xác nhận</button>
				<button type="button" class="btn btn-default">Hủy</button>
			</div>
		</div>
	</div>
</div>
<?php echo Asset::js('character/index.js'); ?>