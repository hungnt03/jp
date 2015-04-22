<h3><strong>Đăng ký tài khoản</strong></h3>
<form action="<?php echo Uri::create('login/register'); ?>" method="post">
	<input type="hidden" name="type" value="2">
	<div class="form-group">
		<label for="exampleInputPassword1">Tên tài khoản:</label>
		<input type="text" class="form-control" id="" placeholder="user name" type_input="username" name="username">
	</div>
	<div class="form-group">
		<label for="exampleInputPassword1">Mật khẩu</label>
		<input type="password" class="form-control" id="" placeholder="Password" name="password" type_input="password">
	</div>
	<div class="form-group">
		<label for="exampleInputPassword1">Nhập lại mật khẩu</label>
		<input type="password" class="form-control" id="" placeholder="Password" name="returnPass" type_input="password">
	</div>
	<div class="form-group">
		<label for="exampleInputEmail1">Địa chỉ email</label>
		<input type="email" class="form-control" id="" placeholder="Enter email" name="email" type_input="email">
	</div>
	<div class="form-group">
		<label for="exampleInputEmail1">Ngày sinh</label>
		<input type="date" class="form-control" id="" placeholder="Enter birthday" name="birth"  type_input="date">
	</div>
	<button type="submit" class="btn btn-default">Đăng ký</button>
</form>