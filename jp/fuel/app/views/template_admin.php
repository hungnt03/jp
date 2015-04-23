<?php Lang::load('vnlang'); ?>
<!DOCTYPE html>
<html>
<head>
	<!-- Define Asset -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo isset($title) ? $title : 'title default' ; ?></title>
	<?php echo Asset::js('lib/jquery-2.1.3.min.js'); ?><!-- Jquery -->
	<?php echo Asset::js('lib/jquery-1.11.2.min.js'); ?><!-- Jquery -->
	<?php echo Asset::js('lib/html5shiv.min.js'); ?><!-- Jquery -->
	<?php echo Asset::js('lib/respond.min.js'); ?><!-- Jquery -->
	<?php echo Asset::js('lib/jquery.ui.core.min.js'); ?><!-- Jquery ui-->
	<?php echo Asset::js('lib/jquery.validate.min.js'); ?><!-- Jquery -->
	<?php echo Asset::js('lib/bootstrap.min.js'); ?><!-- Jquery -->
	<?php echo Asset::js('common/index.js'); ?><!-- Jquery -->
<!--	start tiny-->
	<script type="text/javascript" src="<?php echo \Config::get('base_url'); ?>assets/plugin/ckfinder/ckfinder.js"></script>
	<script type="text/javascript" src="<?php echo \Config::get('base_url'); ?>assets/plugin/ckeditor/ckeditor.js"></script>

	<?php echo Asset::css('bootstrap.min.css'); ?><!-- bootstrap -->
	<?php echo Asset::css('jquery-ui.css'); ?><!-- jquery.ui -->
	<?php echo Asset::css('bootstrap-theme.min.css'); ?><!-- Foundation -->

	<?php Asset::add_path('assets/css/'); ?><!-- Css customize -->
	<?php echo Asset::css('custom.css'); ?>
</head>
<body>
<div class="container">
	<!--		nav bar     -->
	<div class="container">
		<?php echo View::forge('template/nav'); ?>
	</div>
	<div class="row">
		<div class="container">
			<div class="col-md-3">
				<div class="panel panel-primary">
					<div class="panel-heading">Quan ly</div>
					<ul class="list-group">
						<li class="list-group-item"><i class="glyphicon glyphicon-user"></i>: &nbsp;&nbsp;<a href="">Member</a></li>
						<li class="list-group-item"><i class="glyphicon glyphicon-book"></i>: &nbsp;&nbsp;<a href="">Ngữ pháp</a></li>
						<li class="list-group-item"><i class="glyphicon glyphicon-text-background"></i>: &nbsp;&nbsp;<a href="">Kanji</a></li>
						<li class="list-group-item"><i class="glyphicon glyphicon-text-color"></i>: &nbsp;&nbsp;<a href="">Bộ thủ</a></li>
						<li class="list-group-item"><i class="glyphicon glyphicon-blackboard"></i>: &nbsp;&nbsp;<a href="">Bài học</a></li>
						<li class="list-group-item"><i class="glyphicon glyphicon-eye-open"></i>: &nbsp;&nbsp;<a href="">Từ mới</a></li>
						<li class="list-group-item"><i class="glyphicon glyphicon-pencil"></i>: &nbsp;&nbsp;<a href="">Câu ví dụ</a></li>
					</ul>
				</div>
			</div>
			<div class="col-md-9">
				<?php echo (isset($content) ? $content : View::forge('404') ); ?>
			</div>
		</div>
	</div>
</div>

<!-- Footer -->
<?php //echo View::forge('template/footer'); ?>
</body>
</html>

