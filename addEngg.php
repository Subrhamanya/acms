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

        var v="nametocheck="+email+"&type=eng";
        hr.send(v);
    }
    else if (email.length <= 6){
        status.innerHTML='Enter a valid email id';
        document.getElementById("btnLogin").disabled=true;
    }

}
//-->
</script>
<h3>Add New Engineer Details - Admin View</h3>
<div style="width: 40%;margin-left: auto;margin-right: auto">
<form action="process.php?action=addEngg" method="post"  name="frmListUser" id="frmListUser" style=" box-shadow: 1px 2px 2px 3px rgba(0,0,0,0.3);animation-delay: 1s;animation-name: zoomIn;" data-wow-delay="1s" class="wow zoomIn animated animated">
    <div align="center"><h2 style="color: #34ad00">:: Add Engineer Details ::<hr width="80%"></h2></div>
    <div align="center"><?php //echo $errorMessage; ?></div>

    <div align="center">
        <label for="EngineerName"><b>Engg Name:</b></label>
        <input name="EngineerName" type="text" id="EngineerName" size="30" maxlength="20" required />
    </div>

            <br/>

    <div align="center">
        <label for="Password"><b>Password &nbsp;:</b></label>
        <input name="Password" type="password" id="Password" value="" size="30" maxlength="20" required />
    </div>

            <br/>

    <div align="center">
        <label for="Address">&nbsp;<b>&nbsp;&nbsp;Address&nbsp;&nbsp;:</b></label>
        <textarea name="Address" cols="23" rows="4" id="Address" required></textarea>
    </div>

            <br/>

    <div align="center">
        <label for="Email"><b>&nbsp;E-mail ID : </b></label>
        <input name="Email" type="email" id="Email" value="" size="30" oninput="checkemail()" maxlength="20" required />
    </div>

    <hr style="border: none;"/>

    <div align="center"><span style="color: red;" id="email_status"></span></div>

    <br/>

    <div align="center">
        <label for="Mobile">&nbsp;<b>Mobile No:</b> </label>
        <input name="Mobile" type="number" pattern="[0-9]" id="Mobile" value="" size="30" minlength="10" maxlength="10" style="width: 200px" required />
    </div>

    <br/>
    <div align="center">
        <input name="btnLogin" type="submit" id="btnLogin" onclick="MM_validateForm('EngineerName','','R','Email','','RisEmail','Mobile','','R','Address','','R','Password','','R');return document.MM_returnValue" value=" Register Now " style="color: white;background: #34ad00">
    </div>
    <br/>

</form>
</div>

