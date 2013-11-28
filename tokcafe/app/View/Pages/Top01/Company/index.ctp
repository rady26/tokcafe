<?php echo $this->Html->css('top_01/company/index','stylesheet', array('inline' => false ) ); ?>
<?php echo $this->Html->script('top_01/index', false); ?>

	<div id="banner">
		<div class="control">
			<div class="controlIn">
				<p>Easy & Convenient & </br>
	Registration Free</p>
				<p>Adoption of public relations tool of social media era</br>
Cambodia is the first social recruiting tool</p>
				<div class="signing">
					<?php echo $this->Html->link($this->Html->image("top_01/company/bt_emailsignup.png", 
						array('class' => 'mail-sign linkimg', 'alt' => 'E-mail sign up')), 
						array('controller' => '', 'action' => '#'),  
						array('escape' => false, 'class' => 'topopup_02')); 
					?>	
					<?php echo $this->Html->link($this->Html->image("top_01/company/bt_snssignup.png", 
						array('class' => 'sns-sign linkimg', 'alt' => 'SNS sign up')), 
						array('controller' => '', 'action' => '#'), 
						array('escape' => false, 'class' => 'topopup_02')); 
					?>	
				</div>
				<p class="warning"><span>*</span>We will never post anything on your wall without your permission.</p>
			</div>
			<div class="platform">
				<?php echo $this->Html->image("top_01/company/img_main.png", array('alt' => 'platform')); ?>	
			</div>
		</div>
		<div id="toPopup_02"> 

			<!-- #<div class="close"></div> -->
			<span class="ecs_tooltip">Press Esc to close <span class="arrow"></span></span>
			<div id="popup_content_02"> <!-- #your content start -->
				<p class="popup_title">User Account Registration</p>
				<div class="logArea clearfix">
					<div class="sansLog">
						<p class="login_title">SNS Sign up</p>
						<div class="login_control">
							<?php echo $this->Html->link($this->Html->image("common/bt/bt_fb.png", 
								array('class' => 'linkimg', 'alt' => 'facebook')), 
								array('controller' => '', 'action' => '#'), 
								array('escape' => false)); 
							?>	
						</div>
						<div class="login_control">
							<?php echo $this->Html->link($this->Html->image("common/bt/bt_tweeter.png", 
								array('class' => 'linkimg', 'alt' => 'tweeter')), 
								array('controller' => '', 'action' => '#'), 
								array('escape' => false)); 
							?>	
						</div>
						<div class="login_control">
							<?php echo $this->Html->link($this->Html->image("common/bt/bt_linkdl.png", 
								array('class' => 'linkimg', 'alt' => 'linkdl')), 
								array('controller' => '', 'action' => '#'), 
								array('escape' => false)); 
							?>	
						</div>
						<p class="login_notice"><span>*</span>We will never post anything on your wall without your permission.</p>
						<p class="login_notice notice_last"><span>*</span>We will never post anything on your wall without your permission.</p>
					</div>
					<div class="mailLog">
						<p class="login_title">E-mail Sign up</p>
						<form action="" method="POST">
							<div class="signup">
								<div class="signup-control signup-control-first">
									<p class="form_title">Name</p>
									<?php echo $this->Form->input('name_02', 
											array(
											'type' => 'text', 
											'label' => false,
											'name' => 'name', 
											'class' => 'textbox', 
											'value' => ''
											)
										); 
									?>
								</div>
								<div class="signup-control">
									<p class="form_title">E-mail</p>
									<?php echo $this->Form->input('mail_02', 
											array(
											'type' => 'text', 
											'label' => false, 
											'name'=>'mail', 
											'class' => 'textbox', 
											'value' => ''
											)
										); 
									?>
								</div>
								<div class="signup-control">
									<p class="form_title">Password</p>
									<?php echo $this->Form->input('pass_02', 
											array(
											'type' => 'text', 
											'label' => false, 
											'name'=>'pass', 
											'class' => 'textbox', 
											'value' => ''
											)
										); 
									?>
								</div>
							</div>
							<div class="check_box">
								<input type="checkbox" name="check" class="check" />
								<p class="check_text">After you agree to the <span>" terms "</span>, please register.</p>
							</div>
							<div class="singup_controller">
								<?php echo $this->Form->submit("common/bt/bt_signup.png", 
										array(
										'class' => 'submit linkimg', 
										'name' => 'submit', 
										'type' => 'image'
										)
									); 
								?>
							</div>
						</form>
					</div>
				</div>
			</div> <!-- #your content end -->

		</div> <!-- #toPopup end -->

		<div class="loader"></div>
		<div id="backgroundPopup_02"></div>
	</div><br class="clear" />
	<div id="contents" class="grid_01 clearfix">
		<p class="title">What is Tok Cafe?</p>
		<p class="sub-title">This is a service that can be Adoption of public relations & Job Listings & Advertising for the company.</br>
We announced the company tour and seminars, and providing location.</p>
		<p class="desc">Registering Your Company is free. Simply enter your profile, you will be able to use as your advertising.</br>
Is not only function of job sites normal, the function to scout to interview job seekers and banner advertising etc, it offers many features.</br>
It is also possible for companies to view more job seekers. It is obtained the information of each other in front of the interview,</br>
misunderstanding and discrepancy of ideal hardly occurs, you can do the interview smoothly.</p>
		<div class="activities">
			<p class="proverb">Human resources the companies are seeking. </br>
Workplaces where the job seekers are seeking.</p>
			<div class="step1">
				<p class="step">Create a job page or</br>
company page easily</p>
				<?php echo $this->Html->image("top_01/company/step_01.png", array('alt' => 'step 1')); ?>
				<p class="step_desc">You can create a job page and</br>
