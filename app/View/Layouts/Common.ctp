<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	
	<meta http-equiv="expires" content="0">
	<meta http-equiv="Content-Style-Type" content="text/css">
	<meta http-equiv="Content-Script-Type" content="text/javascript">
	<meta name="copyright" content="Copyright nanapic">
	
	<meta name="description" content="">
	<meta name="keywords" content="">
	
	<link rel="shortcut icon" href="<?=$this->Html->webroot.'img/fav.ico'?>">
	<link rel="apple-touch-icon-precomposed" href="<?=$this->Html->webroot.'img/fav.ico'?>" />
	
	<title><?php echo $title_for_layout?> - nanapic</title>
		
	<?php
	echo $this->Html->css('common');
	?>
</head>
<body>
<?php echo $this->fetch('content'); ?>
<?php
echo $this->html->script('//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js');
?>
</body>
</html>