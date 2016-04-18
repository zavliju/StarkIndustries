<!DOCTYPE HTML>
<html lang="en">
<head>
	<?php echo $__env->make('includes.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</head>
<body class="skin-green">
	<div class="wrapper">
		<?php echo $__env->make('includes.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		<?php echo $__env->make('includes.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		<?php echo $__env->yieldContent('content'); ?>
		<?php echo $__env->yieldContent('contentHeader'); ?>
		<?php echo $__env->make('includes.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	</div>
</body>
<?php echo $__env->make('includes.jsOptimize', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</html>