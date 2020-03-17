<?php include '../includes/header.php'; ?>

<!-- banner -->
<div class="wthree_agile_admin_info">
		  <!-- /w3_agileits_top_nav-->
          <!-- /nav-->
          
            <!-- //nav -->
		<div class="clearfix"></div>
		<!-- //w3_agileits_top_nav-->
		
		<!-- /inner_content-->
				<div class="inner_content">
				    <!-- /inner_content_w3_agile_info-->

					<!-- breadcrumbs -->
						<div class="w3l_agileits_breadcrumbs">
							<div class="w3l_agileits_breadcrumbs_inner">
								<ul>
									<li><a href="index.php">Home</a><span>«</span></li>
									<li>Houses</li>
									
								</ul>
							</div>
						</div>
					<!-- //breadcrumbs -->

					<div class="inner_content_w3_agile_info two_in">
					  <h2 class="w3_inner_tittle">Add New House</h2>

							<!--/forms-->
<div class="forms-main_agileits">


<!--/forms-inner-->
<div class="forms-inner">

        <!--/set-2-->

    <div class="wthree_general graph-form agile_info_shadow ">
            <h3 class="w3_inner_tittle two">House Details </h3>

            <div class="grid-1 ">
                    <div class="form-body">
<?php 
$house_no = $location = $house_type = $bedrooms = "";
$parking = $vacant_rooms = $cleared = "";
$reg_date = $rent = $deposit= "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $house_no = $_POST["house_no"];
  $location = $_POST["location"];
  $house_type = $_POST["house_type"];
  $bedrooms  = $_POST["bedrooms"];
  $parking = $_POST["parking"];
  $vacant_rooms = $_POST["vacant_rooms"];
  $rent = $_POST['rent'];
  $deposit = $_POST['deposit'];

  $reg_date = date("Y-m-d");
  $user = $_SESSION['username'];

}

?>
<form class="form-horizontal" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">

    <div class="form-group">
        <label for="focusedinput" class="col-sm-2 control-label">House_no</label>
        <div class="col-sm-8">
            <input type="text" name="house_no" class="form-control1" id="focusedinput" placeholder="Eg A6k" required>
        </div>
    </div>

    <div class="form-group">￼	￼
        <label for="focusedinput" class="col-sm-2 control-label">Location</label>
        <div class="col-sm-8">
            <input type="text"  name="location" class="form-control1" id="focusedinput" placeholder="Eg Zimmerman" required>
        </div>

    </div>

    <div class="form-group">
        <label for="focusedinput" class="col-sm-2 control-label">House_type</label>
        <div class="col-sm-8">
            <input type="text" name="house_type" class="form-control1" id="focusedinput" placeholder="Eg self contained" required>
        </div>
    </div>

    <div class="form-group">
        <label for="focusedinput" class="col-sm-2 control-label">Bedrooms</label>
        <div class="col-sm-8">
            <input type="text" name="bedrooms" class="form-control1" id="focusedinput" placeholder="Eg 5" required>
        </div>

    </div>

    <div class="form-group">
        <label for="focusedinput" class="col-sm-2 control-label">Parking </label>
        <div class="col-sm-8">
            <input type="text" name="parking" class="form-control1" id="focusedinput" placeholder=" 0 or 1" required>
        </div>
        
    </div>

    <div class="form-group">
        <label for="focusedinput" class="col-sm-2 control-label">Vacant_rooms</label>
        <div class="col-sm-8">
            <input type="text" name="vacant_rooms" class="form-control1" id="focusedinput" placeholder="Eg 2" required>
        </div>
        <div class="col-sm-2">
            <p class="help-block">If Flatts</p>
        </div>
    </div>

     <div class="form-group">
        <label for="focusedinput" class="col-sm-2 control-label">Rent </label>
        <div class="col-sm-8">
            <input type="text" name="rent" class="form-control1" id="focusedinput" placeholder="Monthly Payble" required>
        </div>
        
    </div>

     <div class="form-group">
        <label for="focusedinput" class="col-sm-2 control-label">Deposit </label>
        <div class="col-sm-8">
            <input type="text" name="deposit" class="form-control1" id="focusedinput" placeholder="All inclusive water & Rent" required>
        </div>
        
    </div>      




    <button type="submit" class="btn btn-primary btn-flat btn-pri"><i class="fa fa-plus" aria-hidden="true"></i> Submit</button>

</form>
</div>

</div>
</div>
<?php 

if (isset($_POST["house_type"])) {

    $query = "INSERT INTO houses (house_no,location_,house_type,bedrooms,parking,vacant_rooms,rent,deposit,reg_date,added_by)

    VALUES ('{$house_no}','{$location}','{$house_type}','{$bedrooms}','{$parking}','{$vacant_rooms}','{$rent}','{$deposit}','{$reg_date}','{$user}')";

        $results = mysqli_query($con, $query);
        confirm_query($results);

        if ($results) {
            header("Location: manage_houses.php");
        }else {
        echo ' <div class="alert alert-danger alert-dismissable">
                <button type="button" class="close" data-dismiss="alert"
                aria-hidden="true">
                &times;
                </button>
                case addition failed.<a href="add_house.php">Try Again</a>
                </div>';
      }
      }
?>    

    
        <!--//set-2-->

        
</div>
<!--//forms-inner-->
</div> 
<!--//forms-->											   


</div>
<!-- //inner_content_w3_agile_info-->
				</div>
		<!-- //inner_content-->
	</div>
<!-- banner -->
<!--copy rights start here-->
<div class="copyrights">
	 <p>© 2020-<?php echo date("Y"); ?>Kodi Rent Collectors. All Rights Reserved </p>
</div>	
<!--copy rights end here-->
<!-- js -->

          <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
		  <script src="js/modernizr.custom.js"></script>
		
		   <script src="js/classie.js"></script>
		  <script src="js/gnmenu.js"></script>
		  <script>
			new gnMenu( document.getElementById( 'gn-menu' ) );
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
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>

<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>


    </body>
</html>