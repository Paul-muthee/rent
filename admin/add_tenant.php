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
                                    <li>Tenant</li>
                                    
                                </ul>
                            </div>
                        </div>
                    <!-- //breadcrumbs -->

                    <div class="inner_content_w3_agile_info two_in">
                      <h2 class="w3_inner_tittle">Add New Tenant</h2>

                            <!--/forms-->
<div class="forms-main_agileits">


<!--/forms-inner-->
<div class="forms-inner">

        <!--/set-2-->

    <div class="wthree_general graph-form agile_info_shadow ">
            <h3 class="w3_inner_tittle two">Tenant Details </h3>

            <div class="grid-1 ">
                    <div class="form-body">
<?php 
$name = $password = $admin = $email = $phone = "";
 $date= $national_id="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $national_id = test_input($_POST["national_id"]);
  $house_no = test_input($_POST["house_no"]);
  $password = test_input($_POST["password"]);
  $email = test_input($_POST["email"]);
  $phone = test_input($_POST["phone"]);
  $admin = $_SESSION['username'];
  $l_date = 0;
  $date = date("Y-m-d");
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
        <label for="focusedinput" class="col-sm-2 control-label">National/Passport ID No</label>
        <div class="col-sm-8">
            <input type="text" name="national_id" class="form-control1" id="focusedinput" placeholder="Eg 224245" required>
        </div>
    </div>

    <div class="form-group">
        <label for="focusedinput" class="col-sm-2 control-label">Phone</label>
        <div class="col-sm-8">
            <input type="text" name="phone" class="form-control1" id="focusedinput" placeholder="Eg 0707393933" required>
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

        <div class="form-group">
        <label for="focusedinput" class="col-sm-2 control-label">House No </label>
        <div class="col-sm-8">
            <input type="text" name="house_no" class="form-control1" id="focusedinput"  required>
        </div>
        <div class="col-sm-2">
            <p class="help-block">Confirm with  Houses data</p>
        </div>
    </div>

    <button type="submit" class="btn btn-primary btn-flat btn-pri"><i class="fa fa-plus" aria-hidden="true"></i> Submit</button>

</form>
</div>

</div>
</div>
<?php 

if (isset($_POST["name"])) {

    $query = "INSERT INTO tenants (name_,email_,password,id_no, phone,admin_,join_date,leave_date,house_no)

    VALUES ('{$name}','{$email}', '{".md5($password)."}', '{$national_id}', '{$phone}','{$admin}','{$date}','{$l_date}','{$house_no}')";

        $results = mysqli_query($con, $query);
        confirm_query($results);

        if ($results) {
          header("Location: manage_tenants.php");
            
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