<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['alogin'])==0)
	{	
header('location:index.php');
}
else{ 

if(isset($_POST['submit']))
  {
$camp_title=$_POST['camp_title'];
$organised_by=$_POST['organised_by'];
$state=$_POST['state'];
$city=$_POST['city'];
$details=$_POST['details'];



$sql="INSERT INTO tblcamp(camp_title,organised_by,state,city,details) VALUES(:camp_title,:organised_by,:state,:city,:details)";
$query = $dbh->prepare($sql);
$query->bindParam(':camp_title',$camp_title,PDO::PARAM_STR);
$query->bindParam(':organised_by',$organised_by,PDO::PARAM_STR);
$query->bindParam(':state',$state,PDO::PARAM_STR);
$query->bindParam(':city',$city,PDO::PARAM_STR);
$query->bindParam(':details',$details,PDO::PARAM_STR);



$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
$msg="Your info submitted successfully";
}
else 
{
$error="Something went wrong. Please try again";
}

}
}

?>

<!doctype html>
<html lang="en" class="no-js">

<head>

	
	<title>BBDMS | Admin addcamp</title>

	<!-- Font awesome -->
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<!-- Sandstone Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Bootstrap Datatables -->
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
	<!-- Bootstrap social button library -->
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<!-- Bootstrap select -->
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<!-- Bootstrap file input -->
	<link rel="stylesheet" href="css/fileinput.min.css">
	<!-- Awesome Bootstrap checkbox -->
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<!-- Admin Stye -->
	<link rel="stylesheet" href="css/style.css">
  <style>
		.errorWrap {
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #dd3d36;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
.succWrap{
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #5cb85c;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
		</style>



</head>

<body>
<?php include('includes/header.php');?>
	<div class="ts-main-content">
	<?php include('includes/leftbar.php');?>
		<div class="content-wrapper">
			<div class="container-fluid">

			<h2 class="page-title">Add New Camp Details </h2>

							<div class="panel panel-default">
							<div class="panel-heading">Camps  Info</div>
							<div class="panel-body">


			<?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
				else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>



       <form method="post" enctype="multipart/form-data">
	  <table border="0" align="center" width="400" height="300px" >


<tr><td colspan="2">&nbsp;</td></tr>
<tr><td class="lefttd">Camp Title</td><td><input type="text" name="camp_title" required="required" pattern="[a-zA-Z.1 _]{5,35}" title="please enter only character or numbers between 5 to 35 for camp title"/></td></tr>
<tr><td class="lefttd">Organized By</td><td><input type="text" name="organised_by"  required="required" pattern="[a-zA-Z1 _]{5,35}" title="please enter only character or numbers between 5 to 35 for organizer name"/></td></tr>


<tr><td class="lefttd">State </td><td>
<select name="state" required> 
<option value="">Select</option>
<option value="Karnataka">Karnataka</option>


<tr><td class="lefttd">City </td><td>
<select name="city" required>
<option value="">Select</option>
<option value="Bangalore">Bangalore</option>
<option value="Mysore">Mysore</option>
<option value="Kolar">Kolar</option>
<option value="Mandya">Malur</option>


<tr><td class="lefttd">Details</td><td><textarea name="details"></textarea></td></tr>

												<div class="form-group" align="center">
												<div class="col-sm-8 col-sm-offset-2">
											 	<button class="btn btn-default" type="reset">Cancel</button> 	
												<button class="btn btn-primary" name="submit" type="submit">Save changes</button>
												</div>
											</div>

</div>
</div>
</div>

	<!-- Loading Scripts -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap-select.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script src="js/Chart.min.js"></script>
	<script src="js/fileinput.js"></script>
	<script src="js/chartData.js"></script>
	<script src="js/main.js"></script>


   
</body>
</html>
