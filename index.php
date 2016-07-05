<?php include('global/head.html'); ?>

<title>Mixtape &middot; Fire Hosting</title>
<script async type="text/javascript" src="pomf.min.js"></script>
</head>
<body>
	<div class="top">
		<div class="menu">
			<div class="wrapper">
				<?php include('global/menu.html'); ?>
			</div>
		</div>
		<div class="notifications">
				<?php include('global/notices.html'); ?>
		</div>
	</div>
	<div class="wrapper">
		<div class="home-container">
			<div class="header">
				<div class="logo">
					<a href="https://mixtape.moe/">
						<div class="logo-container">
						  <div class="tape">
						    <div class="label">
						      <div class="labelbg">
						        <div class="line1"></div><div class="line2"></div>
						        <h4 class="label-logo">mixtape.moe</h4>
						      </div>
						      <div class="reels">
						        <div class="leftreel">
						        </div>
						        <div class="window">
						          <div class="leftwinreel">
						          </div>
						          <div class="rightwinreel">
						          </div>
						        </div>
						        <div class="rightreel">
						        </div>
						      </div>
						    </div>
						    <div class="bevel">
						      
						    </div>
						    <div class="lefthole">
						      </div>
						      <div class="leftinner">
						      </div>
						      <div class="rightinner">
						      </div>
						      <div class="righthole">
						      </div>
						  </div>
						</div>
					</a>
				</div>
				<div class="header-text-home">
					<h1 class="sitename white-color">Mixtape.moe</h1>
					<h2 class="slogan">Drop Your Fire, Fam</h2>
					<h3 class="instruct">Upload and share any file up to 100MB</h3>
				</div>
			</div>
			<div class="jumbotron">
				
				<p class="stats"><a href="stats"><?php include('global/stats.html'); ?></a></p>
				<noscript><p class="alert alert-error"><strong>Enable JavaScript</strong> you fucking autist neckbeard, it's not gonna hurt you</p></noscript>
				<p id="no-file-api" class="alert alert-error"><strong>Your browser is not fire fam.</strong> Install the latest<a href="https://firefox.com/">Firefox</a> or <a href="https://chrome.google.com/">Google Botnet</a> and come back &lt;3</p>
				<a href="javascript:;" id="upload-btn" class="btn">Select <span>or drop your </span>file(s)</a>
				<br><a href="mic.php">record from mic</a>
				<input type="file" id="upload-input" name="files[]" multiple="multiple" data-max-size="100MiB">
				<ul id="upload-filelist"></ul>
			</div>
		</div>
	</div>
	<div class="footer">
		<?php include('global/footer.html'); ?> 
	</div>
</body>
</html>
