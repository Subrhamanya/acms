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
//-->
</script>
<?php 
$cid = (int)$_GET['cId'];
//echo $cid;
$sql= "SELECT * FROM tbl_customer WHERE cid = $cid";
$result = dbQuery($sql);
while($data = dbFetchAssoc($result)){
extract($data);
?>
    <h3>Edit Customer Details - Admin View</h3>
    <div style="width: 40%;margin-left: auto;margin-right: auto">
        <form action="process.php?action=editCust" method="post"  name="frmListUser" id="frmListUser" style=" box-shadow: 1px 2px 2px 3px rgba(0,0,0,0.3);animation-delay: 1s;animation-name: zoomIn;" data-wow-delay="1s" class="wow zoomIn animated animated">
            <div align="center"><h2 style="color: #34ad00">:: Edit Customer Details ::<hr width="80%"></h2></div>
            <div class="errorMessage" align="center"><?php //echo $errorMessage; ?></div>

            <input type="hidden" name="cid" value="<?php echo $cid; ?>" />


            <div align="center">
                <label for="CustomerName"><b>Customer Name:</b></label>
                <input name="CustomerName" type="text" id="EngineerName" value="<?php echo $cname; ?>" size="30" maxlength="20" />
            </div>

            <br/>

            <div align="center">
                <label for="Password"><b>Password :</b></label>
                <input name="Password" type="password" id="Password" value="<?php echo $cpass; ?>" size="30" maxlength="20" />
            </div>

            <br/>

            <div align="center">
                <label for="Address">&nbsp;<b>&nbsp;&nbsp;Address&nbsp;&nbsp;:</b></label>
                <textarea name="Address" cols="23" rows="4" id="Address"><?php echo $address; ?></textarea>
            </div>

            <br/>

            <div align="center">
                <label for="Email"><b>&nbsp;E-mail ID : </b></label>
                <input name="Email" type="text" id="Email" value="<?php echo $email; ?>"  size="30" maxlength="20" />
            </div>

            <br/>

            <div align="center">
                <label for="Mobile">&nbsp;<b>Mobile No:</b> </label>
                <input name="Mobile" type="text" id="Mobile" value="<?php echo $c_mobile; ?>" size="30" maxlength="60" />
            </div>

            <br/>

            <div align="center">
                <input name="btnLogin" type="submit" id="btnLogin" onclick="MM_validateForm('CustomerName','','R','Email','','RisEmail','Mobile','','R','Address','','R','Password','','R');return document.MM_returnValue" value=" Edit <?php echo $cname; ?>" style="color: white;background: #34ad00">
            </div>
            <br/>

        </form>
    </div>
<?php } ?>

