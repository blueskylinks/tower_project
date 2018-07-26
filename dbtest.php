<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Bootstrap Admin Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	

</head>

<body>

    <div id="wrapper">

       
<nav class="navbar navbar-inverse navbar-fixed-top" style="height:13%">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Tower Project</a>
    </div>
    <ul class="nav navbar-nav">
      <li ><a href="FormHTML.php"><button class="btn btn-danger navbar-btn">New Entry</button></a></li>
      <li class="active"><a href="#"><button class="btn btn-danger navbar-btn" >&nbsp&nbsp&nbsp View &nbsp&nbsp&nbsp   </button></a></li>
      <li><a href="search.php"><button class="btn btn-danger navbar-btn">&nbsp&nbsp&nbsp Filter &nbsp&nbsp&nbsp </button></a></li>
      <li><a href="edit.php"><button class="btn btn-danger navbar-btn">&nbsp&nbsp&nbsp Edit &nbsp&nbsp&nbsp   </button></a></li>
	  <li><a href="lbsearch.php"><button class="btn btn-danger navbar-btn"> &nbsp Log Book &nbsp</button></a></li>	  
      <li><a href="#"><button class="btn btn-danger navbar-btn">DashBoard </button></a></li>
    </ul>
	<ul class="nav navbar-nav navbar-right">
      <li><p style="color:white;font-size:20pt;" > Shri Sai-Ram Engineering Services</a></li>
    </ul>
  </div>
  </nav>
  
  
  	
	<?php 
	$conn =mysqli_connect("localhost", "root", "987654321","tower_project");

	//Total Sum
	$sq="SELECT COUNT(stage) FROM first ";
	$qr=mysqli_query($conn,$sq)or die(mysqli_error($conn));
	$sum=mysqli_fetch_array($qr);
	$count=$sum[0];
	//echo $count;
		
	
	//Inspection stage
	$sql="SELECT COUNT(stage) FROM first WHERE stage='Inspection' ";
	$qry=mysqli_query($conn,$sql)or die(mysqli_error($conn));
	$row=mysqli_fetch_array($qry);
	$inspection=$row[0];
	$inspection_per=$inspection/$count*100;
	//echo $inspection_per;
	
	//Foundation
	$sql1="SELECT COUNT(stage) FROM first WHERE stage='Foundation'";
	$qry1=mysqli_query($conn,$sql1)or die(mysqli_error($conn));
	$row1=mysqli_fetch_array($qry1);
	$foundation=$row1[0];
	
	//Errection
	$sql2="SELECT COUNT(stage) FROM first WHERE stage='Errection'";
	$qry2=mysqli_query($conn,$sql2)or die(mysqli_error($conn));
	$row2=mysqli_fetch_array($qry2);
	$errection=$row2[0];
	
	//Comissioning
	$sql3="SELECT COUNT(stage) FROM first WHERE stage='Comissioning'";
	$qry3=mysqli_query($conn,$sql3)or die(mysqli_error($conn));
	$row3=mysqli_fetch_array($qry3);
	$comissioning=$row3[0];
	
	//Maintenance
	$sql4="SELECT COUNT(stage) FROM first WHERE stage='Maintenance'  ";
	$qry4=mysqli_query($conn,$sql4)or die(mysqli_error($conn));
	$row4=mysqli_fetch_array($qry4);
	$maintenance=$row4[0];
	
	//De-Errection
	$sql5="SELECT COUNT(stage) FROM first WHERE stage='De-Errection' ";
	$qry5=mysqli_query($conn,$sql5)or die(mysqli_error($conn));
	$row5=mysqli_fetch_array($qry5);
	$deErrection=$row5[0];
	
	//Goods
	$sql6="SELECT COUNT(stage) FROM first WHERE stage='Goods'  ";
	$qry6=mysqli_query($conn,$sql6)or die(mysqli_error($conn));
	$row6=mysqli_fetch_array($qry6);
	$goods=$row6[0];
	
	//Invoice	
	$sql7="SELECT COUNT(stage) FROM first WHERE stage='Invoice' ";
	$qry7=mysqli_query($conn,$sql7)or die(mysqli_error($conn));
	$row7=mysqli_fetch_array($qry7);
	$invoice=$row7[0];
	$invoice_per=$invoice/$count*100;
	//echo $invoice;
	?>
	
   <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-top: 6%">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                
            </div>
            <!-- /.navbar-header -->

          
               
                   
                    <!-- /.dropdown-messages -->
                <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-tasks fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
					  
                    <ul class="dropdown-menu dropdown-tasks">
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Inspection</strong>
                                        <span class="pull-right text-muted"><?php echo $inspection_per;?>%</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        
										
									 <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow=<?php echo $inspection;?> aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $inspection_per;?> ">
                                            <span class="sr-only">40% Complete (success)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Invoice</strong>
                                        <span class="pull-right text-muted">20% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                            <span class="sr-only">20% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 3</strong>
                                        <span class="pull-right text-muted">60% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 4</strong>
                                        <span class="pull-right text-muted">80% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            <span class="sr-only">80% Complete (danger)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Tasks</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-tasks -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i> New Comment
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> Message Sent
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i> New Task
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            
            <!-- /.navbar-static-side -->
        </nav>
		
  
	

        <div style="margin-top:1%">
            
            <!-- /.row -->
            <div class="row">
               
                <div class="col-lg-3 col-md-6">
                    <div style="background:  #f30615 " class="panel panel" >
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-tasks fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $inspection; ?></div>
                                    <div>Inspection</div>
                                </div>
                            </div>
                        </div>
                        <a href="show.php">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                
         
               
                <div class="col-lg-3 col-md-6">
                    <div style="background:   #f33106  " class="panel panel" >
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-tasks fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $foundation; ?></div>
                                    <div>Foundation</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
				
				
               
                <div class="col-lg-3 col-md-6">
                    <div style="background:   #f7610c   " class="panel panel" >
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-tasks fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $errection; ?></div>
                                    <div>Errection</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
				
				
			
                <div class="col-lg-3 col-md-6">
                    <div style="background:   #f39c16    " class="panel panel" >
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-tasks fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $comissioning; ?></div>
                                    <div>Commissioning</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
			</div>
			</div>
				
				
				 <!-- /.col-lg-12 -->
				  <div class="row" width="100%">
                <div class="col-lg-6" style="text-align:center;">
                    <div class="panel panel-default">
                        <div class="panel-heading" align="center">
                            Progress
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body" style="text-align:center;">
                            <div class="flot-chart">
                             <div id="piechart"></div>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
			  </div>
				
			
			
               <div >
			   <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div style="background:    #efe111     " class="panel panel" >
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-tasks fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $maintenance; ?></div>
                                    <div>Maintainance</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
				
				
			
               
                <div class="col-lg-3 col-md-6">
                     <div style="background:  #9eef11  " class="panel panel" >
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-tasks fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $deErrection; ?></div>
                                    <div>De-Errection</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
				
			
               
                <div class="col-lg-3 col-md-6">
                    <div style="background:   #61f70c  " class="panel panel" >                
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-tasks fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $goods; ?></div>
                                    <div>Goods</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
			 
               
                <div class="col-lg-3 col-md-6">
                      <div style="background:  #126d19  " class="panel panel" >
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-tasks fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $invoice; ?></div>
                                    <div>Invoice</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
			 </div>
		</div>
	
		
		
      <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Flot Charts JavaScript -->
    <script src="../vendor/flot/excanvas.min.js"></script>
    <script src="../vendor/flot/jquery.flot.js"></script>
    <script src="../vendor/flot/jquery.flot.pie.js"></script>
    <script src="../vendor/flot/jquery.flot.resize.js"></script>
    <script src="../vendor/flot/jquery.flot.time.js"></script>
    <script src="../vendor/flot-tooltip/jquery.flot.tooltip.min.js"></script>
    <script src="../data/flot-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

		
	
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

	
	
	<script type="text/javascript">
		var inspection;
		var foundation;
		var errection;
		var deErrection;
		var maintenance;
		var goods;
		var comissioning;
		var invoice;
		
		// Load google charts
		google.charts.load('current', {'packages':['corechart']});
		google.charts.setOnLoadCallback(drawChart);
		inspection = '<?php echo $inspection;?>';
		foundation = '<?php echo $foundation;?>';
		deErrection = '<?php echo $deErrection;?>';
		errection = '<?php echo $errection;?>';
		maintenance = '<?php echo $maintenance;?>';
		comissioning = '<?php echo $comissioning;?>';
		goods = '<?php echo $goods;?>';
		invoice = '<?php echo $invoice;?>';
		
		
		document.write(inspection);
		document.write(foundation);
		document.write(errection);
		document.write(comissioning);
		document.write(maintenance);
		document.write(deErrection);
		document.write(goods);
		document.write(invoice);
		
		// Draw the chart and set the chart values
		function drawChart() {
		var data = google.visualization.arrayToDataTable([
		['Stages', 'Sum of projects'],
		['Inspection', inspection],
		['Foundation', foundation],
		['Errection', errection],
		['Commissioning', comissioning],
		['Maintainance', maintenance],
		['De-errection',deErrection],
		['Goods',goods],
		['Invoice',invoice]
		]);

		// Optional; add a title and set the width and height of the chart
		var options = {'title':'project stages', 'width':550, 'height':400};

		// Display the chart inside the <div> element with id="piechart"
		var chart = new google.visualization.PieChart(document.getElementById('piechart'));
		chart.draw(data, options);
		}
	</script>

</body>

</html>

