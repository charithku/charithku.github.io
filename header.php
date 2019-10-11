<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <link rel="shortcut icon" href="./assets/images/favicon.png">

    <title>Header</title>

    <!--Core CSS -->
    <link href="./assets/bs3/css/bootstrap.min.css" rel="stylesheet">
		
    <link href="./assets/css/bootstrap-reset.css" rel="stylesheet">
    <link href="./assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
	
	<link rel="stylesheet" href="./assets/js/data-tables/DT_bootstrap.css" />
	

    <!-- Custom styles for this template -->
    <link href="./assets/css/style.css" rel="stylesheet">
    <link href="./assets/css/style-responsive.css" rel="stylesheet" />
	
    <link href="./assets/css-custom/inventory-styles.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]>
    <script src="./assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="./assets/https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="./assets/https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<section id="container" >
<!--header start-->
<header class="header fixed-top clearfix">
<!--logo start-->
<div class="brand">

    <a href="" class="logo">
        <!--<img src="http://website.icode7.com/assets/img/logo.png" alt="">-->
		<img src="./assets/images/mobitel.jpg" alt="">
    </a>
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars"></div>
    </div>
</div>
<!--logo end-->

<div class="top-nav clearfix">
    <!--search & user info start-->
    <ul class="nav pull-right top-menu">
        <li>
            <input type="text" class="form-control search" placeholder=" Search">
        </li>
        <!-- user login dropdown start-->
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
               <!-- <img alt="" src="./assets/images/avatar1_small.jpg">-->
                <span class="username"><?php
				session_start();
				echo $_SESSION['login_user'];
				?></span>
				
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu extended logout">
                <li><a href="#"><i class=" fa fa-suitcase"></i>Profile</a></li>
                <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
                <li><a href="./login.php"><i class="fa fa-key"></i> Log Out</a></li>
            </ul>
        </li>
        <!-- user login dropdown end -->
        <li>
            <div class="toggle-right-box">
                <div class="fa fa-bars"></div>
            </div>
        </li>
    </ul>
    <!--search & user info end-->
