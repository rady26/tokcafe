<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'Tokcafe');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="width=device-width"initial-scale=0.7/>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php	
		echo $this->Html->css('common/common','stylesheet', array('inline' => false ) );
		echo $this->Html->css('common/popup','stylesheet', array('inline' => false ) );
		echo $this->Html->script(array('common/jquery-1.8.3', 'common/jquery.easing.1.3', 'common/media-ie7-ie8', 'common/common', 'common/popup', array('inline' => false)));
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
        echo $this->Js->writeBuffer();       
	?>

</head>
<body id="top">
    <div id="wrap">	
		<div id="header">
			<div class="headerIn">
				<div id="logo">
					<?php echo $this->Html->link($this->Html->image('common/header/img_logo.png', 
						array('class' => 'linkimg', 'alt' => "Logo")), 
						array('controller' => '', 'action' => '/'), 
						array('escape' => false)); 
					?>	
				</div>
				<div id="nav">
					<ul id="gNavi">
						<li>
							<?php echo $this->Html->link($this->Html->image('common/header/01/img_01.png', 
								array('class' => 'linkimg', 'alt' => 'What?')), 
								array('action' => '#'), 
								array('escape' => false)); 
							?>   
						</li>
						<li>
							<?php echo $this->Html->link($this->Html->image('common/header/01/img_02.png', 
								array('class' => 'linkimg', 'alt' => 'Company')), 
								array('controller' => 'pages/top01/company', 'action' => '/index'), 
								array('escape' => false)); 
							?>	
						</li>
						<li>
							<?php echo $this->Html->link($this->Html->image("common/header/01/img_03.png", 
								array('class' => 'linkimg', 'alt' => 'Login')), 
								array('controller' => '', 'action' => '#'), 
								array('escape' => false, 'class' => 'topopup')); 
							?>	
						</li>
					</ul>
				</div>
			</div>
			<div id="toPopup"> 
				
				<!-- #<div class="close"></div> -->
				<span class="ecs_tooltip">Press Esc to close <span class="arrow"></span></span>
				<div id="popup_content"> <!-- #your content start -->
					<p class="popup_title">User Account Login</p>
					<div class="logArea clearfix">
						<div class="sansLog">
							<p class="login_title">SANS Login</p>
							<div class="login_control">
								<?php echo $this->Html->link($this->Html->image("common/bt/bt_fb.png", 
									array('class' => 'linkimg', 'alt' => 'Facebook')), array('action' => '#'), 
									array('escape' => false)); 
								?>	
							</div>
							<div class="login_control">
								<?php echo $this->Html->link($this->Html->image("common/bt/bt_tweeter.png", 
									array('class' => 'linkimg', 'alt' => 'Tweeter')), array('action' => '#'), 
									array('escape' => false)); 
								?>	
							</div>
							<div class="login_control">
								<?php echo $this->Html->link($this->Html->image("common/bt/bt_linkdl.png", 
									array('class' => 'linkimg', 'alt' => 'Linkdl')), array('action' => '#'), 
									array('escape' => false)); 
								?>	
							</div>
							<p class="login_notice"><span>*</span>We will never post anything on your wall without your permission.</p>
							<p class="login_notice notice_last"><span>*</span>We will never post anything on your wall without your permission.</p>
						</div>
						<div class="mailLog">
							<p class="login_title">E-mail Login</p>
							<form action="" method="POST">
								<div class="signup">
									<div class="signup-control signup-control-first">
										<p class="form_title">Name</p>
										<?php echo $this->Form->input('name', 
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
										<?php echo $this->Form->input('mail', 
												array('type' => 'text', 
												'label' => false, 
												'name' => 'mail', 
												'class' => 'textbox', 
												'value' => ''
												)
											); ?>
									</div>
									<div class="signup-control">
										<p class="form_title">Password</p>
										<?php echo $this->Form->input('pass', 
												array('type' => 'text', 
												'label' => false, 
												'name' => 'pass', 
												'class' => 'textbox', 
												'value' => ''
												)
											); ?>
									</div>
								</div>
								<div class="check_box">
									<input type="checkbox" name="check" class="check" />
									<p class="check_text">After you agree to the <span>" terms "</span>, please register.</p>
								</div>
								<div class="singup_controller">
									<?php echo $this->Form->submit("common/bt/bt_signup.png", 
										array('class' => 'submit linkimg', 'name' => 'submit')); 
									?>
								</div>
							</form>
						</div>
					</div>
				</div> <!-- #your content end -->

			</div> <!-- #toPopup end -->

			<div class="loader"></div>
			<div id="backgroundPopup"></div>
		</div><!- #header -->
 
		<?php echo $this->Session->flash(); ?>

		<?php echo $this->fetch('content'); ?>
		<div class="link_top">
			<?php echo $this->Html->link($this->Html->image('common/bt/img_top.png', 
				array('class' => 'linkimg', 'alt' => 'go to top')), 
				array('controller' => '', 'action' => '#'), 
				array('escape' => false)); 
			?>   
		</div>                 
        <div id="footer">
			<div class="footerIn clearfix">
				<div class="column">
					<ul class="footer-list">
						<li>Main menu</li>
						<li><?php echo $this->Html->link('Home', array('controller' => '', 'action' => '/'), array('escape' => false)); ?></li>
						<li><?php echo $this->Html->link('Login', array('controller' => '', 'action' => '#'), array('escape' => false, 'class' => 'topopup')); ?></li>
						<li><a href="#">My page</a></li>
						<li><a href="#">find a job</a></li>
						<li><a href="#">Scout</a></li>
					</ul>
					<ul class="footer-list">
						<li>Beginner</li>
						<li><a href="#">Sign up</a></li>
						<li><a href="#">What is Tok Cafe?</a></li>
						<li><a href="#">How to use</a></li>
						<li><a href="#">User Stories</a></li>
						<li><a href="#">Price plan</a></li>
					</ul>
				</div>
				<div class="column">
					<ul class="footer-list">
						<li>Service</li>
						<li><a href="#">About Us</a></li>
						<li><a href="#">Terms</a></li>
						<li><a href="#">Advertise</a></li>
						<li><a href="#">Privacy Policy</a></li>
					</ul>
					<ul class="footer-list">
						<li>Support</li>
						<li><a href="#">Q&A</a></li>
						<li><a href="#">Contact</a></li>
						<li><a href="#">Guide for get a job</a></li>
					</ul>
				</div>
				<div class="column">
					<ul class="footer-list">
						<li>Link</li>
						<li><a href="#">Recruitment</a></li>
						<li><a href="#">Development diary</a></li>
						<li><a href="#">About FSI</a></li>
					</ul>
					<ul class="footer-list footer-last">
						<li>Language</li>
						<li><a href="#">English</a></li>
						<li><a href="#">日本語</a></li>
						<li><a href="#">Khmer</a></li>
					</ul>
				</div>
			</div>
			<p class="copyRight">© 2013 FREE STYLE INTERNATIONAL Co.,Ltd. All rights Reserved.</p>
        </div><!-- #footer -->
    </div>	
</body>
</html>
