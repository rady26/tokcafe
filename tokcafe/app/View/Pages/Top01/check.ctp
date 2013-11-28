<?php
ini_set ( "display_errors", "0" );
mb_internal_encoding( 'utf-8' );
header("Content-Type:text/html; charset=utf-8");

App::uses('CheckUtility', 'Lib');
session_start();

$name = "";
$nick_name = "";
$sex = "";
$sex_checked = "";
$day = "";
$month = "";
$year = "";
$status = "";
$phone = "";
$mail = "";
$address = "";
$answer = "";
$answer_checked = "";
$introducer = "";
$other_box = "";
$compaign_code = "";
$agree = "";
$agree_checked = "";

$name_err = "";
$nick_name_err = "";
$sex_err = "";
$date_err = "";
$status_err = "";
$phone_err = "";
$mail_err = "";
$address_err = "";

extract($_POST);

$flag=0;

if(!CheckUtility::Required($name)) {
	$name_err = "Please input your real name";
	$flag = 1;
}
if(!CheckUtility::Required($nick_name)) {
	$nick_name_err = "Please input your nick name";
	$flag = 1;
}
if(!CheckUtility::Required($sex)) {
	$sex_err = "Please select your gender";
	$flag = 1;
} else {
	if($sex=="Male") $sex_checked = "Male";
	else $sex_checked = "Female";
}
if(!CheckUtility::Required($day)) $day = "Day";
if(!CheckUtility::Required($month)) $month = "Month";
if(!CheckUtility::Required($year)) $year = "Year";
if(($day=="Day" && $month!="Month" && $year!="Year") || ($day=="Day" && $month=="Month" && $year!="Year") || ($day=="Day" && $month!="Month" && $year=="Year")) { 
	$day = "Day";
	$date_err = "Please select day of birth";
	$flag = 1;
}else {
	if(($day!="Day" && $month=="Month" && $year!="Year") || ($day!="Day" && $month=="Month" && $year=="Year")) { 
		$month = "Month";
		$date_err = "Please select month of birth";
		$flag = 1;
	}else {
		if($day!="Day" && $month!="Month" && $year=="Year") { 
			$year = "Year";
			$date_err = "Please select year of birth";
			$flag = 1;
		}else {
			if($day=="Day" && $month=="Month" && $year=="Year") { 
				$day = "Day";
				$month = "Month";
				$year = "Year";
				$date_err = "Please select date of birth";
				$flag = 1;
			}
		}
	}
}
if($status=="Please select") {
	$status = "Please select";
	$status_err = "Please select your marital status";
	$flag = 1;
}
if(!CheckUtility::Required($phone)) {
	$phone_err = "Please input your phone number";
	$flag = 1;
}
if(!CheckUtility::Required($mail)) {
	$mail_err = "Please input your E-mail";
	$flag = 1;
}
if(!CheckUtility::Required($address)) {
	$address_err = "Please input your address";
	$flag = 1;
}
if($answer=="Facebook") $answer_checked = "Facebook";
if($answer=="Twitter") $answer_checked = "Twitter";
if($answer=="LinkedIn") $answer_checked = "LinkedIn";
if($answer=="Search Engine (Google, Yahoo!, etc.)") $answer_checked = "Search Engine (Google, Yahoo!, etc.)";
if($answer=="Online Media (News site, blog, etc.)") $answer_checked = "Online Media (News site, blog, etc.)";
if($answer=="Other media (TV, newspaper, magazine, etc.)") $answer_checked = "Other media (TV, newspaper, magazine, etc.)";
if($answer=="Referral from an acquaintance") $answer_checked = "Referral from an acquaintance";
if($answer=="Guidance from our company (Tel, e-mail etc.)") $answer_checked = "Guidance from our company (Tel, e-mail etc.)";
if($answer=="Other") $answer_checked = "Other";

if(!CheckUtility::Required($agree)) $flag = 1;
else { $agree_checked = "checked"; }

