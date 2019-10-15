<?php

if ($_SESSION['user_type'] == "admin") {

    $sql="SELECT COUNT(*) AS count,status FROM tbl_complains GROUP BY status";

    $data2 = dbQuery($sql);

    $sql2="SELECT feedback from tbl_complains";

    $datas = dbQuery($sql2);

    $positive=0;
    $negative=0;
    $neutral=0;
    $noFeedback=0;

    while ($result2 = mysqli_fetch_assoc($datas)) {
        extract($result2);
        if ($feedback == "") {
            $noFeedback+=1;
        } else {

            $data=[$feedback];
            include "include/senti.php";

            if ($senti_result == "Positive") {
                $positive += 1;
            } elseif ($senti_result == "Negative") {
                $negative += 1;
            } else {
                $neutral += 1;
            }

        }
    }

    ?>

    <html lang="eng">
    <head>
        <title>Admin Home Page</title>
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript">
            google.charts.load("current", {packages:["corechart"]});
            google.charts.setOnLoadCallback(drawChart);
            function drawChart() {
                var data = google.visualization.arrayToDataTable([

                    ['Complaint Status','No. Of Complaints'],

                    <?php
                    while ($result = mysqli_fetch_array($data2)) {
                        echo "['".$result['status']."', ".$result['count']."],";
                    }

                    ?>
                ]);

                var data2=google.visualization.arrayToDataTable([
                    ['Feedback', 'NO. Of Feedback',{role:"style"}],
                    ['Good/Positive',     <?php echo $positive;  ?>,'008000'],
                    ['Bad/Negative',      <?php echo $negative;  ?>,'#ff0000'],
                    ['Medium/Neutral',  <?php echo $neutral;  ?>,'#303030'],
                    ['No Feedback', <?php echo $noFeedback;  ?>,'#0000ff']
                ]);


                var options = {
                    title: 'Complaint Report',
                    is3D: true,
                    animation:{
                        duration:1000,
                        easing:'out',
                        "startup":true
                    },
                };

                var options2 = {
                    title: 'Entire Feedback Report',
                    is3D: true,
                    animation:{
                        duration:3000,
                        easing:'out',
                        "startup":true
                    },
                };

                var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
                chart.draw(data, options);

                var chart2 = new google.visualization.ColumnChart(document.getElementById('piechart_3d2'));
                chart2.draw(data2, options2);
            }
        </script>
    </head>
    <body>
    <div style="display: flex;">
    <div id="piechart_3d" style="width: 50%; height: 400px;"></div>
    <div id="piechart_3d2" style="width: 50%; height: 400px;"></div>
    </div>
    </body>
    </html>


    <?php

}else{

?>

    <p align="center" style="color:#990000;font-size:16px;font-weight:bold;" >Agriculture </p>
    <img src="images/make-online-complaint-btn.jpg"  style="float:left;border:0px; padding:10px;"/>
    <p align="left" style="line-height:24px; padding:10px;"><b>Agriculture Complaint Management System (ACMS)</b> is a system operated by the city of Lagos, Nigeria. A Agriculture Complaint Management System is one of latest productivity enhancement tools used widely by all organisations wherever there is a need of booking of complaints via operators and analysis of complaints which are made or are pending.
        <br/><br/>
        Lack of paper movements provides complaint management operations a speed which was never envisaged in manual mode at all. Software allows a booking operator to book and lodge complaints and automatically schedules and prompts operators to source complaint to concerned departments. State of the art management information reports on complaint details and pending complaints with reasons and remarks provides management a better insight to problems and traffic situations of telephone lines. A never before �Report Wizard� not only allows you to define specific reports on demand but also allows you to define your own sorting and analysis parameters which may be more relevant to you but not programmed by us till now.</p>
    <p>&nbsp;</p>
<?php } ?>