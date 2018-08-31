<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Bootstrap Admin Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="/boot_admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="/boot_admin/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="/boot_admin/vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="/boot_admin/vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/boot_admin/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="/boot_admin/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->


	<style>
	.subheader_d{
	/*background-color: #ececec;*/
	background: rgba(0,255,0,.6);
   /* color: #b9b9b9;*/
}

#clickable_td:hover{
	cursor:pointer;
	background: #0ac5f4;
	color:#262626;
}
#clickable_td1:hover{
	cursor:pointer;
}
#clickable_td1{
	color:blue;
	
}
a{
	bottom-border:5px solid blue;
}</style>
</head>
<body>
    
     
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
     
      <h3 style="color: white"><span ></span>&nbsp Sri SaiRam Engineering Service </h3>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">

      <ul class="nav navbar-nav navbar-right">
      <li><a href="FormHTML_1.php"><button class="btn btn-danger navbar-btn">&nbspNew Entry&nbsp</button></a></li>
      <li><a href="show_1.php"><button class="btn btn-danger navbar-btn" >&emsp;&nbspView&emsp;&nbsp&nbsp</button></a></li>
      <li><a href="search.php"><button class="btn btn-danger navbar-btn">&emsp;&nbspFilter&emsp;&nbsp&nbsp</button></a></li>
      <li><a href="edit.php"><button class="btn btn-danger navbar-btn">&emsp;&nbsp&nbspEdit&emsp;&nbsp&nbsp&nbsp</button></a></li>
      <li><a href="lbsearch.php"><button class="btn btn-danger navbar-btn">&nbspLog Book&nbsp&nbsp</button></a></li>	  
      <li><a href="work.php"><button class="btn btn-danger navbar-btn">DashBoard</button></a></li>
      </ul>
    </div>
  </div>
</nav>
  

<?php
$conn =mysqli_connect("localhost", "root", "","tower_project");
$sql="SELECT * FROM `first`";
$qry=mysqli_query($conn,$sql)or die(mysqli_error($conn));
?>
      <!-- /.row -->
	    
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">

                        <!-- /.panel-heading -->
                        <div class="panel-body">
			
			<div id="bottom" width="80%" height="800">
			</div>
			
                 <table align="center" width="100%" cellpadding="1" cellspacing="0" border="5" bordercolor="#ccddff" id="dataTables-example" >

                     <thead>
                        <tr style='font-size:13px;'>
						<th rowspan="2" >SL No</th>
						<th colspan="2" >Client details</th>
						<th colspan="2" >Site Details</th>
						<th colspan="3" >Nature Of Work</th>
						<th colspan="2" >Additionals</th> 
						<th rowspan="2" >Order No</th>
						<th rowspan="2" >Invoice No</th>
							<!--<th class="gtext">Remarks</th> -->
						<th rowspan="2" >Engineer Details</th>
						<th rowspan="2" >Type Of Tower</th>
						<th rowspan="2" >Height Of Tower</th>
					   </tr>

					<tr style='font-size:13px;'>
						<th scope="col" >Name</th>
						<th scope="col" >Contact</th>
						<th scope="col" >Name</th>
						<th scope="col" >Address</th>
						<th scope="col" >Stage</th>
						<th scope="col" >Edit</th>
						<th scope="col" >Details</th>
						<th scope="col" >Edit</th>
						<th scope="col" >Details</th>
					</tr>
                    </thead>
				
					<tbody style='font-size:13px;'>
					<?php
						while($row=mysqli_fetch_array($qry)){
							if($row['Invoice_no']!=""){
								echo "<tr class='subheader_d'>";
								echo "<td >".$row['id']."</td>";
								echo "<td  style=' text-transform: uppercase; font-weight:bold; ' >".$row['cust_name']."</td><td>".$row['Contact_Person']."<br>".$row['Cell_Number']."</td>";
								echo "<td  style=' text-transform: uppercase; font-weight:bold; ' >".$row['SiteName']."</td>";
								echo "<td >".$row['Dist']."<br>".$row['TQ']."</td>";
								echo "<td>".$row['stage']."</td>";	
								echo "<td >Edit</td>";
								echo "<td  id='clickable_td1' style='font-size:13px;'><a onclick='Details1()'>Show More</a></td>";
								echo "<td  >Edit</td>";
								echo "<td   id='clickable_td1' style='font-size:13px;'><a onclick='Details2()'>Show More</a></td>";
								echo "<td >".$row['WorkOrderNo']."</td>";
								echo "<td >".$row['Invoice_no']."</td>";
								echo "<td >".$row['EngineerName']."<br>".$row['EngineerNo']."</td>";
								echo "<td >".$row['TypeOfTower']."</td>";	
								echo "<td >".$row['heightOfTower']."M</td></tr>";	
							}
							else{
								echo "<tr class='subheader'>";
								echo "<td >".$row['id']."</td>";
								echo"<td  style=' text-transform: uppercase; font-weight:bold; ' >".$row['cust_name']."</td><td>".$row['Contact_Person']."<br>".$row['Cell_Number']."</td>";
								echo "<td  style=' text-transform: uppercase; font-weight:bold; ' >".$row['SiteName']."</td>";
								echo "<td >".$row['Dist']."<br>".$row['TQ']."</td>";
								echo "<td>".$row['stage']."</td>";
								echo "<td  id='clickable_td' onclick='add_state()'>Edit</td>";
								echo "<td  id='clickable_td1' style='font-size:13px;'><a onclick='Details1()'>Show More</a></td>";
								echo "<td  id='clickable_td' onclick='additionals()'>Edit</td>";
								echo "<td  id='clickable_td1' style='font-size:13px;'><a onclick='Details2()'>Show More</a></td>";
								echo "<td >".$row['WorkOrderNo']."</td>";
								echo "<td >".$row['Invoice_no']."</td>";
								echo "<td >".$row['EngineerName']."<br>".$row['EngineerNo']."</td>";
								echo "<td >".$row['TypeOfTower']."</td>";	
								echo "<td >".$row['heightOfTower']."M</td></tr>";	
							}
							
						}
					?>
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
	    
            <!-- /.row -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="/boot_admin/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/boot_admin/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="/boot_admin/vendor/metisMenu/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="/boot_admin/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="/boot_admin/vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="/boot_admin/vendor/datatables-responsive/dataTables.responsive.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="/boot_admin/dist/js/sb-admin-2.js"></script>

