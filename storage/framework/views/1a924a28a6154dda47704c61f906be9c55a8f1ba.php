<!DOCTYPE HTML>
<html lang="en">
<head>
	<?php echo $__env->make('includes.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</head>
<body class="login-page">
	<?php echo $__env->yieldContent('content'); ?>
</body>
<?php echo $__env->make('includes.jsOptimize', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</html>