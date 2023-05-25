
<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="assets/images/favicon-32x32.png" type="image/png"/>
	<!--plugins-->
	<link href="assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet"/>
	<link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
	<link href="assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
	<link href="assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet"/>
	<link href="assets/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
	<!-- loader-->
	<link href="assets/css/pace.min.css" rel="stylesheet"/>
	<script src="assets/js/pace.min.js"></script>
	<!-- Bootstrap CSS -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/css/bootstrap-extended.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
	<link href="assets/css/app.css" rel="stylesheet">
	<link href="assets/css/icons.css" rel="stylesheet">
	<!-- Theme Style CSS -->
	<link rel="stylesheet" href="assets/css/dark-theme.css"/>
	<link rel="stylesheet" href="assets/css/semi-dark.css"/>
	<link rel="stylesheet" href="assets/css/header-colors.css"/>
	<title>Syndron - Bootstrap 5 Admin Dashboard Template</title>
</head>

<body>
	<!--wrapper-->
	<div class="wrapper">
		<!--sidebar wrapper -->
		<div class="sidebar-wrapper" data-simplebar="true">
			<div class="sidebar-header">
				<div>
					<img src="assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
				</div>
				<div>
					<h4 class="logo-text">Syndron</h4>
				</div>
				<div class="toggle-icon ms-auto"><i class='bx bx-arrow-back'></i>
				</div>
			 </div>
			<!--navigation-->
			<ul class="metismenu" id="menu">
				<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class='bx bx-home-alt'></i>
						</div>
						<div class="menu-title">Dashboard</div>
					</a>
					{{-- <ul>
						<li> <a href="index.html"><i class='bx bx-radio-circle'></i>eCommerce</a>
						</li>
						<li> <a href="index2.html"><i class='bx bx-radio-circle'></i>Analytics</a>
						</li>
					</ul> --}}
				</li>
				<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class="bx bx-category"></i>
						</div>
						<div class="menu-title">Student</div>
					</a>
					<ul>
						<li> <a href="/add-student"><i class='bx bx-radio-circle'></i>Add Student</a>
						</li>
						<li> <a href="/list-student"><i class='bx bx-radio-circle'></i>List Student</a>
						</li>
						<li> <a href="/user"><i class='bx bx-radio-circle'></i>User registration</a>
						</li>
						{{-- <li> <a href="app-file-manager.html"><i class='bx bx-radio-circle'></i>File Manager</a>
						</li>
						<li> <a href="app-contact-list.html"><i class='bx bx-radio-circle'></i>Contatcs</a>
						</li>
						<li> <a href="app-to-do.html"><i class='bx bx-radio-circle'></i>Todo List</a>
						</li>
						<li> <a href="app-invoice.html"><i class='bx bx-radio-circle'></i>Invoice</a>
						</li>
						<li> <a href="app-fullcalender.html"><i class='bx bx-radio-circle'></i>Calendar</a>
						</li> --}}
					</ul>
				</li>
				{{-- <li class="menu-label">UI Elements</li>
				<li>
					<a href="widgets.html">
						<div class="parent-icon"><i class='bx bx-cookie'></i>
						</div>
						<div class="menu-title">Widgets</div>
					</a>
				</li>
				<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class='bx bx-cart'></i>
						</div>
						<div class="menu-title">eCommerce</div>
					</a>
					<ul>
						<li> <a href="ecommerce-products.html"><i class='bx bx-radio-circle'></i>Products</a>
						</li>
						<li> <a href="ecommerce-products-details.html"><i class='bx bx-radio-circle'></i>Product Details</a>
						</li>
						<li> <a href="ecommerce-add-new-products.html"><i class='bx bx-radio-circle'></i>Add New Products</a>
						</li>
						<li> <a href="ecommerce-orders.html"><i class='bx bx-radio-circle'></i>Orders</a>
						</li>
					</ul>
				</li>
				<li>
					<a class="has-arrow" href="javascript:;">
						<div class="parent-icon"><i class='bx bx-bookmark-heart'></i>
						</div>
						<div class="menu-title">Components</div>
					</a>
					<ul>
						<li> <a href="component-alerts.html"><i class='bx bx-radio-circle'></i>Alerts</a>
						</li>
						<li> <a href="component-accordions.html"><i class='bx bx-radio-circle'></i>Accordions</a>
						</li>
						<li> <a href="component-badges.html"><i class='bx bx-radio-circle'></i>Badges</a>
						</li>
						<li> <a href="component-buttons.html"><i class='bx bx-radio-circle'></i>Buttons</a>
						</li>
						<li> <a href="component-cards.html"><i class='bx bx-radio-circle'></i>Cards</a>
						</li>
						<li> <a href="component-carousels.html"><i class='bx bx-radio-circle'></i>Carousels</a>
						</li>
						<li> <a href="component-list-groups.html"><i class='bx bx-radio-circle'></i>List Groups</a>
						</li>
						<li> <a href="component-media-object.html"><i class='bx bx-radio-circle'></i>Media Objects</a>
						</li>
						<li> <a href="component-modals.html"><i class='bx bx-radio-circle'></i>Modals</a>
						</li>
						<li> <a href="component-navs-tabs.html"><i class='bx bx-radio-circle'></i>Navs & Tabs</a>
						</li>
						<li> <a href="component-navbar.html"><i class='bx bx-radio-circle'></i>Navbar</a>
						</li>
						<li> <a href="component-paginations.html"><i class='bx bx-radio-circle'></i>Pagination</a>
						</li>
						<li> <a href="component-popovers-tooltips.html"><i class='bx bx-radio-circle'></i>Popovers & Tooltips</a>
						</li>
						<li> <a href="component-progress-bars.html"><i class='bx bx-radio-circle'></i>Progress</a>
						</li>
						<li> <a href="component-spinners.html"><i class='bx bx-radio-circle'></i>Spinners</a>
						</li>
						<li> <a href="component-notifications.html"><i class='bx bx-radio-circle'></i>Notifications</a>
						</li>
						<li> <a href="component-avtars-chips.html"><i class='bx bx-radio-circle'></i>Avatrs & Chips</a>
						</li>
					</ul>
				</li>
				<li>
					<a class="has-arrow" href="javascript:;">
						<div class="parent-icon"><i class="bx bx-repeat"></i>
						</div>
						<div class="menu-title">Content</div>
					</a>
					<ul>
						<li> <a href="content-grid-system.html"><i class='bx bx-radio-circle'></i>Grid System</a>
						</li>
						<li> <a href="content-typography.html"><i class='bx bx-radio-circle'></i>Typography</a>
						</li>
						<li> <a href="content-text-utilities.html"><i class='bx bx-radio-circle'></i>Text Utilities</a>
						</li>
					</ul>
				</li>
				<li>
					<a class="has-arrow" href="javascript:;">
						<div class="parent-icon"> <i class="bx bx-donate-blood"></i>
						</div>
						<div class="menu-title">Icons</div>
					</a>
					<ul>
						<li> <a href="icons-line-icons.html"><i class='bx bx-radio-circle'></i>Line Icons</a>
						</li>
						<li> <a href="icons-boxicons.html"><i class='bx bx-radio-circle'></i>Boxicons</a>
						</li>
						<li> <a href="icons-feather-icons.html"><i class='bx bx-radio-circle'></i>Feather Icons</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="form-froala-editor.html">
						<div class="parent-icon"><i class='bx bx-code-alt'></i>
						</div>
						<div class="menu-title">Froala Editor</div>
					</a>
				</li>
				<li class="menu-label">Forms & Tables</li>
				<li>
					<a class="has-arrow" href="javascript:;">
						<div class="parent-icon"><i class='bx bx-message-square-edit'></i>
						</div>
						<div class="menu-title">Forms</div>
					</a>
					<ul>
						<li> <a href="form-elements.html"><i class='bx bx-radio-circle'></i>Form Elements</a>
						</li>
						<li> <a href="form-input-group.html"><i class='bx bx-radio-circle'></i>Input Groups</a>
						</li>
						<li> <a href="form-radios-and-checkboxes.html"><i class='bx bx-radio-circle'></i>Radios & Checkboxes</a>
						</li>
						<li> <a href="form-layouts.html"><i class='bx bx-radio-circle'></i>Forms Layouts</a>
						</li>
						<li> <a href="form-validations.html"><i class='bx bx-radio-circle'></i>Form Validation</a>
						</li>
						<li> <a href="form-wizard.html"><i class='bx bx-radio-circle'></i>Form Wizard</a>
						</li>
						<li> <a href="form-text-editor.html"><i class='bx bx-radio-circle'></i>Text Editor</a>
						</li>
						<li> <a href="form-file-upload.html"><i class='bx bx-radio-circle'></i>File Upload</a>
						</li>
						<li> <a href="form-date-time-pickes.html"><i class='bx bx-radio-circle'></i>Date Pickers</a>
						</li>
						<li> <a href="form-select2.html"><i class='bx bx-radio-circle'></i>Select2</a>
						</li>
						<li> <a href="form-repeater.html"><i class='bx bx-radio-circle'></i>Form Repeater</a>
						</li>
					</ul>
				</li> --}}
				{{-- <li>
					<a class="has-arrow" href="javascript:;">
						<div class="parent-icon"><i class="bx bx-grid-alt"></i>
						</div>
						<div class="menu-title">Tables</div>
					</a>
					<ul>
						<li> <a href="table-basic-table.html"><i class='bx bx-radio-circle'></i>Basic Table</a>
						</li>
						<li> <a href="table-datatable.html"><i class='bx bx-radio-circle'></i>Data Table</a>
						</li>
					</ul>
				</li>
				<li class="menu-label">Pages</li>
				<li>
					<a class="has-arrow" href="javascript:;">
						<div class="parent-icon"><i class="bx bx-lock"></i>
						</div>
						<div class="menu-title">Authentication</div>
					</a>
					<ul>
						<li><a class="has-arrow" href="javascript:;"><i class='bx bx-radio-circle'></i>Basic</a>
							<ul>
								<li><a href="auth-basic-signin.html" target="_blank"><i class='bx bx-radio-circle'></i>Sign In</a></li>
								<li><a href="auth-basic-signup.html" target="_blank"><i class='bx bx-radio-circle'></i>Sign Up</a></li>
								<li><a href="auth-basic-forgot-password.html" target="_blank"><i class='bx bx-radio-circle'></i>Forgot Password</a></li>
								<li><a href="auth-basic-reset-password.html" target="_blank"><i class='bx bx-radio-circle'></i>Reset Password</a></li>
							</ul>
						</li>
						<li><a class="has-arrow" href="javascript:;"><i class='bx bx-radio-circle'></i>Cover</a>
							<ul>
								<li><a href="auth-cover-signin.html" target="_blank"><i class='bx bx-radio-circle'></i>Sign In</a></li>
								<li><a href="auth-cover-signup.html" target="_blank"><i class='bx bx-radio-circle'></i>Sign Up</a></li>
								<li><a href="auth-cover-forgot-password.html" target="_blank"><i class='bx bx-radio-circle'></i>Forgot Password</a></li>
								<li><a href="auth-cover-reset-password.html" target="_blank"><i class='bx bx-radio-circle'></i>Reset Password</a></li>
							</ul>
						</li>
						<li><a class="has-arrow" href="javascript:;"><i class='bx bx-radio-circle'></i>With Header Footer</a>
							<ul>
								<li><a href="auth-header-footer-signin.html" target="_blank"><i class='bx bx-radio-circle'></i>Sign In</a></li>
								<li><a href="auth-header-footer-signup.html" target="_blank"><i class='bx bx-radio-circle'></i>Sign Up</a></li>
								<li><a href="auth-header-footer-forgot-password.html" target="_blank"><i class='bx bx-radio-circle'></i>Forgot Password</a></li>
								<li><a href="auth-header-footer-reset-password.html" target="_blank"><i class='bx bx-radio-circle'></i>Reset Password</a></li>
							</ul>
						</li>
					</ul>
				</li>
				<li>
					<a href="user-profile.html">
						<div class="parent-icon"><i class="bx bx-user-circle"></i>
						</div>
						<div class="menu-title">User Profile</div>
					</a>
				</li>
				<li>
					<a href="timeline.html">
						<div class="parent-icon"> <i class="bx bx-video-recording"></i>
						</div>
						<div class="menu-title">Timeline</div>
					</a>
				</li>
				<li>
					<a class="has-arrow" href="javascript:;">
						<div class="parent-icon"><i class="bx bx-error"></i>
						</div>
						<div class="menu-title">Errors</div>
					</a>
					<ul>
						<li> <a href="errors-404-error.html" target="_blank"><i class='bx bx-radio-circle'></i>404 Error</a>
						</li>
						<li> <a href="errors-500-error.html" target="_blank"><i class='bx bx-radio-circle'></i>500 Error</a>
						</li>
						<li> <a href="errors-coming-soon.html" target="_blank"><i class='bx bx-radio-circle'></i>Coming Soon</a>
						</li>
						<li> <a href="error-blank-page.html" target="_blank"><i class='bx bx-radio-circle'></i>Blank Page</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="faq.html">
						<div class="parent-icon"><i class="bx bx-help-circle"></i>
						</div>
						<div class="menu-title">FAQ</div>
					</a>
				</li>
				<li>
					<a href="pricing-table.html">
						<div class="parent-icon"><i class="bx bx-diamond"></i>
						</div>
						<div class="menu-title">Pricing</div>
					</a>
				</li>
				<li class="menu-label">Charts & Maps</li>
				<li>
					<a class="has-arrow" href="javascript:;">
						<div class="parent-icon"><i class="bx bx-line-chart"></i>
						</div>
						<div class="menu-title">Charts</div>
					</a>
					<ul>
						<li> <a href="charts-apex-chart.html"><i class='bx bx-radio-circle'></i>Apex</a>
						</li>
						<li> <a href="charts-chartjs.html"><i class='bx bx-radio-circle'></i>Chartjs</a>
						</li>
						<li> <a href="charts-highcharts.html"><i class='bx bx-radio-circle'></i>Highcharts</a>
						</li>
					</ul>
				</li>
				<li>
					<a class="has-arrow" href="javascript:;">
						<div class="parent-icon"><i class="bx bx-map-alt"></i>
						</div>
						<div class="menu-title">Maps</div>
					</a>
					<ul>
						<li> <a href="map-google-maps.html"><i class='bx bx-radio-circle'></i>Google Maps</a>
						</li>
						<li> <a href="map-vector-maps.html"><i class='bx bx-radio-circle'></i>Vector Maps</a>
						</li>
					</ul>
				</li>
				<li class="menu-label">Others</li>
				<li>
					<a class="has-arrow" href="javascript:;">
						<div class="parent-icon"><i class="bx bx-menu"></i>
						</div>
						<div class="menu-title">Menu Levels</div>
					</a>
					<ul>
						<li> <a class="has-arrow" href="javascript:;"><i class='bx bx-radio-circle'></i>Level One</a>
							<ul>
								<li> <a class="has-arrow" href="javascript:;"><i class='bx bx-radio-circle'></i>Level Two</a>
									<ul>
										<li> <a href="javascript:;"><i class='bx bx-radio-circle'></i>Level Three</a>
										</li>
									</ul>
								</li>
							</ul>
						</li>
					</ul>
				</li>
				<li>
					<a href="javascript:;">
						<div class="parent-icon"><i class="bx bx-folder"></i>
						</div>
						<div class="menu-title">Documentation</div>
					</a>
				</li>
				<li>
					<a href="https://themeforest.net/user/codervent" target="_blank">
						<div class="parent-icon"><i class="bx bx-support"></i>
						</div>
						<div class="menu-title">Support</div>
					</a>
				</li>
			</ul> --}}
			<!--end navigation-->
		</div>
		<!--end sidebar wrapper -->
		<!--start header -->
		<header>
			<div class="topbar d-flex align-items-center">
				<nav class="navbar navbar-expand gap-3">
					<div class="mobile-toggle-menu"><i class='bx bx-menu'></i>
					</div>

					  <div class="position-relative search-bar d-lg-block d-none" data-bs-toggle="modal" data-bs-target="#SearchModal">
						<input class="form-control px-5" disabled type="search" placeholder="Search">
						<span class="position-absolute top-50 search-show ms-3 translate-middle-y start-0 top-50 fs-5"><i class='bx bx-search'></i></span>
					  </div>


					  <div class="top-menu ms-auto">
						<ul class="navbar-nav align-items-center gap-1">
							<li class="nav-item mobile-search-icon d-flex d-lg-none" data-bs-toggle="modal" data-bs-target="#SearchModal">
								<a class="nav-link" href="avascript:;"><i class='bx bx-search'></i>
								</a>
							</li>
							<li class="nav-item dropdown dropdown-laungauge d-none d-sm-flex">
								<a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="avascript:;" data-bs-toggle="dropdown"><img src="assets/images/county/02.png" width="22" alt="">
								</a>
								<ul class="dropdown-menu dropdown-menu-end">
									<li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:;"><img src="assets/images/county/01.png" width="20" alt=""><span class="ms-2">English</span></a>
									</li>
									<li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:;"><img src="assets/images/county/02.png" width="20" alt=""><span class="ms-2">Catalan</span></a>
									</li>
									<li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:;"><img src="assets/images/county/03.png" width="20" alt=""><span class="ms-2">French</span></a>
									</li>
									<li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:;"><img src="assets/images/county/04.png" width="20" alt=""><span class="ms-2">Belize</span></a>
									</li>
									<li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:;"><img src="assets/images/county/05.png" width="20" alt=""><span class="ms-2">Colombia</span></a>
									</li>
									<li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:;"><img src="assets/images/county/06.png" width="20" alt=""><span class="ms-2">Spanish</span></a>
									</li>
									<li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:;"><img src="assets/images/county/07.png" width="20" alt=""><span class="ms-2">Georgian</span></a>
									</li>
									<li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:;"><img src="assets/images/county/08.png" width="20" alt=""><span class="ms-2">Hindi</span></a>
									</li>
								</ul>
							</li>
							<li class="nav-item dark-mode d-none d-sm-flex">
								<a class="nav-link dark-mode-icon" href="javascript:;"><i class='bx bx-moon'></i>
								</a>
							</li>

							<li class="nav-item dropdown dropdown-app">
								<a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-bs-toggle="dropdown" href="javascript:;"><i class='bx bx-grid-alt'></i></a>
								<div class="dropdown-menu dropdown-menu-end p-0">
									<div class="app-container p-2 my-2">
									  <div class="row gx-0 gy-2 row-cols-3 justify-content-center p-2">
										 <div class="col">
										  <a href="javascript:;">
											<div class="app-box text-center">
											  <div class="app-icon">
												  <img src="assets/images/app/slack.png" width="30" alt="">
											  </div>
											  <div class="app-name">
												  <p class="mb-0 mt-1">Slack</p>
											  </div>
											  </div>
											</a>
										 </div>
										 <div class="col">
										  <a href="javascript:;">
											<div class="app-box text-center">
											  <div class="app-icon">
												  <img src="assets/images/app/behance.png" width="30" alt="">
											  </div>
											  <div class="app-name">
												  <p class="mb-0 mt-1">Behance</p>
											  </div>
											  </div>
										  </a>
										 </div>
										 <div class="col">
										  <a href="javascript:;">
											<div class="app-box text-center">
											  <div class="app-icon">
												<img src="assets/images/app/google-drive.png" width="30" alt="">
											  </div>
											  <div class="app-name">
												  <p class="mb-0 mt-1">Dribble</p>
											  </div>
											  </div>
											</a>
										 </div>
										 <div class="col">
										  <a href="javascript:;">
											<div class="app-box text-center">
											  <div class="app-icon">
												  <img src="assets/images/app/outlook.png" width="30" alt="">
											  </div>
											  <div class="app-name">
												  <p class="mb-0 mt-1">Outlook</p>
											  </div>
											  </div>
											</a>
										 </div>
										 <div class="col">
										  <a href="javascript:;">
											<div class="app-box text-center">
											  <div class="app-icon">
												  <img src="assets/images/app/github.png" width="30" alt="">
											  </div>
											  <div class="app-name">
												  <p class="mb-0 mt-1">GitHub</p>
											  </div>
											  </div>
											</a>
										 </div>
										 <div class="col">
										  <a href="javascript:;">
											<div class="app-box text-center">
											  <div class="app-icon">
												  <img src="assets/images/app/stack-overflow.png" width="30" alt="">
											  </div>
											  <div class="app-name">
												  <p class="mb-0 mt-1">Stack</p>
											  </div>
											  </div>
											</a>
										 </div>
										 <div class="col">
										  <a href="javascript:;">
											<div class="app-box text-center">
											  <div class="app-icon">
												  <img src="assets/images/app/figma.png" width="30" alt="">
											  </div>
											  <div class="app-name">
												  <p class="mb-0 mt-1">Stack</p>
											  </div>
											  </div>
											</a>
										 </div>
										 <div class="col">
										  <a href="javascript:;">
											<div class="app-box text-center">
											  <div class="app-icon">
												  <img src="assets/images/app/twitter.png" width="30" alt="">
											  </div>
											  <div class="app-name">
												  <p class="mb-0 mt-1">Twitter</p>
											  </div>
											  </div>
											</a>
										 </div>
										 <div class="col">
										  <a href="javascript:;">
											<div class="app-box text-center">
											  <div class="app-icon">
												  <img src="assets/images/app/google-calendar.png" width="30" alt="">
											  </div>
											  <div class="app-name">
												  <p class="mb-0 mt-1">Calendar</p>
											  </div>
											  </div>
											</a>
										 </div>
										 <div class="col">
										  <a href="javascript:;">
											<div class="app-box text-center">
											  <div class="app-icon">
												  <img src="assets/images/app/spotify.png" width="30" alt="">
											  </div>
											  <div class="app-name">
												  <p class="mb-0 mt-1">Spotify</p>
											  </div>
											  </div>
											</a>
										 </div>
										 <div class="col">
										  <a href="javascript:;">
											<div class="app-box text-center">
											  <div class="app-icon">
												  <img src="assets/images/app/google-photos.png" width="30" alt="">
											  </div>
											  <div class="app-name">
												  <p class="mb-0 mt-1">Photos</p>
											  </div>
											  </div>
											</a>
										 </div>
										 <div class="col">
										  <a href="javascript:;">
											<div class="app-box text-center">
											  <div class="app-icon">
												  <img src="assets/images/app/pinterest.png" width="30" alt="">
											  </div>
											  <div class="app-name">
												  <p class="mb-0 mt-1">Photos</p>
											  </div>
											  </div>
											</a>
										 </div>
										 <div class="col">
										  <a href="javascript:;">
											<div class="app-box text-center">
											  <div class="app-icon">
												  <img src="assets/images/app/linkedin.png" width="30" alt="">
											  </div>
											  <div class="app-name">
												  <p class="mb-0 mt-1">linkedin</p>
											  </div>
											  </div>
											</a>
										 </div>
										 <div class="col">
										  <a href="javascript:;">
											<div class="app-box text-center">
											  <div class="app-icon">
												  <img src="assets/images/app/dribble.png" width="30" alt="">
											  </div>
											  <div class="app-name">
												  <p class="mb-0 mt-1">Dribble</p>
											  </div>
											  </div>
											</a>
										 </div>
										 <div class="col">
										  <a href="javascript:;">
											<div class="app-box text-center">
											  <div class="app-icon">
												  <img src="assets/images/app/youtube.png" width="30" alt="">
											  </div>
											  <div class="app-name">
												  <p class="mb-0 mt-1">YouTube</p>
											  </div>
											  </div>
											</a>
										 </div>
										 <div class="col">
										  <a href="javascript:;">
											<div class="app-box text-center">
											  <div class="app-icon">
												  <img src="assets/images/app/google.png" width="30" alt="">
											  </div>
											  <div class="app-name">
												  <p class="mb-0 mt-1">News</p>
											  </div>
											  </div>
											</a>
										 </div>
										 <div class="col">
										  <a href="javascript:;">
											<div class="app-box text-center">
											  <div class="app-icon">
												  <img src="assets/images/app/envato.png" width="30" alt="">
											  </div>
											  <div class="app-name">
												  <p class="mb-0 mt-1">Envato</p>
											  </div>
											  </div>
											</a>
										 </div>
										 <div class="col">
										  <a href="javascript:;">
											<div class="app-box text-center">
											  <div class="app-icon">
												  <img src="assets/images/app/safari.png" width="30" alt="">
											  </div>
											  <div class="app-name">
												  <p class="mb-0 mt-1">Safari</p>
											  </div>
											  </div>
											</a>
										 </div>
				
									  </div><!--end row-->
				
									</div>
								</div>
							</li>

							<li class="nav-item dropdown dropdown-large">
								<a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" href="#" data-bs-toggle="dropdown"><span class="alert-count">7</span>
									<i class='bx bx-bell'></i>
								</a>
								<div class="dropdown-menu dropdown-menu-end">
									<a href="javascript:;">
										<div class="msg-header">
											<p class="msg-header-title">Notifications</p>
											<p class="msg-header-badge">8 New</p>
										</div>
									</a>
									<div class="header-notifications-list">
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="user-online">
													<img src="assets/images/avatars/avatar-1.png" class="msg-avatar" alt="user avatar">
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Daisy Anderson<span class="msg-time float-end">5 sec
												ago</span></h6>
													<p class="msg-info">The standard chunk of lorem</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="notify bg-light-danger text-danger">dc
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">New Orders <span class="msg-time float-end">2 min
												ago</span></h6>
													<p class="msg-info">You have recived new orders</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="user-online">
													<img src="assets/images/avatars/avatar-2.png" class="msg-avatar" alt="user avatar">
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Althea Cabardo <span class="msg-time float-end">14
												sec ago</span></h6>
													<p class="msg-info">Many desktop publishing packages</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="notify bg-light-success text-success">
													<img src="assets/images/app/outlook.png" width="25" alt="user avatar">
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Account Created<span class="msg-time float-end">28 min
												ago</span></h6>
													<p class="msg-info">Successfully created new email</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="notify bg-light-info text-info">Ss
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">New Product Approved <span
												class="msg-time float-end">2 hrs ago</span></h6>
													<p class="msg-info">Your new product has approved</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="user-online">
													<img src="assets/images/avatars/avatar-4.png" class="msg-avatar" alt="user avatar">
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Katherine Pechon <span class="msg-time float-end">15
												min ago</span></h6>
													<p class="msg-info">Making this the first true generator</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="notify bg-light-success text-success"><i class='bx bx-check-square'></i>
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Your item is shipped <span class="msg-time float-end">5 hrs
												ago</span></h6>
													<p class="msg-info">Successfully shipped your item</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="notify bg-light-primary">
													<img src="assets/images/app/github.png" width="25" alt="user avatar">
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">New 24 authors<span class="msg-time float-end">1 day
												ago</span></h6>
													<p class="msg-info">24 new authors joined last week</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="user-online">
													<img src="assets/images/avatars/avatar-8.png" class="msg-avatar" alt="user avatar">
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Peter Costanzo <span class="msg-time float-end">6 hrs
												ago</span></h6>
													<p class="msg-info">It was popularised in the 1960s</p>
												</div>
											</div>
										</a>
									</div>
									<a href="javascript:;">
										<div class="text-center msg-footer">
											<button class="btn btn-primary w-100">View All Notifications</button>
										</div>
									</a>
								</div>
							</li>
							<li class="nav-item dropdown dropdown-large">
								<a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> <span class="alert-count">8</span>
									<i class='bx bx-shopping-bag'></i>
								</a>
								<div class="dropdown-menu dropdown-menu-end">
									<a href="javascript:;">
										<div class="msg-header">
											<p class="msg-header-title">My Cart</p>
											<p class="msg-header-badge">10 Items</p>
										</div>
									</a>
									<div class="header-message-list">
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center gap-3">
												<div class="position-relative">
													<div class="cart-product rounded-circle bg-light">
														<img src="assets/images/products/11.png" class="" alt="product image">
													</div>
												</div>
												<div class="flex-grow-1">
													<h6 class="cart-product-title mb-0">Men White T-Shirt</h6>
													<p class="cart-product-price mb-0">1 X $29.00</p>
												</div>
												<div class="">
													<p class="cart-price mb-0">$250</p>
												</div>
												<div class="cart-product-cancel"><i class="bx bx-x"></i>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center gap-3">
												<div class="position-relative">
													<div class="cart-product rounded-circle bg-light">
														<img src="assets/images/products/02.png" class="" alt="product image">
													</div>
												</div>
												<div class="flex-grow-1">
													<h6 class="cart-product-title mb-0">Men White T-Shirt</h6>
													<p class="cart-product-price mb-0">1 X $29.00</p>
												</div>
												<div class="">
													<p class="cart-price mb-0">$250</p>
												</div>
												<div class="cart-product-cancel"><i class="bx bx-x"></i>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center gap-3">
												<div class="position-relative">
													<div class="cart-product rounded-circle bg-light">
														<img src="assets/images/products/03.png" class="" alt="product image">
													</div>
												</div>
												<div class="flex-grow-1">
													<h6 class="cart-product-title mb-0">Men White T-Shirt</h6>
													<p class="cart-product-price mb-0">1 X $29.00</p>
												</div>
												<div class="">
													<p class="cart-price mb-0">$250</p>
												</div>
												<div class="cart-product-cancel"><i class="bx bx-x"></i>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center gap-3">
												<div class="position-relative">
													<div class="cart-product rounded-circle bg-light">
														<img src="assets/images/products/04.png" class="" alt="product image">
													</div>
												</div>
												<div class="flex-grow-1">
													<h6 class="cart-product-title mb-0">Men White T-Shirt</h6>
													<p class="cart-product-price mb-0">1 X $29.00</p>
												</div>
												<div class="">
													<p class="cart-price mb-0">$250</p>
												</div>
												<div class="cart-product-cancel"><i class="bx bx-x"></i>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center gap-3">
												<div class="position-relative">
													<div class="cart-product rounded-circle bg-light">
														<img src="assets/images/products/05.png" class="" alt="product image">
													</div>
												</div>
												<div class="flex-grow-1">
													<h6 class="cart-product-title mb-0">Men White T-Shirt</h6>
													<p class="cart-product-price mb-0">1 X $29.00</p>
												</div>
												<div class="">
													<p class="cart-price mb-0">$250</p>
												</div>
												<div class="cart-product-cancel"><i class="bx bx-x"></i>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center gap-3">
												<div class="position-relative">
													<div class="cart-product rounded-circle bg-light">
														<img src="assets/images/products/06.png" class="" alt="product image">
													</div>
												</div>
												<div class="flex-grow-1">
													<h6 class="cart-product-title mb-0">Men White T-Shirt</h6>
													<p class="cart-product-price mb-0">1 X $29.00</p>
												</div>
												<div class="">
													<p class="cart-price mb-0">$250</p>
												</div>
												<div class="cart-product-cancel"><i class="bx bx-x"></i>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center gap-3">
												<div class="position-relative">
													<div class="cart-product rounded-circle bg-light">
														<img src="assets/images/products/07.png" class="" alt="product image">
													</div>
												</div>
												<div class="flex-grow-1">
													<h6 class="cart-product-title mb-0">Men White T-Shirt</h6>
													<p class="cart-product-price mb-0">1 X $29.00</p>
												</div>
												<div class="">
													<p class="cart-price mb-0">$250</p>
												</div>
												<div class="cart-product-cancel"><i class="bx bx-x"></i>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center gap-3">
												<div class="position-relative">
													<div class="cart-product rounded-circle bg-light">
														<img src="assets/images/products/08.png" class="" alt="product image">
													</div>
												</div>
												<div class="flex-grow-1">
													<h6 class="cart-product-title mb-0">Men White T-Shirt</h6>
													<p class="cart-product-price mb-0">1 X $29.00</p>
												</div>
												<div class="">
													<p class="cart-price mb-0">$250</p>
												</div>
												<div class="cart-product-cancel"><i class="bx bx-x"></i>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center gap-3">
												<div class="position-relative">
													<div class="cart-product rounded-circle bg-light">
														<img src="assets/images/products/09.png" class="" alt="product image">
													</div>
												</div>
												<div class="flex-grow-1">
													<h6 class="cart-product-title mb-0">Men White T-Shirt</h6>
													<p class="cart-product-price mb-0">1 X $29.00</p>
												</div>
												<div class="">
													<p class="cart-price mb-0">$250</p>
												</div>
												<div class="cart-product-cancel"><i class="bx bx-x"></i>
												</div>
											</div>
										</a>
									</div>
									<a href="javascript:;">
										<div class="text-center msg-footer">
											<div class="d-flex align-items-center justify-content-between mb-3">
												<h5 class="mb-0">Total</h5>
												<h5 class="mb-0 ms-auto">$489.00</h5>
											</div>
											<button class="btn btn-primary w-100">Checkout</button>
										</div>
									</a>
								</div>
							</li>
						</ul>
					</div>
					<div class="user-box dropdown px-3">
						<a class="d-flex align-items-center nav-link dropdown-toggle gap-3 dropdown-toggle-nocaret" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							<img src="assets/images/avatars/avatar-2.png" class="user-img" alt="user avatar">
							<div class="user-info">
								<p class="user-name mb-0">Pauline Seitz</p>
								<p class="designattion mb-0">Web Designer</p>
							</div>
						</a>
						<ul class="dropdown-menu dropdown-menu-end">
							{{-- <li><a class="dropdown-item d-flex align-items-center" href="javascript:;"><i class="bx bx-user fs-5"></i><span>Profile</span></a>
							</li>
							<li><a class="dropdown-item d-flex align-items-center" href="javascript:;"><i class="bx bx-cog fs-5"></i><span>Settings</span></a>
							</li>
							<li><a class="dropdown-item d-flex align-items-center" href="javascript:;"><i class="bx bx-home-circle fs-5"></i><span>Dashboard</span></a>
							</li>
							<li><a class="dropdown-item d-flex align-items-center" href="javascript:;"><i class="bx bx-dollar-circle fs-5"></i><span>Earnings</span></a>
							</li>
							<li><a class="dropdown-item d-flex align-items-center" href="javascript:;"><i class="bx bx-download fs-5"></i><span>Downloads</span></a>
							</li> --}}
							<li>
								<div class="dropdown-divider mb-0"></div>
							</li>
							<li><form method="POST" action="/logout">
                                @csrf
                                @method('GET')
                                <button class="dropdown-item d-flex align-items-center" href="javascript:;"><i
                                    class="bx bx-log-out-circle"></i><span>Logout</span></button>
                            </form>
							</li>
						</ul>
					</div>
				</nav>
			</div>
		</header>
		<!--end header -->
		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				<div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
					<div class="col">
						<div class="card radius-10">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0 text-secondary">Revenue</p>
										<h4 class="my-1">$4805</h4>
										<p class="mb-0 font-13 text-success"><i class='bx bxs-up-arrow align-middle'></i>$34 Since last week</p>
									</div>
									<div class="widgets-icons bg-light-success text-success ms-auto"><i class='bx bxs-wallet'></i>
									</div>
								</div>
								<div id="chart1"></div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card radius-10">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0 text-secondary">Total Customers</p>
										<h4 class="my-1">8.4K</h4>
										<p class="mb-0 font-13 text-success"><i class='bx bxs-up-arrow align-middle'></i>14% Since last week</p>
									</div>
									<div class="widgets-icons bg-light-warning text-warning ms-auto"><i class='bx bxs-group'></i>
									</div>
								</div>
								<div id="chart2"></div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card radius-10">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0 text-secondary">Store Visitors</p>
										<h4 class="my-1">59K</h4>
										<p class="mb-0 font-13 text-danger"><i class='bx bxs-down-arrow align-middle'></i>12.4% Since last week</p>
									</div>
									<div class="widgets-icons bg-light-danger text-danger ms-auto"><i class='bx bxs-binoculars'></i>
									</div>
								</div>
								<div id="chart3"></div>
							</div>
						</div>
					</div>
				</div>
				<!--end row-->
				<div class="row row-cols-1 row-cols-xl-2">
					<div class="col d-flex">
						<div class="card radius-10 w-100">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<h5 class="mb-1">Store Metrics</h5>
										<p class="mb-0 font-13 text-secondary"><i class='bx bxs-calendar'></i>in last 30 days revenue</p>
									</div>
									<div class="dropdown ms-auto">
										<a class="dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">	<i class='bx bx-dots-horizontal-rounded font-22  text-option'></i>
										</a>
										<ul class="dropdown-menu">
											<li><a class="dropdown-item" href="javascript:;">Action</a>
											</li>
											<li><a class="dropdown-item" href="javascript:;">Another action</a>
											</li>
											<li>
												<hr class="dropdown-divider">
											</li>
											<li><a class="dropdown-item" href="javascript:;">Something else here</a>
											</li>
										</ul>
									</div>
								</div>
								<div class="row row-cols-1 row-cols-sm-3 mt-4">
									<div class="col">
										<div>
											<p class="mb-0 text-secondary">Revenue</p>
											<h4 class="my-1">$4805</h4>
											<p class="mb-0 font-13 text-success"><i class='bx bxs-up-arrow align-middle'></i>$1458 Since last month</p>
										</div>
									</div>
									<div class="col">
										<div>
											<p class="mb-0 text-secondary">Total Customers</p>
											<h4 class="my-1">8.4K</h4>
											<p class="mb-0 font-13 text-success"><i class='bx bxs-up-arrow align-middle'></i>12.3% Since last month</p>
										</div>
									</div>
									<div class="col">
										<div>
											<p class="mb-0 text-secondary">Store Visitors</p>
											<h4 class="my-1">59K</h4>
											<p class="mb-0 font-13 text-danger"><i class='bx bxs-down-arrow align-middle'></i>2.4% Since last month</p>
										</div>
									</div>
								</div>
								<div id="chart4"></div>
							</div>
						</div>
					</div>
					<div class="col d-flex">
						<div class="card radius-10 w-100">
							<div class="card-header border-bottom-0">
								<div class="d-flex align-items-center">
									<div>
										<h5 class="mb-1">Top Products</h5>
										<p class="mb-0 font-13 text-secondary"><i class='bx bxs-calendar'></i>in last 30 days revenue</p>
									</div>
									<div class="dropdown ms-auto">
										<a class="dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">	<i class='bx bx-dots-horizontal-rounded font-22 text-option'></i>
										</a>
										<ul class="dropdown-menu">
											<li><a class="dropdown-item" href="javascript:;">Action</a>
											</li>
											<li><a class="dropdown-item" href="javascript:;">Another action</a>
											</li>
											<li>
												<hr class="dropdown-divider">
											</li>
											<li><a class="dropdown-item" href="javascript:;">Something else here</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="product-list p-3 mb-3">
								<div class="row border mx-0 mb-3 py-2 radius-10 cursor-pointer">
									<div class="col-sm-6">
										<div class="d-flex align-items-center">
											<div class="product-img">
												<img src="assets/images/icons/chair.png" alt="" />
											</div>
											<div class="ms-2">
												<h6 class="mb-1">Light Blue Chair</h6>
												<p class="mb-0">$240.00</p>
											</div>
										</div>
									</div>
									<div class="col-sm">
										<h6 class="mb-1">$2140.00</h6>
										<p class="mb-0">345 Sales</p>
									</div>
									<div class="col-sm">
										<div id="chart5"></div>
									</div>
								</div>
								<div class="row border mx-0 mb-3 py-2 radius-10 cursor-pointer">
									<div class="col-sm-6">
										<div class="d-flex align-items-center">
											<div class="product-img">
												<img src="assets/images/icons/user-interface.png" alt="" />
											</div>
											<div class="ms-2">
												<h6 class="mb-1">Honor Mobile 7x</h6>
												<p class="mb-0">$159.00</p>
											</div>
										</div>
									</div>
									<div class="col-sm">
										<h6 class="mb-1">$3570.00</h6>
										<p class="mb-0">148 Sales</p>
									</div>
									<div class="col-sm">
										<div id="chart6"></div>
									</div>
								</div>
								<div class="row border mx-0 mb-3 py-2 radius-10 cursor-pointer">
									<div class="col-sm-6">
										<div class="d-flex align-items-center">
											<div class="product-img">
												<img src="assets/images/icons/watch.png" alt="" />
											</div>
											<div class="ms-2">
												<h6 class="mb-1">Hand Watch</h6>
												<p class="mb-0">$250.00</p>
											</div>
										</div>
									</div>
									<div class="col-sm">
										<h6 class="mb-1">$3650.00</h6>
										<p class="mb-0">122 Sales</p>
									</div>
									<div class="col-sm">
										<div id="chart7"></div>
									</div>
								</div>
								<div class="row border mx-0 mb-3 py-2 radius-10 cursor-pointer">
									<div class="col-sm-6">
										<div class="d-flex align-items-center">
											<div class="product-img">
												<img src="assets/images/icons/idea.png" alt="" />
											</div>
											<div class="ms-2">
												<h6 class="mb-1">Mini Laptop</h6>
												<p class="mb-0">$260.00</p>
											</div>
										</div>
									</div>
									<div class="col-sm">
										<h6 class="mb-1">$6320.00</h6>
										<p class="mb-0">452 Sales</p>
									</div>
									<div class="col-sm">
										<div id="chart8"></div>
									</div>
								</div>
								<div class="row border mx-0 mb-3 py-2 radius-10 cursor-pointer">
									<div class="col-sm-6">
										<div class="d-flex align-items-center">
											<div class="product-img">
												<img src="assets/images/icons/tshirt.png" alt="" />
											</div>
											<div class="ms-2">
												<h6 class="mb-1">Slim-T-Shirt</h6>
												<p class="mb-0">$112.00</p>
											</div>
										</div>
									</div>
									<div class="col-sm">
										<h6 class="mb-1">$2360.00</h6>
										<p class="mb-0">572 Sales</p>
									</div>
									<div class="col-sm">
										<div id="chart9"></div>
									</div>
								</div>
								<div class="row border mx-0 mb-3 py-2 radius-10 cursor-pointer">
									<div class="col-sm-6">
										<div class="d-flex align-items-center">
											<div class="product-img">
												<img src="assets/images/icons/headphones.png" alt="" />
											</div>
											<div class="ms-2">
												<h6 class="mb-1">Smart Headphones</h6>
												<p class="mb-0">$360.00</p>
											</div>
										</div>
									</div>
									<div class="col-sm">
										<h6 class="mb-1">$9840.00</h6>
										<p class="mb-0">275 Sales</p>
									</div>
									<div class="col-sm">
										<div id="chart10"></div>
									</div>
								</div>
								<div class="row border mx-0 py-2 radius-10 cursor-pointer">
									<div class="col-sm-6">
										<div class="d-flex align-items-center">
											<div class="product-img">
												<img src="assets/images/icons/shoes.png" alt="" />
											</div>
											<div class="ms-2">
												<h6 class="mb-1">Green Sports Shoes</h6>
												<p class="mb-0">$410.00</p>
											</div>
										</div>
									</div>
									<div class="col-sm">
										<h6 class="mb-1">$3840.00</h6>
										<p class="mb-0">265 Sales</p>
									</div>
									<div class="col-sm">
										<div id="chart11"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--end row-->
				<div class="row">
					<div class="col-xl-8 d-flex">
						<div class="card radius-10 w-100">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<h5 class="mb-1">Transaction History</h5>
										<p class="mb-0 font-13 text-secondary"><i class='bx bxs-calendar'></i>in last 30 days revenue</p>
									</div>
									<div class="dropdown ms-auto">
										<a class="dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">	<i class='bx bx-dots-horizontal-rounded font-22 text-option'></i>
										</a>
										<ul class="dropdown-menu">
											<li><a class="dropdown-item" href="javascript:;">Action</a>
											</li>
											<li><a class="dropdown-item" href="javascript:;">Another action</a>
											</li>
											<li>
												<hr class="dropdown-divider">
											</li>
											<li><a class="dropdown-item" href="javascript:;">Something else here</a>
											</li>
										</ul>
									</div>
								</div>
								<div class="table-responsive mt-4">
									<table class="table align-middle mb-0 table-hover" id="Transaction-History">
										<thead class="table-light">
											<tr>
												<th>Payment Name</th>
												<th>Date & Time</th>
												<th>Amount</th>
												<th>Status</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>
													<div class="d-flex align-items-center">
														<div class="">
															<img src="assets/images/avatars/avatar-1.png" class="rounded-circle" width="46" height="46" alt="" />
														</div>
														<div class="ms-2">
															<h6 class="mb-1 font-14">Payment from Michle Jhon</h6>
															<p class="mb-0 font-13 text-secondary">Refrence Id #8547846</p>
														</div>
													</div>
												</td>
												<td>Jan 10, 2021</td>
												<td>+256.00</td>
												<td>
													<div class="badge rounded-pill bg-success w-100">Completed</div>
												</td>
											</tr>
											<tr>
												<td>
													<div class="d-flex align-items-center">
														<div class="">
															<img src="assets/images/avatars/avatar-2.png" class="rounded-circle" width="46" height="46" alt="" />
														</div>
														<div class="ms-2">
															<h6 class="mb-1 font-14">Payment from Pauline Bird</h6>
															<p class="mb-0 font-13 text-secondary">Refrence Id #9653248</p>
														</div>
													</div>
												</td>
												<td>Jan 12, 2021</td>
												<td>+566.00</td>
												<td>
													<div class="badge rounded-pill bg-info text-dark w-100">In Progress</div>
												</td>
											</tr>
											<tr>
												<td>
													<div class="d-flex align-items-center">
														<div class="">
															<img src="assets/images/avatars/avatar-3.png" class="rounded-circle" width="46" height="46" alt="" />
														</div>
														<div class="ms-2">
															<h6 class="mb-1 font-14">Payment from Ralph Alva</h6>
															<p class="mb-0 font-13 text-secondary">Refrence Id #7689524</p>
														</div>
													</div>
												</td>
												<td>Jan 14, 2021</td>
												<td>+636.00</td>
												<td>
													<div class="badge rounded-pill bg-danger w-100">Declined</div>
												</td>
											</tr>
											<tr>
												<td>
													<div class="d-flex align-items-center">
														<div class="">
															<img src="assets/images/avatars/avatar-4.png" class="rounded-circle" width="46" height="46" alt="" />
														</div>
														<div class="ms-2">
															<h6 class="mb-1 font-14">Payment from John Roman</h6>
															<p class="mb-0 font-13 text-secondary">Refrence Id #8335884</p>
														</div>
													</div>
												</td>
												<td>Jan 15, 2021</td>
												<td>+246.00</td>
												<td>
													<div class="badge rounded-pill bg-success w-100">Completed</div>
												</td>
											</tr>
											<tr>
												<td>
													<div class="d-flex align-items-center">
														<div class="">
															<img src="assets/images/avatars/avatar-7.png" class="rounded-circle" width="46" height="46" alt="" />
														</div>
														<div class="ms-2">
															<h6 class="mb-1 font-14">Payment from David Buckley</h6>
															<p class="mb-0 font-13 text-secondary">Refrence Id #7865986</p>
														</div>
													</div>
												</td>
												<td>Jan 16, 2021</td>
												<td>+876.00</td>
												<td>
													<div class="badge rounded-pill bg-info text-dark w-100">In Progress</div>
												</td>
											</tr>
											<tr>
												<td>
													<div class="d-flex align-items-center">
														<div class="">
															<img src="assets/images/avatars/avatar-8.png" class="rounded-circle" width="46" height="46" alt="" />
														</div>
														<div class="ms-2">
															<h6 class="mb-1 font-14">Payment from Lewis Cruz</h6>
															<p class="mb-0 font-13 text-secondary">Refrence Id #8576420</p>
														</div>
													</div>
												</td>
												<td>Jan 18, 2021</td>
												<td>+536.00</td>
												<td>
													<div class="badge rounded-pill bg-success w-100">Completed</div>
												</td>
											</tr>
											<tr>
												<td>
													<div class="d-flex align-items-center">
														<div class="">
															<img src="assets/images/avatars/avatar-9.png" class="rounded-circle" width="46" height="46" alt="" />
														</div>
														<div class="ms-2">
															<h6 class="mb-1 font-14">Payment from James Caviness</h6>
															<p class="mb-0 font-13 text-secondary">Refrence Id #3775420</p>
														</div>
													</div>
												</td>
												<td>Jan 18, 2021</td>
												<td>+536.00</td>
												<td>
													<div class="badge rounded-pill bg-success w-100">Completed</div>
												</td>
											</tr>
											<tr>
												<td>
													<div class="d-flex align-items-center">
														<div class="">
															<img src="assets/images/avatars/avatar-10.png" class="rounded-circle" width="46" height="46" alt="" />
														</div>
														<div class="ms-2">
															<h6 class="mb-1 font-14">Payment from Peter Costanzo</h6>
															<p class="mb-0 font-13 text-secondary">Refrence Id #3768920</p>
														</div>
													</div>
												</td>
												<td>Jan 19, 2021</td>
												<td>+536.00</td>
												<td>
													<div class="badge rounded-pill bg-success w-100">Completed</div>
												</td>
											</tr>
											<tr>
												<td>
													<div class="d-flex align-items-center">
														<div class="">
															<img src="assets/images/avatars/avatar-11.png" class="rounded-circle" width="46" height="46" alt="" />
														</div>
														<div class="ms-2">
															<h6 class="mb-1 font-14">Payment from Johnny Seitz</h6>
															<p class="mb-0 font-13 text-secondary">Refrence Id #9673520</p>
														</div>
													</div>
												</td>
												<td>Jan 20, 2021</td>
												<td>+86.00</td>
												<td>
													<div class="badge rounded-pill bg-danger w-100">Declined</div>
												</td>
											</tr>
											<tr>
												<td>
													<div class="d-flex align-items-center">
														<div class="">
															<img src="assets/images/avatars/avatar-12.png" class="rounded-circle" width="46" height="46" alt="" />
														</div>
														<div class="ms-2">
															<h6 class="mb-1 font-14">Payment from Lewis Cruz</h6>
															<p class="mb-0 font-13 text-secondary">Refrence Id #8576420</p>
														</div>
													</div>
												</td>
												<td>Jan 18, 2021</td>
												<td>+536.00</td>
												<td>
													<div class="badge rounded-pill bg-success w-100">Completed</div>
												</td>
											</tr>
											<tr>
												<td>
													<div class="d-flex align-items-center">
														<div class="">
															<img src="assets/images/avatars/avatar-13.png" class="rounded-circle" width="46" height="46" alt="" />
														</div>
														<div class="ms-2">
															<h6 class="mb-1 font-14">Payment from David Buckley</h6>
															<p class="mb-0 font-13 text-secondary">Refrence Id #8576420</p>
														</div>
													</div>
												</td>
												<td>Jan 22, 2021</td>
												<td>+854.00</td>
												<td>
													<div class="badge rounded-pill bg-info text-dark w-100">In Progress</div>
												</td>
											</tr>
											<tr>
												<td>
													<div class="d-flex align-items-center">
														<div class="">
															<img src="assets/images/avatars/avatar-14.png" class="rounded-circle" width="46" height="46" alt="" />
														</div>
														<div class="ms-2">
															<h6 class="mb-1 font-14">Payment from Thomas Wheeler</h6>
															<p class="mb-0 font-13 text-secondary">Refrence Id #4278620</p>
														</div>
													</div>
												</td>
												<td>Jan 18, 2021</td>
												<td>+536.00</td>
												<td>
													<div class="badge rounded-pill bg-success w-100">Completed</div>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-4">
						<div class="card radius-10 overflow-hidden">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div class="">
										<p class="mb-1 text-secondary">Bounce Rate</p>
										<h4 class="mb-0">48.32%</h4>
									</div>
									<div class="ms-auto">
										<p class="mb-0 font-13 text-success">+12.34 Increase</p>
										<p class="mb-0 font-13 text-secondary">From Last Week</p>
									</div>
								</div>
							</div>
							<div id="chart12"></div>
						</div>
						<div class="card radius-10 overflow-hidden">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div class="">
										<p class="mb-1 text-secondary">Pageviews</p>
										<h4 class="mb-0">52.64%</h4>
									</div>
									<div class="ms-auto">
										<p class="mb-0 font-13 text-success">+21.34 Increase</p>
										<p class="mb-0 font-13 text-secondary">From Last Week</p>
									</div>
								</div>
							</div>
							<div id="chart13"></div>
						</div>
						<div class="card radius-10 overflow-hidden">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div class="">
										<p class="mb-1 text-secondary">New Sessions</p>
										<h4 class="mb-0">68.23%</h4>
									</div>
									<div class="ms-auto">
										<p class="mb-0 font-13 text-success">+18.42 Increase</p>
										<p class="mb-0 font-13 text-secondary">From Last Week</p>
									</div>
								</div>
							</div>
							<div id="chart14"></div>
						</div>
					</div>
				</div>
				<!--end row-->
				<div class="row row-cols-1 row-cols-lg-3">
					<div class="col d-flex">
						<div class="card radius-10 w-100">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<h5 class="mb-0">Top Categories</h5>
									</div>
									<div class="dropdown ms-auto">
										<a class="dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown"><i class='bx bx-dots-horizontal-rounded font-22 text-option'></i>
										</a>
										<ul class="dropdown-menu">
											<li><a class="dropdown-item" href="javascript:;">Action</a>
											</li>
											<li><a class="dropdown-item" href="javascript:;">Another action</a>
											</li>
											<li>
												<hr class="dropdown-divider">
											</li>
											<li><a class="dropdown-item" href="javascript:;">Something else here</a>
											</li>
										</ul>
									</div>
								</div>
								<div class="mt-5" id="chart15"></div>
							</div>
							<ul class="list-group list-group-flush">
								<li class="list-group-item d-flex bg-transparent justify-content-between align-items-center">Kids <span class="badge bg-success rounded-pill">25</span>
								</li>
								<li class="list-group-item d-flex bg-transparent justify-content-between align-items-center">Women <span class="badge bg-danger rounded-pill">10</span>
								</li>
								<li class="list-group-item d-flex bg-transparent justify-content-between align-items-center">Men <span class="badge bg-primary rounded-pill">65</span>
								</li>
								<li class="list-group-item d-flex bg-transparent justify-content-between align-items-center">Furniture <span class="badge bg-warning text-dark rounded-pill">14</span>
								</li>
							</ul>
						</div>
					</div>
					<div class="col d-flex">
						<div class="card radius-10 w-100">
							<div class="card-body">
								<p class="font-weight-bold mb-1 text-secondary">Visitors</p>
								<div class="d-flex align-items-center">
									<div>
										<h4 class="mb-0">43,540</h4>
									</div>
									<div class="">
										<p class="mb-0 align-self-center font-weight-bold text-success ms-2">4.4 <i class='bx bxs-up-arrow-alt mr-2'></i>
										</p>
									</div>
								</div>
								<div id="chart21"></div>
							</div>
						</div>
					</div>
					<div class="col d-flex">
						<div class="card radius-10 w-100 overflow-hidden">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<h5 class="mb-0">Sales Overiew</h5>
									</div>
									<div class="dropdown ms-auto">
										<a class="dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown"><i class='bx bx-dots-horizontal-rounded font-22 text-option'></i>
										</a>
										<ul class="dropdown-menu">
											<li><a class="dropdown-item" href="javascript:;">Action</a>
											</li>
											<li><a class="dropdown-item" href="javascript:;">Another action</a>
											</li>
											<li>
												<hr class="dropdown-divider">
											</li>
											<li><a class="dropdown-item" href="javascript:;">Something else here</a>
											</li>
										</ul>
									</div>
								</div>
								<div class="mt-5" id="chart20"></div>
							</div>
							<div class="card-footer bg-transparent border-top-0">
								<div class="d-flex align-items-center justify-content-between text-center">
									<div>
										<h6 class="mb-1 font-weight-bold">$289.42</h6>
										<p class="mb-0 text-secondary">Last Week</p>
									</div>
									<div class="mb-1">
										<h6 class="mb-1 font-weight-bold">$856.14</h6>
										<p class="mb-0 text-secondary">Last Month</p>
									</div>
									<div>
										<h6 class="mb-1 font-weight-bold">$987,25</h6>
										<p class="mb-0 text-secondary">Last Year</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--end row-->
				<div class="row">
					<div class="col-12 col-xl-6 d-flex">
						<div class="card radius-10 w-100">
							<div class="card-header">
								<div class="d-flex align-items-center">
									<div>
										<h5 class="mb-0">New Customers</h5>
									</div>
									<div class="dropdown ms-auto">
										<a class="dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown"><i class='bx bx-dots-horizontal-rounded font-22 text-option'></i>
										</a>
										<ul class="dropdown-menu">
											<li><a class="dropdown-item" href="javascript:;">Action</a>
											</li>
											<li><a class="dropdown-item" href="javascript:;">Another action</a>
											</li>
											<li>
												<hr class="dropdown-divider">
											</li>
											<li><a class="dropdown-item" href="javascript:;">Something else here</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="customers-list p-3 mb-3">
								<div class="customers-list-item d-flex align-items-center border-bottom p-2 cursor-pointer">
									<div class="">
										<img src="assets/images/avatars/avatar-3.png" class="rounded-circle" width="46" height="46" alt="" />
									</div>
									<div class="ms-2">
										<h6 class="mb-1 font-14">Emy Jackson</h6>
										<p class="mb-0 font-13 text-secondary">emy_jac@xyz.com</p>
									</div>
									<div class="list-inline d-flex customers-contacts ms-auto">	<a href="javascript:;" class="list-inline-item"><i class='bx bxs-envelope'></i></a>
										<a href="javascript:;" class="list-inline-item"><i class='bx bxs-microphone'></i></a>
										<a href="javascript:;" class="list-inline-item"><i class='bx bx-dots-vertical-rounded'></i></a>
									</div>
								</div>
								<div class="customers-list-item d-flex align-items-center border-bottom p-2 cursor-pointer">
									<div class="">
										<img src="assets/images/avatars/avatar-4.png" class="rounded-circle" width="46" height="46" alt="" />
									</div>
									<div class="ms-2">
										<h6 class="mb-1 font-14">Martin Hughes</h6>
										<p class="mb-0 font-13 text-secondary">martin.hug@xyz.com</p>
									</div>
									<div class="list-inline d-flex customers-contacts ms-auto">	<a href="javascript:;" class="list-inline-item"><i class='bx bxs-envelope'></i></a>
										<a href="javascript:;" class="list-inline-item"><i class='bx bxs-microphone'></i></a>
										<a href="javascript:;" class="list-inline-item"><i class='bx bx-dots-vertical-rounded'></i></a>
									</div>
								</div>
								<div class="customers-list-item d-flex align-items-center border-bottom p-2 cursor-pointer">
									<div class="">
										<img src="assets/images/avatars/avatar-23.png" class="rounded-circle" width="46" height="46" alt="" />
									</div>
									<div class="ms-2">
										<h6 class="mb-1 font-14">Laura Madison</h6>
										<p class="mb-0 font-13 text-secondary">laura_01@xyz.com</p>
									</div>
									<div class="list-inline d-flex customers-contacts ms-auto">	<a href="javascript:;" class="list-inline-item"><i class='bx bxs-envelope'></i></a>
										<a href="javascript:;" class="list-inline-item"><i class='bx bxs-microphone'></i></a>
										<a href="javascript:;" class="list-inline-item"><i class='bx bx-dots-vertical-rounded'></i></a>
									</div>
								</div>
								<div class="customers-list-item d-flex align-items-center border-bottom p-2 cursor-pointer">
									<div class="">
										<img src="assets/images/avatars/avatar-24.png" class="rounded-circle" width="46" height="46" alt="" />
									</div>
									<div class="ms-2">
										<h6 class="mb-1 font-14">Shoan Stephen</h6>
										<p class="mb-0 font-13 text-secondary">s.stephen@xyz.com</p>
									</div>
									<div class="list-inline d-flex customers-contacts ms-auto">	<a href="javascript:;" class="list-inline-item"><i class='bx bxs-envelope'></i></a>
										<a href="javascript:;" class="list-inline-item"><i class='bx bxs-microphone'></i></a>
										<a href="javascript:;" class="list-inline-item"><i class='bx bx-dots-vertical-rounded'></i></a>
									</div>
								</div>
								<div class="customers-list-item d-flex align-items-center border-bottom p-2 cursor-pointer">
									<div class="">
										<img src="assets/images/avatars/avatar-20.png" class="rounded-circle" width="46" height="46" alt="" />
									</div>
									<div class="ms-2">
										<h6 class="mb-1 font-14">Keate Medona</h6>
										<p class="mb-0 font-13 text-secondary">Keate@xyz.com</p>
									</div>
									<div class="list-inline d-flex customers-contacts ms-auto">	<a href="javascript:;" class="list-inline-item"><i class='bx bxs-envelope'></i></a>
										<a href="javascript:;" class="list-inline-item"><i class='bx bxs-microphone'></i></a>
										<a href="javascript:;" class="list-inline-item"><i class='bx bx-dots-vertical-rounded'></i></a>
									</div>
								</div>
								<div class="customers-list-item d-flex align-items-center border-bottom p-2 cursor-pointer">
									<div class="">
										<img src="assets/images/avatars/avatar-16.png" class="rounded-circle" width="46" height="46" alt="" />
									</div>
									<div class="ms-2">
										<h6 class="mb-1 font-14">Paul Benn</h6>
										<p class="mb-0 font-13 text-secondary">pauly.b@xyz.com</p>
									</div>
									<div class="list-inline d-flex customers-contacts ms-auto">	<a href="javascript:;" class="list-inline-item"><i class='bx bxs-envelope'></i></a>
										<a href="javascript:;" class="list-inline-item"><i class='bx bxs-microphone'></i></a>
										<a href="javascript:;" class="list-inline-item"><i class='bx bx-dots-vertical-rounded'></i></a>
									</div>
								</div>
								<div class="customers-list-item d-flex align-items-center border-bottom p-2 cursor-pointer">
									<div class="">
										<img src="assets/images/avatars/avatar-25.png" class="rounded-circle" width="46" height="46" alt="" />
									</div>
									<div class="ms-2">
										<h6 class="mb-1 font-14">Winslet Maya</h6>
										<p class="mb-0 font-13 text-secondary">winslet_02@xyz.com</p>
									</div>
									<div class="list-inline d-flex customers-contacts ms-auto">	<a href="javascript:;" class="list-inline-item"><i class='bx bxs-envelope'></i></a>
										<a href="javascript:;" class="list-inline-item"><i class='bx bxs-microphone'></i></a>
										<a href="javascript:;" class="list-inline-item"><i class='bx bx-dots-vertical-rounded'></i></a>
									</div>
								</div>
								<div class="customers-list-item d-flex align-items-center border-bottom p-2 cursor-pointer">
									<div class="">
										<img src="assets/images/avatars/avatar-11.png" class="rounded-circle" width="46" height="46" alt="" />
									</div>
									<div class="ms-2">
										<h6 class="mb-1 font-14">Bruno Bernard</h6>
										<p class="mb-0 font-13 text-secondary">bruno.b@xyz.com</p>
									</div>
									<div class="list-inline d-flex customers-contacts ms-auto">	<a href="javascript:;" class="list-inline-item"><i class='bx bxs-envelope'></i></a>
										<a href="javascript:;" class="list-inline-item"><i class='bx bxs-microphone'></i></a>
										<a href="javascript:;" class="list-inline-item"><i class='bx bx-dots-vertical-rounded'></i></a>
									</div>
								</div>
								<div class="customers-list-item d-flex align-items-center border-bottom p-2 cursor-pointer">
									<div class="">
										<img src="assets/images/avatars/avatar-17.png" class="rounded-circle" width="46" height="46" alt="" />
									</div>
									<div class="ms-2">
										<h6 class="mb-1 font-14">Merlyn Dona</h6>
										<p class="mb-0 font-13 text-secondary">merlyn.d@xyz.com</p>
									</div>
									<div class="list-inline d-flex customers-contacts ms-auto">	<a href="javascript:;" class="list-inline-item"><i class='bx bxs-envelope'></i></a>
										<a href="javascript:;" class="list-inline-item"><i class='bx bxs-microphone'></i></a>
										<a href="javascript:;" class="list-inline-item"><i class='bx bx-dots-vertical-rounded'></i></a>
									</div>
								</div>
								<div class="customers-list-item d-flex align-items-center border-bottom p-2 cursor-pointer">
									<div class="">
										<img src="assets/images/avatars/avatar-7.png" class="rounded-circle" width="46" height="46" alt="" />
									</div>
									<div class="ms-2">
										<h6 class="mb-1 font-14">Alister Campel</h6>
										<p class="mb-0 font-13 text-secondary">alister_42@xyz.com</p>
									</div>
									<div class="list-inline d-flex customers-contacts ms-auto">	<a href="javascript:;" class="list-inline-item"><i class='bx bxs-envelope'></i></a>
										<a href="javascript:;" class="list-inline-item"><i class='bx bxs-microphone'></i></a>
										<a href="javascript:;" class="list-inline-item"><i class='bx bx-dots-vertical-rounded'></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-12 col-xl-6 d-flex">
						<div class="card radius-10 w-100">
							<div class="card-header">
								<div class="d-flex align-items-center">
									<div>
										<h5 class="mb-0">Orders Summary</h5>
									</div>
									<div class="dropdown ms-auto">
										<a class="dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown"><i class='bx bx-dots-horizontal-rounded font-22 text-option'></i>
										</a>
										<ul class="dropdown-menu">
											<li><a class="dropdown-item" href="javascript:;">Action</a>
											</li>
											<li><a class="dropdown-item" href="javascript:;">Another action</a>
											</li>
											<li>
												<hr class="dropdown-divider">
											</li>
											<li><a class="dropdown-item" href="javascript:;">Something else here</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="card-body">
								<div class="row m-0 row-cols-1 row-cols-md-3">
									<div class="col border-end">
										<div id="chart16"></div>
									</div>
									<div class="col border-end">
										<div id="chart17"></div>
									</div>
									<div class="col">
										<div id="chart18"></div>
									</div>
								</div>
								<div id="chart19"></div>
							</div>
						</div>
					</div>
				</div>
				<!--end row-->
				<div class="card radius-10">
					<div class="card-body">
						<div class="d-flex align-items-center">
							<div>
								<h5 class="mb-0">Recent Orders</h5>
							</div>
							<div class="font-22 ms-auto"><i class='bx bx-dots-horizontal-rounded'></i>
							</div>
						</div>
						<hr/>
						<div class="table-responsive">
							<table class="table align-middle mb-0">
								<thead class="table-light">
									<tr>
										<th>Order id</th>
										<th>Product</th>
										<th>Customer</th>
										<th>Date</th>
										<th>Price</th>
										<th>Status</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>#897656</td>
										<td>
											<div class="d-flex align-items-center">
												<div class="recent-product-img">
													<img src="assets/images/icons/chair.png" alt="">
												</div>
												<div class="ms-2">
													<h6 class="mb-1 font-14">Light Blue Chair</h6>
												</div>
											</div>
										</td>
										<td>Brooklyn Zeo</td>
										<td>12 Jul 2020</td>
										<td>$64.00</td>
										<td>
											<div class="d-flex align-items-center text-danger">	<i class='bx bx-radio-circle-marked bx-burst bx-rotate-90 align-middle font-18 me-1'></i>
												<span>Pending</span>
											</div>
										</td>
										<td>
											<div class="d-flex order-actions">	<a href="javascript:;" class=""><i class="bx bx-cog"></i></a>
												<a href="javascript:;" class="ms-4"><i class='bx bx-down-arrow-alt'></i></a>
											</div>
										</td>
									</tr>
									<tr>
										<td>#987549</td>
										<td>
											<div class="d-flex align-items-center">
												<div class="recent-product-img">
													<img src="assets/images/icons/shoes.png" alt="">
												</div>
												<div class="ms-2">
													<h6 class="mb-1 font-14">Green Sport Shoes</h6>
												</div>
											</div>
										</td>
										<td>Martin Hughes</td>
										<td>14 Jul 2020</td>
										<td>$45.00</td>
										<td>
											<div class="d-flex align-items-center text-primary">	<i class='bx bx-radio-circle-marked bx-burst bx-rotate-90 align-middle font-18 me-1'></i>
												<span>Dispatched</span>
											</div>
										</td>
										<td>
											<div class="d-flex order-actions">	<a href="javascript:;" class=""><i class="bx bx-cog"></i></a>
												<a href="javascript:;" class="ms-4"><i class='bx bx-down-arrow-alt'></i></a>
											</div>
										</td>
									</tr>
									<tr>
										<td>#685749</td>
										<td>
											<div class="d-flex align-items-center">
												<div class="recent-product-img">
													<img src="assets/images/icons/headphones.png" alt="">
												</div>
												<div class="ms-2">
													<h6 class="mb-1 font-14">Red Headphone 07</h6>
												</div>
											</div>
										</td>
										<td>Shoan Stephen</td>
										<td>15 Jul 2020</td>
										<td>$67.00</td>
										<td>
											<div class="d-flex align-items-center text-success">	<i class='bx bx-radio-circle-marked bx-burst bx-rotate-90 align-middle font-18 me-1'></i>
												<span>Completed</span>
											</div>
										</td>
										<td>
											<div class="d-flex order-actions">	<a href="javascript:;" class=""><i class="bx bx-cog"></i></a>
												<a href="javascript:;" class="ms-4"><i class='bx bx-down-arrow-alt'></i></a>
											</div>
										</td>
									</tr>
									<tr>
										<td>#887459</td>
										<td>
											<div class="d-flex align-items-center">
												<div class="recent-product-img">
													<img src="assets/images/icons/idea.png" alt="">
												</div>
												<div class="ms-2">
													<h6 class="mb-1 font-14">Mini Laptop Device</h6>
												</div>
											</div>
										</td>
										<td>Alister Campel</td>
										<td>18 Jul 2020</td>
										<td>$87.00</td>
										<td>
											<div class="d-flex align-items-center text-success">	<i class='bx bx-radio-circle-marked bx-burst bx-rotate-90 align-middle font-18 me-1'></i>
												<span>Completed</span>
											</div>
										</td>
										<td>
											<div class="d-flex order-actions">	<a href="javascript:;" class=""><i class="bx bx-cog"></i></a>
												<a href="javascript:;" class="ms-4"><i class='bx bx-down-arrow-alt'></i></a>
											</div>
										</td>
									</tr>
									<tr>
										<td>#335428</td>
										<td>
											<div class="d-flex align-items-center">
												<div class="recent-product-img">
													<img src="assets/images/icons/user-interface.png" alt="">
												</div>
												<div class="ms-2">
													<h6 class="mb-1 font-14">Purple Mobile Phone</h6>
												</div>
											</div>
										</td>
										<td>Keate Medona</td>
										<td>20 Jul 2020</td>
										<td>$75.00</td>
										<td>
											<div class="d-flex align-items-center text-danger">	<i class='bx bx-radio-circle-marked bx-burst bx-rotate-90 align-middle font-18 me-1'></i>
												<span>Pending</span>
											</div>
										</td>
										<td>
											<div class="d-flex order-actions">	<a href="javascript:;" class=""><i class="bx bx-cog"></i></a>
												<a href="javascript:;" class="ms-4"><i class='bx bx-down-arrow-alt'></i></a>
											</div>
										</td>
									</tr>
									<tr>
										<td>#224578</td>
										<td>
											<div class="d-flex align-items-center">
												<div class="recent-product-img">
													<img src="assets/images/icons/watch.png" alt="">
												</div>
												<div class="ms-2">
													<h6 class="mb-1 font-14">Smart Hand Watch</h6>
												</div>
											</div>
										</td>
										<td>Winslet Maya</td>
										<td>22 Jul 2020</td>
										<td>$80.00</td>
										<td>
											<div class="d-flex align-items-center text-primary">	<i class='bx bx-radio-circle-marked bx-burst bx-rotate-90 align-middle font-18 me-1'></i>
												<span>Dispatched</span>
											</div>
										</td>
										<td>
											<div class="d-flex order-actions">	<a href="javascript:;" class=""><i class="bx bx-cog"></i></a>
												<a href="javascript:;" class="ms-4"><i class='bx bx-down-arrow-alt'></i></a>
											</div>
										</td>
									</tr>
									<tr>
										<td>#447896</td>
										<td>
											<div class="d-flex align-items-center">
												<div class="recent-product-img">
													<img src="assets/images/icons/tshirt.png" alt="">
												</div>
												<div class="ms-2">
													<h6 class="mb-1 font-14">T-Shirt Blue</h6>
												</div>
											</div>
										</td>
										<td>Emy Jackson</td>
										<td>28 Jul 2020</td>
										<td>$96.00</td>
										<td>
											<div class="d-flex align-items-center text-danger">	<i class='bx bx-radio-circle-marked bx-burst bx-rotate-90 align-middle font-18 me-1'></i>
												<span>Pending</span>
											</div>
										</td>
										<td>
											<div class="d-flex order-actions">	<a href="javascript:;" class=""><i class="bx bx-cog"></i></a>
												<a href="javascript:;" class="ms-4"><i class='bx bx-down-arrow-alt'></i></a>
											</div>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--end page wrapper -->
		<!--start overlay-->
		 <div class="overlay toggle-icon"></div>
		<!--end overlay-->
		<!--Start Back To Top Button-->
		  <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
		<!--End Back To Top Button-->
		<footer class="page-footer">
			<p class="mb-0">Copyright © 2023. All right reserved.</p>
		</footer>
	</div>
	<!--end wrapper-->


	<!-- search modal -->
    <div class="modal" id="SearchModal" tabindex="-1">
		<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-fullscreen-md-down">
		  <div class="modal-content">
			<div class="modal-header gap-2">
			  <div class="position-relative popup-search w-100">
				<input class="form-control form-control-lg ps-5 border border-3 border-primary" type="search" placeholder="Search">
				<span class="position-absolute top-50 search-show ms-3 translate-middle-y start-0 top-50 fs-4"><i class='bx bx-search'></i></span>
			  </div>
			  <button type="button" class="btn-close d-md-none" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<div class="search-list">
				   <p class="mb-1">Html Templates</p>
				   <div class="list-group">
					  <a href="javascript:;" class="list-group-item list-group-item-action active align-items-center d-flex gap-2 py-1"><i class='bx bxl-angular fs-4'></i>Best Html Templates</a>
					  <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1"><i class='bx bxl-vuejs fs-4'></i>Html5 Templates</a>
					  <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1"><i class='bx bxl-magento fs-4'></i>Responsive Html5 Templates</a>
					  <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1"><i class='bx bxl-shopify fs-4'></i>eCommerce Html Templates</a>
				   </div>
				   <p class="mb-1 mt-3">Web Designe Company</p>
				   <div class="list-group">
					  <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1"><i class='bx bxl-windows fs-4'></i>Best Html Templates</a>
					  <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1"><i class='bx bxl-dropbox fs-4' ></i>Html5 Templates</a>
					  <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1"><i class='bx bxl-opera fs-4'></i>Responsive Html5 Templates</a>
					  <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1"><i class='bx bxl-wordpress fs-4'></i>eCommerce Html Templates</a>
				   </div>
				   <p class="mb-1 mt-3">Software Development</p>
				   <div class="list-group">
					  <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1"><i class='bx bxl-mailchimp fs-4'></i>Best Html Templates</a>
					  <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1"><i class='bx bxl-zoom fs-4'></i>Html5 Templates</a>
					  <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1"><i class='bx bxl-sass fs-4'></i>Responsive Html5 Templates</a>
					  <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1"><i class='bx bxl-vk fs-4'></i>eCommerce Html Templates</a>
				   </div>
				   <p class="mb-1 mt-3">Online Shoping Portals</p>
				   <div class="list-group">
					  <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1"><i class='bx bxl-slack fs-4'></i>Best Html Templates</a>
					  <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1"><i class='bx bxl-skype fs-4'></i>Html5 Templates</a>
					  <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1"><i class='bx bxl-twitter fs-4'></i>Responsive Html5 Templates</a>
					  <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1"><i class='bx bxl-vimeo fs-4'></i>eCommerce Html Templates</a>
				   </div>
				</div>
			</div>
		  </div>
		</div>
	  </div>
    <!-- end search modal -->




	<!--start switcher-->
	<div class="switcher-wrapper">
		<div class="switcher-btn"> <i class='bx bx-cog bx-spin'></i>
		</div>
		<div class="switcher-body">
			<div class="d-flex align-items-center">
				<h5 class="mb-0 text-uppercase">Theme Customizer</h5>
				<button type="button" class="btn-close ms-auto close-switcher" aria-label="Close"></button>
			</div>
			<hr/>
			<h6 class="mb-0">Theme Styles</h6>
			<hr/>
			<div class="d-flex align-items-center justify-content-between">
				<div class="form-check">
					<input class="form-check-input" type="radio" name="flexRadioDefault" id="lightmode" checked>
					<label class="form-check-label" for="lightmode">Light</label>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="radio" name="flexRadioDefault" id="darkmode">
					<label class="form-check-label" for="darkmode">Dark</label>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="radio" name="flexRadioDefault" id="semidark">
					<label class="form-check-label" for="semidark">Semi Dark</label>
				</div>
			</div>
			<hr/>
			<div class="form-check">
				<input class="form-check-input" type="radio" id="minimaltheme" name="flexRadioDefault">
				<label class="form-check-label" for="minimaltheme">Minimal Theme</label>
			</div>
			<hr/>
			<h6 class="mb-0">Header Colors</h6>
			<hr/>
			<div class="header-colors-indigators">
				<div class="row row-cols-auto g-3">
					<div class="col">
						<div class="indigator headercolor1" id="headercolor1"></div>
					</div>
					<div class="col">
						<div class="indigator headercolor2" id="headercolor2"></div>
					</div>
					<div class="col">
						<div class="indigator headercolor3" id="headercolor3"></div>
					</div>
					<div class="col">
						<div class="indigator headercolor4" id="headercolor4"></div>
					</div>
					<div class="col">
						<div class="indigator headercolor5" id="headercolor5"></div>
					</div>
					<div class="col">
						<div class="indigator headercolor6" id="headercolor6"></div>
					</div>
					<div class="col">
						<div class="indigator headercolor7" id="headercolor7"></div>
					</div>
					<div class="col">
						<div class="indigator headercolor8" id="headercolor8"></div>
					</div>
				</div>
			</div>
			<hr/>
			<h6 class="mb-0">Sidebar Colors</h6>
			<hr/>
			<div class="header-colors-indigators">
				<div class="row row-cols-auto g-3">
					<div class="col">
						<div class="indigator sidebarcolor1" id="sidebarcolor1"></div>
					</div>
					<div class="col">
						<div class="indigator sidebarcolor2" id="sidebarcolor2"></div>
					</div>
					<div class="col">
						<div class="indigator sidebarcolor3" id="sidebarcolor3"></div>
					</div>
					<div class="col">
						<div class="indigator sidebarcolor4" id="sidebarcolor4"></div>
					</div>
					<div class="col">
						<div class="indigator sidebarcolor5" id="sidebarcolor5"></div>
					</div>
					<div class="col">
						<div class="indigator sidebarcolor6" id="sidebarcolor6"></div>
					</div>
					<div class="col">
						<div class="indigator sidebarcolor7" id="sidebarcolor7"></div>
					</div>
					<div class="col">
						<div class="indigator sidebarcolor8" id="sidebarcolor8"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--end switcher-->
	<!-- Bootstrap JS -->
	<script src="assets/js/bootstrap.bundle.min.js"></script>
	<!--plugins-->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/plugins/simplebar/js/simplebar.min.js"></script>
	<script src="assets/plugins/metismenu/js/metisMenu.min.js"></script>
	<script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
	<script src="assets/plugins/apexcharts-bundle/js/apexcharts.min.js"></script>
	<script src="assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
	<script src="assets/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>
	
	<script src="assets/js/index.js"></script>
	<!--app JS-->
	<script src="assets/js/app.js"></script>
</body>

</html>