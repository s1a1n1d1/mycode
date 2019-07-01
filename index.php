<?php if(!session_id()) session_start();
if(!isset($_SESSION['adm'])){
	header("Location:signin.php");
} ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Fenstra 2k18 Registration</title>

    <!-- Bootstrap core CSS -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
     
    <!-- Custom styles for this template -->
    <link href="css/offcanvas.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/dataTables.bootstrap.min.css">
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.16/datatables.min.css"/>			
  </head>

  <body>
    <nav class="navbar navbar-fixed-top navbar-inverse">
      <div class="container">
       
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Fenstra Registration</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.php?d=1">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="db_pages/db_logout.php">Logout</a></li>
          </ul>
        </div><!-- /.nav-collapse -->
      </div><!-- /.container -->
    </nav><!-- /.navbar -->
<?php if(isset($_GET['d'])){
				$d=$_GET['d'];
			   }
			   else{
				   $d=0;}
			   ?>
    <div class="container">
            
             <?php if(isset($_GET['s'])){?>		
            <div class="alert <?php if($_GET['s']==1){echo"alert-success";}else{echo"alert-danger";}?> alert-dismissable fade in">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Alert!</strong> <?php if($_GET['s']==1){echo"Successfully Completed";}else{echo"error !!!!! Contact Technical Support";}?>. 
  </div>
     <?php }   ?> 
      <div class="row row-offcanvas row-offcanvas-right">

        <div class="col-xs-12 col-sm-9">
          <p class="pull-right visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
          </p>
          <div class="jumbotron">
            <h1>Fenstra 2k18</h1>
            <p>
            <?php switch ($d) {
							case 1 :
								echo "Register All Events";
								break;
							case 2:
								
								break;
							case 3:
								echo "View All Members";
								break;
							default  :
								echo "Register All Events";
						}?>
            </p>
          </div>
          <div class="row">
            	
                <div class="col-md-12">
               <?php 
			   
			   switch ($d) {
							case 1 :
								include('pages/register_all.php');
								break;
							case 2:
								
								break;
							case 3:
								/*include('test.php');*/
								include('pages/viewall.php');
								break;
							default  :
								include('pages/register_all.php');
						}
			   
			   
			   
			   
			   
			   
			   ?>
                	
                </div>
                
          </div><!--/row-->
        </div><!--/.col-xs-12.col-sm-9-->

        <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar">
          <div class="list-group">
            <a href="index.php?d=1" class="list-group-item active">Register All Events </a>
            <a href="index.php?d=3" class="list-group-item label-success">View All </a>
          </div>
        </div>
        
        
        
        <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar">
          <div class="list-group">
            <a href="#" class="list-group-item active">Download List Of All Events </a>
            <a href="pages/export_coding.php" class="list-group-item">Coding</a>
            <a href="pages/export_bestgang.php" class="list-group-item">Best Gang</a>
            <a href="pages/export_adfilm.php" class="list-group-item">Ad Film</a>
            <a href="pages/export_bestpersonality.php" class="list-group-item">Best Personality</a>
            <a href="pages/export_Quiz.php" class="list-group-item">General Quiz</a>
            <a href="pages/export_innovation.php" class="list-group-item">Innovation</a>
            <a href="pages/export_TreasureHunt.php" class="list-group-item">Treasure Hunt</a>
            <a href="pages/export_webdesign.php" class="list-group-item">Web Designing</a>
            <a href="pages/export_gaming.php" class="list-group-item">Gaming</a>
            <a href="pages/export_photography.php" class="list-group-item">Photography</a>
            <a href="pages/export_paperpresentation.php" class="list-group-item">Paper Presentation</a>
            <a href="pages/export_sportevents.php" class="list-group-item">Spot Events</a>
            <a href="pages/export_collewise.php" class="list-group-item active">Download List By college</a>
          </div>
        </div>
        
        
        <!--/.sidebar-offcanvas-->
      </div><!--/row-->

      <hr>

      <footer>
        <p>&copy; 2018 Fenstra 2k18,B4b.</p>
      </footer>

    </div><!--/.container-->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery-1.12.4.js"></script><script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
     <script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
    
    
   
    
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/offcanvas.js"></script>
    <script>
            $(document).ready(function() {
                $('#example').DataTable();
            } );
            </script>
  </body>
</html>
