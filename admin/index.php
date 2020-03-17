<?php ob_start(); ?>
<?php include '../includes/db_connection.php'; ?>
<?php include '../includes/functions.php'; ?>
<?php include '../includes/auth.php'; ?>
<!DOCTYPE html>
<html lang="zxx">
<head>
<title>Kodi Admin</title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->
<link href="../static/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="../static/css/component.css" rel="stylesheet" type="text/css" media="all" />
<link href="../static/css/export.css" rel="stylesheet" type="text/css" media="all" />
<link href="../static/css/flipclock.css" rel="stylesheet" type="text/css" media="all" />
<link href="../static/css/style_grid.css" rel="stylesheet" type="text/css" media="all" />
<link href="../static/css/style.css" rel="stylesheet" type="text/css" media="all" />

<!-- font-awesome-icons -->
<link href="../static/css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome-icons -->
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
</head>
<body>
<!-- banner -->
<div class="wthree_agile_admin_info">
          <!-- /w3_agileits_top_nav-->
          <!-- /nav-->
          <div class="w3_agileits_top_nav">
            <ul id="gn-menu" class="gn-menu-main">
                     <!-- /nav_agile_w3l -->
                <li class="gn-trigger">
                    <a class="gn-icon gn-icon-menu"><i class="fa fa-bars" aria-hidden="true"></i><span>Menu</span></a>
                </li>
                <!-- //nav_agile_w3l -->
                <li class="second logo"><h1><a href="#"><i class="fa fa-graduation-cap" aria-hidden="true"></i>Kodi Rent Collectors </a></h1></li>
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
                                    </li>
                                    
                        </ul>
                </li>
                <li class="second top_bell_nav">
                   <ul class="top_dp_agile ">
                                    <li class="dropdown head-dpdn">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true"><i class="fa fa-envelope-o" aria-hidden="true"></i> <span class="badge blue">3</span></a>
                                        
                                    </li>
                                    
                        </ul>
                </li>
                <li class="second top_bell_nav">
                   <ul class="top_dp_agile ">
                       <li class="dropdown head-dpdn">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-tasks"></i><span class="badge blue">9</span></a>
                                        
                                    </li>   
                                </ul>
                </li>

                <li class="second w3l_search">
                 
                        <form action="#" method="post">
                            <input type="search" name="search" placeholder="Search here..." required="">
                            <button class="btn btn-default" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                        </form>
                    
                </li>
                <li class="second full-screen">
                    <section class="full-top">
                        <button id="toggle"><i class="fa fa-arrows-alt" aria-hidden="true"></i></button>    
                    </section>
                </li>

            </ul>
            <!-- //nav -->
            
        </div>
        <div class="clearfix"></div>
        <!-- //w3_agileits_top_nav-->
        <!-- /inner_content-->
                <div class="inner_content">
                    <!-- /inner_content_w3_agile_info-->
                    <div class="inner_content_w3_agile_info">
                    <!-- /agile_top_w3_grids-->
                       <div class="agile_top_w3_grids">
                              <ul class="ca-menu">
                                    <li>
                                        <a href="manage_tenants.php">
                                            
                                            <i class="fa fa-group" aria-hidden="true"></i>
                                            <div class="ca-content">
                                                <h4 class="ca-main">
                                                   <?php 
                                                    $query = "SELECT count(*) as total from tenants";
                                                    $result = mysqli_query($con, $query);
                                                    confirm_query($result);
                                                    $data = mysqli_fetch_assoc($result);
                                                    echo $data['total'];
                                                    ?>
                                                </h4>
                                                <h3 class="ca-sub one">Tenants</h3>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="manage_houses.php">
                                          <i class="fa fa-home" aria-hidden="true"></i>
                                            <div class="ca-content">
                                                <h4 class="ca-main one">
                                                       <?php 
                                                    $query = "SELECT count(*) as total from houses";
                                                    $result = mysqli_query($con, $query);
                                                    confirm_query($result);
                                                    $data = mysqli_fetch_assoc($result);
                                                    echo $data['total'];
                                                ?>           

                                                </h4>
                                                <h3 class="ca-sub">Houses</h3>

                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="manage_rents.php">
                                            <i class="fa fa-credit-card" aria-hidden="true"></i>
                                            <div class="ca-content">
                                            <h4 class="ca-main two">
                                            <?php 
                                                $query = "SELECT count(*) as total from admin";
                                                $result = mysqli_query($con, $query);
                                                confirm_query($result);
                                                $data = mysqli_fetch_assoc($result);
                                                echo $data['total'];
                                            ?>
                                            </h4>
                                                <h3 class="ca-sub two">Rents</h3>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="manage_payments.php">
                                            <i class="fa fa-money" aria-hidden="true"></i>
                                            <div class="ca-content">
                                                <h4 class="ca-main three">
                                                <?php 
                                                $query = "SELECT count(*) as total from payments";
                                                $result = mysqli_query($con, $query);
                                                confirm_query($result);
                                                $data = mysqli_fetch_assoc($result);
                                                echo $data['total'];
                                            ?></h4>
                                                <h3 class="ca-sub three">Payments</h3>
                                            </div>
                                        </a>
                                    </li>
                                        <!-- <li>
                                        <a href="#">
                                            <i class="fa fa-clone" aria-hidden="true"></i>
                                            <div class="ca-content">
                                                <h4 class="ca-main four">30,808</h4>
                                                <h3 class="ca-sub four">New Orders</h3>
                                            </div>
                                        </a>
                                    </li> -->
                                    <div class="clearfix"></div>
                                </ul>
                       </div>
                     <!-- //agile_top_w3_grids-->
                        <!-- /agile_top_w3_post_sections-->
                       
                                
                                
                                 <div class="col-md-6 bars_agileits agile_info_shadow">
                                   <h3 class="w3_inner_tittle two">Daily Sales</h3>
                                        <div class='bar_group'>
                                                <div class='bar_group__bar thin' label='Ratings' show_values='true' tooltip='true' value='440'></div>
                                                <div class='bar_group__bar thin' label='New Tenants' show_values='true' tooltip='true' value='235'></div>
                                                <div class='bar_group__bar thin' label='New Houses' show_values='true' tooltip='true' value='500'></div>
                                                <div class='bar_group__bar thin' label='New Payments' show_values='true' tooltip='true' value='456'></div>
                                        </div>
                                </div>
                                <div class="col-md-6 fallowers_agile agile_info_shadow">
                                    <h3 class="w3_inner_tittle two">Recent Payments</h3>
                                                <div class="work-progres">
                                                    <div class="table-responsive">
                                                        <table class="table table-hover">
                                                          <thead>
                                                            <tr>
                                                              <th>#</th>
                                                              <th>Tenant</th>
                                                              <th>Amount</th>                                    
                                                               <th>Period</th>                                                                                              
                                                              
                                                          </tr>
                                                      </thead>
                                                      <tbody>
                                                      <?php
                                                            $count = 1;
                                                            $sel_query = "SELECT * FROM payments ORDER BY id Asc; ";
                                                            $result = mysqli_query($con, $sel_query);
                                                            confirm_query($result);
                                                            while ($row = mysqli_fetch_assoc($result)) { ?>
                                                        <tr>
                                                        <td><?php echo $count; ?></td>
                                                          <td><?php echo $row["id_no"]; ?></td>
                                                          <td><?php echo $row["amount"]; ?></td>                                 
                                                                                     
                                                          <td><span><?php echo $row["period"]; ?></span></td>
                                                         
                                                          <!-- <td><span class="badge badge-info">50%</span></td> -->
                                                      </tr>
                                                      <?php $count++;
                                                                    } ?>
                                                     
                                                  </tbody>
                                              </table>
                                            </div>
                                        </div>                                          
                                </div>
                                     <div class="clearfix"></div>
                            </div>
						<!-- /weather_w3_agile_info-->
						<div class="weather_w3_agile_info agile_info_shadow">
						  <div class="weather_w3_inner_info">
						      
							     <div class="over_lay_agile">
								  <h3 class="w3_inner_tittle">Weather Report</h3>
						       	  <ul>
									<li>
										<figure class="icons">
											<canvas id="partly-cloudy-day" width="60" height="60"></canvas>
										</figure>
										<h3>25 °C</h3>
										<div class="clearfix"></div>
									</li>
									<li>
										<figure class="icons">
											<canvas id="clear-day" width="60" height="60"></canvas>
										</figure>
										<div class="weather-text">
											<h4>WED</h4>
											<h5>27 °C</h5>
										</div>
										<div class="clearfix"></div>
									</li>
									<li>
										<figure class="icons">
											<canvas id="snow" width="60" height="60"></canvas>
										</figure>
										<div class="weather-text">
											<h4>THU</h4>
											<h5>13 °C</h5>
										</div>
										<div class="clearfix"></div>
									</li>
									<li>
										<figure class="icons">
											<canvas id="partly-cloudy-night" width="60" height="60"></canvas>
										</figure>
										<div class="weather-text">
											<h4>FRI</h4>
											<h5>18 °C</h5>
										</div>
										<div class="clearfix"></div>
									</li>
									<li>
										<figure class="icons">
											<canvas id="cloudy" width="60" height="60"></canvas>
										</figure>
										<div class="weather-text">
											<h4>SAT</h4>
											<h5>15 °C</h5>
										</div>
										<div class="clearfix"></div>
									</li>
									<li>
										<figure class="icons">
											<canvas id="fog" width="60" height="60"></canvas>
										</figure>
										<div class="weather-text">
											<h4>SUN</h4>
											<h5>11 °C</h5>
										</div>
										<div class="clearfix"></div>
									</li>
								</ul>
								</div>
							</div>	
						</div>
						<!-- //weather_w3_agile_info-->


                        
                    </div>
                    <!-- //inner_content_w3_agile_info-->
                </div>
        <!-- //inner_content-->
    </div>
