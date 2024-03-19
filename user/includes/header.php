<!-- <head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>  -->
 
 <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="navbar-brand-wrapper d-flex align-items-center">
          <a class="navbar-brand brand-logo" href="dashboard.php">
            <!-- <strong style="color: white;">SMS</strong> -->
            <img src="../../images/favicon.png" style="max-width: 40px;" alt="">
            <strong style="color: white; font-size: 15px;">Quant Fund Market</strong>
          </a>
         
        </div>
        <?php
         $uid= $_SESSION['sturecmsuid'];
$sql="SELECT * from tblstudent where ID=:uid";

$query = $dbh -> prepare($sql);
$query->bindParam(':uid',$uid,PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);

$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row)
{               ?>
        <div class="navbar-menu-wrapper d-flex align-items-center flex-grow-1">
          <a href="fund-account.php" class="btn btn-warning mr-3" style="font-size: 10px; font-weight: bold;">Fund Account</a>
          <a href="#" class="btn btn-danger" style="font-size: 10px; font-weight: bold;">Withdraw Fund</a>
          <ul class="navbar-nav navbar-nav-right ml-auto">
           
          <li class="nav-item hidden-caret">
                    <form action="javascript:void(0)" method="post" id="styleform" class="form-inline">
                      <input type="hidden" name="form_id" value="17103304196657">
                    <input type="hidden" name="form_token" value="fd897f3c4da7c65b6ab189540180e878">
                    <input type="hidden" name="form_id" value="16911463834879"><input type="hidden" name="form_token" value="2a7dfbd812d45246d98f758f706f6856">
                       
                        <!-- <div class="form-group">
                            <label class="style_switch">
                                <input name="style" id="style" type="checkbox" value="true" class="modes">
                                <span class="slider round"></span>
                            </label>
                        </div>  -->
                                                <input type="hidden" name="_token" value="oimMw5WTjGjnf7WPhO9MTsp4i9jXGS2DtuYpwism">
                    </form>
                </li>
                                <li class="nav-item hidden-caret">
                    <div id="google_translate_element"></div>
                </li>
        
      
            <li class="nav-item dropdown d-none d-xl-inline-flex user-dropdown">
              <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">

                <img class="img-xs rounded-circle ml-2" src="../admin/images/<?php echo $row->Image;?>" alt="Profile image"> <span class="font-weight-normal"> <?php  echo htmlentities($row->StudentName);?> </span></a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                <div class="dropdown-header text-center">
                  <img class="img-md rounded-circle" src="../admin/images/<?php echo $row->Image;?>" style="height: auto; width: 12rem" alt="Profile image">

                  <p class="mb-1 mt-3"><?php  echo htmlentities($row->StudentName);?></p>
                  <p class="font-weight-light text-muted mb-0"><?php  echo htmlentities($row->StudentEmail);?></p><?php $cnt=$cnt+1;}} ?>
                </div>
                <a class="dropdown-item" href="student-profile.php"><i class="dropdown-item-icon icon-user text-primary"></i> My Profile</a>
                <a class="dropdown-item" href="change-password.php"><i class="dropdown-item-icon icon-energy text-primary"></i> Setting</a>
                <a class="dropdown-item" href="logout.php"><i class="dropdown-item-icon icon-power text-primary"></i>Sign Out</a>
              </div>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="icon-menu"></span>
          </button>
        </div>
      </nav>
