<?php	
	echo $this->Html->css('index','stylesheet', array('inline' => false ) );
	echo $this->Html->script('index', false);
?>
	<div id="banner">
		<div class="control">
			<div class="controlIn">
				<p>Easy & Convenient & </br>
	Registration Free</p>
				<p>Anyone, anywhere, job service that can be used.</br>
	Is not only "changing jobs" and "employment",</br>
	It is possible to know the manners of human society!</p>
				<div class="signing">
					<?php echo $this->Html->link($this->Html->image("bt_emailsignup.png", 
						array('class' => 'mail-sign linkimg', 'alt' => 'E-mail sign up')),
						array('controller' => '', 'action' => '#'),  
						array('escape' => false, 'class' => 'topopup_02')); 
					?>	
					<?php echo $this->Html->link($this->Html->image("bt_snssignup.png", 
						array('class' => 'sns-sign linkimg', 'alt' => 'SNS sign up')), 
						array('controller' => '', 'action' => '#'),  
						array('escape' => false, 'class' => 'topopup_02'));
					?>	
				</div>
				<p class="warning"><span>*</span>We will never post anything on your wall without your permission.</p>
			</div>
			<div class="platform">
				<?php echo $this->Html->image("img_main.png", array('alt' => 'platform')); ?>	
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
						<?php echo $this->Form->create(); ?>
							<div class="signup">
								<div class="signup-control signup-control-first">
									<p class="form_title">Name</p>
									<?php echo $this->Form->input('name', 
											array(
											'type' => 'text', 
											'label' => false, 
											'name'=>'name', 
											'class' => 'textbox', 
											'value' => ''
											)
										); 
									?>
								</div>
								<div class="signup-control">
									<p class="form_title">E-mail</p>
									<?php echo $this->Form->input('email', 
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
									<?php echo $this->Form->input('password', 
											array(
											'type' => 'password', 
                                                                                        'autocomplete'=>'off',
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
						<?php echo $this->Form->end(); ?>
					</div>
				</div>
			</div> <!-- #your content end -->

		</div> <!-- #toPopup end -->

		<div class="loader"></div>
		<div id="backgroundPopup_02"></div>
	</div><br class="clear" />
	<div id="contents" class="grid_01 clearfix">
		<p class="title">What is Tok Cafe?</p>
		<p class="sub-title">Anytime, anywhere, anyone. This service searchable work in spare time.</br>
There are many support and information to help you work.</p>
		<p class="desc">Working people and students of course. People who are not currently looking for a job can also be registered. And not only jobs, you can learn</br> 
manners interview by accumulating points, you can join for free company visits and seminars. You can receive a scout from a company if you </br>
register a profile. A Job application is easy because it can be used as a CV the profile. It is also possible for job seekers to browse the profile </br>
of the company.</p>
		<div class="activities">
			<div class="step1">
				<p class="step">Step.<span class="step-number">1</span></p>
				<p class="step_title">Register</p>
				<?php echo $this->Html->image("step_01.png", array('alt' => 'step 1')); ?>
				<p class="step_desc">First registration!</br>
And then enter the</br>
required information.</p>
			</div>
			<div class="step2">
				<p class="step">Step.<span class="step-number">2</span></p>
				<p class="step_title">Find</p>
				<?php echo $this->Html->image("step_02.png", array('alt' => 'step 2')); ?>
				<p class="step_desc">Let's look for companies that </br>
fit with the hope of yourself</br>
using the search function.</p>
			</div>
			<div class="step3">
				<p class="step">Step.<span class="step-number">3</span></p>
				<p class="step_title">Apply</p>
				<?php echo $this->Html->image("step_03.png", array('alt' => 'step 3')); ?>
				<p class="step_desc">Click the "apply for the job" </br>
button, if the company you want </br>
a job has been determined.</p>
			</div>
			<div class="step4">
				<p class="step">Step.<span class="step-number">4</span></p>
				<p class="step_title">Interview</p>
				<?php echo $this->Html->image("step_04.png", array('alt' => 'step 4')); ?>
				<p class="step_desc">Please receive </br>
our support before </br>
the interview.</p>
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
						<?php echo $this->Html->image("img_person.png", array('alt' => 'number of employees')); ?>
						<p class="num">
                                                    <?php echo $UserNo; ?>
                                                </p>
					</div>
					<div class="utilize-02">
						<p class="number">Number of companies</p>
						<?php echo $this->Html->image("img_building.png", array('alt' => 'number of companies')); ?>
						<p class="num">
                                                    <?php echo $CompanyNo; ?>
                                                </p>
					</div>
					<div class="utilize-03">
						<p class="number">Number of jobs</p>
						<?php echo $this->Html->image("img_bag.png", array('alt' => 'number of jobs')); ?>
						<p class="num">
                                                    <?php echo $JobNo; ?>
                                                </p>
					</div>
				</div>
			</div>
			<div class="line_02 clearfix">
				<p class="title_02">Tok cafe is matching service to connect Job and job seekers Cambodia.</p>
				<p class="current">
                                    Currently, <?php echo $CompanyNo; ?> companies are using. Also lets you find a job.
                                </p>
				<div class="logos">
					<ul class="list">
                                            <?php if($CompanyNo>12) { ?>
                                                <?php foreach($LogoCompany as $company): ?>
                                                    <li><?php echo $this->Html->link($this->Html->image("upload/" . $company['Tblcompany']['Logo'], array('alt' => '')), array('controller' => '', 'action' => '#'), array('escape' => false)); ?></li>
                                                <?php endforeach; ?>
                                            <?php } else { ?>                                                   
                                                <?php foreach($LogoCompany as $company): ?>
                                                    <li><?php echo $this->Html->link($this->Html->image("upload/" . $company['Tblcompany']['Logo'], array('alt' => '')), array('controller' => '', 'action' => '#'), array('escape' => false)); ?></li>
                                                <?php endforeach; ?>    
                                                <?php for($i=0;$i<12-$CompanyNo;$i++){ ?>
                                                    <li><?php echo $this->Html->link($this->Html->image("img_company-logo.png", array('alt' => '')), array('controller' => '', 'action' => '#'), array('escape' => false)); ?></li>
                                                <?php } ?>
                                            <?php } ?>
                                        </ul>
				</div>
			</div>
			<div class="social clearfix">
				<div class="blog">
					<p class="new">News</p>
					<table class="table" cellspacing="0" cellpadding="0">
                                                <?php foreach($News as $N): ?>
                                                    <tr>
                                                        <td class="tdLeft"><span class="dateEven"> <?php echo $N['Tblnews']['NewsDate'] ?> </span></td>
                                                        <td class="tdRight"><a href="" class="even"> <?php echo $N['Tblnews']['Description'] ?> </a></td>
                                                    </tr>
                                                <?php endforeach; ?>
					</table>
					<?php echo $this->Html->link($this->Html->image("img_showmore.png", 
						array('class' => 'linkimg', 'alt' => '')), 
						array('controller' => '', 'action' => '#'),  
						array('escape' => false, 'class' => 'showMore')); 
					?>
				</div>
				<div class="facebook"><?php echo $this->Html->image("facebook.jpg", array('alt' => 'Facebook like')); ?></div>
			</div>
		</div>
	</div>