company page for adoption of</br>
public relations."Convey the charm of</br>
the company" with a simple operation. </p>
			</div>
			<div class="step2">
				<p class="step">All work is completed within the site,</br>
Content of the minimum required</p>
				<?php echo $this->Html->image("top_01/company/step_02.png", array('alt' => 'step 2')); ?>
				<p class="step_desc">There is no exchange of wasted</br>
e-mail or phone. We will connect smoothly</br>
job seekers and companies.</p>
			</div>
			<div class="step3">
				<p class="step">Credibility high matching of</br>
companies and job seekers</p>
				<?php echo $this->Html->image("top_01/company/step_03.png", array('alt' => 'step 3')); ?>
				<p class="step_desc">Because the public information</br>
can be viewed  in advance,</br>
high matching rate can be expected.</p>
			</div>
		</div>
	</div>
	<div class="grid_02">
		<div class="gridIn">
			<div class="line_01">
				<p class="title_01">Utilization state</p>
				<div class="utilize">
					<div class="utilize-01">
						<p class="number">Number of users</p>
						<?php echo $this->Html->image("top_01/company/img_person.png", array('alt' => 'number of people')); ?>
						<p class="num">000,000</p>
					</div>
					<div class="utilize-02">
						<p class="number">Number of companies</p>
						<?php echo $this->Html->image("top_01/company/img_building.png", array('alt' => 'number of companies')); ?>
						<p class="num">000,000</p>
					</div>
					<div class="utilize-03">
						<p class="number">Number of jobs</p>
						<?php echo $this->Html->image("top_01/company/img_bag.png", array('alt' => 'number of jobs')); ?>
						<p class="num">000,000</p>
					</div>
				</div>
			</div>
			<div class="line_02 clearfix">
				<p class="title_02">Tok cafe is matching service to connect Job and job seekers Cambodia.</p>
				<p class="current">Currently, 000 companies are using. Also lets you find a job.</p>
				<div class="logos">
					<ul class="list">
						<li><?php echo $this->Html->link($this->Html->image("img_company-logo.png", array('alt' => '')), array('controller' => '', 'action' => '#'), array('escape' => false)); ?></li>
						<li><?php echo $this->Html->link($this->Html->image("img_company-logo.png", array('alt' => '')), array('controller' => '', 'action' => '#'), array('escape' => false)); ?></li>
						<li><?php echo $this->Html->link($this->Html->image("img_company-logo.png", array('alt' => '')), array('controller' => '', 'action' => '#'), array('escape' => false)); ?></li>
						<li><?php echo $this->Html->link($this->Html->image("img_company-logo.png", array('alt' => '')), array('controller' => '', 'action' => '#'), array('escape' => false)); ?></li>
						<li><?php echo $this->Html->link($this->Html->image("img_company-logo.png", array('alt' => '')), array('controller' => '', 'action' => '#'), array('escape' => false)); ?></li>
						<li><?php echo $this->Html->link($this->Html->image("img_company-logo.png", array('alt' => '')), array('controller' => '', 'action' => '#'), array('escape' => false)); ?></li>
						<li><?php echo $this->Html->link($this->Html->image("img_company-logo.png", array('alt' => '')), array('controller' => '', 'action' => '#'), array('escape' => false)); ?></li>
						<li><?php echo $this->Html->link($this->Html->image("img_company-logo.png", array('alt' => '')), array('controller' => '', 'action' => '#'), array('escape' => false)); ?></li>
						<li><?php echo $this->Html->link($this->Html->image("img_company-logo.png", array('alt' => '')), array('controller' => '', 'action' => '#'), array('escape' => false)); ?></li>
						<li><?php echo $this->Html->link($this->Html->image("img_company-logo.png", array('alt' => '')), array('controller' => '', 'action' => '#'), array('escape' => false)); ?></li>
						<li><?php echo $this->Html->link($this->Html->image("img_company-logo.png", array('alt' => '')), array('controller' => '', 'action' => '#'), array('escape' => false)); ?></li>
						<li><?php echo $this->Html->link($this->Html->image("img_company-logo.png", array('alt' => '')), array('controller' => '', 'action' => '#'), array('escape' => false)); ?></li>
					</ul>
				</div>
			</div>
			<div class="social clearfix">
				<div class="blog">
					<p class="new">News</p>
					<table class="table" cellspacing="0" cellpadding="0">
						<tr>
							<td class="tdLeft"><span class="dateEven">25.Dec.2013</span></td>
							<td class="tdRight"><a href="" class="even">Grand opening the website...</a></td>
						</tr>
						<tr>
							<td class="tdLeft"><span class="dateEven">25.Dec.2013</span></td>
							<td class="tdRight"><a href="" class="even">Grand opening the website...</a></td>
						</tr>
						<tr>
							<td class="tdLeft"><span class="dateEven">25.Dec.2013</span></td>
							<td class="tdRight"><a href="" class="even">Grand opening the website...</a></td>
						</tr>
						<tr>
							<td class="tdLeft"><span class="dateEven">25.Dec.2013</span></td>
							<td class="tdRight"><a href="" class="even">Grand opening the website...</a></td>
						</tr>
						<tr>
							<td class="tdLeft"><span class="dateEven">25.Dec.2013</span></td>
							<td class="tdRight"><a href="" class="even">Grand opening the website...</a></td>
						</tr>
					</table>
					<?php echo $this->Html->link($this->Html->image("top_01/company/img_showmore.png", 
						array('class' => 'linkimg', 
						'alt' => '')), 
						array('controller' => '', 'action' => '#'), 
						array('escape' => false, 'class' => 'showMore')); 
					?>
				</div>
				<div class="facebook"><?php echo $this->Html->image("facebook.jpg", array('alt' => 'Facebook like')); ?></div>
			</div>
		</div>
	</div>