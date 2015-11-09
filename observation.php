<?php
	// if(isset($_POST['back']))
	// {
		// include_once 'index.php';
	// }
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Chemix Visualize</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
   		 
</head>
<body>

<div id="wrapper">
 
           <!-- /. NAV TOP  -->
           <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
					<li class="text-center">
						<img src="assets/img/find_user2.png" class="user-image img-responsive"/>
					</li>
				
					<li  >
                        <a  class="active-menu" href="special.php"> Special Types </a>
                    </li>
					
					  <li  >
                        <a  href="#"> D Block </a>
                    </li>
					

                    <li  >
                        <a  href="#"> P Block</a>
                    </li>
					
					 <li >
                        <a   href="#"> S Block</a>
                    </li>

                </ul>
               
            </div>
            
        </nav>  
		
        <!-- /. NAV SIDE  -->
<div id="page-wrapper" >
    <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     
                        <h3><center>Special Types Aquas</center></h3>
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />	
        <div class="row">
            <div class="col-md-12">
                    <!-- Form Elements -->
                <div class="panel panel-default">
			
                    <div class="panel-heading">
                            <h4>Practical Observations !</h4>
                    </div>
					
                <div class="panel-body">
                      <div class="row">
						<form role="form" action="view.php" method="post">
						
                    <div class="col-md-6">
						<div class="form-group">
							<input type="text"  name="che1" class="form-control" readonly value="<?php echo ($_POST["chemical1"]) ?>">
						</div>
						<div class="form-group">
							<input type="text" name="che2" class="form-control" readonly value="<?php echo ($_POST["chemical2"]) ?>">
						</div>
						<div class="form-group">
							<h5>Colour change</h5>
							<h7>Before&nbsp &nbsp <input class="color">
							
						</div>
						<div class="form-group">
							<h5>Percipitate</h5>
							<label class="switch">
								<input type="checkbox"> &nbsp
								<span class="check"></span>
							</label>
							<input class="color">
						</div>
						</br>
						<div class="form-actions">
							<center>	
										<button type="submit" name="submit" class="btn btn-primary">Submit</button>
										<a href="index.php">Back</a>
							</center>				   
						</div>
					</div>
					
					 <div class="col-md-6">
												
							<div class="form-group">
								<select class="form-control" >
									<option>20ml</option>
									<option>50ml</option>
									<option >100ml</option>
									<option >120ml</option>
									<option >150ml</option>
								</select>
							</div>
												
							<div class="form-group">
								<select class="form-control" >
									<option>Limited</option>
									<option>Excess</option>
								</select>
							</div>
					<div class="form-group">
							<h5>&nbsp </h5>
								<h7>After &nbsp &nbsp <input class="color"></h7>
						</div>
						<div class="form-group">
							<h5>Gas&nbsp &nbsp
							<label class="switch">
								<input type="checkbox">
								<span class="check"></span>
							</label></h5>
						</div>
						<div class="form-group">
							<h5>Heat &nbsp
							<label class="switch">
								<input type="checkbox">
								<span class="check"></span>
							</label></h5>
						</div>
									
					</div>
						
						</form>
					
						<br />
					</div>
                </div>
				</div>
                     <!-- End Form Elements -->
			</div>
		</div>
				
                <!-- /. ROW  -->
	</div>
             <!-- /. PAGE INNER  -->
</div>
         <!-- /. PAGE WRAPPER  -->
</div>

   


    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    
 
		    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
	<script type="text/javascript" src="assets/js/colorpic/jscolor.js"></script>
</body>
</html>