</div>
</header>
<!--header end-->
<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->            <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
            <li>  
			        <a href="javascript:;">
                    <i class="fa fa-dashboard"></i>
                    <span>Dashboard</span>
                </a>
				<ul class="sub">
				    <li><a href="./chart.php">Graphical View</a></li>
				    <li><a href="./request_table.php">Tabular View</a></li>
                    
					
                    
                </ul>
            </li>
			
			<li>  
			        <a href="javascript:;">
                    <i class="fa fa-bell"></i>
                    <span>Notifications</span>
                </a>
				<ul class="sub">
				    <li><a href="./toDo_table.php">ToDo List</a></li>
                    <li><a href="./FYI_table.php">FYI List</a></li>
					
                    
                </ul>
            </li>
			
			
			
            <li class="sub-menu">
                <a href="./tool_request.php">
				    <i class="fa fa-wrench"></i>
                    <span>Tool Request</span>
                </a>
                <!--<ul class="sub">
                    <li><a href="./assets/boxed_page.html">Boxed Page</a></li>
                    <li><a href="./assets/horizontal_menu.html">Horizontal Menu</a></li>
                    <li><a href="./assets/language_switch.html">Language Switch Bar</a></li>
                </ul>-->
            </li>
			
            <li class="sub-menu">
                <a href="./add_user.php" class="active">
                    <i class="fa fa-user"></i>
                    <span>Add User</span>
                </a>
               <!-- <ul class="sub">
                    <li><a href="./assets/general.html">General</a></li>
                    <li class="active"><a href="./assets/buttons.html">Buttons</a></li>
                    <li><a href="./assets/widget.html">Widget</a></li>
                    <li><a href="./assets/slider.html">Slider</a></li>
                    <li><a href="./assets/tree_view.html">Tree View</a></li>
                    <li><a href="./assets/nestable.html">Nestable</a></li>
                    <li><a href="./assets/grids.html">Grids</a></li>
                    <li><a href="./assets/calendar.html">Calender</a></li>
                    <li><a href="./assets/draggable_portlet.html">Draggable Portlet</a></li>
                </ul>-->
            </li>
            <li>
                <a href="./add_tool">
                    <i class="fa fa-bullhorn"></i>
                    <span>Add new itemCode</span>
                </a>
            </li>
            <!--<li class="sub-menu">
                <a href="./assets/javascript:;">
                    <i class="fa fa-th"></i>
                    <span>Data Tables</span>
                </a>
                <ul class="sub">
                    <li><a href="./assets/basic_table.html">Basic Table</a></li>
                    <li><a href="./assets/responsive_table.html">Responsive Table</a></li>
                    <li><a href="./assets/dynamic_table.html">Dynamic Table</a></li>
                    <li><a href="./assets/editable_table.html">Editable Table</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="./assets/javascript:;">
                    <i class="fa fa-tasks"></i>
                    <span>Form Components</span>
                </a>
                <ul class="sub">
                    <li><a href="./assets/form_component.html">Form Elements</a></li>
                    <li><a href="./assets/advanced_form.html">Advanced Components</a></li>
                    <li><a href="./assets/form_wizard.html">Form Wizard</a></li>
                    <li><a href="./assets/form_validation.html">Form Validation</a></li>
                    <li><a href="./assets/file_upload.html">Muliple File Upload</a></li>
                    
                    <li><a href="./assets/dropzone.html">Dropzone</a></li>
                    <li><a href="./assets/inline_editor.html">Inline Editor</a></li>

                </ul>
            </li>
            <li class="sub-menu">
                <a href="./assets/javascript:;">
                    <i class="fa fa-envelope"></i>
                    <span>Mail </span>
                </a>
                <ul class="sub">
                    <li><a href="./assets/mail.html">Inbox</a></li>
                    <li><a href="./assets/mail_compose.html">Compose Mail</a></li>
                    <li><a href="./assets/mail_view.html">View Mail</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="./assets/javascript:;">
                    <i class=" fa fa-bar-chart-o"></i>
                    <span>Charts</span>
                </a>
                <ul class="sub">
                    <li><a href="./assets/morris.html">Morris</a></li>
                    <li><a href="./assets/chartjs.html">Chartjs</a></li>
                    <li><a href="./assets/flot_chart.html">Flot Charts</a></li>
                    <li><a href="./assets/c3_chart.html">C3 Chart</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="./assets/javascript:;">
                    <i class=" fa fa-bar-chart-o"></i>
                    <span>Maps</span>
                </a>
                <ul class="sub">
                    <li><a href="./assets/google_map.html">Google Map</a></li>
                    <li><a href="./assets/vector_map.html">Vector Map</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="./assets/javascript:;">
                    <i class="fa fa-glass"></i>
                    <span>Extra</span>
                </a>
                <ul class="sub">
                    <li><a href="./assets/blank.html">Blank Page</a></li>
                    <li><a href="./assets/lock_screen.html">Lock Screen</a></li>
                    <li><a href="./assets/profile.html">Profile</a></li>
                    <li><a href="./assets/invoice.html">Invoice</a></li>
                    <li><a href="./assets/pricing_table.html">Pricing Table</a></li>
                    <li><a href="./assets/timeline.html">Timeline</a></li>                    
<li><a href="./assets/gallery.html">Media Gallery</a></li><li><a href="./assets/404.html">404 Error</a></li>
                    <li><a href="./assets/500.html">500 Error</a></li>
                    <li><a href="./assets/registration.html">Registration</a></li>
                </ul>
            </li>
            <li>
                <a href="./assets/login.html">
                    <i class="fa fa-user"></i>
                    <span>Login Page</span>
                </a>
            </li>
        </ul></div>  -->      
<!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->
    <!--main content start-->
    <!--<section id="main-content">
		<section class="wrapper">-->
		</section>