<script>

 $(document).ready(function() {
        $('#dataTables-example').DataTable({
                    aLengthMenu: [
		[25, 50, 100, 200, -1],
		[25, 50, 100, 200, "All"]
		],
		iDisplayLength: -1,
		responsive: true,
		"aaSorting": [],
		scrollY: 400
        });
		
    });

function add_state(){
	var tabId,orderno; 
	var table=document.getElementById('dataTables-example'),rIndex; 
	for(var i=2;i<table.rows.length;i++){
		table.rows[i].onclick=function()
		{
			tabId=this.cells[0].innerHTML;
		orderno=this.cells[10].innerHTML;
		localStorage.setItem("key1",orderno);
			console.log(tabId);
			console.log(orderno);
		};
	}
			window.location.href="add_state_1.php";
}
function additionals(){
	var tabId,orderno; 
	var table=document.getElementById('dataTables-example'),rIndex; 
	for(var i=2;i<table.rows.length;i++){
		table.rows[i].onclick=function()
		{
			tabId=this.cells[0].innerHTML;
		orderno=this.cells[10].innerHTML;
		localStorage.setItem("key1",orderno);
			console.log(tabId);
			console.log(orderno);
		};
	}
	window.location.href="additional.php";
}
function Details1(){
	var table=document.getElementById('dataTables-example'),rIndex; 
	for(var i=2;i<table.rows.length;i++){
		table.rows[i].onclick=function()
		{
			tabId=this.cells[0].innerHTML;
		orderno=this.cells[10].innerHTML;
		localStorage.setItem("key1",orderno);
			console.log(tabId);
			console.log(orderno);
		};
	}
	window.location.href="Details1.php";
}

function Details2(){
	var table=document.getElementById('dataTables-example'),rIndex; 
	for(var i=2;i<table.rows.length;i++){
		table.rows[i].onclick=function()
		{
			tabId=this.cells[0].innerHTML;
		orderno=this.cells[10].innerHTML;
		localStorage.setItem("key1",orderno);
			console.log(tabId);
			console.log(orderno);
		};
	}
	window.location.href="Details2.php";
}
</script>

</body>
</html>
