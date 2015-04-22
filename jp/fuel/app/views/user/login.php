<form action="login" method="post">
	<div class="form-group">
		<label for="exampleInputEmail1">Username</label>
		<input type="text" class="form-control" id="" placeholder="Enter username" name="username">
	</div>
	<div class="form-group">
		<label for="exampleInputPassword1">Password</label>
		<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
	</div>
	<div class="checkbox">
		<label>
			<input type="checkbox"> Remember me
		</label>
	</div>
	<button type="submit" class="btn btn-default">Submit</button>
</form>
Nếu chưa có tài khoản, bấm vào <a href="<?php echo Uri::create('login/register'); ?>">đây</a> để đăng ký.