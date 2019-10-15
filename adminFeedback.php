<?php
$id = $_GET['id'];
?>
<head>
    <style>
        .Positive {
            background: #00fa00;
        }
        .Negative {
            background: red;
        }
        .Neutral {
            background: navajowhite;
        }
    </style>
</head>
<h3>Report <?php echo $id;?> - Admin View</h3>
<form action="" method="post"  name="frmListUser" id="frmListUser" style="animation-delay: 1s;animation-name: zoomIn;" data-wow-delay="1s" class="wow zoomIn animated animated">
    <table width="100%" border="0" align="center" cellpadding="2" cellspacing="1" class="text">
        <tr align="center" id="listTableHeader" bgcolor="#f5f5f5">
            <td width="583">Complaint Title</td>
            <td width="303">Eng Name </td>
            <td width="260">Customer Name </td>
            <td width="150">Status</td>
            <td>Feedback Got</td>
        </tr>
        <?php
        $sql = "SELECT *
			FROM tbl_complains
			ORDER BY create_date DESC";
        $result = dbQuery($sql);
        $i=0;
        while($row = dbFetchAssoc($result)) {
            extract($row);
            $i += 1;
            if($feedback==""){
                $senti_result="No feedback";
            }else {
                $data = [$feedback];
                include "include/senti.php";
            }

            ?>
            <tr bgcolor="#ffffcc" style="height:25px;" class=<?= $senti_result; ?>>
                <td align="center">&nbsp;<?php echo $comp_title; ?></td>
                <td width="303" align="center"><?php echo ucwords($eng_name); ?></td>
                <td width="260" align="center"><?php echo ucwords($cust_name); ?></td>
                <td width="150" align="center"><?php echo ucwords($status); ?></td>
                <td align="center"><?php echo $senti_result; ?></td>
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
