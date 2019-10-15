<?php
require_once './library/config.php';
require_once './library/functions.php';

$errorMessage = '&nbsp;';

if (isset($_POST['txtUserName'])) {
	$result = doLogin();
	
	if ($result != '') {
		$errorMessage = $result;
	}
}

?>

<?php include "header.php"?>
<body style="background: white">
<br/>
<div style="width: 350px;margin-left: auto;margin-right: auto;animation-delay: 1s;animation-name: zoomIn;" data-wow-delay="1s" class="wow zoomIn animated animated">
 <form method="post" name="frmLogin" id="frmLogin" style="width=340px;margin-left: auto;margin-right: auto;box-shadow: 1px 2px 2px 3px rgba(0,0,0,0.3)">
     <h2 align="center" style="color: #34ad00">:: User Login ::<hr style="width: 200px"></h2>
     <div align="center"><?php echo $errorMessage; ?></div>
     <div align="center">
     <label for="txtUserName" ><b>Username:</b></label>
     <input name="txtUserName" type="text" id="txtUserName"  size="30" maxlength="40" style="border-style: none;border-bottom: 1px solid black;outline: none;">
     </div>
     <hr color="white">
     <hr color="white">
     <div align="center">
     <label for="txtPassword"><b>Password:</b></label>
     <input name="txtPassword" type="password" id="txtPassword" size="30" maxlength="40" style="border-style: none;border-bottom: 1px solid black;outline: none;">
     </div>
     <hr color="white">
     <hr color="white">
     <div align="center">
     <label><b>User Type:</b></label>
              <select name="utype" style="width: 200px;border-style: none;border-bottom: 1px solid black;outline: none;">
			  <option >&nbsp;&nbsp;--- Select User --- &nbsp;</option>
			  <option value="admin">&nbsp;&nbsp; Administrator &nbsp;</option>
			  <option value="customer">&nbsp;&nbsp; Customer &nbsp;</option>
			  <option value="employee">&nbsp;&nbsp; Employee &nbsp;</option>
              </select>
     </div>

     <hr color="white">
     <hr color="white">

     <div style="display: flex;">

     <div style="float: left;width: 60%;margin-left: 8px"><a href="register.php">Register Here</a> </div>
     <div style="float: right"><a href="forget-password.php">Forgot Password</a> </div>

     </div>

     <hr color="white">
     <hr color="white">

     <div align="center"><input name="btnLogin" type="submit" id="btnLogin" value=" Login Now " style="font-size:14px;background: #34ad00;color:white;border-radius: 2px;padding:5px 8px;"></div>
     <hr color="white">
 </form>

    <br/>

</div>

</body>

<?php include "footer.php"; ?>

