<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>
	<?php foreach($posts as $post){?>
		<?php echo $post->companyname;?>
	<?php }?> 
	</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet" />
    <link href="<?php echo base_url('assets/css/bootstrap-dashboard.css?v=2.0.1'); ?>" rel="stylesheet" />
	<link href="<?php echo base_url('assets/css/light-bootstrap-dashboard.css'); ?>" rel="stylesheet" />
	
</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-color="black">
        
            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="<?php echo base_url(); ?>employer/dashboard" class="simple-text">
						<img src="<?php echo base_url('assets/img/logos/logo.jpg'); ?>" alt="" class="logo2" />
					</a>
                </div>
                <ul class="nav">
                    <li>
                        <a class="nav-link" href="<?php echo base_url(); ?>employer/dashboard">
                            <i class="nc-icon nc-chart-pie-35"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="nav-item  active">
                        <a class="nav-link" href="<?php echo base_url(); ?>employer/applicants">
                            <i class="nc-icon nc-badge"></i>
                            <p>Applicants</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="<?php echo base_url(); ?>employer/jobs">
                            <i class="nc-icon nc-bag"></i>
                            <p>Jobs</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" aria-expanded="false"  data-toggle="collapse" href="#collapseComponents"data-parent="#exampleAccordion"><i class="nc-icon nc-simple-add"></i>
                                    <span class="notification">Recruitment</span></a>
					</li>
						<ul class="sidenav-second-level collapse" id="collapseComponents" style="list-style-type: none;">
							<li><a class="nav-link" href="<?php echo base_url(); ?>employer/selected">Selected</a></li>
							<li><a class="nav-link" href="<?php echo base_url(); ?>employer/hired">Hired</a></li>
						</ul>
                    

                </ul>
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg " color-on-scroll="500">
                <div class=" container-fluid  ">
                    <a class="navbar-brand"> View Applicant </a>
                    <button href="" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        
                        <ul class="navbar-nav ml-auto">
                             <form role="search" action="<?php echo base_url(); ?>employer/search" method="get">
                            <div class="input-group no-border">
                                <input required type="text" name="keyword" value="" class="form-control" placeholder="Search..." />
								
									<button class="btnsearch" type="submit">
										<i class="nc-icon nc-zoom-split"></i>
									</button>
                            </div>
                        </form>
                         <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="nc-icon nc-circle-09"></i>
                                    <p>
                                        <span class="d-lg-none d-md-block">Account</span>
                                    </p>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="<?php echo base_url(); ?>employer/dashboard"><i class="nc-icon nc-circle-09"></i>Profile</a>
									<a class="dropdown-item" href="<?php echo base_url(); ?>employer/setting"><i class="nc-icon nc-settings-gear-64"></i>Settings</a>
                                    <a class="dropdown-item" href="" data-toggle="modal" data-target="#exampleModal"><i class="nc-icon nc-button-power"></i>Logout</a>
                                </div>
                            </li>
                        </ul>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
            <div class="content">
                <div class="container-fluid">   
                        <div class="card card-user">
                             <div class="button-container mr-auto ml-auto">
							 <?php
									$file = $app[0]['picture']; //Let say If I put the file name Bang.png
									if($file!=""){
										echo '<img src="'.base_url('assets/img/picture/'.$file).'" alt="" class="pic center" />';
									} ?>
                                 <h4 class="text-center"><?php echo $app[0]['fname']; ?> <?php echo $app[0]['mname']; ?> <?php echo $app[0]['lname']; ?></h4>
                              </div>
                              <hr> <hr>
                               <div class="card-body">
								<p class="description text-center" >
									<i class="fa fa-phone"></i> <?php echo $app[0]['cnumber']; ?>
									<br/><i class="fa fa-envelope"></i> <?php echo $app[0]['email']; ?>
									<br/><i class="fa fa-home"></i>  <?php echo $app[0]['address']; ?>  <?php echo $app[0]['city']; ?>  <?php echo $app[0]['state']; ?>
									  <?php echo $app[0]['zipcode']; ?>
									<?php
									$file = $app[0]['resume']; //Let say If I put the file name Bang.png
									if($file!=""){
										echo '<br/><i class="fa fa-paperclip"></i><a href="'.base_url('employer/downloadresume?nama='.$file).'">Download Resume</a>';
									} ?>
									
								</p>   
                            </div>
                     </div> 
                </div>                  
                <div class="container-fluid">   
                    <div class="card card-user">
                            <div class="button-container mr-auto ml-auto">  
                               <h4>Personal Information</h4>    
                            </div>
                              <hr> <hr>
                        <div class="card-body">
                            <p class="description text-left" >
                                <b><br>Birthday:</b>  <?php echo $app[0]['bday']; ?>
                                <b><br>Nationality:</b> <?php echo $app[0]['nationality']; ?>
                                <b><br>Religion:</b> <?php echo $app[0]['religion']; ?>
                                <b><br>Gender:</b> <?php echo $app[0]['gender']; ?>
                                <b><br>Status:</b> <?php echo $app[0]['status']; ?>
                            </p>          
                        </div> 
                    </div> 
                </div>  
                <div class="container-fluid">                
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="button-container mr-auto ml-auto">  
                                <h4> Education</h4>
                            </div>
                               <div class="card-body table-responsive">
                                    <table class="table table-hover table-striped">
                                        <thead class=" text-primary">
                                            <th>
                                                Level
                                            </th>
                                            <th>
                                                School
                                            </th>
                                            <th>
                                                Address
                                            </th>
                                            <th>
                                                Schoolyear
                                            </th>
                                            <th class=" text-right">
                                                Honor
                                            </th>
                                        </thead>
                                        <tbody>
                                             <?php
											foreach($educ as $post){
											echo '	<tr>	
												<td>'.$post['level'].'</td>
												<td>
                                                    '.$post['school'].'
                                                </td>
												<td>
                                                    '.$post['address'].'
                                                </td>
                                                <td>
                                                    '.$post['startyear'].' - '.$post['endyear'].'
                                                </td>
												<td>
													'.$post['honor'].'
												</td>
											</tr>
											';
											}
										?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>  
                <div class="container-fluid">  
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="button-container mr-auto ml-auto">  
                                <h4> Experiences</h4>
                            </div>
                               <div class="card-body table-responsive">
                                    <table class="table table-hover table-striped">
                                        <thead class=" text-primary">
                                            <th>
                                                Company
                                            </th>
                                            <th>
                                                Job
                                            </th>
                                            <th class=" text-right">
                                                Years
                                            </th>
                                        </thead>
                                        <tbody>
                                             <?php
											foreach($exp as $post){
											echo '	<tr>	
												<td>'.$post['company'].'</td>
												<td>
                                                    '.$post['job'].'
                                                </td>
												<td>
                                                    '.$post['years'].'
                                                </td>
											</tr>
											';
											}
										?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>               
                <div class="container-fluid">   
                    <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="button-container mr-auto ml-auto">  
                                <h4>Skills</h4>
                            </div>
                               <div class="card-body table-responsive">
                                    <table class="table table-hover table-striped">
                                        <thead class=" text-primary">
                                            <th>
                                               Skills
                                            </th>
                                        </thead>
                                        <tbody>
                                             <?php
											foreach($skill as $post){
											echo '	<tr>	
												<td>
                                                    '.$post['skill'].'
                                                </td>
												
											</tr>
											';
											}
										?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
						<button type="button" style="float: right;" class="btn btn-info" onclick="window.history.back();">Back</button>
				<button type="button" style="float: right;" class="btn btn-submit">Print Info</button><br/><br/>
                </div> 
				
            <footer class="footer">
                <div class="container">
                    <nav>
                        <ul class="footer-menu">
    
                        </ul>
                        <p class="copyright text-center">
                            ©
                            <script>
                                document.write(new Date().getFullYear())
                            </script>
                            <a href="http://www.creative-tim.com">Creative Tim</a>
                    </nav>
                </div>
            </footer>
        </div>
    </div>
	
	<!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
            <a class="btn btn-primary" href="<?php echo base_url(); ?>employer/logout">Logout</a>
          </div>
        </div>
      </div>
    </div>
  
</body>
<!--   Core JS Files   -->
<script src="<?php echo base_url('assets/js/core/jquery.3.2.1.min.js'); ?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/js/core/popper.min.js'); ?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/js/core/bootstrap.min.js'); ?>" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="<?php echo base_url('assets/js/plugins/bootstrap-switch.js'); ?>"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!--  Chartist Plugin  -->
<script src="<?php echo base_url('assets/js/plugins/chartist.min.js'); ?>"></script>
<!--  Notifications Plugin    -->
<script src="<?php echo base_url('assets/js/plugins/bootstrap-notify.js'); ?>"></script>
<!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
<script src="<?php echo base_url('assets/js/bootstrap-dashboard.js?v=2.0.1'); ?>" type="text/javascript"></script>

</html>