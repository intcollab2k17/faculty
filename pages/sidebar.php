<!-- BEGIN PROFILE SIDEBAR -->
					<div class="profile-sidebar" style="width: 250px;">
						<!-- PORTLET MAIN -->
						<div class="portlet light profile-sidebar-portlet">
							<!-- SIDEBAR USERPIC -->
							<div class="profile-userpic">
								<img src="../dist/uploads/<?php echo $row['faculty_pic'];?>" class="img-responsive" alt="" style="width:120px;height: 120px">
							</div>
							<!-- END SIDEBAR USERPIC -->
							<!-- SIDEBAR USER TITLE -->
							<div class="profile-usertitle">
								<div class="profile-usertitle-name">
									 <?php echo $_SESSION['name'];?>
								</div>
							</div>
							<!-- END SIDEBAR USER TITLE -->
							
							<!-- SIDEBAR MENU -->
							<div class="profile-usermenu">
								<ul class="nav">
									<li class="active">
										<a href="profile.php">
										<i class="icon-home"></i>
										Personal Information </a>
									</li>
									<li>
										<a href="family.php">
										<i class="icon-settings"></i>
										Family Background </a>
									</li>
									<li>
										<a href="educ.php">
										<i class="icon-settings"></i>
										Educational Background</a>
									</li>
									<li>
										<a href="eligibility.php">
										<i class="icon-settings"></i>
										Civil Service Eligibility</a>
									</li>
									<li>
										<a href="work_exp.php">
										<i class="icon-settings"></i>
										Work Experience</a>
									</li>
									<li>
										<a href="voluntary.php">
										<i class="icon-settings"></i>
										Voluntary Work/Involvement</a>
									</li>
									<li>
										<a href="training.php">
										<i class="icon-settings"></i>
										Training Programs</a>
									</li>
									<li>
										<a href="skills.php">
										<i class="icon-settings"></i>
										Other Information</a>
									</li>	
								</ul>
							</div>
							<!-- END MENU -->
						</div>
						<!-- END PORTLET MAIN -->
						
					</div>
					<!-- END BEGIN PROFILE SIDEBAR -->