<?php //var_dump($data_character); die(); ?>
<form>
	<div class="form-group">
		<label for="exampleInputEmail1">Bộ thủ</label>
		<input type="text" class="form-control" id="jp_kanji_char_insert" placeholder="">
	</div>
	<div class="form-group">
		<label for="exampleInputEmail1">Trình độ</label>
		<select class="form-control" id="jp_kanji_level_insert">
			<?php foreach ($data_level as $data) : ?>
				<option value="<?php echo $data['id_level']; ?>"><?php echo $data['level']; ?></option>
			<?php endforeach; ?>
		</select>
	</div>
	<div class="form-group">
		<label for="exampleInputEmail1">Chữ kanji</label>
		<input type="text" class="form-control" id="jp_kanji_name_insert" placeholder="nhập chữ kanji">
	</div>
	<div class="form-group">
		<label for="exampleInputPassword1">Số nét</label>
		<input type="number" class="form-control" id="jp_kanji_numberline_insert" placeholder="số nét">
	</div>
	<div class="form-group">
		<label for="exampleInputFile">Cách viết</label><br>
			<button type="button" class="btn btn-success" id="jp_kanji_upload">Chọn ảnh</button>
			<label class="jp_kanji_source_file"></label><br>
	</div>
	<div class="form-group">
		<label for="exampleInputPassword1">âm on</label>
		<input type="text" class="form-control" id="jp_kanji_on_insert" placeholder="nhập âm on">
	</div>
	<div class="form-group">
		<label for="exampleInputPassword1">âm kun</label>
		<input type="text" class="form-control" id="jp_kanji_kun_insert" placeholder="nhập âm kun">
	</div>
	<div class="form-group">
		<label for="exampleInputPassword1">Nghia</label>
		<textarea class="ckeditor" name="imi" id="jp_kanji_mean_insert"></textarea>
	</div>
	<button type="submit" class="btn btn-default" id="jp_kanji_submit_insert">Submit</button>

</form>
<input type="hidden" class="jp_data_char" value='<?php echo json_encode($data_character, JSON_UNESCAPED_UNICODE); ?>' />
<?php echo Asset::js('kanji/insert.js'); ?>