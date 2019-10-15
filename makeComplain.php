
<div style="width: 40%;margin-left: auto;margin-right: auto">
<br/><br/>
<form action="process.php?action=makeComplain" method="post" style=" box-shadow: 1px 2px 2px 3px rgba(0,0,0,0.3);animation-delay: 1s;animation-name: zoomIn;" data-wow-delay="1s" class="wow zoomIn animated animated">
    <div align="center"><h2 style="color: #34ad00">:: Make Complains ::</h2></div>
    <div align="center">
        <label for="compType"><b>Complain Type:</b></label>
        <input name="compType" type="text" placeholder="eg:spindly plant,few flowers..." style="width: 200px" required >
    </div>

    <br>

    <div align="center">
        <label for="compTitle"><b>Plant Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp:</b> </label>
        <input name="compTitle" type="text" placeholder="eg:rose plant,jasmine plant..." style="width: 200px" required>
    </div>

    <br>

    <div align="center">
        <label for="compDesc"><b>Complain Desc:</b></label>
        <textarea name="compDesc" cols="23" rows="3" id="compDesc"></textarea>
    </div>

    <br>

    <div align="center">
    <input name="btnLogin" type="submit" id="btnLogin" value=" Make Complaint  " style="color: white;background: #34ad00">
    </div>
    <br>
</form>
</div>
<p>&nbsp;</p>

