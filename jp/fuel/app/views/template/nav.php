<nav class="navbar navbar-default">
	<div class="container-fluid">
			<div class="navbar-left nav navbar-nav ">
				<img class="jp_icon" src="<?php echo Asset::img('icon.png'); ?>" alt="icon">
			</div>
			<div class="navbar-left nav navbar-nav">
				<form class="navbar-form navbar-right" role="search">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Search">
					</div>
					<button type="submit" class="btn btn-default">Submit</button>
				</form>
			</div>
			<div class="navbar-right nav navbar-nav">
				<li><?php echo Auth::instance()->get_screen_name(); ?></li>
				<li><a href="<?php echo Uri::create('login'); ?>"><button type="button" class="btn btn-default jp_login">Login</button></a></li>
				<li><a href="<?php echo Uri::create('login/logout'); ?>"><button type="button" class="btn btn-default jp_login">Logout</button></a></li>
			</div>
		</div><!-- /.navbar-collapse -->
	</div><!-- /.container-fluid -->
</nav>