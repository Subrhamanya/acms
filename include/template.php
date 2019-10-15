<?php
if (!defined('WEB_ROOT')) {
	exit;
}
$self = WEB_ROOT . 'loginCheck.php';
$uType = $_SESSION['user_type'];
if($uType == 'admin' || $uType == 'employee' ){
//	$img = WEB_ROOT . 'images/company_info.jpg';
$img = WEB_ROOT . 'images/complains.jpg';
}else {
	$img = WEB_ROOT . 'images/complains.jpg';
}
?>
<html>
<head>
<title><?php echo $pageTitle; ?></title>
<script language="JavaScript" type="text/javascript" src="<?php echo WEB_ROOT;?>library/common.js"></script>
<script language="JavaScript" type="text/javascript" src="<?php echo WEB_ROOT;?>library/complains.js"></script>
</head>
<body>

<?php $root=$_SERVER['DOCUMENT_ROOT']."/cms/";
$head = $root . "header.php";
$footer=$root."footer.php";
include $head;

?>
<hr style="border: none;">
<div style="display: flex">
<?php
include("menu.php"); ?>
<div style="float: right;width: 80%">
<?php

require_once $content;

?>
</div>
</div>
<?php

include $footer;
?>
</body>
</html>
