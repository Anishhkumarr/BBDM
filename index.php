<?php
error_reporting(0);
include('includes/config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BloodBank & Donor Management System</title>
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
    .carousel-item.active,
    .carousel-item-next,
    .carousel-item-prev {
        display: block;
    }
    </style>

</head>

<body>

    <!-- Navigation -->
<?php include('includes/header.php');?>
<?php include('includes/slider.php');?>
   
    <!-- Page Content -->
    <div class="container">

        <h1 class="my-4">Welcome to BloodBank & Donor Management System</h1>

        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-4 mb-4">
                <div class="card">
                    <h4 class="card-header">NEED FOR BLOOD</h4>
                   
                        <p class="card-text" style="padding-left:2%">The reason to donate is simple…it helps save lives. In fact, every two seconds of every day, someone needs blood. Since blood cannot be manufactured outside the body and has a limited shelf life, the supply must constantly be replenished by generous blood donors. </p>
                </div>
            </div>
            <div class="col-lg- mb-5">
                <div class="card">
                    <h4 class="card-header">ELIGIBILITY</h4>
                   
                        <p class="card-text" style="padding-left:2%">* Be in good health and feeling well. <br>
                                                                     * Be at least 18 years old. <br>
                                                                     * Weigh at least 110 pounds. <br>
                                                                     * Are not pregnant. <br>
                                                                     * Possess a valid government-issued photo ID. </p>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card">
                    <h4 class="card-header">BENIFITS </h4>
                   
                        <p class="card-text" style="padding-left:2%">  * Reduce stress. <br>
                                                                       * Improve your emotional well-being. <br>
                                                                       * Benefit your physical health. <br>
                                                                       * Help get rid of negative feelings. <br>
                                                                       * Provide a sense of belonging and reduce <br>
                                                                         isolation. </p>
                </div>
            </div>
        </div>
        <!-- /.row -->

        <!-- Portfolio Section -->
        <h2>Registered Donars</h2>

        <div class="row">
                   <?php 
$status=1;
$sql = "SELECT * from tblblooddonars where status=:status order by rand() limit 3";
$query = $dbh -> prepare($sql);
$query->bindParam(':status',$status,PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{ ?>

            <div class="col-lg-4 col-sm-6 portfolio-item">
                <div class="card h-100">
                    <a href="#"><img class="card-img-top img-fluid" src="images/103.jpg" alt="" ></a>
                    <div class="card-block">
                        <h4 class="card-title"><a href="#"><?php echo htmlentities($result->FullName);?></a></h4>
<p class="card-text"><b>  Gender :</b> <?php echo htmlentities($result->Gender);?></p>
<p class="card-text"><b>Blood Group :</b> <?php echo htmlentities($result->BloodGroup);?></p>

                    </div>
                </div>
            </div>

            <?php }} ?>
          
 



        </div>
        <!-- /.row -->

        <!-- Features Section -->
        <div class="row">
            <div class="col-lg-6">
                <h2>BLOOD GROUPS</h2>
          <p>  Blood group of any human being will mainly fall in any one of the following groups.</p>
                <ul>

                <li>A+ or A- </li>
                <li>B+ or B- </li>
                <li>AB+ or AB- </li>
                <li>O+ or O- </li>
              
                </ul>
               
            </div>
            <div class="col-lg-6">
            <br>
            <br>
                <img class="img-fluid rounded" src="images/12.jpg" alt="">
            </div>
        </div>
        <!-- /.row -->


        <div class="sidebar">
			<h2>Latest News</h2>
			<div class="blog_posts">

    <marquee direction="up" scrolldelay="300"><table >
<tr><td>
                        
						<div class="blog_heading">
							<span style="font-weight:bold"><b>HDFC Bank sets Guinness record in blood collection</b>
<p>The blood donation camp organised by HDFC Bank on December 6, 2013 involving 61,902 participants has found a place in Guinness Book of Records as the largest such drive on a single day</p></span>
							
						 </div>	
                         <br />
	<span style="font-weight:bold"><b>World Blood Donor Day: Poor health reduces women blood donors in India</b>
<p>While the overall number of blood donors in India has grown over the years, women constitute only a tiny 10 percent share owing to health problems like pernicious anaemia and low haemoglobin levels or being underweight</p></span>
					  </div>
                        </td></tr>
                   
                </table></marquee>  
				 
					 <div class="clear"></div>	
				</div>	
			
	</div>

        <hr>

        <!-- Call to Action Section -->
        <div class="row mb-4">
            <div class="col-md-8">
            <h4>UNIVERSAL DONORS AND RECIPIENTS</h4>
                <p>
                The universal blood type is O negative (O-). Donors with type O- blood have the unique power to help anyone in need of a blood transfusion. Red blood cells from O- donors can be transfused to anyone, regardless of the person's blood type</p>
            </div>
          
        </div>

    </div>
    <!-- /.container -->


   

    <!-- Footer -->
  <?php include('includes/footer.php');?>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/tether/tether.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

</body>

</html>
