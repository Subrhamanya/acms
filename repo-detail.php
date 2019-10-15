<?php 
$id = $_GET['id'];  
//echo $id;
?>
<h3>Report <?php echo $id;?> - Admin View</h3>
<form action="processLeave.php?action=addUser" method="post"  name="frmListUser" id="frmListUser" style="animation-delay: 1s;animation-name: zoomIn;" data-wow-delay="1s" class="wow zoomIn animated animated">
  <table width="100%" border="0" align="center" cellpadding="2" cellspacing="1" class="text">
    <tr align="center" id="listTableHeader" bgcolor="#f5f5f5">
      <td width="398">Name</td>
      <td width="344"> &nbsp;</td>
      <td width="284">Place</td>
      <td width="270">Email</td>
    </tr>
    <?php
	$sql = "SELECT *
			FROM tbl_$id
			LIMIT 0,20";
	$result = dbQuery($sql);
	$i=0;
	while($row = dbFetchRow($result)) {
	//extract($row);
	if ($i%2) {
		$class = 'row1';
	} else {
		$class = 'row2';
	}
	$i += 1;
	?>
    <tr class="<?php echo $class; ?>" style="height:25px;background: #ffffcc">
      <td align="center">&nbsp;<?php echo ucwords($row[1]); ?></td>
      <td width="344" align="center"><?php echo ucwords($row[2]); ?></td>
      <td width="284" align="center"><?php echo ucwords($row[3]); ?></td>
      <td width="270" align="center"><?php echo ucwords($row[4]); ?></td>
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
