<?php //var_dump($data_character); die(); ?>
<form>
	<div class="form-group">
		<label for="exampleInputEmail1">Bộ thủ</label>
		<input type="text" class="form-control" id="" placeholder="">
	</div>
	<div class="form-group">
		<label for="exampleInputEmail1">Trình độ</label>
		<select class="form-control">
			<?php foreach ($data_level as $data) : ?>
				<option value="<?php echo $data['id_level']; ?>"><?php echo $data['level']; ?></option>
			<?php endforeach; ?>
		</select>
	</div>
	<div class="form-group">
		<label for="exampleInputEmail1">Chữ kanji</label>
		<input type="text" class="form-control" id="" placeholder="nhập chữ kanji">
	</div>
	<div class="form-group">
		<label for="exampleInputPassword1">Số nét</label>
		<input type="number" class="form-control" id="exampleInputPassword1" placeholder="số nét">
	</div>
	<div class="form-group">
		<label for="exampleInputFile">Cách viết</label>
		<input type="file" id="exampleInputFile">
	</div>
	<div class="form-group">
		<label for="exampleInputPassword1">âm on</label>
		<input type="text" class="form-control" id="exampleInputPassword1" placeholder="nhập âm on">
	</div>
	<div class="form-group">
		<label for="exampleInputPassword1">âm kun</label>
		<input type="text" class="form-control" id="exampleInputPassword1" placeholder="nhập âm kun">
	</div>
	<button type="submit" class="btn btn-default">Submit</button>
</form>
<input type="hidden" class="jp_data_char" value='<?php echo json_encode($data_character, JSON_UNESCAPED_UNICODE); ?>' />
<?php echo Asset::js('kanji/insert.js'); ?>