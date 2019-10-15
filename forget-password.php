<?php
require_once './library/config.php';
require_once './library/functions.php';

$errorMessage = '&nbsp;';

if (isset($_POST['txtUserName'])) {
	$result = doChangePassword();
	
	if ($result != '') {
		$errorMessage = $result;
	}
}

?>
<html>
<head>
    <style>
        input {
            border-style: none;
            border-bottom: 1px solid black;
            outline: none;
        }
    </style>
</head>
<body>
<?php include "header.php"; ?>
<br/>
<div style="width: 350px;margin-left: auto;margin-right: auto;animation-delay: 1s;animation-name: zoomIn;" data-wow-delay="1s" class="wow zoomIn animated animated">
    <form method="post" name="frmLogin" id="frmLogin" style="width=340px;margin-left: auto;margin-right: auto;box-shadow: 1px 2px 2px 3px rgba(0,0,0,0.3)">

        <h2 align="center" style="color: #34ad00">:: Forgot Password::<hr style="width: 200px"></h2>

        <div class="errorMessage" align="center"><?php echo $errorMessage; ?></div>

        <div align="center">
            <label for="txtUserName"><b>Username:</b></label>
            <input name="txtUserName" type="text" id="txtUserName"  size="30" maxlength="40">
        </div>

        <hr color="white">
        <hr color="white">

        <div align="center">
            <label for="txtEmail"><b>E-mail Id:</b></label>
             <input name="txtEmail" type="text" id="txtPassword" size="30" maxlength="40">
        </div>

        <hr color="white">
        <hr color="white">

        <div align="center">
            <label for="utype"><b>User Type:</b> </label>
              <select name="utype" style="width: 200px;border-style: none;border-bottom: 1px solid black;outline: none;">
			  <option >&nbsp;&nbsp;--- Select User --- &nbsp;</option>
			  <option value="customer">&nbsp;&nbsp; Customer &nbsp;</option>
			  <option value="employee">&nbsp;&nbsp; Employee &nbsp;</option>
              </select>
        </div>

        <hr color="white">
        <hr color="white">

        <div align="center">
            <input name="btnLogin" type="submit" id="btnLogin" value=" Change Password " style="font-size:12px;color:white;background:#34ad00;">
        </div>

        <hr color="white">

      </form>
</div>
<br/>
<?php include "footer.php";?>
</body>
</html>
