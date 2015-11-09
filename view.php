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
      <script src="assets/js/drag.js"></script>

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
                       <center>
                       	<img id="drag0" src="assets/img/burette3.png" draggable="true" ondragstart="drag(event)" width="80" height="120">
						</center>
                    </li>
					
					  <li  >
                        <center><img id="drag1" src="assets/img/beaker12.png" alt="..." onClick="selected_item(this.src)"></center>
                    </li>
					

                    
					
					 <li >
                         <center><img src="assets/img/burner.png" alt="..." onClick="selected_item(this.src)"></center>                    </li>

                </ul>
               
            </div>
            
        </nav>  
		
        <!-- /. NAV SIDE  -->
<div id="page-wrapper" >
    <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     
                        <h3><center>Practical View</center></h3>
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />	
        <div class="row">
            <div class="col-md-12">
                    <!-- Form Elements -->
                <div class="panel panel-default">
			
                    <div class="panel-heading">
                            <h4>Demo</h4>
                    </div>
					
                <div class="panel-body">
                      <div class="row">
						<form role="form" action="" method="post">
						
                    <div class="col-md-6">
						<div class="form-group">
							<input type="text"  class="form-control" readonly value="<?php echo ($_POST["che1"]) ?>">
						</div>
						
					
						<div class="form-group">
							<div id="drop1" ondrop="drop(event)" ondragover="allowDrop(event)">
								<p>Drag the burette image into this rectangle:</p>
							</div>
							
						</div>
						
						
						<div class="form-actions">
							<center>	
										<button type="submit" name="submit" class="btn btn-primary">Submit</button>
										<a href="index.php">Back</a>
							</center>				   
						</div>
					</div>
					
					 <div class="col-md-6">
												
							<div class="form-group">
								<input type="text"  class="form-control" readonly value="<?php echo ($_POST["che2"]) ?>">
							</div>
							<div>
							<p>
								<h5>Step1</h5>Click the Burette icon
							</p>
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

