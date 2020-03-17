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
                                    <li>Payments</li>
                                    
                                </ul>
                            </div>
                        </div>
                    <!-- //breadcrumbs -->

                    <div class="inner_content_w3_agile_info two_in">
                      <h2 class="w3_inner_tittle">Record New Payment</h2>

                            <!--/forms-->
<div class="forms-main_agileits">


<!--/forms-inner-->
<div class="forms-inner">

        <!--/set-2-->

    <div class="wthree_general graph-form agile_info_shadow ">
            <h3 class="w3_inner_tittle two">Payment Details </h3>

            <div class="grid-1 ">
                    <div class="form-body">
<?php 
$amount = $id_no = $purpose = $period = "";
$mode = $code = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $amount = $_POST["amount"];
  $id_no = $_POST["id_no"];
  $purpose = $_POST["purpose"];
  $period  = $_POST["period"];
  $mode = $_POST["mode"];
  $code = $_POST["code"];

  $reg_date = date("Y-m-d");
  $user = $_SESSION['username'];

}

?>
<form class="form-horizontal" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">

    <div class="form-group">
        <label for="focusedinput" class="col-sm-2 control-label">Amount</label>
        <div class="col-sm-8">
            <input type="text" name="amount" class="form-control1" id="focusedinput" placeholder="Eg 82932" required>
        </div>
    </div>

    <div class="form-group">￼   ￼
        <label for="focusedinput" class="col-sm-2 control-label">National ID No.</label>
        <div class="col-sm-8">
            <input type="text"  name="id_no" class="form-control1" id="focusedinput" placeholder="Eg 9247292" required>
        </div>

    </div>

    <div class="form-group">
        <label for="focusedinput" class="col-sm-2 control-label">Purpose</label>
        <div class="col-sm-8">
            <input type="text" name="purpose" class="form-control1" id="focusedinput" placeholder="Eg rent/deposit" required>
        </div>
    </div>

    <div class="form-group">
        <label for="focusedinput" class="col-sm-2 control-label">Period</label>
        <div class="col-sm-8">
            <input type="text" name="period" class="form-control1" id="focusedinput" placeholder="Eg JAN/2020" required>
        </div>

    </div>

    <div class="form-group">
        <label for="focusedinput" class="col-sm-2 control-label">Mode </label>
        <div class="col-sm-8">
            <input type="text" name="mode" class="form-control1" id="focusedinput" placeholder=" Mpesa or Cash" required>
        </div>
        
    </div>

    <div class="form-group">
        <label for="focusedinput" class="col-sm-2 control-label">Code</label>
        <div class="col-sm-8">
            <input type="text" name="code" class="form-control1" id="focusedinput" placeholder="Eg OAEXWAKO346" required>
        </div>
        <div class="col-sm-2">
            <p class="help-block">Mpesa code</p>
        </div>
    </div>     




    <button type="submit" class="btn btn-primary btn-flat btn-pri"><i class="fa fa-plus" aria-hidden="true"></i> Submit</button>

</form>
</div>

</div>
</div>
<?php 

if (isset($_POST["period"])) {

    $query = "INSERT INTO payments (amount,id_no,purpose,period,mode,code,date,added_by)

    VALUES ('{$amount}','{$id_no}','{$purpose}','{$period}','{$mode}','{$code}','{$reg_date}','{$user}')";

        $results = mysqli_query($con, $query);
        confirm_query($results);

        if ($results) {
            header("Location: manage_payments.php");
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
     <p>© 2020-<?php echo date("Y"); ?> Kodi Rent Collectors. All Rights Reserved </p>
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