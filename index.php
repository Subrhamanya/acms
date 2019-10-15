<?php
?>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
        function selected(item) {
            item.style.boxShadow = '0 1px 4px 7px rgba(0,0,0,0.2)';
        }
    </script>
</head>

<body style="background: whitesmoke;">

<div id="container">

    <!-- top of the page ie sign up/Login etc  -->
    <?php include "header.php";

    if (!isset($_GET['head'])) {

        ?>

        <div class="image">

            <b class="wow zoomIn animated animated" data-wow-delay=".5s"
               style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;">ACMS-Agriculture Complaint
                Management System</b>

        </div>

        <div style="height: 10%"></div>

        <div class="main_box wow fadeInDownBig animated animated" data-wow-delay=".5s"
             style="animation-delay: .5s;animation-name: fadeInDownBig">


            <div class="box">

                <div class="images"><h1><i class="fa fa-user"></i></h1></div>
                <div class="images_content"><h1>200</h1>Registered Users</div>

            </div>

            <div class="box">

                <div class="images"><h1><i class="fa fa-check"></i></h1></div>
                <div class="images_content"><h1>400+</h1>Solved Issues</div>

            </div>

            <div class="box">

                <div class="images"><h1><i class="fa fa-percent"></i></h1></div>
                <div class="images_content"><h1>98%</h1>Accuracy for issues</div>

            </div>


        </div>

        <hr style="width: 80%;margin-left: auto;margin-right: auto;color: whitesmoke">

        <div style="height: 10%"></div>

        <h1 style="color: #34ad00;margin-left: 10%">Services Offered:</h1>

        <div class="main_box extra wow zoomIn animated animated" data-wow-delay="1s"
             style="animation-delay: 1s;animation-name: zoomIn" onclick="selected(this)" id="1">

            <div class="images" style="margin: auto;"><h1><i class="fa fa-gears"></i></h1></div>
            <div class="images_content">Solving Issues related to agricultural field</div>

        </div>

        <div style="height: 10%"></div>

        <div class="main_box extra wow zoomIn animated animated" data-wow-delay="1s"
             style="animation-delay: 1s;animation-name: zoomIn" onclick="selected(this)" id="2">

            <div class="images" style="margin: auto;"><h1><i class="fa fa-info"></i></h1></div>
            <div class="images_content">Providing information related to agricultural field such as
                insecticide,pesticides,diseases related to plants etc
            </div>

        </div>

        <div style="height: 10%"></div>

        <div class="main_box extra wow zoomIn animated animated" data-wow-delay="1s"
             style="animation-delay: 1s;animation-name: zoomIn" onclick="selected(this)" id="3">

            <div class="images" style="margin: auto;"><h1><i class="fa fa-american-sign-language-interpreting"></i></h1>
            </div>
            <div class="images_content">Providing training related to agricultural field</div>

        </div>

        <?php
    }else{
        if (!isset($_SESSION['user_id'])) {

    ?>

    <div class="image" style="height: 200px;line-height:200px;">

        <b class="wow zoomIn animated animated" data-wow-delay=".5s"
           style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;">ACMS-Agriculture Complaint
            Management System</b>

    </div>

            <?php } ?>

        <h1 style="color: #34ad00;margin-left: 10%"><?php echo $_GET['head']; ?>:</h1>

    <div class="main_box extra wow zoomIn animated animated" data-wow-delay="1s"
         style="animation-delay: 1s;animation-name: zoomIn;box-shadow: none;display: flow;font-size: 18px;">

        <?php
        include "library/database.php";
        $head=strtolower(str_replace(" ","",$_GET['head']));
        $query="SELECT page_content FROM pages WHERE page_name='$head'";
        $result = dbQuery($query);
        $data = dbFetchArray($result);
        echo "<format>".$data['page_content']."</format>";
        ?>

    </div>

    <?php } ?>

    <div style="height: 10%"></div>

    <?php include "footer.php"; ?>

</div>

</body>
