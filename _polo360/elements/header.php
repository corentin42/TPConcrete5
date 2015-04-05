<head>
	<?php Loader::element('header_required'); ?>
	<link rel="stylesheet" href="<?php echo $this->getThemePath();?>/css/normalize.min.css">
	<link rel="stylesheet" href="<?php echo $this->getThemePath();?>/css/main.css">
	<link rel="stylesheet" href="<?php echo $this->getThemePath();?>/css/style.css">
	<script src="<?php echo $this->getThemePath();?>/js/vendor/modernizr-2.6.2.min.js"></script>
</head>
<header>
	<div id="logo"><img src="<?php echo $this->getThemePath();?>/img/logo.png"/></div>
		<nav>
			<?php
			$a = new GlobalArea ('Menu');
			$a->display($c);
			?>
		</nav>

	
</header>
<body>
</body>
