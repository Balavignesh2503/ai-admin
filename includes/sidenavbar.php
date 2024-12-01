        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
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
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
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
                        <a class="collapse-item" href="Internship.php">Internships</a>
                        <!-- <a class="collapse-item" href="Projects.php">Projects</a> -->
                        <div class="dropdown" style="margin-left: 10px;">
                            <a class=" btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                Projects
                            </a>

                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <li><a class="dropdown-item" href="currentpro.php">Current Projects</a></li>
                                <li><a class="dropdown-item" href="Terminatepro.php">Terminate Projects</a></li>
                            </ul>
                        </div>
                        <a class="collapse-item" href="Certificatecourse.php">Certificate Courses</a>
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
                        <a class="collapse-item" href="Terminatestudents.php">Terminate Students</a>
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
                        <h6 class="collapse-header">Income details</h6>
                        <div class="dropdown" style="margin-left: 10px;">
                            <a class=" btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                Amount List
                            </a>

                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <li><a class="dropdown-item" href="currentpro.php">Advance payment</a></li>
                                <li><a class="dropdown-item" href="Terminatepro.php">Full Payment</a></li>
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
                        <h6 class="collapse-header">Expensive details</h6>
                        <div class="dropdown" style="margin-left: 10px;">
                            <a class=" btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                Amount List
                            </a>

                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <li><a class="dropdown-item" href="currentpro.php">What Purpose?</a></li>
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
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>
        <!-- End of Sidebar -->
        </div>
        <!-- End of Content Wrapper -->
        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="login.html">Logout</a>
                    </div>
                </div>
            </div>
        </div>