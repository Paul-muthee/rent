<?php ob_start(); ?>
<?php include 'db_connection.php'; ?>
<?php include 'functions.php'; ?>
<?php include 'auth.php'; ?>

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
                                <li><a href="manage_houses.php"> <i class="fa fa-home">Houses</i> </a></li>
                                <li><a href="manage_Tenants.php"> <i class="fa fa-users"></i> Tenants</a></li>
                                <li><a href="manage_payments.php"> <i class="fa fa-money"></i> Payments</a></li>
                                <li><a href="manage_rents.php"> <i class="fa fa-credit-card"></i> Rents</a></li>
                                
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
                                                <span class="prfil-img"><img src="../static/images/admin.jpg" alt=""> </span> 
                                            </div>  
                                        </a>
                                        <ul class="dropdown-menu drp-mnu">
                                            <li> <a href="#"><i class="fa fa-user"></i> <?php echo $_SESSION['username']; ?></a> </li>
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

