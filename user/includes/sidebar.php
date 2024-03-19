<nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="profile-image">
                  <img class="img-xs rounded-circle" src="../admin/images/<?php echo $row->Image;?>" alt="profile image">
                  <div class="dot-indicator bg-success"></div>
                </div>
                <div class="text-wrapper">
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
                  <p class="profile-name"><?php  echo htmlentities($row->StudentName);?></p>
                  <p class="designation"><?php  echo htmlentities($row->StudentEmail);?></p><?php $cnt=$cnt+1;}} ?>
                </div>
             
              </a>
            </li>
            <li class="nav-item nav-category">
              <span class="nav-link" style="color: #dc3545;">Dashboard</span>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="dashboard.php">
                <span class="menu-title">Dashboard</span>
                <i class="fa fa-home menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="record-history.php">
                <span class="menu-title">Profit Record</span>
                <i class="fa fa-signal menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="record-history.php">
                <span class="menu-title">Transactions history</span>
                <i class="fa fa-briefcase menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="transfer-fund.php">
                <span class="menu-title">Transfer funds</span>
                <i class="fa fa-exchange menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
                    <a data-toggle="collapse" class="nav-link" href="#mpack">
                        <!-- <i class=""></i> -->
                        <span class="menu-title">Invest</span>
                        <i class="fa fa-cubes menu-icon"></i>
                        
                        <i class="fa fa-chevron-down menu-icon text-light"></i>
                    </a>
                    <div class="collapse pl-3" id="mpack">
                        <ul class="nav nav-collapse">
                            <li>
                                <a class="nav-link" href="subscribe-plan.php">
                                    <span class="sub-menu">Subscribe to a Plan</span>
                                </a>
                            </li>
                            <li>
                                <a class="nav-link" href="#">
                                    <span class="sub-menu">My Investment</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>  
            <li class="nav-item">
              <a class="nav-link" href="refer-user.php">
                <span class="menu-title">Refer Users</span>
                <i class="fa fa-recycle menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../../contact">
                <span class="menu-title">Help/Support</span>
                <i class="fa fa-life-ring menu-icon"></i>
              </a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link" href="student-profile.php">
                <span class="menu-title">My Profile</span>
                <i class="icon-user menu-icon"></i>
              </a>
            </li> -->
            <li class="nav-item">
              <a class="nav-link" href="view-notice.php">
                <span class="menu-title">View Notice</span>
                <i class="icon-book-open menu-icon"></i>
              </a>
            </li>
            <br><br><br>
            <li class="nav-item">
              <a class="nav-link" href="change-password.php">
                <span class="menu-title">Change Password</span>
                <i class="icon-key menu-icon"></i>
              </a>
            </li>
          </ul>
        </nav>