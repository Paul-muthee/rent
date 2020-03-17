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
$name = $password = $admin = $email = "";
 $date= "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $password = test_input($_POST["password"]);
  $email = test_input($_POST["email"]);
  $date = date("Y-m-d");
  $admin = $_SESSION['email'];
}

?>
<form class="form-horizontal" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">

    <div class="form-group">
        <label for="focusedinput" class="col-sm-2 control-label">Name</label>
        <div class="col-sm-8">
            <input type="text" name="name" class="form-control1" id="focusedinput" placeholder="Eg Anthony" required>
        </div>
    </div>

    <div class="form-group">
        <label for="focusedinput" class="col-sm-2 control-label">Email </label>
        <div class="col-sm-8">
            <input type="text" name="email" class="form-control1" id="focusedinput" placeholder="Eg antonnifo@live.com" required>
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

if (isset($_POST["name"])) {

    $query = "INSERT INTO admin (username,email,password_,date_,admin_)

    VALUES ('{$name}','{$email}', '{".md5($password)."}', '{$date}', '{$admin}')";

        $results = mysqli_query($con, $query);
        confirm_query($results);

        if ($results) {
          header("Location: manage_users.php");
            
        }else {
        echo ' <div class="alert alert-danger alert-dismissable">
                <button type="button" class="close" data-dismiss="alert"
                aria-hidden="true">
                &times;
                </button>
                User addition failed.<a href="add_user.php">Try Again</a>
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
	 <p>© 2018-<?php echo date("Y"); ?>Kibera Law Courts. All Rights Reserved </p>
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