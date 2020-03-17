<?php ob_start(); ?>
<?php include '../includes/db_connection.php'; ?>
<?php include '../includes/functions.php'; ?>
<?php include '../includes/auth2.php'; ?>

<!DOCTYPE html>
<html lang="zxx">
    <head>
        <title id="noPrint">Kodi | Manage</title>
        <!-- custom-theme -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
                function hideURLbar(){ window.scrollTo(0,1); } </script>
        <!-- //custom-theme -->
        <link href="../static/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
        <link rel="stylesheet" type="text/css" href="../static/css/table-style.css" />
        <link rel="stylesheet" type="text/css" href="../static/css/basictable.css" />
        <link href="../static/css/component.css" rel="stylesheet" type="text/css" media="all" />
        <link href="../static/css/style_grid.css" rel="stylesheet" type="text/css" media="all" />
        <link href="../static/css/style.css" rel="stylesheet" type="text/css" media="all" />
        <!-- font-awesome-icons -->
        <link href="../static/css/font-awesome.css" rel="stylesheet"> 
        <!-- //font-awesome-icons -->
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
    <script type="text/javascript" src="../static/js/jquery-2.1.4.min.js"></script>
    <script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

<style media="print">
  .noPrint{ display: none; }
  #noPrint{ display: none; }
  two-axis{ display: block !important; }
</style>
    </head>
<body>       
   <div class="w3_agileits_top_nav" id="noPrint">
            <ul id="gn-menu" class="gn-menu-main">
                     <!-- /nav_agile_w3l -->
                <li class="gn-trigger">
                    <a class="gn-icon gn-icon-menu"><i class="fa fa-bars" aria-hidden="true"></i><span>Menu</span></a>
                    <nav class="gn-menu-wrapper">
                        <div class="gn-scroller scrollbar1">
                            <ul class="gn-menu agile_menu_drop">
                                <li><a href="index.php"> <i class="fa fa-tachometer"></i> Dashboard</a></li>

                                
                            </ul>
                        </div><!-- /gn-scroller -->
                    </nav>
                </li>
                <!-- //nav_agile_w3l -->
                <li class="second logo"><h1><a href="index.php"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Kodi Rent Collectors </a></h1></li>
                    <li class="second admin-pic">
                       <ul class="top_dp_agile">
                                    <li class="dropdown profile_details_drop">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                            <div class="profile_img">   
                                                <span class="prfil-img"><img src="../static/images/a4.jpg" alt=""> </span> 
                                            </div>  
                                        </a>
                                        <ul class="dropdown-menu drp-mnu">
                                            <li> <a href="#"><i class="fa fa-user"></i> <?php echo $_SESSION['id_no']; ?></a> </li>
                                            <li> <a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a> </li>
                                        </ul>
                                    </li>
                                    
                        </ul>
                </li>
                <li class="second top_bell_nav">
                   <ul class="top_dp_agile ">
                                    <li class="dropdown head-dpdn">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true"><i class="fa fa-bell-o" aria-hidden="true"></i> <span class="badge blue">4</span></a>
                                        <ul class="dropdown-menu">

                                        </ul>
                                    </li>
                                    
                        </ul>
                </li>
                <li class="second top_bell_nav">
                   <ul class="top_dp_agile ">
                                    <li class="dropdown head-dpdn">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true"><i class="fa fa-envelope-o" aria-hidden="true"></i> <span class="badge blue">3</span></a>
                                        <ul class="dropdown-menu">
                                    
                                        </ul>
                                    </li>
                                    
                        </ul>
                </li>
                <li class="second top_bell_nav">
                   <ul class="top_dp_agile ">
                       <li class="dropdown head-dpdn">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-tasks"></i><span class="badge blue">9</span></a>
                                        <ul class="dropdown-menu">
                                    
                                        </ul>
                                    </li>   
                                </ul>
                </li>

            <!-- //nav -->
            
        </div>




		<div class="clearfix"></div>
		<!-- //w3_agileits_top_nav-->
		
		<!-- /inner_content-->
				<div class="inner_content">
				    <!-- /inner_content_w3_agile_info-->

					<!-- breadcrumbs -->
						<div class="w3l_agileits_breadcrumbs">
							<div class="w3l_agileits_breadcrumbs_inner">
								<ul>
									<li id="noPrint"><a href="#">Home</a><span>«</span></li>
									
									<li id="noPrint">Dashboard</li>
								</ul>
							</div>
						</div>
					<!-- //breadcrumbs -->

<div class="inner_content_w3_agile_info two_in">
<h2 class="w3_inner_tittle">Tenant Dashboard</h2>
<!-- tables -->
        
<div class="agile-tables">
<div class="w3l-table-info agile_info_shadow">
<input type="text" id="myInput" placeholder="Search..." title="Type in  something" class="noPrint" >
<button type="button" class="btn btn-primary btn-flat btn-pri" onclick="window.print()" id="noPrint"><i class="fa fa-print" aria-hidden="true"></i> Print</button>

<table id="table-two-axis" class="two-axis">
<thead>
    <tr>
    
                        <th>Sr No</th>
                        <th>My ID</th>
                        <th>Ammount Due</th>
                        <th>Period</th>
                        <th>Cleared</th>
                
    </tr>
</thead>
<tbody id="myTable">
        
<?php
                      $national_id = $_SESSION['id_no'];
                      $count = 1;
                      $sel_query = "SELECT * FROM rents  WHERE tenant = $national_id; ";
                      $result = mysqli_query($con, $sel_query);
                      confirm_query($result);
                      while ($row = mysqli_fetch_assoc($result)) { ?>

                      <tr>
                        
                        <td><?php echo $row["tenant"]; ?></td>
                        <td><?php echo $row["amount"]; ?></td>
                        <td><?php echo $row["period"]; ?></td>
                        <td><?php echo $row["cleared"]; ?></td>
                
                      </tr>
                       <?php $count++;
                    } ?>
                </tr>
            </tbody>
            </table>


        </div>
</div>
<!-- //tables -->

</div>
<!-- //inner_content_w3_agile_info-->
</div>
<!-- //inner_content-->
<!--copy rights start here-->
<div class="copyrights">
	 <p>© 2019-<?php echo date("Y"); ?> Kodi Rent Collectors. All Rights Reserved </p>
</div>	
<!--copy rights end here-->
<!-- js -->

<script type="text/javascript" src="../static/js/jquery-2.1.4.min.js"></script>
<script src="../static/js/modernizr.custom.js"></script>

<script src="../static/js/classie.js"></script>
<script src="../static/js/gnmenu.js"></script>
<script>
new gnMenu( document.getElementById( 'gn-menu' ) );
</script>
<!-- tables -->

<script type="text/javascript" src="../static/js/jquery.basictable.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
$('#table').basictable();

$('#table-breakpoint').basictable({
breakpoint: 768
});

$('#table-swap-axis').basictable({
swapAxis: true
});

$('#table-force-off').basictable({
forceResponsive: false
});

$('#table-no-resize').basictable({
noResize: true
});

$('#table-two-axis').basictable();

$('#table-max-height').basictable({
tableWrapper: true
});
});
</script>
<!-- //js -->
<script src="js/screenfull.js"></script>
<script>
$(function () {
$('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

if (!screenfull.enabled) {
return false;
}



$('#toggle').click(function () {
screenfull.toggle($('#container')[0]);
});	
});
</script>
<script src="../static/js/jquery.nicescroll.js"></script>
<script src="../static/js/scripts.js"></script>

<script type="text/javascript" src="../static/js/bootstrap-3.1.1.min.js"></script>


</body>
</html>