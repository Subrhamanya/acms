<?php
$cid = (int)$_GET['compId'];
$sql = "SELECT * FROM tbl_complains 
		WHERE cid = $cid";
$result = dbQuery($sql);
while($row = dbFetchAssoc($result)) {
extract($row);
?>
<div style="width: 40%;margin-left: auto;margin-right: auto">
<form action="process.php?action=commentOnComplain" method="post" style=" box-shadow: 1px 2px 2px 3px rgba(0,0,0,0.3);animation-delay: 1s;animation-name: zoomIn;" data-wow-delay="1s" class="wow zoomIn animated animated">
    <div align="center"><h2 style="color: #34ad00">:: View Complains Details::<hr style="width: 80%"></h2></div>

    <div class="errorMessage" align="center"></div>

    <input type="hidden" name="compId" value="<?php echo $cid; ?>"/>

    <div>
        <label style="margin-left: 10px;"><b>Complainer Name:</b> </label>
        <font><?php echo ucwords($cust_name); ?></font>
    </div>

    <hr style="border: white;">

    <div>
        <label style="margin-left: 10px;"><b>Complain Title&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</b> </label>
        <font><?php echo $comp_title; ?></font>
    </div>

          <hr style="border: white">

    <div>
        <label style="margin-left: 10px"><b>Complain Desc&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</b></label>
        <textarea name="compDesc" cols="30" rows="4" id="compDesc"  readonly="readonly"><?php echo $comp_desc; ?></textarea>
    </div>

    <hr style="border: white">

    <div>
        <label style="margin-left: 10px"><b>Status&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</b></label>
        <font color="#66FF00"><b><?php echo ucwords($status); ?></b></font>
    </div>

    <hr style="border: white">

    <div>
        <label style="margin-left: 10px"><b>Date Of Creation&nbsp;&nbsp;&nbsp;:</b></label>
        <?php echo $create_date; ?>
    </div>

    <hr style="border: white">

    <div>
        <label style="margin-left: 10px"><b>Assignee Name&nbsp;&nbsp;&nbsp;&nbsp;:</b></label>
        <td class="content"><font color="#0033FF"><?php echo $eng_name; ?></font></td>
    </div>

    <hr style="border: white">

    <div>
        <label style="margin-left: 10px"><b>Complainer Feedback:</b></label>
        <td><textarea cols="25" rows="4" readonly><?=$feedback; ?></textarea></td>
    </div>

    <hr style="border: white">

    <div>
        <label style="margin-left: 10px"><b>Comment&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</b></label>
			<textarea name="empComment" cols="30" rows="4" id="empComment" ><?php echo $eng_comment; ?></textarea>
    </div>
    <br/>
            <div align="center"><input name="btnLogin" type="submit" id="btnLogin" value=" Update Complain Status" style="color: white;background: #34ad00"></div>
    <br/>
</form>
<?php 
}//while
?>
</div>