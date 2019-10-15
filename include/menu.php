<head>
    <style>
        a {
            color: white;
            text-decoration: none;
        }

        a:hover {
            color: #00fa00;
        }
    </style>
</head>


<?php
if($_SESSION['user_type'] == 'customer'){
?>
<div style="box-shadow: 1px 2px 2px 2px rgba(0,0,0,0.1);background: #34ad00">
    <div align="center"><h3 style="color: white">Customer Menu</h3></div>
		  <ul>
			<li><a href="<?php echo WEB_ROOT; ?>">Welcome,&nbsp;<?php echo $_SESSION['user_name']; ?></a></li>
              <hr style="border: white">
			<li><a href="<?php echo WEB_ROOT; ?>view.php?mod=customer&view=makeComplain">Make Complaints</a></li>
              <hr style="border: white">
			<li><a href="<?php echo WEB_ROOT; ?>view.php?mod=customer&view=compDetails">View Complaint Details</a></li>
              <hr style="border: white">
			<li><a href="<?php echo $self; ?>?logOut">Logout</a></li>
		  </ul>
</div>

<?php 
}else if($_SESSION['user_type'] == 'employee'){
?>
<div style="box-shadow: 1px 2px 2px 2px rgba(0,0,0,0.1);background: #34ad00">
    <div align="center"><h3 style="color: white">Engineers Menu</h3></div>
		  <ul>
			<li><a href="<?php echo WEB_ROOT; ?>">Welcome,&nbsp;<?php echo $_SESSION['user_name']; ?></a></li>
              <hr style="border: white">
			<li><a href="<?php echo WEB_ROOT; ?>view.php?mod=employee&view=viewComplain">View Assign Complaints</a></li>
              <hr style="border: white">
			<li><a href="<?php echo WEB_ROOT; ?>view.php?mod=employee&view=viewComplainClose">Resolve Complaint</a></li>
              <hr style="border: white">
			<li><a href="<?php echo $self; ?>?logOut">Logout</a></li>
		  </ul>
</div>

	 
<?php 
}else if($_SESSION['user_type'] == 'admin'){
?>
<div style="box-shadow: 1px 2px 2px 2px rgba(0,0,0,0.1);background: #34ad00">
    <div align="center"><h3 style="color: white">Admin Menu</h3></div>
		  <ul>
			<li><a href="<?php echo WEB_ROOT; ?>">Welcome,&nbsp;<?php echo ucwords($_SESSION['user_name']); ?></a></li>
              <hr style="border: white">
			<li><a href="<?php echo WEB_ROOT; ?>view.php?mod=admin&view=compDetails">Assign Complaints</a></li>
              <hr style="border: white">
			<li><a href="<?php echo WEB_ROOT; ?>view.php?mod=admin&view=vDetails">View Complaints</a></li>
              <hr style="border: white">
			<li><a href="<?php echo WEB_ROOT; ?>view.php?mod=admin&view=compCloseDetails">View Close Complaints</a></li>
              <hr style="border: white">
			<li><a href="<?php echo WEB_ROOT; ?>view.php?mod=admin&view=enggDetails">Engineer Details</a></li>
              <hr style="border: white">
			<li><a href="<?php echo WEB_ROOT; ?>view.php?mod=admin&view=custDetails">Customer Details</a></li>
              <hr style="border: white">
			<li><a href="<?php echo WEB_ROOT; ?>view.php?mod=admin&view=reports">Reports</a></li>
              <hr style="border: white">
			<li><a href="<?php echo $self; ?>?logOut">Logout</a></li>
		  </ul>
</div>

<?php 
}
?>