<?php

/*
|-------------------------------
|	GENERAL SETTINGS
|-------------------------------
*/

$imSettings['general'] = array(
	'url' => 'http://drabhishekkumar.github.io/',
	'homepage_url' => 'http://drabhishekkumar.github.io/index.html',
	'icon' => 'http://drabhishekkumar.github.io/favImage.png',
	'version' => '14.0.4.3',
	'sitename' => 'drabhishekkumar',
	'public_folder' => '',
	'salt' => 'yqkvfsaz9qkaeop65sfvboql0eg17dm8eb27m3g36h42er94',
	'use_common_email_sender_address' => false,
	'common_email_sender_addres' => ''
);


$imSettings['admin'] = array(
	'notification_public_key' => 'fc8291e5ce9ebf82',
	'notification_private_key' => 'd591bc3a0def0604',
	'enable_manager_notifications' => false,
	'theme' => 'orange'
);


/*
|--------------------------------------------------------------------------------------
|	DATABASES SETTINGS
|--------------------------------------------------------------------------------------
*/

$imSettings['databases'] = array();
$ecommerce = Configuration::getCart();
// Setup the coupon data
$couponData = array();
$couponData['products'] = array();
// Setup the cart
$ecommerce->setPublicFolder('');
$ecommerce->setCouponData($couponData);
$ecommerce->setSettings(array(
	'force_sender' => false,
	'email_opening' => 'Dear Customer,<br /><br />Thank you for your purchase.<br /><br />Below you will find the list of the products you have ordered, the billing information and the instructions for the shipping and payment methods you have chosen.',
	'email_closing' => 'Please contact us if you need further information.<br /><br />Best Regards, our Sales Staff.',
	'email_digital_shipment_opening' => 'Dear Customer,<br />Thank you for your purchase.<br />Please find attached the list of download links for the products you have ordered:',
	'email_digital_shipment_closing' => 'Please contact us if you need further information.<br /><br />Best Regards, our Sales Staff.',
	'email_physical_shipment_opening' => 'Dear Customer,<br />Thank you for your purchase.<br />Please find attached the list of products that have been sent to you:',
	'email_physical_shipment_closing' => 'Please contact us if you need further information.<br /><br />Best Regards, our Sales Staff.',
	'useCSV' => false,
	'header_bg_color' => 'rgba(37, 58, 88, 1)',
	'header_text_color' => 'rgba(255, 255, 255, 1)',
	'cell_bg_color' => 'rgba(255, 255, 255, 1)',
	'cell_text_color' => 'rgba(0, 0, 0, 1)',
	'availability_reduction_type' => 1,
	'border_color' => 'rgba(211, 211, 211, 1)',
	'owner_email' => '',
	'vat_type' => 'included'
));

$ecommerce->setDigitalProductsData(array());

/*
|-------------------------------------------------------------------------------------------
|	GUESTBOOK SETTINGS
|-------------------------------------------------------------------------------------------
*/

$imSettings['guestbooks'] = array();
/*
|-------------------------------------------------------------------------------------------
|	Dynamic Objects SETTINGS
|-------------------------------------------------------------------------------------------
*/

$imSettings['dynamicobjects'] = array(
	'template' => array(
),
	'pages' => array(

	)
);

/*
|-------------------------------
|	EMAIL SETTINGS
|-------------------------------
*/

$ImMailer->emailType = 'phpmailer';
$ImMailer->exposeWsx5 = true;
$ImMailer->header = '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">' . "\n" . '<html>' . "\n" . '<head>' . "\n" . '<meta http-equiv="content-type" content="text/html; charset=utf-8">' . "\n" . '<meta name="generator" content="Incomedia WebSite X5 v14 - www.websitex5.com">' . "\n" . '</head>' . "\n" . '<body bgcolor="#181623" style="background-color: #181623;">' . "\n\t" . '<table border="0" cellpadding="0" align="center" cellspacing="0" style="padding: 0; margin: 0 auto; width: 700px;">' . "\n\t" . '<tr><td id="imEmailContent" style="min-height: 300px; padding: 10px; font: normal normal normal 12pt \'Lekton\'; color: #000000; background-color: #FFFFFF; text-align: left; text-decoration: none;  width: 700px;border-style: solid; border-color: transparent; border-top-width: 1px; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px;background-color: #FFFFFF" width="700px">' . "\n\t\t";
$ImMailer->footer = "\n\t" . '</td></tr>' . "\n\t" . '</table>' . "\n" . '<table width="100%"><tr><td id="imEmailFooter" style="font: normal normal bold 10pt \'Lekton\'; color: #FFFFFF; background-color: transparent; text-align: center; text-decoration: none;  padding: 10px; margin-top: 5px;background-color: transparent">' . "\n\t\t" . 'This e-mail contains information that is intended solely for the above mentioned addressee.<br>If you have received this e-mail by error, please notify the sender immediately and destroy it, without copying it.' . "\n\t" . '</td></tr></table>' . "\n\t" . '</body>' . "\n" . '</html>';
$ImMailer->bodyBackground = '#FFFFFF';
$ImMailer->bodyBackgroundEven = '#FFFFFF';
$ImMailer->bodyBackgroundOdd = '#F0F0F0';
$ImMailer->bodyBackgroundBorder = '#CDCDCD';
$ImMailer->bodyTextColorOdd = '#000000';
$ImMailer->bodySeparatorBorderColor = '#000000';
$ImMailer->emailBackground = '#181623';
$ImMailer->emailContentStyle = 'font: normal normal normal 12pt \'Lekton\'; color: #000000; background-color: #FFFFFF; text-align: left; text-decoration: none; ';
$ImMailer->emailContentFontFamily = 'font-family: Lekton;';
ImTopic::$captcha_code = "		<div class=\"x5captcha-wrap\">
			<label>Check word:</label><br />
			<input type=\"text\" class=\"imCpt\" name=\"imCpt\" maxlength=\"5\" />
		</div>
";

// End of file x5settings.php