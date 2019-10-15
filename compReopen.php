<?php

$compId = (int)$_GET['compId'];
$query="SELECT * FROM tbl_complains WHERE cid='$compId'";
$result = dbQuery($query);
$data = dbFetchArray($result);
?>


<div style="width: 40%;margin-left: auto;margin-right: auto">
    <br/><br/>
    <form action="process.php?action=reopenComplain" method="post" style=" box-shadow: 1px 2px 2px 3px rgba(0,0,0,0.3);animation-delay: 1s;animation-name: zoomIn;" data-wow-delay="1s" class="wow zoomIn animated animated">
        <div align="center"><h2 style="color: #34ad00">:: Re-Open A Complain ::</h2></div>

        <input type="hidden" name="compId" value=<?=(int)$_GET['compId'] ?>>

        <div align="center">
            <label for="compType"><b>Complain Type:</b></label>
            <input type="text" name="compType" value=<?= $data['comp_type']; ?> readonly>
        </div>

        <br/>

        <div align="center">
            <label for="compTitle"><b>&nbsp;&nbsp;&nbsp; Plant Name :</b></label>
            <input type="text" name="compTitle" value=<?= $data['comp_title']; ?> readonly>
        </div>

        <br/>

        <div align="center">
            <label for="compTitle"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Status &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</b></label>
            <input type="text" name="compStatus" value=<?= $data['status']; ?> readonly>
        </div>

        <br/>

        <div align="center">
            <label for="compTitle"><b>Engineer Name:</b></label>
            <input type="text" name="engName" value=<?= $data['eng_name']; ?> readonly>
        </div>

        <br/>

        <div align="center">
            <label for="compDesc"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Complain Desc&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</b></label>
            <textarea name="compDesc" cols="23" rows="5" id="compDesc"><?= $data['comp_desc']; ?></textarea>
        </div>

        <br/>

        <div align="center">
            <input name="btnLogin" type="submit" id="btnLogin" value=" Re Open Complain  " style="color: white;background: #34ad00">
        </div>

        <br/>

    </form>

</div>

<p>&nbsp;</p>