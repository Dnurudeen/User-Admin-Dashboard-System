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
    <title>Subscribe Plan</title>
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
              <h3 class="page-title">Subscribe Plan</h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Subscribe Plan</li>
                </ol>
              </nav>
            </div>
            <div class="row">
          
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title" style="text-align: center;">Available packages</h4>
                   <!-- START -->
                    <script language="javascript">
                        function openCalculator(id)
                        {

                        w = 225; h = 400;
                        t = (screen.height-h-30)/2;
                        l = (screen.width-w-30)/2;
                        window.open('?a=calendar&type=' + id, 'calculator' + id, "top="+t+",left="+l+",width="+w+",height="+h+",resizable=1,scrollbars=0");


                        
                        for (i = 0; i < document.spendform.h_id.length; i++)
                        {
                            if (document.spendform.h_id[i].value == id)
                            {
                            document.spendform.h_id[i].checked = true;
                            }
                        }

                        

                        }

                        function updateCompound() {
                        var id = 0;
                        var tt = document.spendform.h_id.type;
                        if (tt && tt.toLowerCase() == 'hidden') {
                            id = document.spendform.h_id.value;
                        } else {
                            for (i = 0; i < document.spendform.h_id.length; i++) {
                            if (document.spendform.h_id[i].checked) {
                                id = document.spendform.h_id[i].value;
                            }
                            }
                        }

                        var cpObj = document.getElementById('compound_percents');
                        if (cpObj) {
                            while (cpObj.options.length != 0) {
                            cpObj.options[0] = null;
                            }
                        }

                        if (cps[id] && cps[id].length > 0) {
                            document.getElementById('coumpond_block').style.display = '';

                            for (i in cps[id]) {
                            cpObj.options[cpObj.options.length] = new Option(cps[id][i]);
                            }
                        } else {
                            document.getElementById('coumpond_block').style.display = 'none';
                        }
                        }
                        var cps = {};
                        </script>




                        <br>
                        <div class="mb-5 row">
                        <div class="col-lg-4">
                                                    <div class="pricing-table card purple border bg-light shadow p-4">
                                                        <!-- Table Head -->
                                                        
                                                        <h2 class="text-dark">Regular Plan</h2>
                                                        <!-- Price -->
                                                        <div class="price-tag">
                                                            <span class="symbol text-dark">$</span>
                                                            <span class="amount text-dark">$3000.00</span>
                                                            <h2 class="text-dark">ROI - 3.20% Daily</h2>
                                                        </div>
                                                        <!-- Features -->
                                                        <div class="pricing-features">
                                                                                                <div class="feature text-dark">Minimum Possible Deposit:<span class="text-dark">$3000.00</span></div>
                                                            <div class="feature text-dark">Maximum Possible Deposit:<span  class="text-dark">$9999.00</span></div>

                                                            <div class="feature text-dark">Duration:<span class="text-dark">Regular Plan</span></div>
                                                                                            </div> <br>
                                                        <!-- Button -->
                                                        
                        <div class="">
                        <form method=post name="spendform"><input type="hidden" name="form_id" value="17103242384224"><input type="hidden" name="form_token" value="e9d560749898370c42f932e8497d816a">
                        <input type=hidden name=a value=deposit>

                        <h5 class="text-dark">Amount to invest: ($3000.00 default)</h5>
                        <input type="number" name="amount" placeholder="3000.00" value='3000.00' class="form-control text-dark bg-light">

                        <br>
                        <h5 class="text-dark">Payment Method</h5>
                        <select class="form-control text-dark bg-light" name="type">
                        <option value="process_1000"  data-fiat="USD">Bitcoin</option>
                        <option value="account_1000"  data-fiat="USD" disabled >Bitcoin - $0.00</option>
                        <option value="process_1001"  data-fiat="USD">Ethereum</option>
                        <option value="account_1001"  data-fiat="USD" disabled >Ethereum - $0.00</option>
                        <option value="process_1002"  data-fiat="USD">Usdt (erc20)</option>
                        <option value="account_1002"  data-fiat="USD" disabled >Usdt (erc20) - $0.00</option>
                        </select>
                        <br>
                                
                            <input type=hidden name=h_id value="1"  checked  onclick="updateCompound()"> 
                        <input type="submit" class="btn btn-block pricing-action btn-dark" value="Join plan" >
                        </form>
                        </div>
                                                    </div>
                                                </div>
                        <div class="col-lg-4">
                                                    <div class="pricing-table card purple border bg-light shadow p-4">
                                                        <!-- Table Head -->
                                                        
                                                        <h2 class="text-dark">Standard Plan</h2>
                                                        <!-- Price -->
                                                        <div class="price-tag">
                                                            <span class="symbol text-dark">$</span>
                                                            <span class="amount text-dark">$10000.00</span>
                                                            <h2 class="text-dark">ROI - 7.10% Daily</h2>
                                                        </div>
                                                        <!-- Features -->
                                                        <div class="pricing-features">
                                                                                                <div class="feature text-dark">Minimum Possible Deposit:<span class="text-dark">$10000.00</span></div>
                                                            <div class="feature text-dark">Maximum Possible Deposit:<span  class="text-dark">$49999.00</span></div>

                                                            <div class="feature text-dark">Duration:<span class="text-dark">Standard Plan</span></div>
                                                                                            </div> <br>
                                                        <!-- Button -->
                                                        
                        <div class="">
                        <form method=post name="spendform"><input type="hidden" name="form_id" value="17103242384224"><input type="hidden" name="form_token" value="e9d560749898370c42f932e8497d816a">
                        <input type=hidden name=a value=deposit>

                        <h5 class="text-dark">Amount to invest: ($10000.00 default)</h5>
                        <input type="number" name="amount" placeholder="10000.00" value='3000.00' class="form-control text-dark bg-light">

                        <br>
                        <h5 class="text-dark">Payment Method</h5>
                        <select class="form-control text-dark bg-light" name="type">
                        <option value="process_1000"  data-fiat="USD">Bitcoin</option>
                        <option value="account_1000"  data-fiat="USD" disabled >Bitcoin - $0.00</option>
                        <option value="process_1001"  data-fiat="USD">Ethereum</option>
                        <option value="account_1001"  data-fiat="USD" disabled >Ethereum - $0.00</option>
                        <option value="process_1002"  data-fiat="USD">Usdt (erc20)</option>
                        <option value="account_1002"  data-fiat="USD" disabled >Usdt (erc20) - $0.00</option>
                        </select>
                        <br>
                                
                            <input type=hidden name=h_id value="2"  onclick="updateCompound()"> 
                        <input type="submit" class="btn btn-block pricing-action btn-dark" value="Join plan" >
                        </form>
                        </div>
                                                    </div>
                                                </div>
                        <div class="col-lg-4">
                                                    <div class="pricing-table card purple border bg-light shadow p-4">
                                                        <!-- Table Head -->
                                                        
                                                        <h2 class="text-dark">Premuim Plan</h2>
                                                        <!-- Price -->
                                                        <div class="price-tag">
                                                            <span class="symbol text-dark">$</span>
                                                            <span class="amount text-dark">$50000.00</span>
                                                            <h2 class="text-dark">ROI - 8.20% Daily</h2>
                                                        </div>
                                                        <!-- Features -->
                                                        <div class="pricing-features">
                                                                                                <div class="feature text-dark">Minimum Possible Deposit:<span class="text-dark">$50000.00</span></div>
                                                            <div class="feature text-dark">Maximum Possible Deposit:<span  class="text-dark">&infin;</span></div>

                                                            <div class="feature text-dark">Duration:<span class="text-dark">Premuim Plan</span></div>
                                                                                            </div> <br>
                                                        <!-- Button -->
                                                        
                        <div class="">
                        <form method=post name="spendform"><input type="hidden" name="form_id" value="17103242384224"><input type="hidden" name="form_token" value="e9d560749898370c42f932e8497d816a">
                        <input type=hidden name=a value=deposit>

                        <h5 class="text-dark">Amount to invest: ($50000.00 default)</h5>
                        <input type="number" name="amount" placeholder="50000.00" value='3000.00' class="form-control text-dark bg-light">

                        <br>
                        <h5 class="text-dark">Payment Method</h5>
                        <select class="form-control text-dark bg-light" name="type">
                        <option value="process_1000"  data-fiat="USD">Bitcoin</option>
                        <option value="account_1000"  data-fiat="USD" disabled >Bitcoin - $0.00</option>
                        <option value="process_1001"  data-fiat="USD">Ethereum</option>
                        <option value="account_1001"  data-fiat="USD" disabled >Ethereum - $0.00</option>
                        <option value="process_1002"  data-fiat="USD">Usdt (erc20)</option>
                        <option value="account_1002"  data-fiat="USD" disabled >Usdt (erc20) - $0.00</option>
                        </select>
                        <br>
                                
                            <input type=hidden name=h_id value="3"  onclick="updateCompound()"> 
                        <input type="submit" class="btn btn-block pricing-action btn-dark" value="Join plan" >
                        </form>
                        </div>
                                                    </div>
                                                </div>

                        </div>

                        <script language=javascript>
                        /*
                        for (i = 0; i<document.spendform.type.length; i++) {
                        if ((document.spendform.type[i].value.match(/^process_/))) {
                            document.spendform.type[i].checked = true;
                            break;
                        }
                        }
                        */
                        updateCompound();
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