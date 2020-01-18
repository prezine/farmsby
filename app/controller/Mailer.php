<?php
	/**
	 * 
	 */
	class FarmsbyMailer extends Database
	{
		public $conn;
		public function __construct($conn)
		{
			$this->conn = $conn;
		}
		public function welcomeMail($name = '')
		{
			return
			'<!doctype html><html><head><meta name="viewport" content="width=device-width"><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><title>Farmsby Email</title><style>@media only screen and(max-width:620px){table[class=body]h1{font-size:28px !important;margin-bottom:10px !important}table[class=body]p,table[class=body]ul,table[class=body]ol,table[class=body]td,table[class=body]span,table[class=body]a{font-size:16px !important}table[class=body].wrapper,table[class=body].article{padding:10px !important}table[class=body].content{padding:0 !important}table[class=body].container{padding:0 !important;width:100% !important}table[class=body].main{border-left-width:0 !important;border-radius:0 !important;border-right-width:0 !important}table[class=body].btn table{width:100% !important}table[class=body].btn a{width:100% !important}table[class=body].img-responsive{height:auto !important;max-width:100% !important;width:auto !important}}@media all{.ExternalClass{width:100%}.ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div{line-height:100%}.apple-link a{color:inherit !important;font-family:inherit !important;font-size:inherit !important;font-weight:inherit !important;line-height:inherit !important;text-decoration:none !important}#MessageViewBody a{color:inherit;text-decoration:none;font-size:inherit;font-family:inherit;font-weight:inherit;line-height:inherit}.btn-primary table td:hover{background-color:#34495e !important}.btn-primary a:hover{background-color:#34495e !important;border-color:#34495e !important}}</style></head><body class="" style="background-color: #f6f6f6; font-family: sans-serif; -webkit-font-smoothing: antialiased; font-size: 14px; line-height: 1.4; margin: 0; padding: 0; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;"><table border="0" cellpadding="0" cellspacing="0" class="body" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%; background-color: #f6f6f6;"><tr><td style="font-family: sans-serif; font-size: 14px; vertical-align: top;">&nbsp;</td><td class="container" style="font-family: sans-serif; font-size: 14px; vertical-align: top; display: block; Margin: 0 auto; max-width: 580px; padding: 10px; width: 580px;"><div class="content" style="box-sizing: border-box; display: block; Margin: 0 auto; max-width: 580px; padding: 10px;"><span class="preheader" style="color: transparent; display: none; height: 0; max-height: 0; max-width: 0; opacity: 0; overflow: hidden; mso-hide: all; visibility: hidden; width: 0;">This is preheader text.Some clients will show this text as a preview.</span><table class="main" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%; background: #ffffff; border-radius: 3px;"><tr><td class="wrapper" style="font-family: sans-serif; font-size: 14px; vertical-align: top; box-sizing: border-box; padding: 20px;"><table border="0" cellpadding="0" cellspacing="0" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%;"><tr><td style="font-family: sans-serif; font-size: 14px; vertical-align: top;"><a href="./#" style="width: 100%;display: inline-block;"><img src="assets/images/logo.png" style="width: 150px;display: block;margin: auto;"></a><p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; Margin-bottom: 15px;">Hi '. explode(" ", $name)[0] .',</p><p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; Margin-bottom: 15px;">Welcome to the Farmsby community - Africa\'s most lucrative agriculture investment platform.</p><p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; Margin-bottom: 15px;">Congratulations on being a step closer to achieving financial freedom by investing in agriculture.</p><p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; Margin-bottom: 15px;">We currently have two investment packages tailored to accommodate every budget. Our Standard Joint Venture service is an awesome enterprise that lets you have your own farm. To know more, click <a href="'. BASEPATH .'about">here</a>.</p><p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; Margin-bottom: 15px;">We\'re happy to have you on our platform and we look forward to helping you achieve your financial desires. Remember you can always reach us on any of our social media platforms, or by simply replying to this email.</p><p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; Margin-bottom: 15px;">Secure your future, invest in agriculture.</p><p>Kind Regards,<br> Aquila Kalagbor,<br> CEO, <br> Farmsby Ltd.</p></td></tr></table></td></tr></table><div class="footer" style="clear: both; Margin-top: 10px; text-align: center; width: 100%;"><table border="0" cellpadding="0" cellspacing="0" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%;"><tr><td class="content-block" style="font-family: sans-serif; vertical-align: top; padding-bottom: 10px; padding-top: 10px; font-size: 12px; color: #999999; text-align: center;"> <span class="apple-link" style="color: #999999; font-size: 12px; text-align: center;">Farmsby Ltd, 10 Kpadeli Street, Off Aba Road, Port Harcourt, Rivers, Nigeria 500272</span> <br> Don\'t like these emails?<a href="./#" style="text-decoration: underline; color: #999999; font-size: 12px; text-align: center;">Unsubscribe</a>.</td></tr><tr><td class="content-block powered-by" style="font-family: sans-serif; vertical-align: top; padding-bottom: 10px; padding-top: 10px; font-size: 12px; color: #999999; text-align: center;">Powered by<a href="http://studio.circlepanda.io/" style="color: #999999; font-size: 12px; text-align: center; text-decoration: none;">Circlepanda</a>.</td></tr></table></div></div></td><td style="font-family: sans-serif; font-size: 14px; vertical-align: top;">&nbsp;</td></tr></table></body></html>';
		}
		public function verifyMail($code = '')
		{
			return 
			'<!doctype html><html><head><meta name="viewport" content="width=device-width"><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><title>Farmsby Email</title><style>@media only screen and (max-width: 620px){table[class=body] h1{font-size:28px !important;margin-bottom:10px !important}table[class=body] p, table[class=body] ul, table[class=body] ol, table[class=body] td, table[class=body] span, table[class=body] a{font-size:16px !important}table[class=body] .wrapper, table[class=body] .article{padding:10px !important}table[class=body] .content{padding:0 !important}table[class=body] .container{padding:0 !important;width:100% !important}table[class=body] .main{border-left-width:0 !important;border-radius:0 !important;border-right-width:0 !important}table[class=body] .btn table{width:100% !important}table[class=body] .btn a{width:100% !important}table[class=body] .img-responsive{height:auto !important;max-width:100% !important;width:auto !important}}@media all{.ExternalClass{width:100%}.ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div{line-height:100%}.apple-link a{color:inherit !important;font-family:inherit !important;font-size:inherit !important;font-weight:inherit !important;line-height:inherit !important;text-decoration:none !important}#MessageViewBody a{color:inherit;text-decoration:none;font-size:inherit;font-family:inherit;font-weight:inherit;line-height:inherit}.btn-primary table td:hover{background-color:#34495e !important}.btn-primary a:hover{background-color:#34495e !important;border-color:#34495e !important}}</style></head><body class="" style="background-color: #f6f6f6; font-family: sans-serif; -webkit-font-smoothing: antialiased; font-size: 14px; line-height: 1.4; margin: 0; padding: 0; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;"><table border="0" cellpadding="0" cellspacing="0" class="body" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%; background-color: #f6f6f6;"><tr><td style="font-family: sans-serif; font-size: 14px; vertical-align: top;">&nbsp;</td><td class="container" style="font-family: sans-serif; font-size: 14px; vertical-align: top; display: block; Margin: 0 auto; max-width: 580px; padding: 10px; width: 580px;"><div class="content" style="box-sizing: border-box; display: block; Margin: 0 auto; max-width: 580px; padding: 10px;"> <span class="preheader" style="color: transparent; display: none; height: 0; max-height: 0; max-width: 0; opacity: 0; overflow: hidden; mso-hide: all; visibility: hidden; width: 0;">This is preheader text. Some clients will show this text as a preview.</span><table class="main" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%; background: #ffffff; border-radius: 3px;"><tr><td class="wrapper" style="font-family: sans-serif; font-size: 14px; vertical-align: top; box-sizing: border-box; padding: 20px;"><table border="0" cellpadding="0" cellspacing="0" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%;"><tr><td style="font-family: sans-serif; font-size: 14px; vertical-align: top;"> <a href="./#" style="width: 100%;display: inline-block;"> <img src="assets/images/logo.png" style="width: 150px;display: block;margin: auto;"> </a><p style="font-family: sans-serif; font-size: 16px; font-weight: 600; margin: 0; Margin-bottom: 15px;">One last step is required</p><p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; Margin-bottom: 15px;">We just need to verify your email address before your sign up is complete!</p><table border="0" cellpadding="0" cellspacing="0" class="btn btn-primary" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%; box-sizing: border-box;"><tbody><tr><td align="left" style="font-family: sans-serif; font-size: 14px; vertical-align: top; padding-bottom: 15px;"><table border="0" cellpadding="0" cellspacing="0" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: auto;"><tbody><tr><td style="font-family: sans-serif; font-size: 14px; vertical-align: top; background-color: #3498db; border-radius: 5px; text-align: center;"> <a href="'.BASEPATH.'app/model/verify?verificationCode='. $code .'" target="_blank" style="display: inline-block; color: #ffffff; background-color: #3498db; border: solid 1px #3498db; border-radius: 5px; box-sizing: border-box; cursor: pointer; text-decoration: none; font-size: 14px; font-weight: bold; margin: 0; padding: 12px 25px; text-transform: capitalize; border-color: #3498db;">Verify your email</a></td></tr></tbody></table></td></tr></tbody></table></td></tr></table></td></tr></table><div class="footer" style="clear: both; Margin-top: 10px; text-align: center; width: 100%;"><table border="0" cellpadding="0" cellspacing="0" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%;"><tr><td class="content-block" style="font-family: sans-serif; vertical-align: top; padding-bottom: 10px; padding-top: 10px; font-size: 12px; color: #999999; text-align: center;"> <span class="apple-link" style="color: #999999; font-size: 12px; text-align: center;">Farmsby Ltd, 10 Kpadeli Street, Off Aba Road, Port Harcourt, Rivers, Nigeria 500272</span> <br> Don\'t like these emails? <a href="./#" style="text-decoration: underline; color: #999999; font-size: 12px; text-align: center;">Unsubscribe</a>.</td></tr><tr><td class="content-block powered-by" style="font-family: sans-serif; vertical-align: top; padding-bottom: 10px; padding-top: 10px; font-size: 12px; color: #999999; text-align: center;"> Powered by <a href="http://studio.circlepanda.io/" style="color: #999999; font-size: 12px; text-align: center; text-decoration: none;">Circlepanda</a>.</td></tr></table></div></div></td><td style="font-family: sans-serif; font-size: 14px; vertical-align: top;">&nbsp;</td></tr></table></body></html>';
		}
		public function resendVerification($code = '')
		{
			return
			'<!doctype html><html><head><meta name="viewport" content="width=device-width"><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><title>Farmsby Email</title><style>@media only screen and (max-width: 620px){table[class=body] h1{font-size:28px !important;margin-bottom:10px !important}table[class=body] p, table[class=body] ul, table[class=body] ol, table[class=body] td, table[class=body] span, table[class=body] a{font-size:16px !important}table[class=body] .wrapper, table[class=body] .article{padding:10px !important}table[class=body] .content{padding:0 !important}table[class=body] .container{padding:0 !important;width:100% !important}table[class=body] .main{border-left-width:0 !important;border-radius:0 !important;border-right-width:0 !important}table[class=body] .btn table{width:100% !important}table[class=body] .btn a{width:100% !important}table[class=body] .img-responsive{height:auto !important;max-width:100% !important;width:auto !important}}@media all{.ExternalClass{width:100%}.ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div{line-height:100%}.apple-link a{color:inherit !important;font-family:inherit !important;font-size:inherit !important;font-weight:inherit !important;line-height:inherit !important;text-decoration:none !important}#MessageViewBody a{color:inherit;text-decoration:none;font-size:inherit;font-family:inherit;font-weight:inherit;line-height:inherit}.btn-primary table td:hover{background-color:#34495e !important}.btn-primary a:hover{background-color:#34495e !important;border-color:#34495e !important}}</style></head><body class="" style="background-color: #f6f6f6; font-family: sans-serif; -webkit-font-smoothing: antialiased; font-size: 14px; line-height: 1.4; margin: 0; padding: 0; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;"><table border="0" cellpadding="0" cellspacing="0" class="body" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%; background-color: #f6f6f6;"><tr><td style="font-family: sans-serif; font-size: 14px; vertical-align: top;">&nbsp;</td><td class="container" style="font-family: sans-serif; font-size: 14px; vertical-align: top; display: block; Margin: 0 auto; max-width: 580px; padding: 10px; width: 580px;"><div class="content" style="box-sizing: border-box; display: block; Margin: 0 auto; max-width: 580px; padding: 10px;"> <span class="preheader" style="color: transparent; display: none; height: 0; max-height: 0; max-width: 0; opacity: 0; overflow: hidden; mso-hide: all; visibility: hidden; width: 0;">This is preheader text. Some clients will show this text as a preview.</span><table class="main" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%; background: #ffffff; border-radius: 3px;"><tr><td class="wrapper" style="font-family: sans-serif; font-size: 14px; vertical-align: top; box-sizing: border-box; padding: 20px;"><table border="0" cellpadding="0" cellspacing="0" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%;"><tr><td style="font-family: sans-serif; font-size: 14px; vertical-align: top;"> <a href="./#" style="width: 100%;display: inline-block;"> <img src="assets/images/logo.png" style="width: 150px;display: block;margin: auto;"> </a><p style="font-family: sans-serif; font-size: 16px; font-weight: 600; margin: 0; Margin-bottom: 15px;">Here you go again</p><p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; Margin-bottom: 15px;">Your Verification Code is <strong>'. $code .'</strong></p><table border="0" cellpadding="0" cellspacing="0" class="btn btn-primary" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%; box-sizing: border-box;"><tbody><tr><td align="left" style="font-family: sans-serif; font-size: 14px; vertical-align: top; padding-bottom: 15px;"><table border="0" cellpadding="0" cellspacing="0" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: auto;"><tbody><tr><td style="font-family: sans-serif; font-size: 14px; vertical-align: top; background-color: #3498db; border-radius: 5px; text-align: center;"> <a href="'.BASEPATH.'app/model/verify?verificationCode='. $code .'" target="_blank" style="display: inline-block; color: #ffffff; background-color: #3498db; border: solid 1px #3498db; border-radius: 5px; box-sizing: border-box; cursor: pointer; text-decoration: none; font-size: 14px; font-weight: bold; margin: 0; padding: 12px 25px; text-transform: capitalize; border-color: #3498db;">Verify your email</a></td></tr></tbody></table></td></tr></tbody></table></td></tr></table></td></tr></table><div class="footer" style="clear: both; Margin-top: 10px; text-align: center; width: 100%;"><table border="0" cellpadding="0" cellspacing="0" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%;"><tr><td class="content-block" style="font-family: sans-serif; vertical-align: top; padding-bottom: 10px; padding-top: 10px; font-size: 12px; color: #999999; text-align: center;"> <span class="apple-link" style="color: #999999; font-size: 12px; text-align: center;">Farmsby Ltd, 10 Kpadeli Street, Off Aba Road, Port Harcourt, Rivers, Nigeria 500272</span> <br> Don\'t like these emails? <a href="./#" style="text-decoration: underline; color: #999999; font-size: 12px; text-align: center;">Unsubscribe</a>.</td></tr><tr><td class="content-block powered-by" style="font-family: sans-serif; vertical-align: top; padding-bottom: 10px; padding-top: 10px; font-size: 12px; color: #999999; text-align: center;"> Powered by <a href="http://studio.circlepanda.io/" style="color: #999999; font-size: 12px; text-align: center; text-decoration: none;">Circlepanda</a>.</td></tr></table></div></div></td><td style="font-family: sans-serif; font-size: 14px; vertical-align: top;">&nbsp;</td></tr></table></body></html>';
		}
		public function remindertoInvest($name = '')
		{
			return 
			'<!doctype html><html><head><meta name="viewport" content="width=device-width"><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><title>Farmsby Email</title><style>@media only screen and(max-width:620px){table[class=body]h1{font-size:28px !important;margin-bottom:10px !important}table[class=body]p,table[class=body]ul,table[class=body]ol,table[class=body]td,table[class=body]span,table[class=body]a{font-size:16px !important}table[class=body].wrapper,table[class=body].article{padding:10px !important}table[class=body].content{padding:0 !important}table[class=body].container{padding:0 !important;width:100% !important}table[class=body].main{border-left-width:0 !important;border-radius:0 !important;border-right-width:0 !important}table[class=body].btn table{width:100% !important}table[class=body].btn a{width:100% !important}table[class=body].img-responsive{height:auto !important;max-width:100% !important;width:auto !important}}@media all{.ExternalClass{width:100%}.ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div{line-height:100%}.apple-link a{color:inherit !important;font-family:inherit !important;font-size:inherit !important;font-weight:inherit !important;line-height:inherit !important;text-decoration:none !important}#MessageViewBody a{color:inherit;text-decoration:none;font-size:inherit;font-family:inherit;font-weight:inherit;line-height:inherit}.btn-primary table td:hover{background-color:#34495e !important}.btn-primary a:hover{background-color:#34495e !important;border-color:#34495e !important}}</style></head><body class="" style="background-color: #f6f6f6; font-family: sans-serif; -webkit-font-smoothing: antialiased; font-size: 14px; line-height: 1.4; margin: 0; padding: 0; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;"><table border="0" cellpadding="0" cellspacing="0" class="body" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%; background-color: #f6f6f6;"><tr><td style="font-family: sans-serif; font-size: 14px; vertical-align: top;">&nbsp;</td><td class="container" style="font-family: sans-serif; font-size: 14px; vertical-align: top; display: block; Margin: 0 auto; max-width: 580px; padding: 10px; width: 580px;"><div class="content" style="box-sizing: border-box; display: block; Margin: 0 auto; max-width: 580px; padding: 10px;"><span class="preheader" style="color: transparent; display: none; height: 0; max-height: 0; max-width: 0; opacity: 0; overflow: hidden; mso-hide: all; visibility: hidden; width: 0;">This is preheader text.Some clients will show this text as a preview.</span><table class="main" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%; background: #ffffff; border-radius: 3px;"><tr><td class="wrapper" style="font-family: sans-serif; font-size: 14px; vertical-align: top; box-sizing: border-box; padding: 20px;"><table border="0" cellpadding="0" cellspacing="0" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%;"><tr><td style="font-family: sans-serif; font-size: 14px; vertical-align: top;"><a href="./#" style="width: 100%;display: inline-block;"><img src="assets/images/logo.png" style="width: 150px;display: block;margin: auto;"></a><p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; Margin-bottom: 15px;">Hi '. explode(" ", $name)[0] .',</p><p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; Margin-bottom: 15px;">Welcome once more, to the Farmsby community - Africa\'s most lucrative Agricultural Investment Platform.</p><p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; Margin-bottom: 15px;">We\'re really glad to have you with us.</p><p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; Margin-bottom: 15px;">We noticed that you are yet to make your first investment and we would love to know why.</p><p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; Margin-bottom: 15px;">Are you uncomfortable with our services or are there other issues you\'d like to discuss?</p><p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; Margin-bottom: 15px;">If you are having difficulties using our online platform please reach us via any of our social media handles or by simply replying to this email.</p><p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; Margin-bottom: 15px;">We\'re always ready to assist.</p><p>Kind Regards,<br> Aquila Kalagbor, <br> CEO, Farmsby Ltd</p></td></tr></table></td></tr></table><div class="footer" style="clear: both; Margin-top: 10px; text-align: center; width: 100%;"><table border="0" cellpadding="0" cellspacing="0" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%;"><tr><td class="content-block" style="font-family: sans-serif; vertical-align: top; padding-bottom: 10px; padding-top: 10px; font-size: 12px; color: #999999; text-align: center;"> <span class="apple-link" style="color: #999999; font-size: 12px; text-align: center;">Farmsby Ltd, 10 Kpadeli Street, Off Aba Road, Port Harcourt, Rivers, Nigeria 500272</span> <br> Don\'t like these emails?<a href="./#" style="text-decoration: underline; color: #999999; font-size: 12px; text-align: center;">Unsubscribe</a>.</td></tr><tr><td class="content-block powered-by" style="font-family: sans-serif; vertical-align: top; padding-bottom: 10px; padding-top: 10px; font-size: 12px; color: #999999; text-align: center;">Powered by<a href="http://studio.circlepanda.io/" style="color: #999999; font-size: 12px; text-align: center; text-decoration: none;">Circlepanda</a>.</td></tr></table></div></div></td><td style="font-family: sans-serif; font-size: 14px; vertical-align: top;">&nbsp;</td></tr></table></body></html>';
		}
		public function firstInvestment($name = '', $dateofInvesmentMaturity = '')
		{
			return
			'<!doctype html><html><head><meta name="viewport" content="width=device-width"><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><title>Farmsby Email</title><style>@media only screen and(max-width:620px){table[class=body]h1{font-size:28px !important;margin-bottom:10px !important}table[class=body]p,table[class=body]ul,table[class=body]ol,table[class=body]td,table[class=body]span,table[class=body]a{font-size:16px !important}table[class=body].wrapper,table[class=body].article{padding:10px !important}table[class=body].content{padding:0 !important}table[class=body].container{padding:0 !important;width:100% !important}table[class=body].main{border-left-width:0 !important;border-radius:0 !important;border-right-width:0 !important}table[class=body].btn table{width:100% !important}table[class=body].btn a{width:100% !important}table[class=body].img-responsive{height:auto !important;max-width:100% !important;width:auto !important}}@media all{.ExternalClass{width:100%}.ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div{line-height:100%}.apple-link a{color:inherit !important;font-family:inherit !important;font-size:inherit !important;font-weight:inherit !important;line-height:inherit !important;text-decoration:none !important}#MessageViewBody a{color:inherit;text-decoration:none;font-size:inherit;font-family:inherit;font-weight:inherit;line-height:inherit}.btn-primary table td:hover{background-color:#34495e !important}.btn-primary a:hover{background-color:#34495e !important;border-color:#34495e !important}}</style></head><body class="" style="background-color: #f6f6f6; font-family: sans-serif; -webkit-font-smoothing: antialiased; font-size: 14px; line-height: 1.4; margin: 0; padding: 0; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;"><table border="0" cellpadding="0" cellspacing="0" class="body" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%; background-color: #f6f6f6;"><tr><td style="font-family: sans-serif; font-size: 14px; vertical-align: top;">&nbsp;</td><td class="container" style="font-family: sans-serif; font-size: 14px; vertical-align: top; display: block; Margin: 0 auto; max-width: 580px; padding: 10px; width: 580px;"><div class="content" style="box-sizing: border-box; display: block; Margin: 0 auto; max-width: 580px; padding: 10px;"><span class="preheader" style="color: transparent; display: none; height: 0; max-height: 0; max-width: 0; opacity: 0; overflow: hidden; mso-hide: all; visibility: hidden; width: 0;">This is preheader text.Some clients will show this text as a preview.</span><table class="main" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%; background: #ffffff; border-radius: 3px;"><tr><td class="wrapper" style="font-family: sans-serif; font-size: 14px; vertical-align: top; box-sizing: border-box; padding: 20px;"><table border="0" cellpadding="0" cellspacing="0" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%;"><tr><td style="font-family: sans-serif; font-size: 14px; vertical-align: top;"><a href="./#" style="width: 100%;display: inline-block;"><img src="assets/images/logo.png" style="width: 150px;display: block;margin: auto;"></a><p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; Margin-bottom: 15px;">Hi '. explode(" ", $name)[0] .',</p><p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; Margin-bottom: 15px;">Congratulations on making your first investment with Africa\'s most lucrative Agricultural Investment Platform - Farmsby.</p><p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; Margin-bottom: 15px;">Our ultimate goal is to help medium to low scale farmers build capacity and increase output, thereby creating jobs, eradicating food insecurity and building a Nigeria that feeds the world.</p><p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; Margin-bottom: 15px;">We thank you for believing in us and in our vision.</p><p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; Margin-bottom: 15px;">Your ROI will be ready on '. $dateofInvesmentMaturity .' at which you will be given the option of withdrawing your capital or reinvesting it.</p><p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; Margin-bottom: 15px;">For tips on how to use the dashboard to monitor or withdraw your dividend please click <a href="https://www.youtube.com/channel/UCWSkEVZOj3c9QtTr5UVrPcQ"> here </a>.</p><p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; Margin-bottom: 15px;">Do also note that you can make as many separate investments as you want and have them run concurrently.</p><p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; Margin-bottom: 15px;">We are glad that you have chosen to support our mission and we enjoin you to ask your friends to do same. We have a referral programme which gives you 10% of the initial investment made by anyone who registers through your referral link. Please check the "My Profile" tab on your dashboard to get your referral link.</p><p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; Margin-bottom: 15px;">Subsequently, we will be sending you frequent news and reports on our farm progress.</p><p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; Margin-bottom: 15px;">You can reach us via any of our social media handles or by simply replying to this email. We look forward to hearing from you.</p><p>Kind Regards,<br> Farmsby Team.</p></td></tr></table></td></tr></table><div class="footer" style="clear: both; Margin-top: 10px; text-align: center; width: 100%;"><table border="0" cellpadding="0" cellspacing="0" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%;"><tr><td class="content-block" style="font-family: sans-serif; vertical-align: top; padding-bottom: 10px; padding-top: 10px; font-size: 12px; color: #999999; text-align: center;"> <span class="apple-link" style="color: #999999; font-size: 12px; text-align: center;">Farmsby Ltd, 10 Kpadeli Street, Off Aba Road, Port Harcourt, Rivers, Nigeria 500272</span> <br> Don\'t like these emails?<a href="./#" style="text-decoration: underline; color: #999999; font-size: 12px; text-align: center;">Unsubscribe</a>.</td></tr><tr><td class="content-block powered-by" style="font-family: sans-serif; vertical-align: top; padding-bottom: 10px; padding-top: 10px; font-size: 12px; color: #999999; text-align: center;">Powered by<a href="http://studio.circlepanda.io/" style="color: #999999; font-size: 12px; text-align: center; text-decoration: none;">Circlepanda</a>.</td></tr></table></div></div></td><td style="font-family: sans-serif; font-size: 14px; vertical-align: top;">&nbsp;</td></tr></table></body></html>';
		}
		public function returningInvestment($name = '', $dateofInvesmentMaturity = '')
		{
			return 
			'<!doctype html><html><head><meta name="viewport" content="width=device-width"><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><title>Farmsby Email</title><style>@media only screen and(max-width:620px){table[class=body]h1{font-size:28px !important;margin-bottom:10px !important}table[class=body]p,table[class=body]ul,table[class=body]ol,table[class=body]td,table[class=body]span,table[class=body]a{font-size:16px !important}table[class=body].wrapper,table[class=body].article{padding:10px !important}table[class=body].content{padding:0 !important}table[class=body].container{padding:0 !important;width:100% !important}table[class=body].main{border-left-width:0 !important;border-radius:0 !important;border-right-width:0 !important}table[class=body].btn table{width:100% !important}table[class=body].btn a{width:100% !important}table[class=body].img-responsive{height:auto !important;max-width:100% !important;width:auto !important}}@media all{.ExternalClass{width:100%}.ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div{line-height:100%}.apple-link a{color:inherit !important;font-family:inherit !important;font-size:inherit !important;font-weight:inherit !important;line-height:inherit !important;text-decoration:none !important}#MessageViewBody a{color:inherit;text-decoration:none;font-size:inherit;font-family:inherit;font-weight:inherit;line-height:inherit}.btn-primary table td:hover{background-color:#34495e !important}.btn-primary a:hover{background-color:#34495e !important;border-color:#34495e !important}}</style></head><body class="" style="background-color: #f6f6f6; font-family: sans-serif; -webkit-font-smoothing: antialiased; font-size: 14px; line-height: 1.4; margin: 0; padding: 0; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;"><table border="0" cellpadding="0" cellspacing="0" class="body" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%; background-color: #f6f6f6;"><tr><td style="font-family: sans-serif; font-size: 14px; vertical-align: top;">&nbsp;</td><td class="container" style="font-family: sans-serif; font-size: 14px; vertical-align: top; display: block; Margin: 0 auto; max-width: 580px; padding: 10px; width: 580px;"><div class="content" style="box-sizing: border-box; display: block; Margin: 0 auto; max-width: 580px; padding: 10px;"><span class="preheader" style="color: transparent; display: none; height: 0; max-height: 0; max-width: 0; opacity: 0; overflow: hidden; mso-hide: all; visibility: hidden; width: 0;">This is preheader text.Some clients will show this text as a preview.</span><table class="main" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%; background: #ffffff; border-radius: 3px;"><tr><td class="wrapper" style="font-family: sans-serif; font-size: 14px; vertical-align: top; box-sizing: border-box; padding: 20px;"><table border="0" cellpadding="0" cellspacing="0" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%;"><tr><td style="font-family: sans-serif; font-size: 14px; vertical-align: top;"> <a href="./#" style="width: 100%;display: inline-block;"><img src="assets/images/logo.png" style="width: 150px;display: block;margin: auto;"></a><p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; Margin-bottom: 15px;">Hi '. explode(" ", $name)[0] .',</p><p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; Margin-bottom: 15px;">Congratulations on making another investment with Africa\'s most lucrative Agricultural Investment Platform - Farmsby.</p><p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; Margin-bottom: 15px;">Our ultimate goal is to help medium to low scale farmers build capacity and increase output, thereby creating jobs, eradicating food insecurity and building a Nigeria that feeds the world.</p><p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; Margin-bottom: 15px;">We thank you for believing in us and in our vision.</p><p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; Margin-bottom: 15px;">Your ROI will be ready on '. $dateofInvesmentMaturity .' at which you will be given the option of withdrawing your capital or reinvesting it.</p><p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; Margin-bottom: 15px;">For tips on how to use the dashboard to monitor or withdraw your dividend please click <a href="https://www.youtube.com/channel/UCWSkEVZOj3c9QtTr5UVrPcQ"> here </a>.</p><p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; Margin-bottom: 15px;">Do also note that you can make as many separate investments as you want and have them run concurrently.</p><p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; Margin-bottom: 15px;">We are glad that you have chosen to support our mission and we enjoin you to ask your friends to do same. We have a referral programme which gives you 10% of the initial investment made by anyone who registers through your referral link. Please check the "My Profile" tab on your dashboard to get your referral link.</p><p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; Margin-bottom: 15px;">Subsequently, we will be sending you frequent news and reports on our farm progress.</p><p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; Margin-bottom: 15px;">You can reach us via any of our social media handles or by simply replying to this email. We look forward to hearing from you.</p><p>Kind Regards,<br> Farmsby Team.</p></td></tr></table></td></tr></table><div class="footer" style="clear: both; Margin-top: 10px; text-align: center; width: 100%;"><table border="0" cellpadding="0" cellspacing="0" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%;"><tr><td class="content-block" style="font-family: sans-serif; vertical-align: top; padding-bottom: 10px; padding-top: 10px; font-size: 12px; color: #999999; text-align: center;"> <span class="apple-link" style="color: #999999; font-size: 12px; text-align: center;">Farmsby Ltd, 10 Kpadeli Street, Off Aba Road, Port Harcourt, Rivers, Nigeria 500272</span> <br> Don\'t like these emails?<a href="./#" style="text-decoration: underline; color: #999999; font-size: 12px; text-align: center;">Unsubscribe</a>.</td></tr><tr><td class="content-block powered-by" style="font-family: sans-serif; vertical-align: top; padding-bottom: 10px; padding-top: 10px; font-size: 12px; color: #999999; text-align: center;">Powered by<a href="http://studio.circlepanda.io/" style="color: #999999; font-size: 12px; text-align: center; text-decoration: none;">Circlepanda</a>.</td></tr></table></div></div></td><td style="font-family: sans-serif; font-size: 14px; vertical-align: top;">&nbsp;</td></tr></table></body></html>';
		}
	}