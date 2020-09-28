<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="utf-8">  
		<title>Гостевая книга</title>
		<link rel="stylesheet" href="<?php echo e(asset('public/css/bootstrap/css/bootstrap.css')); ?>">
		<link rel="stylesheet" href="<?php echo e(asset('public/css/styles.css')); ?>">
		<script src="https://ru.vuejs.org/js/vue.js"></script>
	</head>
	<body>
		<div id="wrapper">
			<?php echo $__env->yieldContent('content'); ?>
		</div>
	</body>
</html>

<?php /**PATH /var/www/html/guestbook (laravel)/resources/views/layouts/index.blade.php ENDPATH**/ ?>