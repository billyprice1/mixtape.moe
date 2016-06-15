<?php
//print_r($_SERVER);

  $frmt='D M d H:i:s Y'; $ext=''; // asctime() - shorter
  //header ('Last-Modified: '. gmdate($frmt).$ext); // now
  header ('Expires: '. gmdate($frmt, 1).$ext); // old
  header ('Proxy-Connection: keep-alive');
  // pragma: no-cache ?
  // no-cache? proxy-revalidate?
  header ('Cache-Control: no-store, must-revalidate, post-check=1, pre-check=2');

$file=$_SERVER['REQUEST_URI'];
$viewfile = str_replace('view/', '', $file);
$ext=strtolower(pathinfo($viewfile, PATHINFO_EXTENSION));
$url='https://my.mixtape.moe'.$viewfile;
$curl='https://mixbeta.drybones.me/view'.$viewfile;
//echo $url;
$viewer=0;
if ($ext==='png' || $ext==='gif' || $ext==='jpg') {
  $viewer='image';
} elseif ($ext==='m4a' || $ext==='wav' || $ext==='mp3') {
  $viewer='audio';
} elseif ($ext==='mp4' || $ext==='webm') {
  $viewer='video';
}
?>
	<meta content='text/html; charset=UTF-8' http-equiv='Content-Type'/>
	<meta property="og:site_name" content="Mixtape.moe"/>

<?php if ($viewer==='image') { ?>
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@mixtape_moe">
<meta name="twitter:creator" content="@drybones5">
<meta name="twitter:title" content="This just out: <?php echo $url; ?>">
<meta name="twitter:description" content="Fire Hosting">
<meta name="twitter:image" content="<?php echo $url; ?>">
<!-- fb -->
<meta property="og:image" content="<?php echo $url; ?>"/>
<meta property="og:secure_url" content="<?php echo $curl; ?>"/>
<meta property="og:url" content="<?php echo $curl; ?>"/>
<!-- g+ -->
<meta itemprop="name" content="Mixtape.moe">
<meta itemprop="description" content="This track is mad niggerish">
<meta itemprop="image" content="<?php echo $url; ?>">
<?php } elseif ($viewer==='audio' || $viewer==='video') { ?>

	<meta name="twitter:card" content="player">
	<meta name="twitter:site" content="@mixtape_moe">
	<meta name="twitter:title" content="Sample Player Card">
	<meta name="twitter:description" content="This is a sample video. When you implement, make sure all links are secure.">
	<meta name="twitter:image" content="<?php echo $url; ?>">
	<meta name="twitter:player" content="https://yoursite.com/container.html">
	<meta name="twitter:player:width" content="1280">
	<meta name="twitter:player:height" content="720">
	<meta name="twitter:player:stream" content="<?php echo $url; ?>">
	<meta name="twitter:player:stream:content_type" content="video/webm">
<?php } ?>

<?php include('../global/head.html'); ?>

<title>Mixtape &middot; Fire Hosting</title>
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
		<div class="media-container">
		<?php if ($viewer==='image') { ?>
			<a href="<?php echo $url; ?>"><img src="<?php echo $url; ?>" class="mediaview image"></a>
		<?php } elseif ($viewer==='audio' || $viewer==='video') { ?>
			<video src="<?php echo $url; ?>" autoplay loop controls class="mediaview video"></video>
		<?php } ?>
		</div>
		<div class="container">
			<div class="content">
				<h1 class="post-title">Some weird weaboo anime I found</h1>
				<p class="post-meta">by <a class="post-user" href="">Drybones</a> - <span class="post-time" title="Sat Jun 11 2016 20:14:47 GMT-0400 (Eastern Daylight Time)">43 minutes ago</span></p>
				<p>I was also hoping someone would identify the anime AND the song. Please a thank you.</p>
			</div>
		</div>
	</div>
	<div class="footer">
		<?php include('../global/footer.html'); ?> 
	</div>
</body>
</html>