<head>
<script src="http://cdn.ckeditor.com/4.6.2/standard-all/ckeditor.js"></script>
</head>


<?php

if (isset($_POST['submit'])) {
    $name=$_POST['page_name'];
    $content=$_POST['content'];
    $query="UPDATE pages SET page_content='$content' WHERE page_name='$name'";
    dbQuery($query);
}

?>


<h1 style="color: #34ad00;margin-left: 10%"><?php echo $_GET['head']; ?>:</h1>

<div class="main_box extra wow zoomIn animated animated" data-wow-delay="1s"
     style="animation-delay: 1s;animation-name: zoomIn;box-shadow: none;">

    <?php
    $head=strtolower(str_replace(" ","",$_GET['head']));
    $query="SELECT page_content FROM pages WHERE page_name='$head'";
    $result = dbQuery($query);
    $data = dbFetchArray($result);

    if ($_SESSION['user_type'] == "admin") {
        ?>
        
        <form method='post' action=''>

            <input type="hidden" name="page_name" value=<?=strtolower(str_replace(" ","",$_GET['head'])); ?>>

            <textarea name="content" id="editor1" cols="20" rows="10"><?php echo $data['page_content']; ?></textarea>

            <br/>

            <div align="center"><input type="submit" name="submit" value=" Change " style="color: white;background: #34ad00"></div>

        </form>
        <?php
    }else {

        echo $data['page_content'];

    }
    ?>

    <script>
        CKEDITOR.replace( 'editor1');
    </script>

</div>