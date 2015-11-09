<?php
//include 'index.php';
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
						<img src="assets/img/find_user4.png" class="user-image img-responsive"/>
						
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
                            <h4>Choose HexaAqua Metal !</h4>
                    </div>
					
                <div class="panel-body">
                      <div class="row">
						<form role="form" action="observation.php" method="post" enctype="multipart/form-data">
						
                    <div class="col-md-6">
												
							<div class="form-group">
													<h5>Aqua Chemicals</h5>
													<select class="form-control" name="chemical1">
														<option><p>Sc<sup>3+</sup><sub>(aq)</sub></p></option>
														<option>Ti<sup>3+</sup><sub>(aq)</sub></option>
														<option >V2+(aq)</option>
														<option >V3+(aq)</option>
														<option >Cr3+(aq)</option>
														<option >Cr2+(aq)</option>
														<option >Mn2+(aq)</option>
														<option >Mn3+(aq)</option>
														<option >Fe2+(aq)</option>
														<option >Fe3+(aq)</option>
														<option >Co2+(aq)</option>
														<option >Co3+(aq)</option>
														<option>Ni2+(aq)</option>
														<option>Cu2+(aq)</option>
														<option>Cu+(aq)</option>
														<option>Zn2+(aq)</option>
													</select>
											</br>
									 
							</div>
					</div>
					 <div class="col-md-6">
												
							<div class="form-group">
													<h5>To</h5>
													<select class="form-control" name="chemical2">
														<option>HCl</option>
														<option>NH3</option>
													</select>
										</div>
										<br />
					</div>
						<div class="form-actions">
							<center>	
										<button type="submit" name="submit" class="btn btn-primary">Mixed</button>
							</center>				   
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
	
</body>
</html>

