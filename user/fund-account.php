<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');

if (strlen($_SESSION['sturecmsstuid']==0)) {
  header('location:logout.php');
  } else{
if(isset($_POST['submit']))
{
$sid=$_SESSION['sturecmsstuid'];
$username=$_POST['username'];
$fund=$_POST['amount'];
$currency = $_POST['currency'];
$sql="insert into deposit(Username,Fund,Currency)values(:username,:amount,:currency)";
// $sql ="INSERT INTO `deposit` (`Username`, `Fund`, `Currency`) VALUES ('$username','$fund','$currency')";
$query= $dbh -> prepare($sql);
$query->bindParam(':username',$username,PDO::PARAM_STR);
$query->bindParam(':amount',$fund,PDO::PARAM_STR);
$query->bindParam(':currency',$currency,PDO::PARAM_STR);
 $query->execute();
   $LastInsertId=$dbh->lastInsertId();
   if ($LastInsertId>0) {
    echo '<script>alert("Your account has been funded successful!")</script>';
// echo "<script>window.location.href ='add-class.php'</script>";
  }
  else
    {
         echo '<script>alert("Something Went Wrong. Please try again")</script>';
    }

// if($query = true)
// {
// echo '<script>alert("Your account has been funded successful!")</script>';
// } else {
// echo '<script>alert("Account not successfully funded!")</script>';

// }
}
  ?>
<!DOCTYPE html>
<html lang="en">
  <head>
   
    <title>Fund Account</title>
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" />



    
    <!-- <script type="text/javascript">
function checkpass()
{
if(document.changepassword.newpassword.value!=document.changepassword.confirmpassword.value)
{
alert('New Password and Confirm Password field does not match');
document.changepassword.confirmpassword.focus();
return false;
}
return true;
}   

</script> -->
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
     <?php include_once('includes/header.php');?>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
      <?php include_once('includes/sidebar.php');?>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">Fund Account</h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Fund Account</li>
                </ol>
              </nav>
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
          
              <div class="col-md-8 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <!-- <h4 class="card-title" style="text-align: center;">Fund Account</h4> -->
                   
                    <form class="forms-sample" name="" method="post">
                      
                      <div class="form-group">
                        <!-- <label for="exampleInputName1">Receiver Username</label> -->
                        <input type="hidden" name="username" id="" value="<?php echo $row->UserName; ?>" class="form-control" required="true">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Enter Amount</label>
                        <input type="number" name="amount" value="10.00"  class="form-control" required="true">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword4">Select Currency</label>
                        <select name="currency" id="" class="form-control" required="true">
                            <option value="">Select Currency</option>
                            <option value="Bitcoin">Bitcoin</option>
                            <option value="Ethereum">Ethereum</option>
                            <option value="USDT (erc20)">USDT (erc20)</option>
                        </select>
                        <!-- <input type="password" name="confirmpassword" id="confirmpassword" value=""  class="form-control" required="true"> -->
                      </div>
                      
                      <button type="submit" class="btn btn-danger mr-2" name="submit">Proceed to Payment</button>
                     
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php }} ?>
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
</html><?php }  ?>