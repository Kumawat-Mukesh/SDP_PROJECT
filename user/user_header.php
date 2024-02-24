 
<header class="main-header header-style-one">

    <!--Start Header-->
    <div class="header" style="background-color:darkgray;">
        <div class="container">
            <div class="outer-box clearfix">
                <div class="header-left clearfix pull-left">
                    <div class="logo">
                        <a href="user_home.php"><img src="logo.png" alt="Awesome Logo" height="300" width="300" title=""></a>
                    </div>
                </div>

                <div class="header-right pull-right">
                    <div class="nav-outer style1 clearfix">
                        <!--Mobile Navigation Toggler-->
                        <!-- Main Menu -->
                        <nav class="main-menu style1 navbar-expand-md navbar-light">
                            <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                <?php
                                if (isset($_SESSION["user_id"])) {
                                ?>
                                    <ul class="navigation clearfix scroll-nav">
                                        <li><a href="user_home.php"> Home</a></li>
                                        <li><a href="ngo_listing.php"> NGO</a></li>
                                        <li><a href="volunteer_listing.php"> Volunteer</a></li>
                                        <li><a href="child_listing.php"> Child</a></li>
                                        <li><a href="event_listing.php"> Events</a></li>
                                         <li class="dropdown"><a href="#">My Profile</a>
                                            <ul>
                                                <li><a href="view_donation.php">My Donation</a></li>
                                                <li><a href="user_my_feedback.php">My Feedback</a></li>
                                                <li><a href="user_change_password.php">Change Password</a></li>
                                                <li><a href="user_logout.php">Logout</a></li>

                                                <!-- <li><a href="index-onepage.html">Home OnePage</a></li>  -->
                                            </ul>
                                        </li>
                                    </ul>

                                <?php
                                }
                                elseif (isset($_SESSION["volunteer_id"])) {
                                ?>
                                    <ul class="navigation clearfix scroll-nav">
                                        <li><a href="user_home.php"> Home</a></li>
                                        <li><a href="ngo_listing.php"> NGO</a></li>
                                       
                                        
                                        <li><a href="event_listing.php"> Events</a></li>
                                         <li class="dropdown"><a href="#">My Profile</a>
                                            <ul>
                                                <li><a href="view_donation.php">My Donation</a></li>
                                                
                                                <li><a href="volunteer_change_password.php">Change Password</a></li>
                                                <li><a href="volunteer_logout.php">Logout</a></li>

                                                <!-- <li><a href="index-onepage.html">Home OnePage</a></li>  -->
                                            </ul>
                                        </li>
                                    </ul>
                                <?php
                                }
                                else {
                                ?>
                                    <ul class="navigation clearfix scroll-nav">
                                        <li><a href="user_home.php"> Home</a></li>
                                        <li><a href="user_about_us.php">About Us</a></li>

                                        <li><a href="user_contact_us.php">Contact</a></li>
                                        <li><a href="ngo_listing.php">NGO</a></li>
                                        <li><a href="event_listing.php">Events</a></li>
                                    
                                        <li class="dropdown"><a href="event_listing.php">Login</a>
                                            <ul>
                                                <li><a href="user_login.php">User Login</a></li>
                                                <li><a href="/project/NGO/ngo_login.php">NGO Login</a></li>
                                                <li><a href="volunteer_login.php">Volunteer Login</a></li>

                                                <!-- <li><a href="index-onepage.html">Home OnePage</a></li>  -->
                                            </ul>
                                        </li>
                                    </ul>
                                <?php
                                }

                                ?>
                            </div>
                        </nav>
                        <!-- Main Menu End-->
                    </div>

                    <div class="header-right_buttom">
                        <!-- <div class="btns-box">
                            <a class="btn-one" href="ngo_listing(1).php"><span class="txt"><i class="arrow1 fa fa-check-circle"></i>NGO</span></a>
                        </div> -->
                        <div class="side-content-button" style="padding-top:6px;">
                            <a class="navSidebar-button" href="#">
                                <img src="more.png" height="35px" width="35px" />
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!--End header-->

    <!--Sticky Header-->
    <div class="sticky-header" style="background-color:darkgray;">
        <div class="container">
            <div class="clearfix">
                <!--Logo-->
                <div class="logo float-left">
                    <a href="index.html" class="img-responsive"><img src="logo.png" height="300" width="300" alt="" title=""></a>
                </div>
                <!--Right Col-->
                <div class="right-col float-right">
                    <!-- Main Menu -->
                    <nav class="main-menu clearfix">
                        <!--Keep This Empty / Menu will come through Javascript-->
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!--End Sticky Header-->

    <!-- Mobile Menu  -->
    <div class="mobile-menu" style="background-color:darkgray;">
        <div class="menu-backdrop"></div>
        <div class="close-btn"><span class="icon fa fa-times-circle"></span></div>
        <nav class="menu-box">
            <div class="nav-logo"><a href="index.html"><img src="assets/images/resources/mobilemenu-logo.png" alt="" title=""></a></div>
            <div class="menu-outer">
                <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
            </div>
            <!--Social Links-->
            <div class="social-links">
                <ul class="clearfix">
                    <li><a href="#"><span class="fab fa fa-facebook-square"></span></a></li>
                    <li><a href="#"><span class="fab fa fa-twitter-square"></span></a></li>
                    <li><a href="#"><span class="fab fa fa-pinterest-square"></span></a></li>
                    <li><a href="#"><span class="fab fa fa-google-plus-square"></span></a></li>
                    <li><a href="#"><span class="fab fa fa-youtube-square"></span></a></li>
                </ul>
            </div>
        </nav>
    </div>
    <!-- End Mobile Menu -->
</header>