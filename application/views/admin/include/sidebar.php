 <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                       
                        <li>
                            <a href="<?= base_url(); ?>admin/main/index"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>

                        <li>
                            <a href="#"><i class="fa  fa-file fa-fw"></i> Courses<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?= base_url(); ?>admin/course/"><i class="fa fa-list fa-fw"></i> View Course</a>
                                </li>
                                <li>
                                    <a href="<?= base_url(); ?>admin/course/addcourse"><i class="fa fa-plus-square fa-fw"></i> Add Course</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                       
                        <li>
                            <a href="#"><i class="fa fa-university fa-fw"></i> Branches<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?= base_url(); ?>admin/branch/"><i class="fa fa-list fa-fw"></i> View Branch</a>
                                </li>
                                <li>
                                    <a href="<?= base_url(); ?>admin/branch/addbranch"><i class="fa fa-plus-square fa-fw"></i> Add Branch</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-users fa-fw"></i> Students<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?= base_url(); ?>admin/student/"><i class="fa fa-list fa-fw"></i> View Student</a>
                                </li>
                                <li>
                                    <a href="<?= base_url(); ?>admin/student/addstudent"><i class="fa fa-plus-square fa-fw"></i> Add Student</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-file-text-o fa-fw"></i> Result<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?= base_url(); ?>admin/result/"><i class="fa fa-list fa-fw"></i> View Result</a>
                                </li>
                                <li>
                                    <a href="<?= base_url(); ?>admin/result/addresult"><i class="fa fa-plus-square fa-fw"></i> Add Result</a>
                                </li>
                                <li>
                                    <a href="<?= base_url(); ?>admin/result/uploadresult"><i class="fa fa-upload"></i> Upload Result</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-file-text-o fa-fw"></i> Notes<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?= base_url(); ?>admin/note/"><i class="fa fa-list fa-fw"></i> View Note</a>
                                </li>
                                <li>
                                    <a href="<?= base_url(); ?>admin/note/addnote"><i class="fa fa-plus-square fa-fw"></i> Add Note</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-file-text-o fa-fw"></i> Partener<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?= base_url(); ?>admin/partener/"><i class="fa fa-list fa-fw"></i> View Partener</a>
                                </li>
                                <li>
                                    <a href="<?= base_url(); ?>admin/partener/addpartener"><i class="fa fa-plus-square fa-fw"></i> Add Partener</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-share-square"></i> Send Notification<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?= base_url(); ?>admin/advertise/"><i class="fa fa-list fa-fw"></i> SMS Dashboard</a>
                                </li>
                                <li>
                                    <a href="<?= base_url(); ?>admin/advertise/sendmessage"><i class="fa fa-envelope fa-fw"></i> Send Message</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                        <li>
                            <a href="<?= base_url(); ?>admin/main/index"><i class="fa fa-pencil fa-fw"></i> Notice</a>
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-gear fa-fw"></i> Settings<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?= base_url(); ?>admin/main/viewprofile"><i class="fa fa-user fa-fw"></i>Profile</a>
                                </li>
                                <li>
                                    <a href="<?= base_url(); ?>admin/login/logout"><i class="fa fa-sign-out fa-fw"></i>Logout</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                       
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>