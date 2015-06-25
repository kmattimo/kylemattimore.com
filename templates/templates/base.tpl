{* Smarty *}
<!DOCTYPE html>

<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="/static/css/style.css" />
	<link rel="stylesheet" href="/static/css/font-awesome.min.css">
    <title>{$title}</title>
</head>
<body>
   <script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<!--  <script src="/static/js/bootstrap.min.js"></script> -->

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
  

{literal}
<script >    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-64487148-1', 'auto');
  ga('send', 'pageview'); </script>
{/literal}
</body>

</html>