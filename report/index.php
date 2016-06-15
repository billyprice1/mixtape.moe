<?php include('../global/head.html'); ?>

<title>Report &middot; Mixtape</title>
</head>
<body>
	<div class="top">
		<div class="menu">
			<div class="wrapper">
				<?php include('../global/menu.html'); ?>
			</div>
		</div>
		<div class="notifications">
				<?php include('../global/notices.html'); ?>
//<?php 
//if(isset($_POST['submit'])){
//    $to = "abuse@mixtape.moe"; // this is your Email address
//    $from = "admin@mixtape.moe"; // this is the sender's Email address
//    $subject = "[Abuse] File Reported";
//    $urls = $_POST['urls'];
//    $message = $_POST['urls'] . $_POST['message'];
//    mail($to,$subject,$message, "From:" . $from);
//    echo "<div class='alert alert-green'><div class='wrapper'><p><strong>Report Sent </strong> &mdash; We'll get to it as soon as we can. Thank you!</p></div></div>";
//    }
//?>
		</div>
	</div>
	<div class="wrapper">
		<div class="container">
			<div class="header">
				<div class="header-text">
					<h1 class="sitename">Report a File</h1>
					<h3 class="instruct">Trust is the biggest liability of all</h3>
				</div>
			</div>
			<div class="content">
				<h2>Report an Illegal File</h2>
				<h3>Please note, this page is ONLY for illegal files which includes:</h3>
				<p>Child pornography, malware, trojans, ransomware, financial information, social security numbers, account passwords, etc</p>
				<p>This page is <strong>NOT</strong> for copyright or DMCA takedown requests. Please see the Terms of Service page reguarding those requests.</p>
				<p>	<strong>Email us at: <a href="mailto:abuse@mixtape.moe">abuse@mixtape.moe</a><br>
				Please provide the URLs, one line at a time, and a short message of why you think these files are illegal and should be deleted. Thank you!</strong>
					<!-- form action="" method="post" class="report-form">
					<p><strong>URLs to report, one per line</strong></p><textarea rows="3" name="urls" cols="30"></textarea><br>
					<p><strong>Why do you believe these files should be deleted?</strong></p><textarea rows="3" name="message" cols="30"></textarea><br>
					<input type="submit" name="submit" value="Submit" class="submit">
					</form-->
				</p>
			</div>
		</div>
	</div>
	<div class="footer">
		<?php include('../global/footer.html'); ?> 
	</div>
</body>
</html>