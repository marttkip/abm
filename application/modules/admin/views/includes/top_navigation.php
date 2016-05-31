<?php
	if(count($contacts) > 0)
	{
		$email = $contacts['email'];
		$email2 = $contacts['email'];
		$logo = $contacts['logo'];
		$company_name = $contacts['company_name'];
		$phone = $contacts['phone'];
		
		if(!empty($facebook))
		{
			$facebook = '<li class="facebook"><a href="'.$facebook.'" target="_blank" title="Facebook">Facebook</a></li>';
		}
		
	}
	else
	{
		$email = '';
		$facebook = '';
		$twitter = '';
		$linkedin = '';
		$logo = '';
		$company_name = '';
		$google = '';
	}
?>
			<!-- start: header -->
			<header class="header">
				<div class="logo-container">
					<a href="http://preview.oklerthemes.com/porto-admin/" class="logo">
						<img src="<?php echo base_url().'assets/logo/'.$logo;?>" height="35" alt="<?php echo $company_name;?>" />
					</a>
					<div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
						<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
					</div>
				</div>
			
				<!-- start: search & user box -->
				<div class="header-right">
			
					
					<span class="separator"></span>
			
					<div id="userbox" class="userbox">
						<a href="#" data-toggle="dropdown">
							<figure class="profile-picture">
								<img src="<?php echo base_url().'assets/img/avatar.jpg';?>" alt="<?php echo $this->session->userdata('first_name');?>" class="img-circle" data-lock-picture="<?php echo base_url().'assets/img/avatar.jpg';?>" />
							</figure>
							<div class="profile-info" data-lock-name="<?php echo $this->session->userdata('first_name');?>" data-lock-email="<?php echo $this->session->userdata('email');?>">
								<span class="name">
									<?php 
									//salutation
									if(date('a') == 'am')
									{
										echo 'Good morning, ';
									}
									
									else if((date('H') >= 12) && (date('H') < 17))
									{
										echo 'Good afternoon, ';
									}
									
									else
									{
										echo 'Good evening, ';
									}
									echo $this->session->userdata('first_name');
									
									?>
                                </span>
								<span class="role"><?php echo $this->session->userdata('branch_code');?></span>
							</div>
			
							<i class="fa custom-caret"></i>
						</a>
			
						<div class="dropdown-menu">
							<ul class="list-unstyled">
								<li class="divider"></li>
								<li>
									<a role="menuitem" tabindex="-1" href="<?php echo site_url()."dashboard";?>"><i class="fa fa-user"></i> My Profile</a>
								</li>
								<li>
									<a role="menuitem" tabindex="-1" href="<?php echo site_url()."logout-admin";?>"><i class="fa fa-power-off"></i> Logout</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- end: search & user box -->
			</header>
			<!-- end: header -->