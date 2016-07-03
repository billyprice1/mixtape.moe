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
  <video autoplay loop style="
    position: fixed;
    top: 50%;
    left: 50%;
    min-width: 100%;
    min-height: 100%;
    width: auto;
    height: auto;
    z-index: -100;
    -ms-transform: translateX(-50%) translateY(-50%);
    -moz-transform: translateX(-50%) translateY(-50%);
    -webkit-transform: translateX(-50%) translateY(-50%);
    transform: translateX(-50%) translateY(-50%);
    background-size: cover;
">
    <source src="https://my.mixtape.moe/bkzwyg.webm" type="video/webm">
</video>
			<div class="header">
				<div class="logo">
					<a href="https://mixtape.moe/">
						<div class="logo-container">
						  <div class="tape" style="background: #2939b1 !important;">
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
						    <div class="bevel" style="border-bottom: 39px solid #1f2a77;border-left: 11px solid #2939b1;border-right: 11px solid #2939b1;">
						    </div>
						    <div class="lefthole" style="background-color: #ebebeb;">
						      </div>
						      <div class="leftinner" style="background-color: #ebebeb;">
						      </div>
						      <div class="rightinner" style="background-color: #ebebeb;">
						      </div>
						      <div class="righthole" style="background-color: #ebebeb;">
						      </div>
						  </div>
						</div>
					</a>
				</div>
				<div class="header-text-home">
					<h1 class="sitename white-color">Mixtape.moe</h1>
					<h2 class="slogan white-color">HAPPY BIRTHDAY AMERICA</h2>
					<h3 class="instruct white-color">Upload and share any file up to 100MB</h3>
				</div>
			</div>
			<div class="jumbotron">
				
				<p class="stats white-color"><a href="stats white-color"><?php include('global/stats.html'); ?></a></p>
				<noscript><p class="alert alert-error"><strong>Enable JavaScript</strong> you fucking autist neckbeard, it's not gonna hurt you</p></noscript>
				<p id="no-file-api" class="alert alert-error"><strong>Your browser is not fire fam.</strong> Install the latest<a href="https://firefox.com/">Firefox</a> or <a href="https://chrome.google.com/">Google Botnet</a> and come back &lt;3</p>
				<a href="javascript:;" id="upload-btn" class="btn" style="border: 4px dashed rgba(255, 255, 255, 0.5);color: rgba(255, 255, 255, 0.5);">Select <span>or drop your </span>file(s)</a>
				<br><a href="mic.php" class="white-color">record from mic</a>
				<input type="file" id="upload-input" name="files[]" multiple="multiple" data-max-size="100MiB">
				<ul id="upload-filelist"></ul>
			</div>
		</div>
	</div>
	<div class="footer white-color">
		<?php include('global/footer.html'); ?> 
	</div>
</body>
</html>
