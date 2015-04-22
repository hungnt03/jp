<form class="form-horizontal" action="<?php echo Uri::create('admin/character/insert'); ?>" method="post">
	<div class="form-group">
		<label for="inputEmail3" class="col-sm-2 control-label">Bộ thủ</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="inputEmail3" placeholder="Chữ kanji" name="name">
		</div>
	</div>
	<div class="form-group">
		<label for="inputEmail3" class="col-sm-2 control-label">Cách đọc</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="inputEmail3" placeholder="chữ hiragana" name="speak">
		</div>
	</div>
	<div class="form-group">
		<label for="inputEmail3" class="col-sm-2 control-label">Nghĩa hán việt</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="inputEmail3" placeholder="hán việt" name="mean_c">
		</div>
	</div>
	<div class="form-group">
		<label for="inputEmail3" class="col-sm-2 control-label">Nghĩa việt</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="inputEmail3" placeholder="việt" name="mean_v">
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
			<button type="submit" class="btn btn-default">Tạo</button>
		</div>
	</div>
</form>