<?php include('global/head.html'); ?>

<title>Mic &middot; Mixtape.moe &middot; Fire Hosting</title>
<script async type="text/javascript" src="pomf.min.js"></script>
<style type="text/css">
	canvas { 
		display: inline-block; 
		background: #333; 
		width: 100%;
		height: 55px;
		float: left;
	}
	#controls {
		display: flex;
		flex-direction: row;
		align-items: center;
		justify-content: space-around;
		height: 35px;
		width: 100%;
	}
	.record { }
	.record.recording { 
		background: orange;
	}
	.btn {
		width:100% !important;
		border: 1px solid rgba(0,0,0,0.35) !important;
		border-radius: 0px !important;
	}
	#save, #save img { }
	#save { opacity: 0.25;}
	#save[download] { opacity: 1;}
	#viz {
		height: 100px;
		width: 110%;
		display: flex;
		flex-direction: column;
		justify-content: space-around;
		align-items: center;
	}
	@media (orientation: landscape) {
		body { flex-direction: row;}
		#controls { flex-direction: column; height: 100%; width: 100%;}
		#viz { height: 110px; width: 100%;}
	}
</style>
<script async src="js/audiodisplay.js"></script>
<script async src="js/recorderjs/recorder.js"></script>
<script async src="js/main.js"></script>
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
					<h2 class="slogan">Drop Your Fire, fam</h2>
					<h3 class="instruct">Upload and share any file up to 100MB</h3>
				</div>
			</div>
			<div class="jumbotron">
				<noscript><p class="alert alert-error"><strong>Enable JavaScript</strong> you fucking autist neckbeard, it's not gonna hurt you</p></noscript>
				<p id="no-file-api" class="alert alert-error"><strong>Your browser is shit.</strong> Install the latest<a href="https://firefox.com/">Firefox</a> or <a href="https://chrome.google.com/">Google Botnet</a> and come back &lt;3</p>
				<< <a href="https://mixtape.moe/">Go back</a><br><br>
				<div id="voice-upload">
					<div id="viz">
						<canvas id="analyser"></canvas>
						<canvas id="wavedisplay"></canvas>
					</div>
					<div id="controls">
						<a onclick="toggleRecording(this);" class="btn record">First Record it (click and talk, click again to stop)</a>
						<a id="save" class="btn">Then Save it</a>
					</div>
				</div>
				<a href="javascript:;" id="upload-btn" class="btn">Now Upload it</a>
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