if($flag != 0) {
?>

<?php echo $this->Html->css('top_01/error','stylesheet', array('inline' => false ) ); ?>

	<div id="container">
		<div id="containerIn">
			<div id="contents" class="clearfix">
				<p class="theTitle">User registration (enter)</p>
				<p class="subDesc">Please register the user information, And note the input mistake.</br>
The personal information of customers who have registered, use for contact to the customer from our company and service improvement.</br>
Except as set forth in the law, it does not provide and disclosure of personal information to third parties.</p>
				<p class="notice"><span class="star">*</span>If you want to edit the user information after registration, please apply from <a class="linkOver" href="">Contact page</a>.</p>
				<form action="check" method="post">
					<div id="box">
						<table class="table" cellpadding="0" cellspacing="0" >
							<tr>
								<td class="tdLeft">
									<p class="title"><span class="star">*</span>Name (Real name)</p>
								</td>
								<td class="tdRight">
									<?php echo $this->Form->input('txtUserName', array('type' => 'text', 'id' => 'name', 'name' => 'name', 'class' => 'txtText', 'value' => $name, 'div' => false, 'label' => false)); ?>
									<p class="error"><?php echo $name_err; ?></p>
								</td>
							</tr>
							<tr>
								<td class="tdLeft">
									<p class="title"><span class="star">*</span>Nickname</p>
								</td>
								<td class="tdRight">
									<?php echo $this->Form->input('txtNickName', array('type' => 'text', 'id' => 'nickName', 'name' => 'nick_name', 'class' => 'txtText', 'value' => $nick_name, 'div' => false, 'label' => false)); ?>
									<p class="error"><?php echo $nick_name_err; ?></p>
								</td>
							</tr>
							<tr>
								<td class="tdLeft">
									<p class="title"><span class="star">*</span>Sex</p>
								</td>
								<td class="tdRight">
									<?php
										echo $this->Form->input('sex', array(
											'type' => 'radio',
											'name' => 'sex',
											'class' => 'radio',
											'value' => $sex_checked,
											'hiddenField' => false,
											'legend' => false,
											'div' => false, 
											'label' => false,
											'before' => '<label class="control">',
											'separator' => '</label><label class="control">',
											'after' => '</label>',
											'options' => array('Male' => 'Male', 'Female' => 'Female') 
										));
									?>
									<p class="error"><?php echo $sex_err; ?></p>
								</td>
							</tr>
							<tr>
								<td class="tdLeft">
									<p class="title"><span class="star">*</span>Date of birth</p>
								</td>
								<td class="tdRight">
									<label class="controls">
										<?php
											$day_option = array(
												$day => $day,
												'01' => '01',
												'02' => '02',
												'03' => '03',
												'04' => '04',
												'05' => '05',
												'06' => '06',
												'07' => '07',
												'08' => '08',
												'09' => '09',
												'10' => '10',
												'11' => '11',
												'12' => '12',
												'13' => '13',
												'14' => '14',
												'15' => '15',
												'16' => '16',
												'17' => '17',
												'18' => '18',
												'19' => '19',
												'20' => '20',
												'21' => '21',
												'22' => '22',
												'23' => '23',
												'24' => '24',
												'25' => '25',
												'26' => '26',
												'27' => '27',
												'28' => '28',
												'29' => '29',
												'30' => '30',
												'31' => '31'
											);
											echo $this->Form->input('selDay', array('type' => 'select', 'id' => 'day', 'name' => 'day', 'class' => 'select', 'options' => $day_option, 'div' => false, 'label' => false));
										?>
									</label>
									<label class="controls">
										<?php
											$month_option = array(
												$month => $month,
												'Jan.' => 'Jan.',
												'Feb.' => 'Feb.',
												'Mar.' => 'Mar.',
												'Apr.' => 'Apr.',
												'May.' => 'May.',
												'June.' => 'June.',
												'Jul.' => 'Jul.',
												'Aug.' => 'Aug.',
												'Sep.' => 'Sep.',
												'Oct.' => 'Oct.',
												'Nov.' => 'Nov.',
												'Dec.' => 'Dec.'
											);
											echo $this->Form->input('selMonth', array('type' => 'select', 'id' => 'month', 'name' => 'month', 'class' => 'select', 'options' => $month_option, 'div' => false, 'label' => false));
										?>
									</label>
									<label class="controls">
										<?php
											$year_option = array(
												$year => $year,
												'1998' => '1998',
												'1997' => '1997',
												'1996' => '1996',
												'1995' => '1995',
												'1994' => '1994',
												'1993' => '1993',
												'1992' => '1992',
												'1991' => '1991',
												'1990' => '1990',
												'1989' => '1989',
												'1988' => '1988',
												'1987' => '1987',
												'1986' => '1986',
												'1985' => '1985',
												'1984' => '1984',
												'1983' => '1983',
												'1982' => '1982',
												'1981' => '1981',
												'1980' => '1980',
												'1979' => '1979',
												'1978' => '1978',
												'1977' => '1977',
												'1976' => '1976',
												'1975' => '1975',
												'1974' => '1974',
												'1973' => '1973',
												'1972' => '1972',
												'1971' => '1971',
												'1970' => '1970',
												'1969' => '1969',
												'1968' => '1968',
												'1967' => '1967',
												'1966' => '1966',
												'1965' => '1965',
												'1964' => '1964',
												'1963' => '1963',
												'1962' => '1962',
												'1961' => '1961',
												'1960' => '1960',
												'1959' => '1959',
												'1958' => '1958',
												'1957' => '1957',
												'1956' => '1956',
												'1955' => '1955',
												'1954' => '1954',
												'1953' => '1953',
												'1952' => '1952',
												'1951' => '1951',
												'1950' => '1950',
												'1949' => '1949',
												'1948' => '1948',
												'1947' => '1947',
												'1946' => '1946',
												'1945' => '1945',
												'1944' => '1944',
												'1943' => '1943',
												'1942' => '1942',
												'1941' => '1941',
												'1940' => '1940',
												'1939' => '1939',
												'1938' => '1938',
												'1937' => '1937',
												'1936' => '1936',
												'1935' => '1935',
												'1934' => '1934',
												'1933' => '1933',
												'1932' => '1932',
												'1931' => '1931',
												'1930' => '1930'
											);
											echo $this->Form->input('selYear', array('type' => 'select', 'id' => 'year', 'name' => 'year', 'class' => 'select', 'options' => $year_option, 'div' => false, 'label' => false));
										?>
									</label>
									<p class="error"><?php echo $date_err; ?></p>
								</td>
							</tr>
							<tr>
								<td class="tdLeft">
									<p class="title"><span class="star">*</span>Marital status</p>
								</td>
								<td class="tdRight">
									<label class="control">
										<?php
											$status_option = array(
												$status => $status,
												'Signle' => 'Signle',
												'Married' => 'Married'
											);
											echo $this->Form->input('selStatus', array('type' => 'select', 'id' => 'status', 'name' => 'status', 'class' => 'select status', 'options' => $status_option, 'div' => false, 'label' => false));
										?>
									</label>
									<p class="error"><?php echo $status_err; ?></p>
								</td>
							</tr>
							<tr>
								<td class="tdLeft">
									<p class="title"><span class="star">*</span>Phone number</p>
								</td>
								<td class="tdRight">
									<?php echo $this->Form->input('txtTelephone', array('type' => 'text', 'id' => 'phone', 'name' => 'phone', 'class' => 'txtText phone', 'value' => $phone, 'div' => false, 'label' => false)); ?>
									<p class="error"><?php echo $phone_err; ?></p>
								</td>
							</tr>
							<tr>
								<td class="tdLeft">
									<p class="title"><span class="star">*</span>E-mail</p>
								</td>
								<td class="tdRight">
									<?php echo $this->Form->input('txtEmail', array('type' => 'text', 'id' => 'mail', 'name' => 'mail', 'class' => 'txtText mail', 'value' => $mail, 'div' => false, 'label' => false)); ?>
									<p class="setAcc"><span class="star">*</span>Set the account.</p>
									<p class="error"><?php echo $mail_err; ?></p>
								</td>
							</tr>
							<tr>
								<td class="tdLeft">
									<p class="title"><span class="star">*</span>Address</p>
								</td>
								<td class="tdRight">
									<?php echo $this->Form->input('txtAreaAdress', array('type' => 'textarea', 'id' => 'address', 'name' => 'address', 'class' => 'area', 'value' => $address, 'div' => false, 'label' => false)); ?>
									<p class="error"><?php echo $address_err; ?></p>
								</td>
							</tr>
						</table>
						<p class="question">How did you know the Tok Cafe?</p>
						<ul class="question_list clearfix">
							<?php
								$options = array();
								$options['Facebook'] = 'Facebook</label>';
								$options['Twitter']  = 'Twitter</label>';
								$options['LinkedIn']  = 'LinkedIn</label>';
								$options['Search Engine (Google, Yahoo!, etc.)']  = 'Search Engine (Google, Yahoo!, etc.)</label>';
								$options['Online Media (News site, blog, etc.)']  = 'Online Media (News site, blog, etc.)</label>';
								$options['Other media (TV, newspaper, magazine, etc.)']  = 'Other media (TV, newspaper, magazine, etc.)</label>';
								$options['Referral from an acquaintance']  = 'Referral from an acquaintance</label>'.$this->Form->input('introducer', 
									array('type' => 'text', 
										'div' => false, 
										'label' => false, 
										'name' => 'introducer', 
										'class' => 'txtText introducer', 
										'value' => $introducer
										)
									);
								$options['Guidance from our company (Tel, e-mail etc.)']  = 'Guidance from our company (Tel, e-mail etc.)</label>';
								$options['Other']  = 'Other</label>'.$this->Form->input('other_box',
									array(
										'type' => 'text', 
										'div' => false, 
										'label' => false, 
										'name' => 'other_box', 
										'class' => 'txtText any', 
										'value' => $other_box
										)
									);

								echo $this->Form->input('answer', 
									array(									
										'type' => 'radio',
										'name' => 'answer',
										'class' => 'radio',
										'value' => $answer_checked,
										'hiddenField' => false,
										'legend' => false,
										'div' => false, 
										'label' => false,
										'before' => '<li><label class="control">',
										'separator' => '</li><li><label class="control">',
										'after' => '</li>',
										'options' => $options
										)
									); 
							?>
						</ul>
						<div class="cont">
							<p>Campaign Code</p>
							<?php echo $this->Form->input('compaign_code', array('type' => 'text', 'div' => false, 'label' => false, 'name' => 'compaign_code', 'class' => 'txtText any', 'value' => $compaign_code)); ?>
						</div>
						<div class="confirm">
							<label class="control" for="agree"><?php echo $this->Form->input('agree', 
									array('type' => 'checkbox', 
									'legend' => false, 
									'hiddenField' => false, 
									'div' => false, 
									'label' => false, 
									'name' => 'agree', 
									'class' => 'checkbox', 
									'value' => 'agree_check', 
									'checked' => $agree_checked
									)
								); 
							?> After you agree to the "<a class="linkOver" href=""> terms </a>", please register.
							</label>
							</br class="clear">
							<?php echo $this->Form->submit("top_01/bt_confirm.png", array('div' => false, 'class' => 'submit linkimg', 'name' => 'confirm')); ?>
						</div>
					</div>
				</form>
				<div class="direction">
					<?php echo $this->Html->image('top_01/img_step1.png', array('alt' => 'step 1')); ?>
					<?php echo $this->Html->image('top_01/img_arrow.png', array('class' => 'arrowDown', 'alt' => 'Arrow Down')); ?>
					<?php echo $this->Html->image('top_01/img_step2.png', array('alt' => 'step 2')); ?>
					<?php echo $this->Html->image('top_01/img_arrow.png', array('class' => 'arrowDown', 'alt' => 'Arrow Down')); ?>
					<?php echo $this->Html->image('top_01/img_step3.png', array('alt' => 'step 3')); ?>
					<?php echo $this->Html->image('top_01/img_arrow.png', array('class' => 'arrowDown', 'alt' => 'Arrow Down')); ?>
					<?php echo $this->Html->image('top_01/img_step4.png', array('alt' => 'step 4')); ?>
				</div>
			</div>
		</div>
	</div>
<?php
} else {
	$address = nl2br($address);
	if(CheckUtility::IsHalfwidthEnglish($address)) $address = wordwrap($address, 69, "<br />", true);
	else { $address = wordwrap($address, 150, "<br />", true); }
	$_SESSION['ticket'] = md5(uniqid().mt_rand());
?>

<?php echo $this->Html->css('top_01/confirm','stylesheet', array('inline' => false ) ); ?>

	<div id="container">
		<div id="containerIn">
			<div id="contents" class="clearfix">
				<p class="theTitle">User registration (enter)</p>
				<p class="subDesc">Please register the user information, And note the input mistake.</br>
The personal information of customers who have registered, use for contact to the customer from our company and service improvement.</br>
Except as set forth in the law, it does not provide and disclosure of personal information to third parties.</p>
				<p class="notice"><span class="star">*</span>If you want to edit the user information after registration, please apply from <a class="linkOver" href="">Contact page</a>.</p>
				<form action="complete" method="post">
					<div id="box">
						<table class="table" cellpadding="0" cellspacing="0" >
							<tr>
								<td class="tdLeft">
									<p class="title"><span class="star">*</span>Name (Real name)</p>
								</td>
								<td class="tdRight">
									<p class="detail"><?php echo $name; ?></p>
								</td>
							</tr>
							<tr>
								<td class="tdLeft">
									<p class="title"><span class="star">*</span>Nickname</p>
								</td>
								<td class="tdRight">
									<p class="detail"><?php echo $nick_name; ?></p>
								</td>
							</tr>
							<tr>
								<td class="tdLeft">
									<p class="title"><span class="star">*</span>Sex</p>
								</td>
								<td class="tdRight">
									<p class="detail"><?php echo $sex; ?></p>
								</td>
							</tr>
							<tr>
								<td class="tdLeft">
									<p class="title"><span class="star">*</span>Date of birth</p>
								</td>
								<td class="tdRight">
									<p class="detail"><?php echo $day." ".$month." ".$year; ?></p>
								</td>
							</tr>
							<tr>
								<td class="tdLeft">
									<p class="title"><span class="star">*</span>Marital status</p>
								</td>
								<td class="tdRight">
									<p class="detail"><?php echo $status; ?></p>
								</td>
							</tr>
							<tr>
								<td class="tdLeft">
									<p class="title"><span class="star">*</span>Phone number</p>
								</td>
								<td class="tdRight">
									<p class="detail"><?php echo $phone; ?></p>
								</td>
							</tr>
							<tr>
								<td class="tdLeft">
									<p class="title"><span class="star">*</span>E-mail</p>
								</td>
								<td class="tdRight">
									<p class="detail"><?php echo $mail; ?></p>
								</td>
							</tr>
							<tr>
								<td class="tdLeft">
									<p class="title"><span class="star">*</span>Address</p>
								</td>
								<td class="tdRight">
									<p class="detail"><?php echo $address; ?></p>
								</td>
							</tr>
						</table>
						<p class="question">How did you know the Tok Cafe?</p>
						<p class="detail"><?php echo $answer." ".$introducer." ".$other_box;; ?></p>
						<div class="cont">
							<p class="question">Campaign Code</p>
							<p class="detail"><?php echo $compaign_code; ?></p>
						</div>
						<div class="confirm">
							<label class="control"><span class="star">*</span>Please complete the registration if there is no mistake in this.</label></br class="clear">
							<?php echo $this->Form->submit("top_01/check/bt_register.png", array('class' => 'submit linkimg', 'name' => 'confirm')); ?>
						</div>
					</div>
				</form>
				<div class="direction">
					<?php echo $this->Html->image('top_01/check/img_step1.png', array('alt' => 'step 1')); ?>
					<?php echo $this->Html->image('top_01/check/img_arrow.png', array('class' => 'arrowDown', 'alt' => 'Arrow Down')); ?>
					<?php echo $this->Html->image('top_01/check/img_step2.png', array('alt' => 'step 2')); ?>
					<?php echo $this->Html->image('top_01/check/img_arrow.png', array('class' => 'arrowDown', 'alt' => 'Arrow Down')); ?>
					<?php echo $this->Html->image('top_01/check/img_step3.png', array('alt' => 'step 3')); ?>
					<?php echo $this->Html->image('top_01/check/img_arrow.png', array('class' => 'arrowDown', 'alt' => 'Arrow Down')); ?>
					<?php echo $this->Html->image('top_01/check/img_step4.png', array('alt' => 'step 4')); ?>
				</div>
			</div>
		</div>
	</div>
<?php
 }
?>