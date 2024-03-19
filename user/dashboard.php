

<?php
session_start();
//error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['sturecmsstuid']==0)) {
  header('location:logout.php');
  } else{
   
  ?>
<!DOCTYPE html>
<html lang="en">
  <head>
   
    <title>User Account Dashboard</title>

    <!-- <link rel="shortcut icon" type="image/jpg" href="../../static/assets/images/etf-logo-round.html" /> -->
    <link href="../../images/favicon.png" rel="shortcut icon" type="image/x-icon" />
    <link href="../../images/favicon.png" rel="apple-touch-icon" />
    <!-- plugins:css -->
    <link rel="stylesheet" href="vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="./vendors/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="./vendors/chartist/chartist.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="bootstrap.min.css">
    <!-- End layout styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
     <?php include_once('includes/header.php');?>
      <!-- partial -->
      <div class=" page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <?php include_once('includes/sidebar.php');?>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
          <h5 class="mb-3 font-weight-medium d-none d-lg-flex">Welcome, <?php  echo htmlentities($row->StudentName);?>!</h5>

            <div>
                
            </div>   
            
            <div class="row mb-5">
                                <div class="col-sm-6 col-lg-3 mb-3">
                                    <div class="p-3 card bg-light shadow">
                                        <div class="d-flex align-items-center">
                                            <span style="border-radius: 5px;" class="mr-3 stamp stamp-md bg-secondary">
                                                <i class="p-3 fa fa-dollar"></i>
                                            </span>
                                            <div>
                                                <h5 class="mb-1 text-dark d-inlne"><b>$<?php  echo htmlentities($row->Fund);?>.00</b></h5>
                                                <small class="text-muted">Account Balance</small> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-3 mb-3">
                                    <div class="p-3 card bg-light shadow">
                                        <div class="d-flex align-items-center">
                                            <span style="border-radius: 5px;" class="mr-3 stamp stamp-md bg-success">
                                                <i class="p-3 fa fa-money"></i>
                                            </span>
                                            <div>
                                                <h5 class="mb-1 text-dark"><b>$0.00</b></h5>
                                                <small class="text-muted text-dark">Total Profit</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-3 mb-3">
                                    <div class="p-3 card bg-light shadow">
                                        <div class="d-flex align-items-center">
                                            <span style="border-radius: 5px;" class="mr-3 stamp stamp-md bg-secondary">
                                                <i class="p-3 fa fa-gift"></i>
                                            </span>
                                            <div>
                                                <h5 class="mb-1 text-dark"><b>$<?php  echo (15/100 * htmlentities($row->Fund));?>.00</b></h5>
                                                <small class="text-muted text-dark">Total Bonus</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-3 mb-3">
                                    <div class="p-3 card bg-light shadow">
                                        <div class="d-flex align-items-center">
                                            <span style="border-radius: 5px;" class="mr-3 stamp stamp-md bg-info">
                                                <i class="p-3 fa fa-retweet"></i>
                                            </span>
                                            <div>
                                                <h5 class="mb-1 text-dark"><b>$</b></h5>
                                                <small class="text-muted text-dark">Total Referral Bonus</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-3 mb-3">
                                    <div class="p-3 card bg-light shadow">
                                        <div class="d-flex align-items-center">
                                            <span style="border-radius: 5px;" class="mr-3 stamp stamp-md bg-danger">
                                                <i class="p-3 fa fa-envelope"></i>
                                            </span>
                                            <div>
                                                <h5 class="mb-1 text-dark"><b>$<?php  echo htmlentities($row->Fund);?>.00</b></h5>
                                                <small class="text-muted text-dark">Total Investment</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-3 mb-3">
                                    <div class="p-3 card bg-light shadow">
                                        <div class="d-flex align-items-center">
                                            <span style="border-radius: 5px;" class="mr-3 stamp stamp-md bg-success">
                                                <i class="p-3 fa fa-envelope-open"></i>
                                            </span>
                                            <div>
                                                <h5 class="mb-1 text-dark"><b>$<?php  echo htmlentities($row->Fund);?>.00</b></h5>
                                                <small class="text-muted text-dark">Active Investment</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-3 mb-3">
                                    <div class="p-3 card bg-light shadow">
                                        <div class="d-flex align-items-center">
                                            <span style="border-radius: 5px;" class="mr-3 stamp stamp-md bg-warning">
                                                <i class="p-3 fa fa-download"></i>
                                            </span>
                                            <div>
                                                                                                                                        <h5 class="mb-1 text-dark">$0.00</h5> 
                                                                                                                                    <small class="text-muted text-dark">Pending Withdrawals</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-3 mb-3">
                                    <div class="p-3 card bg-light shadow">
                                        <div class="d-flex align-items-center">
                                            <span style="border-radius: 5px;" class="mr-3 stamp stamp-md bg-danger">
                                                <i class="p-3 fa fa-dollar"></i>
                                            </span>
                                            <div>
                                                                                                                                        <h5 class="mb-1 text-dark">$0.00</h5> 
                                                                                                                                    
                                                <small class="text-muted text-dark">Total Withdrawals</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

            <div class="row purchace-popup">
            <div class="col-12 stretch-card grid-margin">
                <div class="card card-secondary">
                <?php
$sid=$_SESSION['sturecmsstuid'];
$sql="SELECT tblstudent.StudentName,tblstudent.StudentEmail,tblstudent.StudentClass,tblstudent.Gender,tblstudent.DOB,tblstudent.StuID,tblstudent.FatherName,tblstudent.MotherName,tblstudent.ContactNumber,tblstudent.AltenateNumber,tblstudent.Address,tblstudent.UserName,tblstudent.Password,tblstudent.Image,tblstudent.DateofAdmission,deposit.Username,deposit.Fund from tblstudent join deposit on deposit.ID=tblstudent.StudentClass where tblstudent.StuID=:sid";
$query = $dbh -> prepare($sql);
$query->bindParam(':sid',$sid,PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row)
{               ?>
                  <!-- <span class="row card-body d-lg-flex align-items-center">
                  <span class="col-3"><img class="img-xs rounded-circle ml-2" src="../admin/images/<?php echo $row->Image;?>" style="height: 14rem; width: 14rem" alt="Profile image"></span> 
                  <div class="col-9 text-left">
                    <span class="ml-5 font-weight-bold display-4" style="color: #dc3545;"> <?php  echo htmlentities($row->StudentName);?> </span> <br><br>
                    <span class="ml-5 font-weight-bold display-7"> <?php  echo htmlentities($row->Username);?> <?php  echo htmlentities($row->Fund);?> </span>
                  </div>
                  </span> -->
                  <?php $cnt=$cnt+1;}} ?>
                </div>
              </div>

              <!-- <div class="col-12 stretch-card grid-margin">
                <div class="card card-secondary">
                  <span class="card-body d-lg-flex align-items-center">
                    <p class="mb-lg-0">Notices from <b>Quant Fund Market</b>, kindly check! </p>
                    <a href="view-notice.php" target="_blank" class="btn btn-warning purchase-button btn-sm my-1 my-sm-0 ml-auto" style="background-color: #dc3545;">View Notice</a>
                  
                  </span>
                </div>
              </div> -->
            </div>
          </div>


          <div class="row card-body d-lg-flex align-items-center">
                        <div class="pt-1 col-12">
                        <h3>Personal Trading Chart</h3>
                        <div class="tradingview-widget-container" style="margin:30px 0px 10px 0px;">
  <div id="tradingview_f933e"></div>
  <div class="tradingview-widget-copyright"><a href="#" rel="noopener" target="_blank"><span class="blue-text"></span> <span class="blue-text">Personal trading chart</span></a></div>
  <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
  
  <script type="text/javascript">
  new TradingView.widget(
  {
  "width": "100%",
  "height": "550",
  "symbol": "COINBASE:BTCUSD",
  "interval": "1",
  "timezone": "Etc/UTC",
  "theme": 'light',
  "style": "9",
  "locale": "en",
  "toolbar_bg": "#f1f3f6",
  "enable_publishing": false,
  "hide_side_toolbar": false,
  "allow_symbol_change": true,
  "calendar": false,
  "studies": [
    "BB@tv-basicstudies"
  ],
  "container_id": "tradingview_f933e"
}
  );
  </script>
  
