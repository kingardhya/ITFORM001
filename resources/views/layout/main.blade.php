<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Griffin I Statistics Dashboard</title>
    <meta name="description" content="A responsive bootstrap 4 admin dashboard template by hencework" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
	
	<!-- Morris Charts CSS -->
    <link href="{{asset('/template/vendors/morris.js/morris.css')}}" rel="stylesheet" type="text/css" />
	
	<!-- Toastr CSS -->
    <link href="{{asset('/template/vendors/jquery-toast-plugin/dist/jquery.toast.min.css')}}" rel="stylesheet" type="text/css">

    <!-- Toggles CSS -->
    <link href="{{asset('/template/vendors/jquery-toggles/css/toggles.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('/template/vendors/jquery-toggles/css/themes/toggles-light.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('/template/vendors/daterangepicker/daterangepicker.css')}}" rel="stylesheet" type="text/css" />
	
    <!-- Custom CSS -->
    <link href="{{asset('/template/dist/css/style.css')}}" rel="stylesheet" type="text/css">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
</head>

<body>
    <!-- Preloader -->
    <div class="preloader-it">
        <div class="loader-pendulums"></div>
    </div>
    <!-- /Preloader -->
	
	<!-- HK Wrapper -->
	<div class="hk-wrapper hk-alt-nav hk-icon-nav">

        <!-- Top Navbar -->
        <nav class="navbar navbar-expand-xl navbar-light fixed-top hk-navbar hk-navbar-alt">
            <a class="navbar-toggle-btn nav-link-hover navbar-toggler" href="javascript:void(0);" data-toggle="collapse" data-target="#navbarCollapseAlt" aria-controls="navbarCollapseAlt" aria-expanded="false" aria-label="Toggle navigation"><span class="feather-icon"><i data-feather="menu"></i></span></a>
            <a class="navbar-brand" href="index.html">
                <h2 class="font-weight-bold">KPC</h2>
            </a>
            <div class="collapse navbar-collapse" id="navbarCollapseAlt">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown show-on-hover active">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Dashboard
							</a>
                        <div class="dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                            <a class="dropdown-item active" href="index.html">CRM</a>
							<a class="dropdown-item" href="index2.html">Project</a>
							<a class="dropdown-item" href="index3.html">Statistics</a>
							<a class="dropdown-item" href="index4.html">classic</a>
							<a class="dropdown-item" href="index5.html">Analytics</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown show-on-hover">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Pages
							</a>
                        <div class="dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                            <div class="sub-dropdown-menu show-on-hover">
                                <a href="#" class="dropdown-toggle dropdown-item">Application</a>
                                <div class="dropdown-menu open-right-side">
                                    <a class="dropdown-item" href="chats.html">Chat</a>
                                    <a class="dropdown-item" href="calendar.html">Calendar</a>
                                    <a class="dropdown-item" href="email.html">Email</a>
                                    <a class="dropdown-item" href="file-manager.html">File Manager</a>
                                </div>
                            </div>
                            <div class="sub-dropdown-menu show-on-hover">
                                <a href="#" class="dropdown-toggle dropdown-item">Authentication</a>
                                <div class="dropdown-menu open-right-side">
                                    <div class="sub-dropdown-menu show-on-hover">
                                        <a href="#" class="dropdown-toggle dropdown-item">Sign Up</a>
                                        <div class="dropdown-menu open-right-side">
                                            <a class="dropdown-item" href="signup.html">Cover</a>
                                            <a class="dropdown-item" href="signup-simple.html">Simple</a>
                                        </div>
                                    </div>
                                    <div class="sub-dropdown-menu show-on-hover">
                                        <a href="#" class="dropdown-toggle dropdown-item">Login</a>
                                        <div class="dropdown-menu open-right-side">
                                            <a class="dropdown-item" href="login.html">Cover</a>
                                            <a class="dropdown-item" href="login-simple.html">Simple</a>
                                        </div>
                                    </div>
                                    <div class="sub-dropdown-menu show-on-hover">
                                        <a href="#" class="dropdown-toggle dropdown-item">Recover Pwd</a>
                                        <div class="dropdown-menu open-right-side">
                                            <a class="dropdown-item" href="forgot-password.html">Forgot Password</a>
                                            <a class="dropdown-item" href="reset-password.html">Reset Password</a>
                                        </div>
                                    </div>
                                    <a class="dropdown-item" href="lock-screen.html">Lock Screen</a>
                                    <a class="dropdown-item" href="404.html">Error 404</a>
                                    <a class="dropdown-item" href="maintenance.html">Maintenance</a>
                                </div>
                            </div>
                            <a class="dropdown-item" href="profile.html">Profile</a>
                            <a class="dropdown-item" href="invoice.html">Invoice</a>
                            <a class="dropdown-item" href="gallery.html">Gallery</a>
                            <a class="dropdown-item" href="activity.html">Activity</a>
                            <a class="dropdown-item" href="faq.html">Faq</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown show-on-hover">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								User interface
							</a>
                        <div class="dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                            <div class="sub-dropdown-menu show-on-hover">
                                <a href="#" class="dropdown-toggle dropdown-item">Components</a>
                                <div class="dropdown-menu open-right-side">
                                    <a class="dropdown-item" href="alerts.html">Alerts</a>
                                    <a class="dropdown-item" href="avatar.html">Avatar</a>
                                    <a class="dropdown-item" href="badge.html">Badge</a>
                                    <a class="dropdown-item" href="buttons.html">Buttons</a>
                                    <a class="dropdown-item" href="cards.html">Cards</a>
                                    <a class="dropdown-item" href="carousel.html">Carousel</a>
                                    <a class="dropdown-item" href="collapse.html">Collapse</a>
                                    <a class="dropdown-item" href="dropdowns.html">Dropdown</a>
                                    <a class="dropdown-item" href="list-group.html">List Group</a>
                                    <a class="dropdown-item" href="modal.html">Modal</a>
                                    <a class="dropdown-item" href="nav.html">Nav</a>
                                    <a class="dropdown-item" href="navbar.html">Navbar</a>
                                    <a class="dropdown-item" href="nestable.html">Nestable</a>
                                    <a class="dropdown-item" href="pagination.html">Pagination</a>
                                    <a class="dropdown-item" href="popovers.html">Popovers</a>
                                    <a class="dropdown-item" href="progress.html">Progress</a>
                                    <a class="dropdown-item" href="tooltip.html">Tooltip</a>
                                </div>
                            </div>
                            <div class="sub-dropdown-menu show-on-hover">
                                <a href="#" class="dropdown-toggle dropdown-item">Content</a>
                                <div class="dropdown-menu open-right-side">
                                    <a class="dropdown-item" href="typography.html">Typography</a>
                                    <a class="dropdown-item" href="images.html">Images</a>
                                    <a class="dropdown-item" href="media-object.html">Media Object</a>
                                </div>
                            </div>
                            <div class="sub-dropdown-menu show-on-hover">
                                <a href="#" class="dropdown-toggle dropdown-item">Utilities</a>
                                <div class="dropdown-menu open-right-side">
                                    <a class="dropdown-item" href="background.html">Background</a>
                                    <a class="dropdown-item" href="border.html">Border</a>
                                    <a class="dropdown-item" href="colors.html">Colors</a>
                                    <a class="dropdown-item" href="embeds.html">Embeds</a>
                                    <a class="dropdown-item" href="icons.html">Icons</a>
                                    <a class="dropdown-item" href="shadow.html">Shadow</a>
                                    <a class="dropdown-item" href="sizing.html">Sizing</a>
                                    <a class="dropdown-item" href="spacing.html">Spacing</a>
                                </div>
                            </div>
                            <div class="sub-dropdown-menu show-on-hover">
                                <a href="#" class="dropdown-toggle dropdown-item">Forms</a>
                                <div class="dropdown-menu open-right-side">
                                    <a class="dropdown-item" href="form-element.html">Form Elements</a>
                                    <a class="dropdown-item" href="input-groups.html">Input Groups</a>
                                    <a class="dropdown-item" href="form-layout.html">Form Layout</a>
                                    <a class="dropdown-item" href="form-mask.html">Form Mask</a>
                                    <a class="dropdown-item" href="form-validation.html">Form Validation</a>
                                    <a class="dropdown-item" href="form-wizard.html">Form Wizard</a>
                                    <a class="dropdown-item" href="file-upload.html">File Upload</a>
                                    <a class="dropdown-item" href="editor.html">Editor</a>
                                </div>
                            </div>
                            <div class="sub-dropdown-menu show-on-hover">
                                <a href="#" class="dropdown-toggle dropdown-item">Tables</a>
                                <div class="dropdown-menu open-right-side">
                                    <a class="dropdown-item" href="basic-table.html">Basic Table</a>
                                    <a class="dropdown-item" href="data-table.html">Data Table</a>
                                    <a class="dropdown-item" href="responsive-table.html">Responsive Table</a>
                                    <a class="dropdown-item" href="editable-table.html">Editable Table</a>
                                </div>
                            </div>
                            <div class="sub-dropdown-menu show-on-hover">
                                <a href="#" class="dropdown-toggle dropdown-item">Charts</a>
                                <div class="dropdown-menu open-right-side">
                                    <a class="dropdown-item" href="line-charts.html">Line Chart</a>
                                    <a class="dropdown-item" href="area-charts.html">Area Chart</a>
                                    <a class="dropdown-item" href="bar-charts.html">Bar Chart</a>
                                    <a class="dropdown-item" href="pie-charts.html">Pie Chart</a>
                                    <a class="dropdown-item" href="realtime-charts.html">Realtime Chart</a>
                                    <a class="dropdown-item" href="mini-charts.html">Mini Chart</a>
                                </div>
                            </div>
                            <div class="sub-dropdown-menu show-on-hover">
                                <a href="#" class="dropdown-toggle dropdown-item">Maps</a>
                                <div class="dropdown-menu open-right-side">
                                    <a class="dropdown-item" href="google-map.html">Google Map</a>
                                    <a class="dropdown-item" href="vector-map.html">Vector Map</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="documentation.html" >Documentation</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Log<span class="badge badge-success badge-sm badge-pill ml-10">v 1.0</span></a>
                    </li>
                </ul>
            </div>
            <ul class="navbar-nav hk-navbar-content">
                <li class="nav-item dropdown dropdown-authentication">
                    <a class="nav-link dropdown-toggle no-caret" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="media">
                            <div class="media-body">
                                <span>Aash Bill<i class="zmdi zmdi-chevron-down"></i></span>
                            </div>
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" data-dropdown-in="flipInX" data-dropdown-out="flipOutX">
                        <a class="dropdown-item" href="#"><i class="dropdown-icon zmdi zmdi-power"></i><span>Log out</span></a>
                    </div>
                </li>
            </ul>
        </nav>
        <!-- /Top Navbar -->
        <!-- Main Content -->
        <div class="hk-pg-wrapper">
			<!-- Container -->
            <div class="container-fluid mt-xl-50 mt-sm-30 mt-15">
                <!-- Row -->
                <div class="row">
                    <div class="col-xl-12">
						<div class="hk-row">
								@yield('content')
						</div>
					</div>
                </div>
                <!-- /Row -->
			</div>
            <!-- /Container -->
			<!-- Footer -->
            <div class="hk-footer-wrap container-fluid">
                <footer class="footer">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <p>Pampered by<a href="https://hencework.com/" class="text-dark" target="_blank">Hencework</a> © 2019</p>
                        </div>
                    </div>
                </footer>
            </div>
            <!-- /Footer -->
        </div>
        <!-- /Main Content -->

    </div>
    <!-- /HK Wrapper -->

    <!-- jQuery -->
    <script src="{{asset('/template/vendors/jquery/dist/jquery.min.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset('/template/vendors/popper.js/dist/umd/popper.min.js')}}"></script>
    <script src="{{asset('/template/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>

    <!-- Slimscroll JavaScript -->
    <script src="{{asset('/template/dist/js/jquery.slimscroll.js')}}"></script>

    <!-- Fancy Dropdown JS -->
    <script src="{{asset('/template/dist/js/dropdown-bootstrap-extended.js')}}"></script>

    <!-- FeatherIcons JavaScript -->
    <script src="{{asset('/template/dist/js/feather.min.js')}}"></script>

    <!-- Toggles JavaScript -->
    <script src="{{asset('/template/vendors/jquery-toggles/toggles.min.js')}}"></script>
    <script src="{{asset('/template/dist/js/toggle-data.js')}}"></script>
	
	<!-- Counter Animation JavaScript -->
	<script src="{{asset('/template/vendors/waypoints/lib/jquery.waypoints.min.js')}}"></script>
	<script src="{{asset('/template/vendors/jquery.counterup/jquery.counterup.min.js')}}"></script>
	
	<!-- Easy pie chart JS -->
    <script src="{{asset('/template/vendors/easy-pie-chart/dist/jquery.easypiechart.min.js')}}"></script>
	
	<!-- Sparkline JavaScript -->
    <script src="{{asset('/template/vendors/jquery.sparkline/dist/jquery.sparkline.min.js')}}"></script>
	
	<!-- Morris Charts JavaScript -->
    <script src="{{asset('/template/vendors/raphael/raphael.min.js')}}"></script>
    <script src="{{asset('/template/vendors/morris.js/morris.min.js')}}"></script>
   
	<!-- EChartJS JavaScript -->
    <script src="{{asset('/template/vendors/echarts/dist/echarts-en.min.js')}}"></script>
    
	<!-- Peity JavaScript -->
    <script src="{{asset('/template/vendors/peity/jquery.peity.min.js')}}"></script>
   
	<!-- Toastr JS -->
    <script src="{{asset('/template/vendors/jquery-toast-plugin/dist/jquery.toast.min.js')}}"></script>

    <script src="{{asset('/template/vendors/tinymce/tinymce.min.js')}}"></script>
    <script src="{{asset('/template/dist/js/tinymce-data.js')}}"></script>
    <script src="{{asset('/template/vendors/moment/min/moment.min.js')}}"></script>
    <script src="{{asset('/template/vendors/daterangepicker/daterangepicker.js')}}"></script>
    <script src="{{asset('/template/dist/js/daterangepicker-data.js')}}"></script>

    <script src="{{asset('/template/vendors/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('/template/vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('/template/vendors/datatables.net-dt/js/dataTables.dataTables.min.js')}}"></script>
    <script src="{{asset('/template/vendors/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('/template/vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{asset('/template/vendors/datatables.net-buttons/js/buttons.flash.min.js')}}"></script>
    <script src="{{asset('/template/vendors/jszip/dist/jszip.min.js')}}"></script>
    <script src="{{asset('/template/vendors/pdfmake/build/pdfmake.min.js')}}"></script>
    <script src="{{asset('/template/vendors/pdfmake/build/vfs_fonts.js')}}"></script>
    <script src="{{asset('/template/vendors/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
    <script src="{{asset('/template/vendors/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
    <script src="{{asset('/template/vendors/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('/template/dist/js/dataTables-data.js')}}"></script>

    <!-- Init JavaScript -->
    <script src="{{asset('/template/dist/js/init.js')}}"></script>
    <script src="{{asset('/template/dist/js/kpc.js')}}"></script>
</body>

</html>