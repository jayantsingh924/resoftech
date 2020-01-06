 <?php include('../headers/header.php'); ?>
<div style="padding-top: 80px; padding-bottom: 100px;"> 


           <div class="wrapper">
              <nav id="sidebar">
                 <ul class="list-unstyled components">
                    <p>Welcome User</p>
                    <li class="<?php if(PAGE == 'profile'){ echo 'active'; }?>">
                       <a href="test.php"><i class="fas fa-user"></i>Profile</a>
                    </li>
                    <li class="nav-item"> 
                        <a class="nav-link-<?php if(PAGE == 'requirement'){ echo 'active'; }?>" 
                            href="requirement.php"><i class="fas fa-plus-circle"></i> Requirement</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link-<?php if(PAGE == 'dicussion'){ echo 'active'; }?>" 
                            href="dicussion.php"><i class="fas fa-phone-alt"></i> Dicussion</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-file"></i> Documents</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link-<?php if(PAGE == 'schedule'){ echo 'active'; }?>" 
                            href="schedule.php"><i class="fas fa-clock"></i> Schedule</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link-<?php if(PAGE == 'Daily Updates'){ echo 'active'; }?>" 
                            href="dailyupdate.php"><i class="fas fa-user-edit"></i> Daily Updates</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link-<?php if(PAGE == 'Changes'){ echo 'active'; }?>" 
                            href="changes.php"><i class="fas fa-wrench"></i> Changes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link-<?php if(PAGE == 'Bugs'){ echo 'active'; }?>" 
                            href="bugs.php"><i class="fas fa-bug"></i> Bugs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link-<?php if(PAGE == 'Change Password'){ echo 'active'; }?>" 
                            href="changepass.php"><i class="fas fa-key"></i> Change Password</a>
                    </li>
                   
            </ul>

            <ul class="list-unstyled CTAs">
                <li>
                    <a href="logout.php" class="logout"><i class="fas fa-sign-out-alt"></i> Logout</a>
                </li>
                <li>
                    <a href="main.php" class="article">Back to Hompage</a>
                </li>
            </ul>
        </nav>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span> Sidebar </span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

              
                </div>
            </nav>