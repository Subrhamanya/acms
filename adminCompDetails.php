<h3>Complaint Details - Admin View</h3>
<form action="processLeave.php?action=addUser" method="post"  name="frmListUser" id="frmListUser" style="animation-delay: 1s;animation-name: zoomIn;" data-wow-delay="1s" class="wow zoomIn animated animated">
  <table width="100%" border="0" align="center" cellpadding="2" cellspacing="1">
    <tr align="center" id="listTableHeader" bgcolor="#f5f5f5">
      <td width="747">Complaint Title</td>
      <td width="260">Com. Type </td>
      <td width="139">Status</td>
      <td width="150">Detail</td>
    </tr>
    <?php
	$cust_id = (int)$_SESSION['user_id'];
	$sql = "SELECT * 
			FROM tbl_complains
			WHERE status != 'close' 
			ORDER BY create_date DESC 
			LIMIT 0,20";
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
    <tr class="<?php echo $class; ?>" style="height:25px;background: #ffffcc">
      <td align="center">&nbsp;<?php echo $comp_title; ?></td>
      <td width="260" align="center"><?php echo ucwords($comp_type); ?></td>
      <td width="139" align="center"><?php echo ucwords($status); ?></td>
      <td width="150" align="center"><a href="javascript:viewComplainDetail(<?php echo $cid; ?>);" style="color: #34ad00">Detail</a></td>
    </tr>
    <?php
	} // end while
	?>
    <tr>
      <td colspan="5">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="5" align="right">&nbsp;</td>
    </tr>
  </table>
  <p>&nbsp;</p>
</form>
<p>&nbsp;</p>
