<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');

if (strlen($_SESSION['sturecmsstuid']==0)) {
  header('location:logout.php');
  } else{

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Refer User</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="vendors/select2/select2.min.css">
    <link rel="stylesheet" href="vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
    <!-- <link rel="stylesheet" href="bootstrap.min.css"> -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="https://quantfundmarket.org/dash/js/plugin/sweetalert/sweetalert.min.js"></script>
</head>
<body>
<div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
     <?php include_once('includes/header.php');?>
      <!-- partial -->
      <div class="page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
      <?php include_once('includes/sidebar.php');?>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">Refer User</h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Refer User</li>
                </ol>
              </nav>
            </div>
            <div class="row">
          
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title" style="text-align: center;">Referals</h4>
                   <!-- START -->
                   <div class="bg-light">
            <div class="content bg-light">
                <div class="page-inner">
                    <!-- <div class="mt-2 mb-4">
                        <h1 class="title1 text-dark">Refer users to quantfundmarket.org community</h1>
                    </div> -->
                    <div>
    </div>					<div>
    </div>                    

    <?php
        $sid=$_SESSION['sturecmsstuid'];
        $sql = "SELECT * FROM tblstudent WHERE StuID='$sid'";
        $query = $dbh -> prepare($sql);
        $query->execute();
        $results=$query->fetchAll(PDO::FETCH_OBJ);
        if($query->rowCount() > 0){
            foreach($results as $row){
    ?>
                    <div class="row">
                        <div class="col-md-12 text-center card bg-light shadow-lg p-3 text-dark">
                            <div class="p-4 row">
                                <div class="col-md-8 offset-md-2">
                                    <strong>You can refer users by sharing your referral link:</strong><br>
                                    <div class="mb-3 input-group">
                                        <input type="text" class="form-control myInput readonly text-dark bg-light" value="https://quantfundmarket.com/<?php echo $row->UserName; ?>" id="myInput" readonly>
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-secondary" onclick="myFunction()" type="button" id="button-addon2"><i class="fa fa-copy"></i></button>
                                        </div>
                                    </div>
    
                                    <strong>or your Referral ID</strong><br>
                                    <h4 style="color:green;"><?php echo $row->UserName; ?></h4> <br>
                                    <h3 class="title1">
                                        <small>You were referred by</small><br>
                                        <i class="fa fa-user fa-2x"></i><br>
                                        <small>Null</small>
                                    </h3>
                                </div>

 <div class="mt-4 col-md-12">
                                    <h2 class="title1 text-dark text-left">Your Statistics.</h2>
                                    <div class="table-responsive"> 
                                        <table class="table UserTable table-hover text-dark text-left"> 

<tr>
  <td class=item>Referrals:</td>
  <td class=item>0</td>
</tr><tr>
  <td class=item>Active referrals:</td>
  <td class=item>0</td>
</tr><tr>
  <td class=item>Total referral commission:</td>
  <td class=item>$0.00</td>
</tr>
</table>
<br>
<?php }} ?>

</div></div>

</div>
                        </div>
                    </div>
                </div>
            </div>
            <script>
				function myFunction() {
					/* Get the text field */
					var copyText = document.getElementById("myInput");
					/* Select the text field */
					copyText.select();
					copyText.setSelectionRange(0, 99999); /* For mobile devices */
					/* Copy the text inside the text field */
					document.execCommand("copy");
					/* Alert the copied text */
					//alert("Copied the text: " + copyText.value);
					swal("Copied", copyText.value, "success");
					}
			</script>
                   <!-- END -->
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
         <?php include_once('includes/footer.php');?>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
                 


    				<!--   Core JS Files   -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		
		<script src="../../js/popper.min.js"></script>
		<script src="../../js/bootstrap.min.js "></script>
		<script src="../../js/customs.js"></script>
		
		<!-- jQuery UI -->
		<script src="https://quantfundmarket.org/dash/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
		<script src="../../js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

		<!-- jQuery Scrollbar -->
		<script src="https://quantfundmarket.org/dash/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>

		<!-- jQuery Sparkline -->
		<script src="https://quantfundmarket.org/dash/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

		<!-- Sweet Alert -->
		<script src="https://quantfundmarket.org/dash/js/plugin/sweetalert/sweetalert.min.js"></script>
		<!-- Bootstrap Notify -->
		<script src="../../js/plugin/bootstrap-notify/bootstrap-notify.min.js "></script>
		
		<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.21/af-2.3.5/b-1.6.3/b-flash-1.6.3/b-html5-1.6.3/b-print-1.6.3/r-2.2.5/datatables.min.js"></script>

		<script src="https://quantfundmarket.org/dash/js/atlantis.min.js"></script>
		<script src="https://quantfundmarket.org/dash/js/atlantis.js"></script>

		<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
		
		<script type="text/javascript">
			function googleTranslateElementInit() {
			new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
			}
		</script>


    <!-- plugins:js -->
    <script src="vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="vendors/select2/select2.min.js"></script>
    <script src="vendors/typeahead.js/typeahead.bundle.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="js/off-canvas.js"></script>
    <script src="js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="js/typeahead.js"></script>
    <script src="js/select2.js"></script>
    <!-- End custom js for this page -->

</body>
</html>
<?php } ?>