<!-- banner -->
<!--copy rights start here-->
<div class="copyrights">
     <p>© 2019-<?php echo date("Y"); ?> Kodi Rent Collectors. All Rights Reserved </p>
</div>  
<!--copy rights end here-->
<!-- js -->

<script type="text/javascript" src="../static/js/jquery-2.1.4.min.js"></script>

    <!-- /amcharts -->
                <script src="../static/js/amcharts.js"></script>
               <script src="../static/js/serial.js"></script>
                <script src="../static/js/export.js"></script>    
                <script src="../static/js/light.js"></script>



    <!-- //amcharts -->
        <script src="../static/js/chart1.js"></script>
                <script src="../static/js/Chart.min.js"></script>
        <script src="../static/js/modernizr.custom.js"></script>
        
        <script src="../static/js/classie.js"></script>
        <script src="../static/js/gnmenu.js"></script>
        <script>
            new gnMenu( document.getElementById( 'gn-menu' ) );
        </script>
            <!-- script-for-menu -->

    <!--skycons-icons-->
<script src="../static/js/skycons.js"></script>
<script>
                                     var icons = new Skycons({"color": "#fcb216"}),
                                          list  = [
                                            "partly-cloudy-day"
                                          ],
                                          i;

                                      for(i = list.length; i--; )
                                        icons.set(list[i], list[i]);
                                      icons.play();
                                </script>
                                <script>
                                     var icons = new Skycons({"color": "#fff"}),
                                          list  = [
                                            "clear-night","partly-cloudy-night", "cloudy", "clear-day", "sleet", "snow", "wind","fog"
                                          ],
                                          i;

                                      for(i = list.length; i--; )
                                        icons.set(list[i], list[i]);
                                      icons.play();
                                </script>
<!--//skycons-icons-->
<!-- //js -->
<script src="../static/js/screenfull.js"></script>
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
        <script src="../static/js/flipclock.js"></script>
    
    <script type="text/javascript">
        var clock;
        
        $(document).ready(function() {
            
            clock = $('.clock').FlipClock({
                clockFace: 'HourlyCounter'
            });
        });
    </script>
<script src="../static/js/bars.js"></script>
<script src="../static/js/jquery.nicescroll.js"></script>
<script src="../static/js/scripts.js"></script>

<script type="text/javascript" src="../static/js/bootstrap-3.1.1.min.js"></script>


</body>
</html>