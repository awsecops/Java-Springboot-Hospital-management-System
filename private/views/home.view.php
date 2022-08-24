<?php $this->view('includes/header')?>
<?php $this->view('includes/nav')?>
	
<style>
	h1{
		font-size: 80px;
		color: limegreen;
	}

	a{
		text-decoration: none;
	}

	.card-header{
		font-weight: bold;
	}

	.card{
		min-width: 250px;
	}
	.center {
		border: 1px solid #FFFF00;
		display: flex;
		justify-content: center;
	}
	body, html {
  		height: 100%;
	}

	* {
		box-sizing: border-box;
	}

	.bg-image {
	/* The image used */
		background-image: url("students.jpg");

	/* Add the blur effect */
	filter: blur(8px);
		-webkit-filter: blur(8px);

	/* Full height */
	height: 100%;

	/* Center and scale the image nicely */
	background-position: center;
	background-repeat: no-repeat;
	background-size: cover;
	}

	/* Position text in the middle of the page/image */
	.bg-text {
	background-color: rgb(0,0,0); /* Fallback color */
	background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
	color: white;
	font-weight: bold;
	border: 3px solid #f1f1f1;
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%, -50%);
	z-index: 2;
	width: 80%;
	padding: 20px;
	text-align: center;
	}
</style>
		<div class="center">
		<img src="<?=ROOT?>/assets/students.jpg" class="img-fluid" alt="Responsive image">			
		</div>
		<div class="bg-image"></div>

			<div class="bg-text">
			<h1>Welcome to productive School</h1>
			<p>An Effective Student Management System</p>
		</div>
		
		<div class="center">
			<div class="container-fluid p-4 shadow mx-auto" style="max-width: 1000px;">
			<h4>Our Mission</h4>
			<p> Our mission is to make a holistic platform That students, Teachers, Administrators can use to work more efficiently. 
					Using this platforn, The students can easily sit for their tests online, remotely from their homes.
					Teachers can upload the questions and evaluate scripts from the portal.Administrators can Monitor the whole school system without any trouble.
					Also, as it is an all integrated platform, super-admins can easily add new schools,  delete and update according to their requirements.
					
				</p>		
			</div>
			<div class="container-fluid p-4 shadow mx-auto" style="max-width: 1000px;">
			<h4>Our Vision</h4>
			<p> Our Vison is to empower every school on the planet with the most useful administrative tools they need. 
				Also, to get every school from a single country under this one holistic platform so that quality education can
				be provided to any student located anywhere. We believe, Location can never be a barrier to education
				</p>		
			</div>
		</div>
	<div class="container-fluid p-4 shadow mx-auto" style="max-width: 1000px;">
		
	 
	 	<div class="row justify-content-center ">
		 <!-- if(Auth::access('super_admin')): -->
	 		<!-- <?php ?>
		 		<div class="card col-3 shadow rounded m-4 p-0 border">
	 				<a href="<?=ROOT?>/schools">
		 			<div class="card-header">SCHOOLS</div>
		 			<h1 class="text-center">
		 				<i class="fa fa-graduation-cap"></i>
		 			</h1>
		 			<div class="card-footer">View all schools</div>
	 				</a>
		 		</div>
		 	<?php ?> -->
			 <!-- if(Auth::access('admin')): -->
		 	<?php ?>
		 		<div class="card col-3 shadow rounded m-4 p-0 border">
	 				<a href="<?=ROOT?>/users">
		 			<div class="card-header">STAFF</div>
		 			<h1 class="text-center">
		 				<i class="fa fa-chalkboard-teacher"></i>
		 			</h1>
		 			<div class="card-footer">View all staff members</div>
		 			</a>
		 		</div>
		 	<?php?>
			 <!-- if(Auth::access('reception')): endif;-->
		 	<?php ?>
		 		<div class="card col-3 shadow rounded m-4 p-0 border">
	 				<a href="<?=ROOT?>/students">
		 			<div class="card-header">STUDENTS</div>
		 			<h1 class="text-center">
		 				<i class="fa fa-user-graduate"></i>
		 			</h1>
		 			<div class="card-footer">View all students</div>
		 			</a>
		 		</div>
		 	<?php ?>

		 		<div class="card col-3 shadow rounded m-4 p-0 border">
	 				<a href="<?=ROOT?>/classes">
		 			<div class="card-header">CLASSES</div>
		 			<h1 class="text-center">
		 				<i class="fa fa-university"></i>
		 			</h1>
		 			<div class="card-footer">View all classes</div>
		 			</a>
		 		</div>

		 		<div class="card col-3 shadow rounded m-4 p-0 border">
	 				<a href="<?=ROOT?>/tests">
		 			<div class="card-header">TESTS</div>
		 			<h1 class="text-center">
		 				<i class="fa fa-file-signature"></i>
		 			</h1>
		 			<div class="card-footer">View all tests</div>
		 			</a>
		 		</div>

		 		<?php ?>
		 		<!-- <div class="card col-3 shadow rounded m-4 p-0 border">
	 				<a href="<?=ROOT?>/statistics">
		 			<div class="card-header">STATISTICS</div>
		 			<h1 class="text-center">
		 				<i class="fa fa-chart-pie"></i>
		 			</h1>
		 			<div class="card-footer">View school statistics</div>
		 			</a>
		 		</div> -->

		 		<div class="card col-3 shadow rounded m-4 p-0 border">
	 				<a href="<?=ROOT?>/settings">
		 			<div class="card-header">SETTINGS</div>
		 			<h1 class="text-center">
		 				<i class="fa fa-cogs"></i>
		 			</h1>
		 			<div class="card-footer">View app settings</div>
		 			</a>
		 		</div>
		 		<?php ?>

		 		<div class="card col-3 shadow rounded m-4 p-0 border">
	 				<a href="<?=ROOT?>/profile">
		 			<div class="card-header">PROFILE</div>
		 			<h1 class="text-center">
		 				<i class="fa fa-id-card"></i>
		 			</h1>
		 			<div class="card-footer">View your profile</div>
		 			</a>
		 		</div>

		 		<div class="card col-3 shadow rounded m-4 p-0 border">
	 				<a href="<?=ROOT?>/logout">
		 			<div class="card-header">LOGOUT</div>
		 			<h1 class="text-center">
		 				<i class="fa fa-sign-out-alt"></i>
		 			</h1>
		 			<div class="card-footer">Logout from the system</div>
	 				</a>
		 		</div>

	 	</div>
	</div>
 
<?php $this->view('includes/footer')?>
