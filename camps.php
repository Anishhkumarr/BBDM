<?php error_reporting(0);
include('includes/config.php');
 ?>
 
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BloodBank & Donor Management System | Camps</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="css/modern-business.css" rel="stylesheet">
    <style>
    .navbar-toggler {
        z-index: 1;
    }
    
    @media (max-width: 576px) {
        nav > .container {
            width: 100%;
        }
    }
    </style>
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
		

    <!-- Page Content -->
    <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">ORGANISED CAMPS</h1>

    <ol class="breadcrumb">
    <li class="breadcrumb-item">
    <a href="index.php">Home</a>
    <li class="breadcrumb-item active">Camps</li>
    </li>
    </ol>  

        <!-- Portfolio Section -->
        <h2>Some of the Organised camps</h2>
        
    <?php require('includes/header.php');?>
   
    <div class="row">
    
    <?php 

$sql = "SELECT * from tblcamp";
$query = $dbh -> prepare($sql);
$query->bindParam(':status',$status,PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{ ?>
<br>   
<br>
                <div class="col-lg-4 col-sm-6 portfolio-item">
                <div class="card h-100">
                    <a href="#"><img class="card-img-top img-fluid" src="images/121.jpg" alt="" ></a>
                    <div class="card-block"> 

                    <h4 class="card-title"><a href="#"><?php echo htmlentities($result->camp_title);?></a></h4>

                        <p class="card-text"><b>  Organised_by :</b> <?php echo htmlentities($result->organised_by);?></p>
                        <p class="card-text"><b>State :</b> <?php echo htmlentities($result->state);?></p>
                        <p class="card-text"><b>City :</b> <?php echo htmlentities($result->city);?></p>
                        <p class="card-text"><b> Details:</b> <?php echo htmlentities($result->details);?></p>
    
            
                    </div>
                </div>
            </div>

           
            <?php $cnt=$cnt+1; }} ?>
           
        </div>
        <!-- /.row -->


        <!-- Footer -->
        <?php include('includes/footer.php');?>

        <!-- Bootstrap core JavaScript -->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/tether/tether.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    
    </body>
    </html>