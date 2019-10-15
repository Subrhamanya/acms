<?php
?>


<!DOCTYPE>

<html lang="en">

<head>

    <title>Agriculture Complaint Management System</title>

    <link rel="stylesheet" href="include/style.css">

    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>

    <link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>

    <link href='//fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <link rel="stylesheet" href="include/animate.css">

    <script src="library/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>

</head>




<div id="top">

    <div style="float: left;margin: -3px 8%;width: 30%;animation-delay: 0.5s; animation-name: zoomInLeft;" class="wow zoomInLeft animated animated" data-wow-delay=".5s"><p onclick="location.href='loginCheck.php';" style="cursor: pointer"><b><?php if(!isset($_SESSION['user_id'])){ ?><i class="fa fa-sign-in" style="font-size: 20px"></i> Sign in/Sign Up <?php }?></b></p></div>

    <div style="float: right;margin: -3px 8%;width: 17%;animation-delay: 0.5s; animation-name: zoomInRight;" class="wow zoomInRight animated animated" data-wow-delay=".5s""><p><b><i class="fa fa-phone" style="font-size: 20px"></i>Toll Number : +91-7259587536</b></p></div>
</div>
<!-- Heading of the project -->
<div id="head">

    <div style="float: left;margin: -3px 1.5%;width: 75%;">

        <h1 class="wow zoomIn animated animated" data-wow-delay=".5s" style=" animation-delay: 0.5s; animation-name: zoomIn;">Agriculture Complaint<span> Management System</span></h1>

    </div>

    <div style="float: right;width: 20%;margin:0 10px;animation-delay: 0.5s; animation-name: zoomIn;" class="wow zoomIn animated animated" data-wow-delay=".5s">
        <p class="head"><i class="fa fa-lock" style="font-size: 2em"></i><b>&nbsp SAFE & SECURE</b></p>
    </div>

</div>
<!-- different options or menu bar -->
<div class="menu_bar">

    <?php if (!isset($_SESSION['user_id'])) {

     ?>
    <ul class="wow shake animated animated" data-wow-delay=".5s" style="animation-delay: .8s;animation-name: shake">
        <li><a href="index.php">Home</a></li>
        <li><a href="index.php?head=Terms Of Use">Terms Of Use</a></li>
        <li><a href="index.php?head=Privacy Policy">Privacy Policy</a></li>
        <li><a href="index.php?head=About">About</a></li>
    </ul>

    <?php }else{?>

        <ul class="wow shake animated animated" data-wow-delay=".5s" style="animation-delay: .8s;animation-name: shake">
            <li><a href="view.php?mod=<?=$_SESSION['user_type']; ?>&view=main&head=main.php">Home</a></li>
            <li><a href="view.php?mod=<?=$_SESSION['user_type']; ?>&view=loginbody&head=Terms Of Use">Terms Of Use</a></li>
            <li><a href="view.php?mod=<?=$_SESSION['user_type']; ?>&view=loginbody&head=Privacy Policy">Privacy Policy</a></li>
            <li><a href="view.php?mod=<?=$_SESSION['user_type']; ?>&view=loginbody&head=About">About</a></li>
        </ul>

    <?php } ?>

</div>

</html>
