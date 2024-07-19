<div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 bg-secondary d-none d-lg-block">
                <a href="index.html" class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">
                    <img src="img/legaleaselogo.png" alt="logo" class="btn btn-lg btn-outline-light btn-lg-square mr-2">
                    <h1 class="m-0 display-4 text-primary ">LegalEase</h1>
                </a>
            </div>
            <div class="col-lg-9">
                <div class="row bg-white border-bottom d-none d-lg-flex">
                    <div class="col-lg-7 text-left">
                        <div class="h-100 d-inline-flex align-items-center py-2 px-3">
                            <i class="fa fa-envelope text-primary mr-2"></i>
                            <small>legalease.info1@gmail.com</small>
                        </div>
                        <div class="h-100 d-inline-flex align-items-center py-2 px-2">
                            <i class="fa fa-phone-alt text-primary mr-2"></i>
                            <small>+91 90364 64126</small>
                        </div>
                    </div>
                    <div class="col-lg-5 text-right">
                        <div class="d-inline-flex align-items-center p-2">
                            <a class="btn btn-sm btn-outline-primary btn-sm-square mr-2" href="https://www.facebook.com/profile.php?id=61555648221328">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a class="btn btn-sm btn-outline-primary btn-sm-square mr-2" href="https://twitter.com/legalEase1_info">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <!-- <a class="btn btn-sm btn-outline-primary btn-sm-square mr-2" href="">
                                <i class="fab fa-linkedin-in"></i> -->
                            </a>
                            <a class="btn btn-sm btn-outline-primary btn-sm-square mr-2" href="https://www.instagram.com/legalease.info/">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a class="btn btn-sm btn-outline-primary btn-sm-square mr-2" href="https://www.youtube.com/channel/UCci7S-7zkwQ27T8I6j4Y6-w">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div>
                </div> 
                <nav class="navbar navbar-expand-lg bg-white navbar-light p-0">
                    <a href="index.html" class="navbar-brand d-block d-lg-none">
                        <h1 class="m-0 display-4 text-primary text-uppercase">LegalEase</h1>
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            <a href="index.php" class="nav-item nav-link active">Home</a>
                            <a href="about.php" class="nav-item nav-link">About</a>
                            <a href="service.php" class="nav-item nav-link">Practice</a>
                            <a href="team.php" class="nav-item nav-link">Attorneys</a>
                            <a href="contact.php" class="nav-item nav-link">Contact</a>
                            <!-- <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Dropdown</a>
                                <div class="dropdown-menu rounded-0 m-0">
                                    <a href="#" class="dropdown-item">Menu Item 1</a>
                                    <a href="#" class="dropdown-item">Menu Item 2</a>
                                    <a href="#" class="dropdown-item">Menu Item 3</a>
                                </div>
                            </div> -->
                        </div>
                        <div class="nav-input">
                            <i class="fa-solid fa-magnifying-glass"></i>
                            <input type="text"  placeholder="Search Lawyers">
                        </div>
                        <!-- <div class="user-profile" id="userProfileSection">
                            <!- JavaScript will dynamically update this section based on user login status --
                        </div> -->
                        
                        <?php
                        if(isset($_SESSION['Name']))
                        {
                            echo "<a href='profile.php' class='btn btn-primary mr-3 d-none d-lg-block'>My Profile</a>";
                        }
                        else{
                            echo "<a href='register.php' class='btn btn-primary mr-3 d-none d-lg-block'>Login/Signup</a>";
                        }
                        
                        ?>
                    </div>
                </nav>
            </div>
        </div>
    </div>