
<?php echo $this->Html->css('top_01/complete','stylesheet', array('inline' => false ) ); ?>

	<div id="container">
		<div id="containerIn">
			<div id="contents" class="clearfix">
				<p class="theTitle">User registration (enter)</p>
				<p class="subDesc">Please register the user information, And note the input mistake.</br>
The personal information of customers who have registered, use for contact to the customer from our company and service improvement.</br>
Except as set forth in the law, it does not provide and disclosure of personal information to third parties.</p>
				<p class="notice"><span class="star">*</span>If you want to edit the user information after registration, please apply from <a class="linkOver" href="">Contact page</a>.</p>
				<div id="box">
					<p class="sub-title">Send mail was completed.</p>
					<p class="subDesc">Thank you for registering.</br>
We have an automatic reply to your email address. Please check.</p>
					<p class="notice grid_01"><span class="star">*</span>Do not need to log in from the mail.</p>
					<p class="subDesc grid_02">You may have made ​​a mistake in your e-mail address of the visitor if by any chance,</br>
automatic do not receive a reply.</br>
Sorry to trouble you, but, please register again from the form.</p>
					<p class="grid_03">FREE STYLE INTERNATIONAL Co.,Ltd.</br>
No.1579 (Room No. 209), Street1003,</br>
Sangkat Phnom Penh Thmey, Khan Sen Sok, Phnom Penh.</br>
+855(0)977-339-372</br>
info@frsintl.com</p>
					<div class="confirm">
						<?php echo $this->Form->submit("top_01/company/complete/bt_start.png", 
							array('div' => false, 
							'class' => 'submit linkimg', 
							'name' => 'confirm'
							)
						); ?>
					</div>
				</div>
				<div class="direction">
					<?php echo $this->Html->image('top_01/company/complete/img_step1.png', array('alt' => 'step 1')); ?>
					<?php echo $this->Html->image('top_01/company/complete/img_arrow.png', array('class' => 'arrowDown', 'alt' => 'Arrow Down')); ?>
					<?php echo $this->Html->image('top_01/company/complete/img_step2.png', array('alt' => 'step 2')); ?>
					<?php echo $this->Html->image('top_01/company/complete/img_arrow.png', array('class' => 'arrowDown', 'alt' => 'Arrow Down')); ?>
					<?php echo $this->Html->image('top_01/company/complete/img_step3.png', array('alt' => 'step 3')); ?>
					<?php echo $this->Html->image('top_01/company/complete/img_arrow.png', array('class' => 'arrowDown', 'alt' => 'Arrow Down')); ?>
					<?php echo $this->Html->image('top_01/company/complete/img_step4.png', array('alt' => 'step 4')); ?>
				</div>
			</div>
		</div>
	</div>