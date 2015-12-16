{* Smarty *}
<!DOCTYPE html>

<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="keywords" content="kylemattimore, kmattimo, umich, kyle mattimore, developer, web developer, music, guitar">
	<meta name="description" content="Music &amp; Tech | University of Michigan | One North Interactive">
	<meta name="author" content="Kyle Mattimore">
  <link rel="stylesheet" href="/static/css/site.css" />
  <title>{$title}</title>
</head>
<body>
   

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
  

		
{block "footerScripts"}
<!-- <link rel="stylesheet" href="/static/css/font-awesome.min.css"> -->
<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
{/block}		
{block "customJS"}{/block}		
		
{literal}
<script >    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
	//lets see if this simple obfuscation stops those referral spam crawlers!
	var gaID = 'U' + 'A' + '-';
	gaID += '6448' + '7148' + '-2';
  ga('create', gaID, 'auto');
  ga('send', 'pageview'); </script>
{/literal}
</body>

</html>