</div>                   
</div>


<div class="white-box" style="height: 450px; width:100%; margin-top: 4rem; margin-bottom: 4rem;">
                            <h4 style="margin-bottom:5px;"> Forex Market Fundamental Data</h4>
<!-- TradingView Widget BEGIN -->

<span id="tradingview-copyright"><a ref="nofollow noopener" target="_blank" href="http://www.tradingview.com" style="color: rgb(173, 174, 176); font-family: &quot;Trebuchet MS&quot;, Tahoma, Arial, sans-serif; font-size: 13px;"></a></span>

<script src="https://s3.tradingview.com/external-embedding/embed-widget-forex-cross-rates.js">{
  "currencies": [
    "EUR",
    "USD",
    "JPY",
    "BTC",
    "ETH",
    "LTC",
    "GBP",
    "CHF",
    "AUD",
    "CAD",
    "NZD",
    "CNY"
  ],
  "isTransparent": false,
  "colorTheme": "light",
  "width": "100%",
  "height": "100%",
  "locale": "en"
}</script>

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
    <!-- plugins:js -->
    <script src="vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="./vendors/chart.js/Chart.min.js"></script>
    <script src="./vendors/moment/moment.min.js"></script>
    <script src="./vendors/daterangepicker/daterangepicker.js"></script>
    <script src="./vendors/chartist/chartist.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="js/off-canvas.js"></script>
    <script src="js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="./js/dashboard.js"></script>
    <!-- End custom js for this page -->
  </body>
</html><?php }  ?>