<div>
<h3>Complaint Details:</h3>
<form action="process.php?action=CustCloseComplain" method="post"  name="frmListUser" id="frmListUser" style="animation-delay: 1s;animation-name: zoomIn;" data-wow-delay="1s" class="wow zoomIn animated animated">
  <table width="100%" border="0" align="center" cellpadding="2" cellspacing="1" class="text">
    <tr align="center" id="listTableHeader" style="background: whitesmoke">
      <td width="300">Complaint Title</td>
      <td width="200">Comp Type </td>
      <td width="300">Engineer Comment </td>
      <td width="119">Status</td>
      <td width="134">Engineer Name </td>
        <td width="200">&nbsp;</td>
        <td>&nbsp;</td>
    </tr>
    <?php
	$cust_id = (int)$_SESSION['user_id'];
	$sql = "SELECT * FROM tbl_complains 
			WHERE cust_id = $cust_id";
	$result = dbQuery($sql);
	$i=0;
	while($row = dbFetchAssoc($result)) {
	extract($row);
	if ($i%2) {
		$class = 'row1';
	} else {
		$class = 'row2';
	}
	$i += 1;
	?>
        <input type="hidden" name="compId" value="<?php echo $cid; ?>"/>

    <tr class="<?php echo $class; ?>" style="height:25px;background: #FFFFCC">
      <td align="center">&nbsp;<?php echo $comp_title; ?></td>
      <td width="350" align="center"><?php echo $comp_type; ?></td>
      <td width="350" align="center"><?php echo ucwords($eng_comment); ?></td>
      <td width="119" align="center"><?php echo ucwords($status); ?></td>
      <td width="134" align="center"><?php echo ucwords($eng_name); ?></td>
        <?php
        if (ucwords($status) == "Working" || ucwords($status) == "ReOpened" || ucwords($status)=="Assigned") {
            ?>
            <td align="center"><a style="color: #34ad00" href="process.php?action=CustCloseComplain&compId=<?=$cid  ?>" onclick="return confirm('Are you sure To Close??')">Close</a></td>
        <?php
        }else if(ucwords($status) == "Resolved"){
        ?>
            <td align="center"><a style="color: #34ad00" href="process.php?action=CustCloseComplain&compId=<?=$cid  ?>" onclick="return confirm('Are you sure To Close??')"> Close </a>/<a style="color: #34ad00" href="view.php?mod=customer&view=reopen&compId=<?=$cid ?>" onclick="return confirm('Are You Sure To Re-Open??')"> ReOpen </a></td>

        <?php }else { ?>

            <td align="center"><a style="color: #34ad00" href="view.php?mod=customer&view=reopen&compId=<?=$cid ?>" onclick="return confirm('Are You Sure To Re-Open??')">ReOpen</a></td>

        <?php } ?>

        <td align="center"><a style="color: #34ad00" href="view.php?mod=customer&view=feedback&compId=<?=$cid ?>">Feedback</a></td>
    </tr>
    <?php
	} // end while
	?>
    <tr>
      <td colspan="6">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="6" align="right">&nbsp;</td>
    </tr>
  </table>
  <p>&nbsp;</p>
</form>
</div>
<p>&nbsp;</p>
