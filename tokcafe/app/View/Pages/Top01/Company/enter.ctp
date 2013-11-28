<?php
ini_set ( "display_errors", "0" );
mb_internal_encoding( 'utf-8' );
header("Content-Type:text/html; charset=utf-8");

App::uses('CheckUtility', 'Lib');
session_start();

$name = "";
$nick_name = "";
$url = "";
$phone = "";
$mail = "";
$address = "";
$web_site = "";
$founder = "";
$employees = "";
$month = "";
$year = "";
$industry_01 = "";
$industry_02 = "";
$industry_03 = "";
$answer = "";
$answer_checked = "";
$introducer = "";
$other_box = "";
$compaign_code = "";
$agree = "";
$agree_checked = "";

extract($_POST);

if(empty($month)) $month = "Month";
if(empty($year)) $year = "Year";
if(empty($industry_01)) $industry_01 = "Please select";
if(empty($industry_02)) $industry_02 = "Please select";
if(empty($industry_03)) $industry_03 = "Please select";
if(CheckUtility::Required($answer)){
	if($answer=="Facebook") $answer_checked = "Facebook";
	if($answer=="Twitter") $answer_checked = "Twitter";
	if($answer=="LinkedIn") $answer_checked = "LinkedIn";
	if($answer=="Search Engine (Google, Yahoo!, etc.)") $answer_checked = "Search Engine (Google, Yahoo!, etc.)";
	if($answer=="Online Media (News site, blog, etc.)") $answer_checked = "Online Media (News site, blog, etc.)";
	if($answer=="Other media (TV, newspaper, magazine, etc.)") $answer_checked = "Other media (TV, newspaper, magazine, etc.)";
	if($answer=="Referral from an acquaintance") $answer_checked = "Referral from an acquaintance";
	if($answer=="Guidance from our company (Tel, e-mail etc.)") $answer_checked = "Guidance from our company (Tel, e-mail etc.)";
	if($answer=="Other") $answer_checked = "Other";
}
if(CheckUtility::Required($agree)) $agree_checked = "checked";

