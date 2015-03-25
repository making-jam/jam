<!DOCTYPE html>
<html lang="<?php echo( $template["app"]["lang"] ); ?>">
	<head>

		<meta charset="<?php echo( $template["app"]["encoding"] ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<meta name="description" content="<?php echo( $template["app"]["description"] ); ?>">
		<meta property="og:title" content="<?php  echo isset($template["omTitle"]) ? $template["omTitle"] : "JAM London"  ?>">
		<meta property="og:description" content="<?php  echo isset($template["omDescription"]) ? $template["omDescription"] : $template["app"]["description"]  ?>">
		<meta property="og:url" content="<?php  echo isset($template["omUrl"]) ? $template["omUrl"] : "http://www.jam2015.london"  ?>">
		<meta property="og:image" content="<?php  echo $template["omImage"] ? $template["omImage"] : "http://www.jam2015.london/assets/images/logo/logo-social.png"  ?>">

		<title><?php echo( $template["app"]["siteName"] ); ?> / <?php echo( $template["page"]["title"] ); ?></title>

		<!--<link href="https://fonts.googleapis.com/css?family=Anonymous+Pro:700,400" rel="stylesheet" type="text/css">-->
		<link href="//fonts.googleapis.com/css?family=Source+Code+Pro:300,500,700" rel="stylesheet" type="text/css">

		<link rel="stylesheet" href="/assets/css/litchi.css">
		<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
		<link rel="apple-touch-icon-precomposed" href="/screen-icon.png">

	</head>

	<body class="preload page-<?php echo( $template["page"]["url"]["template"] ); ?> <?php echo( $template["app"]["lang"] ); ?>">

		<noscript>
			<div id="warning">
				To be able to experience <?php echo( $template["app"]["siteName"] ); ?> with all its features, you need a browser that supports JavaScript, and it <strong>needs to be enabled.</strong>
			</div>
		</noscript>

		<!--<div class="alert flex center-horizontally center-vertically info">This is an info message</div>-->
		<!--<div class="alert flex center-horizontally center-vertically warning">This is a warning message</div>-->
		<!--<div class="alert flex center-horizontally center-vertically error">This is an error message</div>-->
		<!--<div class="alert flex center-horizontally center-vertically success">This is a success message</div>-->

		<div class="modal is-hidden">
			<div class="modal-content">
				<div class="close-modal">&times;</div>

				<p class="heading">Manifesto</p>

				<p>Building products is hard. When the three of us started working
					together at <a href="http://www.adbrain.com">Adbrain</a> a year ago, we struggled. We’d
					worked on products before, but nothing quite like this (ad tech
					products are complicated). How do you decide what to build? How do
					designers, engineers and product managers seamlessly work together?
					What tools are best for the job at hand? How does a good product
					become great?</p>

				<p>We often wondered how other companies went about building products
					from scratch. We realised what we really needed was a place where we
					could learn from others that have been there and done it. Somewhere
					where we could discover and understand how all the parts fit
					together.</p>

				<p>So we decided to start JAM. This is the community we wish we’d had
					all along, a place where people, across all disciplines can discuss
					their successes and failures, experiments, tools and techniques, and
					anything else that gets great products built.</p>

				<p>We hope you’ll join us.</p>
			</div>
		</div>

		<nav id="top-nav">
			<ul class="container-narrow">
				<li><a href="#">JAM</a></li>
				<li id="navItemStory"><a href="#sectionStory">Story</a></li>
				<li id="navItemSpeakers"><a href="#sectionSpeakers">Speakers</a></li>
				<li id="navItemTopics"><a href="#sectionTopics">Topics</a></li>
				<li><a href="/resources">Resources</a></li>
				<!--<li><a href="#">Get Involved</a></li>-->
			</ul>

			<button class="turquoise" id="bookTickets">Book tickets</button>
		</nav>

		<?php Template\Template::getLayout(" template "); ?>

		<footer>
			<nav>
				<ul class="unstyled">
					<li>Story</li>
					<li>Resources</li>
					<li>Contact</li>
					<li>Code of Conduct</li>
					<li>Privacy Policy</li>
					<li>Terms &amp; Conditions</li>
				</ul>
			</nav>
		</footer>

		<script src="/assets/js/jquery-2.1.1.min.js" type="text/javascript"></script>
		<script src="/assets/js/app.js" type="text/javascript"></script>

		<?php echo( (isset($template["page"]["scripts"]) && is_array($template["page"]["scripts"])) ? Template\jsCompile::compile($template["page"]["scripts"]) : "" ); ?>

		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
				(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
				m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

			ga('create', 'UA-56807522-1', 'auto');
			ga('send', 'pageview');
		</script>

	</body>
</html>