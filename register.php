<?php
require_once './library/config.php';
require_once './library/functions.php';

$errorMessage = '&nbsp;';


if (isset($_POST['txtUserName'])) {
//	echo $_POST['txtUserName'];
	
	$result = doRegister();
	
	if ($result != '') {
		$errorMessage = $result;
	}
	
}
?>

<?php include "header.php";?>
<html lang="en">
<head>
    <style>
        input[type=number]::-webkit-inner-spin-button,
        input[type=number]::-webkit-outer-spin-button {
            -webkit-appearance: none;
        }
    </style>
<script type="text/JavaScript">
<!--
function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_validateForm() { //v4.0
  var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
  for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=MM_findObj(args[i]);
    if (val) { nm=val.name; if ((val=val.value)!="") {
      if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
        if (p<1 || p==(val.length-1)) errors+='- '+nm+' must contain an e-mail address.\n';
      } else if (test!='R') { num = parseFloat(val);
        if (isNaN(val)) errors+='- '+nm+' must contain a number.\n';
        if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
          min=test.substring(8,p); max=test.substring(p+1);
          if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
    } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' is required.\n'; }
  } if (errors) alert('The following error(s) occurred:\n'+errors);
  document.MM_returnValue = (errors == '');
}

function checkemail() {
    var status=document.getElementById("email_status");
    var email = document.getElementById("Email").value;
    if (email != " " && email.length>6)  {
        status.innerHTML='Checking.....';
        var hr=new XMLHttpRequest();
        hr.open("POST", "emailcheck.php", true);
        hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        hr.onreadystatechange=function (){
            if (hr.readyState >=0 ) {
                status.innerHTML=hr.responseText;
                if (status.innerHTML == "success") {
                    status.innerHTML=" ";

                    document.getElementById("btnLogin").disabled=false;
                } else {
                    status.innerHTML=" account with this email id already exist";
                    document.getElementById("btnLogin").disabled = true;
                }
            }


        }

        var v="nametocheck="+email;
        hr.send(v);
    }
    else if (email.length <= 6){
        status.innerHTML='Enter a valid email id';
        document.getElementById("btnLogin").disabled=true;
    }

}
//-->
</script>
</head>
<body>
     <br/>

     <div style="width: 350px;margin-left: auto;margin-right: auto;animation-delay: 1s;animation-name: zoomIn;" data-wow-delay="1s" class="wow zoomIn animated animated">

	 <form method="post" name="frmUserReg" id="frmUserReg" action="" style="width=340px;margin-left: auto;margin-right: auto;box-shadow: 1px 2px 2px 3px rgba(0,0,0,0.3)">
         <h2 align="center" style="color: #34ad00">:: User Registration :: <hr style="width: 200px"> </h2>
		 <div class="errorMessage" align="center"><?php echo $errorMessage; ?></div>
         <div align="center">
             <label for="txtUserName"><b>Username:</b></label>
             <input name="txtUserName" type="text" id="txtUserName" size="30" maxlength="20" required>
         </div>

         <hr color="white">
         <hr color="white">

         <div align="center">
             <label for="txtPassword"><b>Password:</b></label>
             <input name="txtPassword" type="password" id="txtPassword" value="" size="30" maxlength="20" required />
         </div>

         <hr color="white">
         <hr color="white">

         <div align="center">
         <label for="utype"><b>User Type:</b></label>
             <select name="utype" style="width: 200px;border-style: none;border-bottom: 1px solid black;outline: none;" required>
               <option value="customer">&nbsp;&nbsp; Customer &nbsp;</option>
             </select>
         </div>

         <hr color="white">
         <hr color="white">

         <div align="center">
             <label for="txtAdd"><b>Address:</b></label>
             <textarea name="txtAdd" cols="22" rows="3" id="txtAdd" required></textarea>
         </div>

         <hr color="white">
         <hr color="white">

         <div align="center">
             <label for="txtMob"><b>Mobile No:</b> </label>
             <input name="txtMob" type="number" pattern="[0-9]" id="txtMob" value="" size="10" style="width: 200px" required />
         </div>

         <hr color="white">
         <hr color="white">

         <div align="center">
            <label for="Email"><b>E-mail Id:</b></label>
            <input name="Email" type="email" id="Email" oninput="checkemail()" value="" size="30" maxlength="60" required>
         </div>
         <hr color="white">
         <div align="center"><span id="email_status" style="color: red;"></span></div>
         <hr color="white">
         <hr color="white">

         <div align="center">
          <input name="btnLogin" type="submit" id="btnLogin" value=" Register Now " style="color: white;background: #34ad00" required >
         </div>
         <div align="right"><a href="login.php">Back</a></div>
      </form>
         <br/>
     </div>

         <?php include "footer.php";?>
</body>
</html>
