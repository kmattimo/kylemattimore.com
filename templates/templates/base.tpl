{* Smarty *}

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html lang="en">
<head>
		<!-- Bootstrap -->
    <link href="/static/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/static/css/style.css" />
	<link rel="stylesheet" href="/static/css/font-awesome.min.css">
    <title>{$title}</title>
</head>
<body>
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/static/js/bootstrap.min.js"></script>

<div>

	<div class="jumbotron text-center">
		<h1> Kyle Mattimore </h1>
		
			<div class="container" >
				<ul class="nav nav-justified" role="navigation">
				
					<div class="col-xs-3 col-centered"> 	<li><a href="/">Home</a></li>				</div>
					<div class="col-xs-3 col-centered"> 	<li><a href="/projects/">Projects</a></li>	</div>
					<div class="col-xs-3 col-centered">		<li><a href="/contact/">Contact</a></li>		</div>
				</ul>
			</div>
	</div> 
	  
  
    {block "body"}Default Body Text{/block}
</div>
  
  
</body>

</html>