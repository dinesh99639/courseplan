<?php
// session_start();
if(!isset($_SESSION)) 
{ 
    session_start(); 
}
require("../db.php");

$name = $_SESSION['name'];
$sid = $_SESSION['sid'];

$qry = "SELECT * FROM status where sid='$sid' ";
$status = mysqli_fetch_assoc(mysqli_query($db, $qry));

?>
		<script src="../js/jquery.min.js"></script>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<!-- <link rel="stylesheet" href="../header/sidebar.css"> -->
		<style type="text/css">
			.header
			{
				height: 60px;
				background-color: rgb(52, 69, 180);
			}
			.header h2 .logo {
			  color: #fff;
			}

			.header h1 .logo span {
			  font-size: 14px;
			  color: #44bef1;
			  display: block;
			}
			.header .menu ul
			{
				margin: 0;
			}
			.menu_items li
			{
				padding-top: 25px;
			}
			.header .menu li
			{
				display: block;
				float: left;
			}
			.header .menu li>a
			{
				color: white;
				text-decoration: none;
				font-size: 20px;
			}
		</style>
		<div>
			<style scoped>
		        @import "../header/sidebar.css";
		        @import "../header/header.css";
		    </style>

		    <div class="header">
			  	
			  	<div class="menu">
			  		<ul>
			  			<li><h2 style="margin: 0!important;padding: 12px;"><a href="../dashboard" class="logo">Course Files</a></h2></li>
			  			<!-- <li style="color: white;font-size: 50px;font-weight: 100;">|</li> -->
			  			<!-- <div class="menu_items">
				  			<li style="margin-left: 50px;"><a href="../dashboard">Dashboard</a></li>
			  			</div> -->
			  			<li style="float: right;color: white; font-size: 20px;margin-right: 10px;padding: 15px;"><a href="../login/logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>

			  			<li style="float: right;color: white; font-size: 20px;margin-right: 10px;padding: 15px;"><i class="fa fa-user" aria-hidden="true"></i> &nbsp;<?php echo $name ?></li>
			  		</ul>
			  	</div>
		    	
		    </div>

			<div class="wrapper d-flex align-items-stretch">
				<nav id="sidebar">
					<div class="custom-menu">
						<button type="button" id="sidebarCollapse" class="btn btn-primary">
				          <i class="fa fa-bars"></i>
				          <span class="sr-only">Toggle Menu</span>
				        </button>
			        </div>
					<div class="p-4">
			  		<h1><a href="" class="logo">ANITS <span>Course Files</span></a></h1>
		        <ul class="list-unstyled components mb-5">
		          
		          <li class="active"><a href="../dashboard/coursefile.php"><span class="fa fa-home mr-3"></span> Home</a></li>
		          
		          
		          <li><a href="../fileupload/index.php?page=individual_timetable">Individual Time Table<div style="float: right; margin-right: 10px;"><?php if ($status['individual_time_table']=="Completed") echo "<i class='fa fa-check fa-lg' aria-hidden='true'></i>"; ?></div></a></li>
				  
				  <li><a href="../fileupload/index.php?page=class_timetable">Class Time Table<div style="float: right; margin-right: 10px;"><?php if ($status['class_time_table']=="Completed") echo "<i class='fa fa-check fa-lg' aria-hidden='true'></i>"; ?></div></a></li>
				  
				  <li><a href="../fileupload/index.php?page=course_plan">Course plan<div style="float: right; margin-right: 10px;"><?php if ($status['course_plan']=="Completed") echo "<i class='fa fa-check fa-lg' aria-hidden='true'></i>"; ?></div></a></li>
				  
				  <li><a href="../fileupload/index.php?page=lesson_plan">Lesson plan<div style="float: right; margin-right: 10px;"><?php if ($status['lesson_plan']=="Completed") echo "<i class='fa fa-check fa-lg' aria-hidden='true'></i>"; ?></div></a></li>
				  
				  <li><a href="../paper/midpapers.php">Mid<div style="float: right; margin-right: 10px;"><?php if ($status['mid']=="Completed") echo "<i class='fa fa-check fa-lg' aria-hidden='true'></i>"; ?></div></a></li>
				  
				  <li><a href="../paper/review_index.php">Review</a></li>
				  
				  <li><a href="../paper/assignment.php">Assignment<div style="float: right; margin-right: 10px;"><?php if ($status['assignment']=="Completed") echo "<i class='fa fa-check fa-lg' aria-hidden='true'></i>"; ?></div></a></li>
				  
				  <li><a href="../fileupload/index.php?page=notes">Notes<div style="float: right; margin-right: 10px;"><?php if ($status['notes']=="Completed") echo "<i class='fa fa-check fa-lg' aria-hidden='true'></i>"; ?></div></a></li>
				  
				  <li><a href="../fileupload/index.php?page=old_question_papers">Old question papers</a></li>
				  
				  <li><a href="../paper/index.php">Open book test</a></li>
				  
				  <li><a href="../content_beyond_syllabus/index.php">Contents beyond syllabus</a></li>
				  
				  <li><a href="../tutorial/index.php">Tutorial classes<div style="float: right; margin-right: 10px;"><?php if ($status['tutorial']=="Completed") echo "<i class='fa fa-check fa-lg' aria-hidden='true'></i>"; ?></div></a></li>
				  
				  <li><a href="../quiz/index.php">Quiz<div style="float: right; margin-right: 10px;"><?php if ($status['quiz']=="Completed") echo "<i class='fa fa-check fa-lg' aria-hidden='true'></i>"; ?></div></a></li>
				  
				  <li><a href="../remedial/index.php">Remedial classes<div style="float: right; margin-right: 10px;"><?php if ($status['remedial']=="Completed") echo "<i class='fa fa-check fa-lg' aria-hidden='true'></i>"; ?></div></a></li>
				  
				  <li><a href="../fileupload/index.php?page=bright_student">Bright student</a></li>
				  
				  <!-- <a href="../fileupload">Course feedback</a> -->
				  <!-- <a href="../fileupload">Result analysis</a> -->
				  
				  <li><a href="../fileupload/index.php?page=co_po_attainment">Co-Po Attainment<div style="float: right; margin-right: 10px;"><?php if ($status['co_po']=="Completed") echo "<i class='fa fa-check fa-lg' aria-hidden='true'></i>"; ?></div></a></li>
				  
				  <li><a href="../roleplay/index.php">Role Play</a></li>
		        
		        </ul>

		      </div>
	    	</nav>
	    </div>
	</div>

    <script>
      $('#sidebar').toggleClass('active');
    	var fullHeight = function() {

		$('.js-fullheight').css('height', $(window).height());
		$(window).resize(function(){
			$('.js-fullheight').css('height', $(window).height());
		});

	};
	fullHeight();

	$('#sidebarCollapse').on('click', function () {
      $('#sidebar').toggleClass('active');
  });
    </script>