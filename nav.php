<ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">AI Admin <!--<sup>2</sup>--></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="index.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
        <!-- <a href="sidenavbar.php" style="color: white;">Sidebar</a>
                <a href="Footer.php" style="color: white;">Footer</a>
                <a href="Topbar.php" style="color: white;">Topbar</a>
                <a href="sampleindex.php" style="color: white;">sampleindex</a> -->
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseone"
            aria-expanded="true" aria-controls="collapseone">
            <!-- <i class="fa-solid fa-user"></i> -->
            <i class="fa-solid fa-building-columns"></i>
            <span>College</span>
        </a>
        <div id="collapseone" class="collapse" aria-labelledby="headingTo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">College details</h6>
                <a class="collapse-item" href="degree.php">Degree</a>
                <a class="collapse-item" href="department.php">Department</a>
                <a class="collapse-item" href="college.php">College</a>
                <!-- <a class="collapse-item" href="Projects.php">Projects</a> -->
            </div>
        </div>
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fa-solid fa-book"></i>
            <!-- <i class="fa-solid fa-book" style="color: #ffffff;"></i> -->
            <span>Courses</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Course details</h6>
                <a class="collapse-item" href="addcourse.php">Add course</a>
                <a class="collapse-item" href="ListCourse.php">List</a>
            </div>
        </div>
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTo"
            aria-expanded="true" aria-controls="collapseTo">
            <i class="fa-solid fa-user"></i>
            <span>Students</span>
        </a>
        <div id="collapseTo" class="collapse" aria-labelledby="headingTo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Students details</h6>
                <a class="collapse-item" href="addstudent.php">Add Student</a>
                <a class="collapse-item" href="currentstudents.php">Current Students</a>
                <a class="collapse-item" href="Terminatestudents.php">Completed Students</a>
                <!-- <a class="collapse-item" href="Projects.php">Projects</a> -->
            </div>
        </div>
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree"
            aria-expanded="true" aria-controls="collapseThree">
            <i class="fa-solid fa-diagram-project"></i>
            <span>Project</span>
        </a>
        <div id="collapseThree" class="collapse" aria-labelledby="headingTo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Projects details</h6>
                <a class="collapse-item" href="currentstudents.php">Current Projects</a>
                <a class="collapse-item" href="Terminatestudents.php">Completed projects</a>
                <!-- <a class="collapse-item" href="Projects.php">Projects</a> -->
            </div>
        </div>

        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseToget"
            aria-expanded="true" aria-controls="collapseToget">
            <i class="fa-solid fa-hand-holding-dollar"></i>
            <span>Income</span>
        </a>
        <div id="collapseToget" class="collapse" aria-labelledby="headingToget" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <!-- <h6 class="collapse-header">Income details</h6> -->
                <div class="dropdown" style="margin-left: 10px;">
                    <a class=" btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                        Income Details
                    </a>

                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <li><a class="dropdown-item" href="Advancepay.php">Advance payment</a></li>
                        <li><a class="dropdown-item" href="Fullpay.php">Full Payment</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseToex"
            aria-expanded="true" aria-controls="collapseToex">
            <i class="fa-regular fa-star-half-stroke"></i>
            <span>Expensive</span>
        </a>
        <div id="collapseToex" class="collapse" aria-labelledby="headingToex" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <!-- <h6 class="collapse-header">Expensive details</h6> -->
                <div class="dropdown" style="margin-left: 10px;">
                    <a class=" btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                        Expensive Details
                    </a>

                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <li><a class="dropdown-item" href="Officerent.php">Office-rent</a></li>
                        <li><a class="dropdown-item" href="OfficeEB.php">Office-EB</a></li>
                        <li><a class="dropdown-item" href="OfficeFood.php">Office-Food</a></li>
                        <li><a class="dropdown-item" href="OfficeDecoration.php">Office Funtion-decoration</a></li>
                        <li><a class="dropdown-item" href="Officemodify.php">Office modify</a></li>
                        <!-- <li><a class="dropdown-item" href="Terminatepro.php">Full Payment</a></li> -->
                    </ul>
                </div>
            </div>
        </div>
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseToset"
            aria-expanded="true" aria-controls="collapseToset">
            <i class="fa-solid fa-gear"></i>
            <span>Settings</span>
        </a>
        <div id="collapseToset" class="collapse" aria-labelledby="headingToset" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Admin Details</h6>
                <a class="collapse-item" href="addcourse.php">Add </a>
                <a class="collapse-item" href="ListCourse.php">No.of Admins</a>
                <a class="collapse-item" href="Internship.php">Edit</a>
                <!-- <a class="collapse-item" href="Projects.php">Projects</a> -->
            </div>
        </div>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <!-- Divider -->
    <!-- <hr class="sidebar-divider d-none d-md-block"> -->

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>
<!-- End of Sidebar -->