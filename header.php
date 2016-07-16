<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title; ?></title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="<?php echo $desc; ?>">

	<meta name="twitter:card" value="<?php echo $desc; ?>">

	<meta property="og:title" content="<?php echo $title; ?>" />
	<meta property="og:url" content="https://satasanaa.fi/" />
	<meta property="og:image" content="https://satasanaa.fi/hello-share.png" />
	<meta property="og:description" content="<?php echo $desc; ?>" />
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
	<link href="style.css" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<script src="text2speech.js"></script>
	<script src="howler.js"></script>
	<script src="quiz.js"></script>
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-46320958-13', 'auto');
	  ga('send', 'pageview');
    </script>
</head>
<body>

	<nav class="navbar navbar-default navbar-static-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="/"><span style="color: #000;">SATASANAA</span>.fi</a>
			</div>
			<div id="navbar" class="navbar-right navbar-collapse collapse">
				<ul class="nav navbar-nav">
					<li><a href="/venaja"><img src="flags/Russia.png"><img src="flags/Finland.png"></a></li>
					<li><a id="contact" href="/yhteystiedot">@</a></li>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</nav>