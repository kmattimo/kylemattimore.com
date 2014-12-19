{* Smarty *}

<!DOCTYPE html>

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

	<div class="jumbotron text-center no-bottom-padding">
		<h1> Kyle Mattimore</h1>
		<br>
			<div class="container" >
				<div class="row row-centered-2">	
					<div class="col-xs-12 col-sm-10 col-md-8 col-centered-2">
						<ul class="nav nav-tabs nav-justified" role="navigation">
							<li {if $page=='home'}class="active" {/if}><a href="/">Home</a></li>				
							<li {if $page=='projects'}class="active" {/if} ><a href="/projects/">Projects</a></li>	
							<li {if $page=='contact'}class="active" {/if}><a href="/contact/">Contact</a></li>	
						</ul>
					</div>	
				</div>
			</div>		
	</div> 

  
    {block "body"}Default Body Text{/block}
</div>
  
 
<noscript> <div class="container"><div class="row row-centered"> Note: you appear to have scripts disabled. Please enable JavaScript for proper functionality. </h4> </div></div> </noscript>
</body>

</html>