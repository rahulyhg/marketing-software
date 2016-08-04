<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dankboard Marketing</title>

    <!-- Bootstrap Core CSS -->
    <!--<link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">-->
    <?php 	echo $this->Html->css('../bower_components/bootstrap/dist/css/bootstrap.min.css'); ?>


    <!-- MetisMenu CSS -->
    <!--<link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">-->
    <?php 	echo $this->Html->css('../bower_components/metisMenu/dist/metisMenu.min.css'); ?>

    <!-- Timeline CSS -->
    <!--<link href="../css/timeline.css" rel="stylesheet">-->

    <!-- Custom CSS -->
    <!--<link href="../css/sb-admin-2.css" rel="stylesheet">-->

    <?php		
    	echo $this->Html->css('timeline.css');
		echo $this->Html->css('sb-admin-2.css');
    ?>
		<?php
		/* echo $this->fetch('timeline.css');
		echo $this->fetch('sb-admin-2css');
		echo $this->fetch('bootstrap.min.css');
				echo $this->fetch('metisMenu.min.css'); */
		?>
    <!-- Morris Charts CSS -->
    <!--<link href="../bower_components/morrisjs/morris.css" rel="stylesheet">-->
    <?php 	echo $this->Html->css('../bower_components/morrisjs/morris.css'); ?>
    <!-- Custom Fonts -->
    <!--<link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">-->
    <?php 	echo $this->Html->css('../bower_components/font-awesome/css/font-awesome.min.css'); ?>

		<?php
			//echo $this->Html->css('../bower_components/bootstrap/dist/css/bootstrap.min.css');

		//echo $this->Html->css('timeline.css');
		//echo $this->Html->css('sb-admin-2.css');
		//echo $this->Html->css('../bower_components/bootstrap/dist/css/bootstrap.min.css');
		//		echo $this->Html->css('../bower_components/metisMenu/dist/metisMenu.min.css');
		//		echo $this->Html->css('../bower_components/morrisjs/morris.css');
		//		echo $this->Html->css('../bower_components/font-awesome/css/font-awesome.min.css');

		?>


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
.timeline-body a {
	color: black;
}
#actions1 {
	color: #337ab7 !important;
}
    </style>
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Dankboard</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <!--<li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>Read All Messages</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>-->
                    <!-- /.dropdown-messages -->
                <!--</li>-->
                <!-- /.dropdown -->
                <!--<li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-tasks fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-tasks">
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 1</strong>
                                        <span class="pull-right text-muted">40% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            <span class="sr-only">40% Complete (success)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 2</strong>
                                        <span class="pull-right text-muted">20% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                            <span class="sr-only">20% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 3</strong>
                                        <span class="pull-right text-muted">60% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 4</strong>
                                        <span class="pull-right text-muted">80% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            <span class="sr-only">80% Complete (danger)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Tasks</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                </li>-->
                <!-- /.dropdown -->
                <!--<li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i> New Comment
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> Message Sent
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i> New Task
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-alerts -->
                <!--</li>-->
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                                <li>
                     				<?php echo $this->Html->link('Logout', array('controller' => 'users', 'action' => 'logout')); ?>
                                </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <?php echo $this->Html->link('<i class="fa fa-dashboard fa-fw"></i> Dashboard', array('controller' => 'activities', 'action' => 'feed'),  array('escape' => false)); ?>
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-leaf fa-fw"></i> Organizations<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                     				<?php echo $this->Html->link('View All', array('controller' => 'organizations', 'action' => 'index')); ?>
                     			</li>
                                <li>
                     				<?php echo $this->Html->link('Prospects', array('controller' => 'organizations', 'action' => 'prospects')); ?>
                                </li>
                                <li>
                     				<?php echo $this->Html->link('Leads', array('controller' => 'organizations', 'action' => 'leads')); ?>
                                </li>
                                <li>
                     				<?php echo $this->Html->link('Customers', array('controller' => 'organizations', 'action' => 'customers')); ?>
                                </li>
                               <li>
                     				<?php echo $this->Html->link('Search', array('controller' => 'organizations', 'action' => 'search')); ?>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>


                        <li>
                            <a href="#"><i class="fa fa-check-square fa-fw"></i> Tasks<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                     				<?php echo $this->Html->link('Open', array('controller' => 'tasks', 'action' => 'open')); ?>
                                </li>
                                <li>
                     				<?php echo $this->Html->link('Completed', array('controller' => 'tasks', 'action' => 'completed')); ?>
                                </li>
                                <li>
                     				<?php echo $this->Html->link('Search', array('controller' => 'tasks', 'action' => 'search')); ?>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <?php echo $this->Html->link('<i class="fa fa-envelope fa-fw"></i> Contacts', array('controller' => 'contacts', 'action' => 'index'),  array('escape' => false)); ?>

                        </li>      
                        <li>
                            <a href="#"><i class="fa fa-flag-checkered fa-fw"></i> Proposals<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                     				<?php echo $this->Html->link('Open', array('controller' => 'proposals', 'action' => 'open')); ?>
                                </li>
                                <li>
                     				<?php echo $this->Html->link('Completed', array('controller' => 'proposals', 'action' => 'paid')); ?>
                                </li>
                                <li>
                     				<?php echo $this->Html->link('Search', array('controller' => 'proposals', 'action' => 'search')); ?>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>                 
                        <!--<li>
                            <?php echo $this->Html->link('<i class="fa fa-flag-checkered fa-fw"></i> Proposals', array('controller' => 'proposals', 'action' => 'index'),  array('escape' => false)); ?>

                        </li>-->
                        <!--<li>
                            <?php echo $this->Html->link('<i class="fa fa-cubes fa-fw"></i> Marketing Campaigns', array('controller' => 'activities', 'action' => 'feed'),  array('escape' => false)); ?>

                        </li>                       
                        <li>
                            <?php echo $this->Html->link('<i class="fa fa-shield fa-fw"></i> Projects', array('controller' => 'activities', 'action' => 'feed'),  array('escape' => false)); ?>

                        </li>
                        <li>
                            <?php echo $this->Html->link('<i class="fa fa-futbol-o fa-fw"></i> Goals', array('controller' => 'activities', 'action' => 'feed'),  array('escape' => false)); ?>

                        </li>-->

                        <!--
                        <li>
                            <a href="index.html"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>                       
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Charts<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="flot.html">Flot Charts</a>
                                </li>
                                <li>
                                    <a href="morris.html">Morris.js Charts</a>
                                </li>
                            </ul>-->
                            <!-- /.nav-second-level -->
                       <!-- </li>
                        <li>
                            <a href="tables.html"><i class="fa fa-table fa-fw"></i> Tables</a>
                        </li>
                        <li>
                            <a href="forms.html"><i class="fa fa-edit fa-fw"></i> Forms</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-wrench fa-fw"></i> UI Elements<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="panels-wells.html">Panels and Wells</a>
                                </li>
                                <li>
                                    <a href="buttons.html">Buttons</a>
                                </li>
                                <li>
                                    <a href="notifications.html">Notifications</a>
                                </li>
                                <li>
                                    <a href="typography.html">Typography</a>
                                </li>
                                <li>
                                    <a href="icons.html"> Icons</a>
                                </li>
                                <li>
                                    <a href="grid.html">Grid</a>
                                </li>
                            </ul>-->
                            <!-- /.nav-second-level -->
                        <!--</li>
                        <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#">Second Level Item</a>
                                </li>
                                <li>
                                    <a href="#">Second Level Item</a>
                                </li>
                                <li>
                                    <a href="#">Third Level <span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                    </ul>-->
                                    <!-- /.nav-third-level -->
                                <!--</li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-files-o fa-fw"></i> Sample Pages<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="blank.html">Blank Page</a>
                                </li>
                                <li>
                                    <a href="login.html">Login Page</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        <!--</li>-->
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>


			<?php echo $this->Flash->render(); ?>

			<?php echo $this->fetch('content'); ?>

        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
 
		<?php


				echo $this->Html->script('../bower_components/jquery/dist/jquery.min.js');
				echo $this->Html->script('../bower_components/bootstrap/dist/js/bootstrap.min.js');
				echo $this->Html->script('../bower_components/metisMenu/dist/metisMenu.min.js');
				echo $this->Html->script('../bower_components/morrisjs/morris.min.js');
				echo $this->Html->script('../bower_components/raphael/raphael-min.js');
		echo $this->Html->script('../bower_components/morrisjs/morris-data.js');
		echo $this->Html->script('sb-admin-2.js');
		?>
    <!-- jQuery -->


</body>

</html>