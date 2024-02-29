<aside class="app-sidebar">
  <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="admin.png" alt="User Image">
    <div>
      <p class="app-sidebar__user-name"><?php echo $_SESSION['admin_name']; ?></p>
      <!--<p class="app-sidebar__user-designation"></p>-->
    </div>
  </div>
  <ul class="app-menu">
    <li><a class="app-menu__item " href="dashboard.php"><i class="app-menu__icon bi bi-speedometer"></i><span class="app-menu__label">Dashboard</span></a></li>
    <li class="treeview"><a class="app-menu__item " href="#" data-toggle="treeview"><i class="app-menu__icon bi bi-building"></i><span class="app-menu__label">NGO</span><i class="treeview-indicator bi bi-chevron-right"></i></a>
      <ul class="treeview-menu">
        <li><a class="treeview-item" href="ngo_form.php"><i class="icon bi bi-circle-fill"></i> NGO-Form</a></li>
        <li><a class="treeview-item" href="ngo_information.php" rel="noopener"><i class="icon bi bi-circle-fill"></i> NGO-Information</a></li>

      </ul>
    </li>
    <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon bi bi-box2-heart"></i><span class="app-menu__label">Category</span><i class="treeview-indicator bi bi-chevron-right"></i></a>
      <ul class="treeview-menu">
        <li><a class="treeview-item" href="category_form.php"><i class="icon bi bi-circle-fill"></i> Category-Form</a></li>
        <li><a class="treeview-item" href="category_information.php"><i class="icon bi bi-circle-fill"></i> Category-Information</a></li>
      </ul>
    </li>
    <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon bi bi-people"></i><span class="app-menu__label">Users</span><i class="treeview-indicator bi bi-chevron-right"></i></a>
      <ul class="treeview-menu">
        <li><a class="treeview-item" href="user_form.php"><i class="icon bi bi-circle-fill"></i> User-Form</a></li>
        <li><a class="treeview-item" href="user_information.php"><i class="icon bi bi-circle-fill"></i> User-Information</a></li>
      </ul>
    </li>
    <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-standing" viewBox="0 0 16 16">
          <path d="M8 3a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3ZM6 6.75v8.5a.75.75 0 0 0 1.5 0V10.5a.5.5 0 0 1 1 0v4.75a.75.75 0 0 0 1.5 0v-8.5a.25.25 0 1 1 .5 0v2.5a.75.75 0 0 0 1.5 0V6.5a3 3 0 0 0-3-3H7a3 3 0 0 0-3 3v2.75a.75.75 0 0 0 1.5 0v-2.5a.25.25 0 0 1 .5 0Z" />
        </svg>
        <span class="app-menu__label">Volunteer</span><i class="treeview-indicator bi bi-chevron-right"></i></a>
      <ul class="treeview-menu">
        <li><a class="treeview-item" href="volunteer_form.php"><i class="icon bi bi-circle-fill"></i> Volunteer-Form</a></li>
        <li><a class="treeview-item" href="volunteer_information.php"><i class="icon bi bi-circle-fill"></i> Volunteer-Information</a></li>
      </ul>
    </li>
    <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon bi bi-pin-map"></i><span class="app-menu__label">Area</span><i class="treeview-indicator bi bi-chevron-right"></i></a>
      <ul class="treeview-menu">
        <li><a class="treeview-item" href="area_form.php"><i class="icon bi bi-circle-fill"></i> Area-Form</a></li>
        <li><a class="treeview-item" href="area_information.php"><i class="icon bi bi-circle-fill"></i> Area-Information</a></li>
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
        <li><a class="treeview-item" href="donation_form.php"><i class="icon bi bi-circle-fill"></i> Donation-Form</a></li>
        <li><a class="treeview-item" href="donation_information.php"><i class="icon bi bi-circle-fill"></i> Donation-Information</a></li>
      </ul>
    </li>
    <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview">👶🏻<i class="app-menu__icon bi"></i><span class="app-menu__label">Child</span><i class="treeview-indicator bi bi-chevron-right"></i></a>
      <ul class="treeview-menu">
        <li><a class="treeview-item" href="child_form.php"><i class="icon bi bi-circle-fill"></i> Child-Form</a></li>
        <li><a class="treeview-item" href="child_information.php"><i class="icon bi bi-circle-fill"></i> Child-Information</a></li>
      </ul>
    </li>

    <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menuicon bi bi-box2-heart"></i><i class="app-menu__icon bi"></i><span class="app-menu__label">Events</span><i class="treeview-indicator bi bi-chevron-right"></i></a>
      <ul class="treeview-menu">
        <li><a class="treeview-item" href="event_form.php"><i class="icon bi bi-circle-fill"></i> Event-form</a></li>
        <li><a class="treeview-item" href="event_information.php"><i class="icon bi bi-circle-fill"></i> Event-Information</a></li>
      </ul>
    </li>

    <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon bi bi-star-half"></i><span class="app-menu__label">Feedback</span><i class="treeview-indicator bi bi-chevron-right"></i></a>
      <ul class="treeview-menu">
        <li><a class="treeview-item" href="feedback_form.php"><i class="icon bi bi-circle-fill"></i> Feedback-Form</a></li>
        <li><a class="treeview-item" href="feedback_information.php"><i class="icon bi bi-circle-fill"></i> Feedback-Information</a></li>
      </ul>
    </li>
    <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon bi bi-blockquote-left"></i><span class="app-menu__label">Blog</span><i class="treeview-indicator bi bi-chevron-right"></i></a>
      <ul class="treeview-menu">
        <li><a class="treeview-item" href="blog_form.php"><i class="icon bi bi-circle-fill"></i> Blog-Form</a></li>
        <li><a class="treeview-item" href="blog_information.php"><i class="icon bi bi-circle-fill"></i> Blog-Information</a></li>
      </ul>
    </li>
    <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon bi bi-question-octagon"></i><span class="app-menu__label">FAQ</span><i class="treeview-indicator bi bi-chevron-right"></i></a>
      <ul class="treeview-menu">
        <li><a class="treeview-item" href="faq_form.php"><i class="icon bi bi-circle-fill"></i> FAQ-Form</a></li>
        <li><a class="treeview-item" href="faq_information.php"><i class="icon bi bi-circle-fill"></i> FAQ-Information</a></li>
      </ul>
    </li>

    <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon bi bi-filter-square"></i><span class="app-menu__label">Reports</span><i class="treeview-indicator bi bi-chevron-right"></i></a>
      <ul class="treeview-menu">
        <li><a class="treeview-item" target="_blank" href="ngo_category_report.php"><i class="icon bi bi-circle-fill"></i> NGO-category</a></li>
        <li><a class="treeview-item" target="_blank" href="ngo_area_report.php"><i class="icon bi bi-circle-fill"></i> NGO-area</a></li>
        <li><a class="treeview-item" target="_blank" href="ngo_donation_report.php"><i class="icon bi bi-circle-fill"></i> NGO-donation</a></li>
        <li><a class="treeview-item" target="_blank" href="ngo_feedback_report.php"><i class="icon bi bi-circle-fill"></i> NGO-feedback</a></li>
        <li><a class="treeview-item" target="_blank" href="user_donation_report.php"><i class="icon bi bi-circle-fill"></i> User-donation</a></li>
        <li><a class="treeview-item" target="_blank" href="date_donation_report.php"><i class="icon bi bi-circle-fill"></i> Date-wise-donation</a></li>
      </ul>
    </li>
  </ul>
  </li>
  </ul>
</aside>