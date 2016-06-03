<?php include('../global/head.html'); ?>

<title>Stats &middot; Mixtape.moe</title>
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
				<?php include('../global/alerts.html'); ?> 
		</div>
	</div>
	<div class="wrapper">
		<div class="container">
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
				<div class="header-text">
					<h1 class="sitename">Stats</h1>
					<h3 class="instruct">Numbers for Nerds</h3>
				</div>
			</div>
			<div class="content">
				<ul class="stats-list">
					<?php include('../global/stats-files.html'); ?>
				</ul>
				<p><b>This page is updated every minute.</b></p>
			</div>
			<div class="footer">
				<?php include('../global/footer.html'); ?> 
			</div>
		</div>
	</div>
</body>
</html>