?>
<?php echo $this->Html->css('top_01/company/enter','stylesheet', array('inline' => false ) ); ?>

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
									<p class="title"><span class="star">*</span>Company name</p>
								</td>
								<td class="tdRight">
									<?php echo $this->Form->input('txtCompanyName', 
										array('type' => 'text', 
										'id' => 'name', 
										'name' => 'name', 
										'class' => 'txtText', 
										'value' => $name, 
										'div' => false, 
										'label' => false)
										); 
									?>
								</td>
							</tr>
							<tr>
								<td class="tdLeft">
									<p class="title"><span class="star">*</span>Person in charge</p>
								</td>
								<td class="tdRight">
									<?php echo $this->Form->input('txtNickName', 
										array('type' => 'text', 
										'id' => 'nick_name', 
										'name' => 'nick_name', 
										'class' => 'txtText', 
										'value' => $nick_name, 
										'div' => false, 
										'label' => false)
										); 
									?>
									<p class="setAcc"><span class="star">*</span>This item can not be changed after it is set.</p>
								</td>
							</tr>
							<tr>
								<td class="tdLeft ver-top">
									<p class="title"><span class="star">*</span>Tok Cafe in URL</p>
								</td>
								<td class="tdRight">
									<label class="url">https://www.wantedly.com/companies/ &nbsp;</label>
									<?php echo $this->Form->input('txtUrl', 
										array('type' => 'text', 
										'id' => 'url', 
										'name' => 'url', 
										'class' => 'txtText short', 
										'value' => $url, 
										'div' => false, 
										'label' => false)
										); 
									?>
									<p class="setAcc"><span class="star">*</span>Create a company my page at the URL you specify here. This item can not be changed after it is set.</p>
								</td>
							</tr>
							<tr>
								<td class="tdLeft">
									<p class="title"><span class="star">*</span>Phone number</p>
								</td>
								<td class="tdRight">
									<?php echo $this->Form->input('txtPhone', 
										array('type' => 'text', 
										'id' => 'phone', 
										'name' => 'phone', 
										'class' => 'txtText short', 
										'value' => $phone, 
										'div' => false, 
										'label' => false)
										); 
									?>
								</td>
							</tr>
							<tr>
								<td class="tdLeft">
									<p class="title"><span class="star">*</span>E-mail</p>
								</td>
								<td class="tdRight">
									<?php echo $this->Form->input('txtMail', 
										array('type' => 'text', 
										'id' => 'mail', 
										'name' => 'mail', 
										'class' => 'txtText', 
										'value' => $mail, 
										'div' => false, 
										'label' => false)
										); 
									?>
								</td>
							</tr>
							<tr>
								<td class="tdLeft ver-top">
									<p class="title"><span class="star">*</span>Address</p>
								</td>
								<td class="tdRight">
									<?php echo $this->Form->input('txtAreaAdress', 
										array('type' => 'textarea', 
										'id' => 'address', 
										'name' => 'address', 
										'class' => 'area', 
										'value' => $address, 
										'div' => false, 
										'label' => false)
										); 
									?>
								</td>
							</tr>
							<tr>
								<td class="tdLeft">
									<p class="title">Web site</p>
								</td>
								<td class="tdRight">
									<?php echo $this->Form->input('txtWeb', 
										array('type' => 'text', 
										'id' => 'web_site', 
										'name' => 'web_site', 
										'class' => 'txtText', 
										'value' => $web_site, 
										'div' => false, 
										'label' => false)
										); 
									?>
								</td>
							</tr>
							<tr>
								<td class="tdLeft">
									<p class="title"><span class="star">*</span>Founder</p>
								</td>
								<td class="tdRight">
									<?php echo $this->Form->input('txtFounder', 
										array('type' => 'text', 
										'id' => 'founder', 
										'name' => 'founder', 
										'class' => 'txtText shorter', 
										'value' => $founder, 
										'div' => false, 
										'label' => false)
										); 
									?>
								</td>
							</tr>
							<tr>
								<td class="tdLeft">
									<p class="title"><span class="star">*</span>No. of employees</p>
								</td>
								<td class="tdRight">
									<?php echo $this->Form->input('txtEmployees', 
										array('type' => 'text', 
										'id' => 'employees', 
										'name' => 'employees', 
										'class' => 'txtText shorter', 
										'value' => $employees, 
										'div' => false, 
										'label' => false)
										); 
									?>
								</td>
							</tr>
							<tr>
								<td class="tdLeft">
									<p class="title"><span class="star">*</span>Established</p>
								</td>
								<td class="tdRight">
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
											echo $this->Form->input('selMonth', 
												array('type' => 'select', 
												'id' => 'month', 
												'name' => 'month', 
												'class' => 'select', 
												'options' => $month_option, 
												'div' => false, 
												'label' => false)
											);
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
											echo $this->Form->input('selYear', 
												array('type' => 'select', 
												'id' => 'year', 
												'name' => 'year', 
												'class' => 'select', 
												'options' => $year_option, 
												'div' => false, 
												'label' => false)
											);
										?>
									</label>
								</td>
							</tr>
							<tr>
								<td class="tdLeft ver-top">
									<p class="title"><span class="star">*</span>Related Industry</p>
								</td>
								<td class="tdRight">
									<label class="control industry">
										<?php
											$industry_01_option = array(
												$industry_01 => $industry_01,
												'Admin / Supervisory' => 'Admin / Supervisory',
												'Reception / Security' => 'Reception / Security',
												'Consulting / Advisory' => 'Consulting / Advisory',
												'Monitoring / Evaluation' => 'Monitoring / Evaluation',
												'Marketing / Analysis' => 'Marketing / Analysis',
												'Management / Office / Law' => 'Management / Office / Law',
												'Economy / Finance / Insurance' => 'Economy / Finance / Insurance',
												'Distribution / Retail' => 'Distribution / Retail',
												'Trading / Wholesale' => 'Trading / Wholesale',
												'IT (Web, Mobile)' => 'IT (Web, Mobile)',
												'IT (Base, SI, Software)' => 'IT (Base, SI, Software)',
												'Art / Photography' => 'Art / Photography',
												'Graphic Design' => 'Graphic Design',
												'Translation / Interpretation' => 'Translation / Interpretation',
												'Media / Publishing' => 'Media / Publishing',
												'Advertising / Sales Promotion' => 'Advertising / Sales Promotion',
												'Restaurant / Food Service' => 'Restaurant / Food Service',
												'Entertainment' => 'Entertainment',
												'Leisure / Sports' => 'Leisure / Sports',
												'Travel / Tourism / Hotel' => 'Travel / Tourism / Hotel',
												'Bridal' => 'Bridal',
												'Food / Beverage' => 'Food / Beverage',
												'Logistics / Transportation' => 'Logistics / Transportation',
												'Infrastructure / Energy' => 'Infrastructure / Energy',
												'Agriculture, Forestry, Fisheries' => 'Agriculture, Forestry, Fisheries',
												'Car / Bike' => 'Car / Bike',
												'Airlines / international' => 'Airlines / international',
												'Precision / Heavy equipment' => 'Precision / Heavy equipment',
												'Consumer / Electronics' => 'Consumer / Electronics',
												'Chemical / Steel' => 'Chemical / Steel',
												'Stationery / Paper / Material' => 'Stationery / Paper / Material',
												'Office supplies / OA' => 'Office supplies / OA',
												'Fashion / Beauty / Cosmetic' => 'Fashion / Beauty / Cosmetic',
												'Daily necessities / Sanitary' => 'Daily necessities / Sanitary',
												'Medical / Pharma / Care' => 'Medical / Pharma / Care',
												'Human resources / Education' => 'Human resources / Education',
												'Real Estate / Housing' => 'Real Estate / Housing',
												'Architecture / construction' => 'Architecture / construction',
												'Interior' => 'Interior',
												'Science / Research / Religion' => 'Science / Research / Religion',
												'Nature / Environment / Animal' => 'Nature / Environment / Animal',
												'Public agency / Community' => 'Public agency / Community',
												'Other / Profession' => 'Other / Profession'
											);
											echo $this->Form->input('selIndustry_01', 
												array('type' => 'select', 
												'id' => 'industry_01', 
												'name' => 'industry_01', 
												'class' => 'select select-long', 
												'options' => $industry_01_option, 
												'div' => false, 
												'label' => false)
											);
										?>
									</label></br class="clear">
									<label class="control industry">
										<?php
											$industry_02_option = array(
												$industry_02 => $industry_02,
												'Admin / Supervisory' => 'Admin / Supervisory',
												'Reception / Security' => 'Reception / Security',
												'Consulting / Advisory' => 'Consulting / Advisory',
												'Monitoring / Evaluation' => 'Monitoring / Evaluation',
												'Marketing / Analysis' => 'Marketing / Analysis',
												'Management / Office / Law' => 'Management / Office / Law',
												'Economy / Finance / Insurance' => 'Economy / Finance / Insurance',
												'Distribution / Retail' => 'Distribution / Retail',
												'Trading / Wholesale' => 'Trading / Wholesale',
												'IT (Web, Mobile)' => 'IT (Web, Mobile)',
												'IT (Base, SI, Software)' => 'IT (Base, SI, Software)',
												'Art / Photography' => 'Art / Photography',
												'Graphic Design' => 'Graphic Design',
												'Translation / Interpretation' => 'Translation / Interpretation',
												'Media / Publishing' => 'Media / Publishing',
												'Advertising / Sales Promotion' => 'Advertising / Sales Promotion',
												'Restaurant / Food Service' => 'Restaurant / Food Service',
												'Entertainment' => 'Entertainment',
												'Leisure / Sports' => 'Leisure / Sports',
												'Travel / Tourism / Hotel' => 'Travel / Tourism / Hotel',
												'Bridal' => 'Bridal',
												'Food / Beverage' => 'Food / Beverage',
												'Logistics / Transportation' => 'Logistics / Transportation',
												'Infrastructure / Energy' => 'Infrastructure / Energy',
												'Agriculture, Forestry, Fisheries' => 'Agriculture, Forestry, Fisheries',
												'Car / Bike' => 'Car / Bike',
												'Airlines / international' => 'Airlines / international',
												'Precision / Heavy equipment' => 'Precision / Heavy equipment',
												'Consumer / Electronics' => 'Consumer / Electronics',
												'Chemical / Steel' => 'Chemical / Steel',
												'Stationery / Paper / Material' => 'Stationery / Paper / Material',
												'Office supplies / OA' => 'Office supplies / OA',
												'Fashion / Beauty / Cosmetic' => 'Fashion / Beauty / Cosmetic',
												'Daily necessities / Sanitary' => 'Daily necessities / Sanitary',
												'Medical / Pharma / Care' => 'Medical / Pharma / Care',
												'Human resources / Education' => 'Human resources / Education',
												'Real Estate / Housing' => 'Real Estate / Housing',
												'Architecture / construction' => 'Architecture / construction',
												'Interior' => 'Interior',
												'Science / Research / Religion' => 'Science / Research / Religion',
												'Nature / Environment / Animal' => 'Nature / Environment / Animal',
												'Public agency / Community' => 'Public agency / Community',
												'Other / Profession' => 'Other / Profession'
											);
											echo $this->Form->input('selIndustry_02', 
												array('type' => 'select', 
												'id' => 'industry_02', 
												'name' => 'industry_02', 
												'class' => 'select select-long', 
												'options' => $industry_02_option, 
												'div' => false, 
												'label' => false)
											);
										?>
									</label></br class="clear">
									<label class="control">
										<?php
											$industry_03_option = array(
												$industry_03 => $industry_03,
												'Admin / Supervisory' => 'Admin / Supervisory',
												'Reception / Security' => 'Reception / Security',
												'Consulting / Advisory' => 'Consulting / Advisory',
												'Monitoring / Evaluation' => 'Monitoring / Evaluation',
												'Marketing / Analysis' => 'Marketing / Analysis',
												'Management / Office / Law' => 'Management / Office / Law',
												'Economy / Finance / Insurance' => 'Economy / Finance / Insurance',
												'Distribution / Retail' => 'Distribution / Retail',
												'Trading / Wholesale' => 'Trading / Wholesale',
												'IT (Web, Mobile)' => 'IT (Web, Mobile)',
												'IT (Base, SI, Software)' => 'IT (Base, SI, Software)',
												'Art / Photography' => 'Art / Photography',
												'Graphic Design' => 'Graphic Design',
												'Translation / Interpretation' => 'Translation / Interpretation',
												'Media / Publishing' => 'Media / Publishing',
												'Advertising / Sales Promotion' => 'Advertising / Sales Promotion',
												'Restaurant / Food Service' => 'Restaurant / Food Service',
												'Entertainment' => 'Entertainment',
												'Leisure / Sports' => 'Leisure / Sports',
												'Travel / Tourism / Hotel' => 'Travel / Tourism / Hotel',
												'Bridal' => 'Bridal',
												'Food / Beverage' => 'Food / Beverage',
												'Logistics / Transportation' => 'Logistics / Transportation',
												'Infrastructure / Energy' => 'Infrastructure / Energy',
												'Agriculture, Forestry, Fisheries' => 'Agriculture, Forestry, Fisheries',
												'Car / Bike' => 'Car / Bike',
												'Airlines / international' => 'Airlines / international',
												'Precision / Heavy equipment' => 'Precision / Heavy equipment',
												'Consumer / Electronics' => 'Consumer / Electronics',
												'Chemical / Steel' => 'Chemical / Steel',
												'Stationery / Paper / Material' => 'Stationery / Paper / Material',
												'Office supplies / OA' => 'Office supplies / OA',
												'Fashion / Beauty / Cosmetic' => 'Fashion / Beauty / Cosmetic',
												'Daily necessities / Sanitary' => 'Daily necessities / Sanitary',
												'Medical / Pharma / Care' => 'Medical / Pharma / Care',
												'Human resources / Education' => 'Human resources / Education',
												'Real Estate / Housing' => 'Real Estate / Housing',
												'Architecture / construction' => 'Architecture / construction',
												'Interior' => 'Interior',
												'Science / Research / Religion' => 'Science / Research / Religion',
												'Nature / Environment / Animal' => 'Nature / Environment / Animal',
												'Public agency / Community' => 'Public agency / Community',
												'Other / Profession' => 'Other / Profession'
											);
											echo $this->Form->input('selIndustry_03', 
												array('type' => 'select', 
												'id' => 'industry_03', 
												'name' => 'industry_03', 
												'class' => 'select select-long', 
												'options' => $industry_03_option, 
												'div' => false, 
												'label' => false)
											);
										?>
									</label>
									<p class="setAcc"><span class="star">*</span>You can fill up to 3 sector if there is more than 1 sector.</p>
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
							<?php echo $this->Form->input('compaign_code', 
								array('type' => 'text', 
								'div' => false, 
								'label' => false, 
								'name' => 'compaign_code', 
								'class' => 'txtText any', 
								'value' => $compaign_code)
							); ?>
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
							<?php echo $this->Form->submit("top_01/company/enter/bt_confirm.png", 
								array('div' => false, 
								'class' => 'submit linkimg', 
								'name' => 'confirm'
								)
							); ?>
						</div>
					</div>
				</form>
				<div class="direction">
					<?php echo $this->Html->image('top_01/company/enter/img_step1.png', array('alt' => 'step 1')); ?>
					<?php echo $this->Html->image('top_01/company/enter/img_arrow.png', array('class' => 'arrowDown', 'alt' => 'Arrow Down')); ?>
					<?php echo $this->Html->image('top_01/company/enter/img_step2.png', array('alt' => 'step 2')); ?>
					<?php echo $this->Html->image('top_01/company/enter/img_arrow.png', array('class' => 'arrowDown', 'alt' => 'Arrow Down')); ?>
					<?php echo $this->Html->image('top_01/company/enter/img_step3.png', array('alt' => 'step 3')); ?>
					<?php echo $this->Html->image('top_01/company/enter/img_arrow.png', array('class' => 'arrowDown', 'alt' => 'Arrow Down')); ?>
					<?php echo $this->Html->image('top_01/company/enter/img_step4.png', array('alt' => 'step 4')); ?>
				</div>
			</div>
		</div>
	</div>