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
									<li>Users</li>
									
								</ul>
							</div>
						</div>
					<!-- //breadcrumbs -->

					<div class="inner_content_w3_agile_info two_in">
					  <h2 class="w3_inner_tittle">Add New User</h2>

							<!--/forms-->
<div class="forms-main_agileits">


<!--/forms-inner-->
<div class="forms-inner">

        <!--/set-2-->

    <div class="wthree_general graph-form agile_info_shadow ">
            <h3 class="w3_inner_tittle two">User Details </h3>

            <div class="grid-1 ">
                    <div class="form-body">
<?php 

$user_id = $_REQUEST['id'];
$sel_query = "SELECT * FROM users  WHERE user_id = '{$user_id}'; ";
$result_1 = mysqli_query($con, $sel_query);
confirm_query($result_1);
$row = mysqli_fetch_assoc($result_1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = test_input($_POST["username"]);
  $password = test_input($_POST["password"]);
  $mail     = test_input($_POST["email"]);
  $agent    = $_SESSION['username'];
  $new_id   = $_POST["user_id"];
}

?>
<form class="form-horizontal" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
<input type="hidden" name="user_id" value="<?php echo $row["user_id"]; ?>">

    <div class="form-group">
        <label for="focusedinput" class="col-sm-2 control-label">Username</label>
        <div class="col-sm-8">
            <input type="text" name="username" class="form-control1" id="focusedinput" value="<?php echo $row["username"]; ?>" required>
        </div>
    </div>

    <div class="form-group">
        <label for="focusedinput" class="col-sm-2 control-label">Email </label>
        <div class="col-sm-8">
            <input type="text" name="email" class="form-control1" id="focusedinput" value="<?php echo $row["email"]; ?>" required>
        </div>
        <div class="col-sm-2">
            <p class="help-block">All lower case</p>
        </div>
    </div>


    <div class="form-group">
        <label for="focusedinput" class="col-sm-2 control-label">Password </label>
        <div class="col-sm-8">
            <input type="password" name="password" class="form-control1" id="focusedinput"  required>
        </div>
        <div class="col-sm-2">
            <p class="help-block">can be changed later</p>
        </div>
    </div>

    <button type="submit" class="btn btn-primary btn-flat btn-pri"><i class="fa fa-plus" aria-hidden="true"></i> Submit</button>




</form>
</div>

</div>
</div>
 

<?php 
if (isset($_POST["username"])) {
  $query = "UPDATE users SET username = '{$username}', email='{$mail}',
    agent = '{$agent}', password_ = '{".md5($password)."}' WHERE user_id = '{$new_id }' ";
  
  $results = mysqli_query($con, $query);
  confirm_query($results);
  
  if ($results) {
      // Redirect user to manage users page on success edit
             header("Location: manage_users.php");                    
   
  }else {
      echo' <div class="alert alert-danger alert-dismissable">
                <button type="button" class="close" data-dismiss="alert"
                aria-hidden="true">
                &times;
                </button>
                User details editing failed.<a href="manage_users.php">Try Again</a>
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
	 <p>© 2018-<?php echo date("Y"); ?>Car Garage. All Rights Reserved </p>
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