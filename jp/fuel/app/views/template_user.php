<?php Lang::load('vnlang'); ?>
<!DOCTYPE html>
<html>
<head>
	<!-- Define Asset -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo __('title'); ?></title>
	<?php echo Asset::js('lib/jquery-2.1.3.min.js'); ?><!-- Jquery -->
	<?php echo Asset::js('lib/jquery-1.11.2.min.js'); ?><!-- Jquery -->
	<?php echo Asset::js('lib/html5shiv.min.js'); ?><!-- Jquery -->
	<?php echo Asset::js('lib/respond.min.js'); ?><!-- Jquery -->
	<?php echo Asset::js('common/index.js'); ?><!-- Jquery -->
	<?php echo Asset::js('lib/bootstrap.min.js'); ?><!-- Jquery -->
	<?php echo Asset::css('bootstrap.min.css'); ?><!-- bootstrap -->
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
<!--		body    -->
		<div class="row">
			<div class="container">
<!--			panel-->
			<div class="col-xs-4 col-md-3 jp_panel_wrap">
<!--				panel kanji-->
				<?php echo View::forge('template/learn_left'); ?>
			</div>

<!--			body-content-->
			<div class="col-xs-12 col-sm-8 col-md-9">
				<?php echo $content; ?>
			</div>
			</div>
		</div>
	</div>

<!-- Footer -->
<?php //echo View::forge('template/footer'); ?>
</body>
</html>

