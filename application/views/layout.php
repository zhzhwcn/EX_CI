<!DOCTYPE html>
<html lang="en">
<head>
	<title><?php echo $meta['title']?></title>
	<meta charset="utf-8">
	<meta name="keywords" content="<?php echo $meta['keyword']?>" />
	<meta name="description" content="<?php echo $meta['desc']?>" />
	<script src="/static/js/jquery.js"></script>
</head>
<body>
<?php
	$this->load->view('common/header');
	$this->load->view($this->uri->slash_segment(1).$this->uri->segment(2).'_layout');
	$this->load->view('common/footer');
?>
</body>
</html>