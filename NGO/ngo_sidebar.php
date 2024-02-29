<?php
session_start();
require 'admin_db.php';
$ngo_id=$_SESSION['ngo_id'];
?>
<aside class="app-sidebar">
      <div class="app-sidebar__user"><i class="icon bi bi-building fs-1"></i>
        <div>
          <p class="app-sidebar__user-name">&nbsp; NGO </p>
        <!--<p class="app-sidebar__user-designation"></p>-->
        </div>
      </div>
      <ul class="app-menu">
        <li><a class="app-menu__item active" href="dashboard.php"><i class="app-menu__icon bi bi-speedometer"></i><span class="app-menu__label">Dashboard</span></a></li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon bi bi-building"></i><span class="app-menu__label">NGO</span><i class="treeview-indicator bi bi-chevron-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="ngo_information.php" rel="noopener"><i class="icon bi bi-circle-fill"></i> NGO-Information</a></li>
            
          </ul>
        </li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon bi bi-card-checklist"></i><span class="app-menu__label">Items Requirements</span><i class="treeview-indicator bi bi-chevron-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="item_requirement_form.php"><i class="icon bi bi-circle-fill"></i> Items Requirements-Form</a></li>
            <li><a class="treeview-item" href="item_requirement_information.php"><i class="icon bi bi-circle-fill"></i> Items Requirements-Information</a></li>
          </ul>
        </li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon bi bi-box2-heart"></i><span class="app-menu__label">Donation</span><i class="treeview-indicator bi bi-chevron-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="donation_information.php"><i class="icon bi bi-circle-fill"></i> Donation-Information</a></li>
          </ul>
        </li>
        <?php
        $child_query=mysqli_query($connection,"select * from tbl_child where ngo_id='{$ngo_id}'");
        $child_row=mysqli_fetch_array($child_query);
        $count=mysqli_num_rows($child_query);
        if($count>0){
        ?>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon bi bi-box2-heart"></i><span class="app-menu__label">Child</span><i class="treeview-indicator bi bi-chevron-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="child_information.php"><i class="icon bi bi-circle-fill"></i> Child-Information</a></li>
          </ul>
        </li>
        <?php
        }
        ?>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon bi bi-box2-heart"></i><span class="app-menu__label">Event</span><i class="treeview-indicator bi bi-chevron-right"></i></a>
          <ul class="treeview-menu">
          <li><a class="treeview-item" href="event_form.php"><i class="icon bi bi-circle-fill"></i> Event-Form</a></li>
            <li><a class="treeview-item" href="event_information.php"><i class="icon bi bi-circle-fill"></i> Event-Information</a></li>
          </ul>
        </li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="app-menu__icon bi bi-person-standing" viewBox="0 0 16 16">
            <path d="M8 3a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3ZM6 6.75v8.5a.75.75 0 0 0 1.5 0V10.5a.5.5 0 0 1 1 0v4.75a.75.75 0 0 0 1.5 0v-8.5a.25.25 0 1 1 .5 0v2.5a.75.75 0 0 0 1.5 0V6.5a3 3 0 0 0-3-3H7a3 3 0 0 0-3 3v2.75a.75.75 0 0 0 1.5 0v-2.5a.25.25 0 0 1 .5 0Z" />
          </svg>
          <span class="app-menu__label">Volunteer</span><i class="treeview-indicator bi bi-chevron-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="volunteer_information.php"><i class="icon bi bi-circle-fill"></i> Volunteer-Information</a></li>
          </ul>
        </li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon bi bi-star-half"></i><span class="app-menu__label">Feedback</span><i class="treeview-indicator bi bi-chevron-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="feedback_information.php"><i class="icon bi bi-circle-fill"></i> Feedback-Information</a></li>
          </ul>
        </li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon bi bi-gear me-2 fs-5"></i><span class="app-menu__label">Settings</span><i class="treeview-indicator bi bi-chevron-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="ngo_setting.php"><i class="icon bi bi-circle-fill"></i> Change Password</a></li>
            <li><a class="treeview-item" href="ngo_edit.php"><i class="icon bi bi-circle-fill"></i> Edit Profile</a></li>
          </ul>
        </li>
      </ul>
    </aside>